<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdhesionController extends AbstractController
{
    private $entityManager;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }
    
    #[Route('/adhesion', name: 'app_adhesion')]
public function new(Request $request): Response
{
    $user = new User();
    $form = $this->createForm(UserType::class, $user, [
        'validation_groups' => function (FormInterface $form) {
            $data = $form->getData();
            if ($data->getType() === 'adherent') {
                return ['Default', 'adherent'];
            } elseif ($data->getType() === 'entreprise') {
                return ['Default', 'entreprise'];
            }
            return ['Default'];
        },
    ]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
        if ($existingUser !== null) {
            $this->addFlash('error', 'l\'adresse email existe déjà');
            return $this->render('adhesion/index.html.twig', [
                'form' => $form->createView(),
            ]);
        }

        $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
        $user->setPassword($hashedPassword);
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->addFlash('success', 'Utilisateur créé avec succès');
        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('adhesion/index.html.twig', [
        'form' => $form->createView(),
    ]);
}
}