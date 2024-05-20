<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Entity\Facture;
use App\Entity\Plan;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Invoice;
use Symfony\Bundle\SecurityBundle\Security;

class PaiementAdhesionController extends AbstractController
{
    private $entityManager;
    private $security;
    private $logger;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;

        \Stripe\Stripe::setApiKey('sk_test_51P13wrP3TPaTU66ioBOIdkckDkXELChl4LiAwfxnKjAit57ICxaABEiWHBWlMDjDiDnOZYIl6c9DiHA1Txa1qA9n009nvqj32Z');
    }

    #[Route('/paiement/adhesion', name: 'app_paiement_adhesion')]
    public function index(): Response
    {
        $user = $this->getUser();
        $isAdhesionPaye = $user->getAdhesionPaye();


        if ($isAdhesionPaye) {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('paiement_adhesion/index.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
            'isAdhesionPaye' => $isAdhesionPaye,
        ]);
    }

    #[Route('/create-checkout-session', name: 'app_create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(ManagerRegistry $doctrine, UrlGeneratorInterface $urlGenerator): JsonResponse
    {
        $user = $this->security->getUser(); // Récupérer l'utilisateur connecté

        // Vérifier si l'utilisateur est connecté
        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'User not authenticated'], Response::HTTP_UNAUTHORIZED);
        }

        // Récupérer le plan et l'email de l'utilisateur
        $planId = $user->getPlan();
        $plan = $doctrine->getRepository(Plan::class)->findOneBy(['id' => $planId]);
        $email = $user->getEmail();
        $stripeId = $plan->getStripeId();

        if (!$plan) {
            return new JsonResponse(['error' => 'Plan not found'], Response::HTTP_NOT_FOUND);
        }
        $existingSubscription = $this->entityManager->getRepository(Abonnement::class)->findOneBy(['user' => $user]);
        if (!$existingSubscription) {
            $abonnement = new Abonnement();
            $abonnement->setPlan($plan);
            $abonnement->setCurrentPeriodStart(new \DateTime());
            $abonnement->setCurrentPeriodEnd(new \DateTime('+1 year'));
            $abonnement->setIsActive(false);
            $abonnement->setStripeId($stripeId);
            $abonnement->setUser($user);
            $this->entityManager->persist($abonnement);
            $this->entityManager->flush();
        } else {
            $abonnement = $existingSubscription;
            $abonnement->setIsActive(true);
            $abonnement->setCurrentPeriodStart(new \DateTime());
            $abonnement->setCurrentPeriodEnd(new \DateTime('+1 year'));
        }
        // Générer le client secret avec la méthode createStripeSession
        $clientSecretData = $this->createStripeSession($plan, $urlGenerator, $email, $user->getId());


        // Renvoyer une réponse JSON avec le client secret
        return new JsonResponse(['clientSecret' => $clientSecretData]);
    }

    #[Route('/webhook/stripe', name: 'stripe_webhook', methods: ['POST', 'GET'])]
    public function stripeWebhook(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les informations de l'événement Stripe
        $payload = json_decode($request->getContent(), true);

        // Vérifier si le payload contient des données
        if ($payload && isset($payload['type'])) {
            // Vérifier si l'événement est pris en charge
            $supportedEvents = ['checkout.session.completed', 'invoice.paid'];
            if (in_array($payload['type'], $supportedEvents)) {
                // Récupérer l'e-mail de l'utilisateur à partir de l'événement Stripe (s'il est disponible)
                $userEmail = isset($payload['data']['object']['customer_details']['email']) ? $payload['data']['object']['customer_details']['email'] : null;

                // Si l'e-mail de l'utilisateur est récupéré, récupérer l'utilisateur
                if ($userEmail) {
                    $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $userEmail]);
                    if ($user) {
                        // Mettre à jour le statut de l'utilisateur pour le marquer comme validé
                        $user->setAdhesionPaye(true);
                        $abonnement = $this->entityManager->getRepository(Abonnement::class)->findOneBy(['user' => $user]);
                        if ($abonnement) {
                            $abonnement->setIsActive(true);
                            $abonnement->setCurrentPeriodStart(new \DateTime());
                            $abonnement->setCurrentPeriodEnd(new \DateTime('+1 year'));
                            $entityManager->flush();

                            $invoiceId = $payload['data']['object']['invoice'];
                            $invoice = Invoice::retrieve($invoiceId);

                            $facture = new Facture();
                            $facture->setStripeId($invoice->id);
                            $facture->setAbonnement($abonnement);
                            $facture->setNoFacture($invoice->number);
                            $facture->setMontantPaye($invoice->amount_paid / 100);
                            $facture->setHostedUrlFacture($invoice->hosted_invoice_url);
                            $facture->setCreatedAt(new \DateTimeImmutable());
                            $entityManager->persist($facture);
                            $entityManager->flush();
                        } else {
                            $this->logger->error('Aucun abonnement trouvé');
                            return new JsonResponse(null, Response::HTTP_INTERNAL_SERVER_ERROR);
                        }
                    } else {
                        // Gérer le cas où l'e-mail de l'utilisateur n'est pas présent dans l'événement Stripe
                        $this->logger->error('Aucun utilisateur trouvé dans la BDD avec cet email' . $userEmail);
                        return new JsonResponse(null, Response::HTTP_INTERNAL_SERVER_ERROR);
                    }
                    // Répondre à Stripe pour confirmer la réception de l'événement
                    return new JsonResponse(['message' => 'Paiement Stripe validé et utilisateur mis à jour']);
                }
            } else {
                // Si l'événement n'est pas celui attendu
                $this->logger->error('Événement Stripe non pris en charge : ' . $payload['type']);
                return new JsonResponse(null, Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        return new Response('OK', 200);
    }

    private function createStripeSession(Plan $plan, UrlGeneratorInterface $urlGenerator, string $customerEmail, int $userId): array
    {
        // Récupérer l'identifiant Stripe du plan
        $stripeId = $plan->getStripeId();

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card', 'paypal'],
            'mode' => 'subscription',
            'line_items' => [
                [
                    'price' => $stripeId,
                    'quantity' => 1,
                ]
            ],
            'ui_mode' => 'embedded',
            'customer_email' => $customerEmail, // Préremplir le champ email de Stripe
            'return_url' => $urlGenerator->generate('app_user_show', ['id' => $userId], UrlGeneratorInterface::ABSOLUTE_URL)
        ]);
        return ['clientSecret' => $session->client_secret];
    }
}
