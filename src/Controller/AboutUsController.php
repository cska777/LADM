<?php

namespace App\Controller;

use App\Entity\AboutUs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AboutUsRepository;
use App\Form\AboutType;
use App\Form\AboutUsType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class AboutUsController extends AbstractController
{

    private $entityManagerInterface;

    public function __construct(EntityManagerInterface $em){
        $this->entityManagerInterface = $em;
    }

    #[Route('/about_us', name: 'about_us')]
    public function index(AboutUsRepository $aboutUsRepository): Response
    {
        $aboutUs = $aboutUsRepository->findAll();


        return $this->render('about-us/index.html.twig', [
            'controller_name' => 'AboutUsController',
            'aboutUs' => $aboutUs,

        ]);
    }
    #[Route('/about_us/tab', name: 'tab_about_us')]
    public function aboutUsTab(AboutUsRepository $aboutUsRepository): Response
    {
        $aboutUs = $aboutUsRepository->findAll();;



        return $this->render('about-us/tabBord.html.twig', [
            'controller_name' => 'AboutUsController',
            'aboutUs' => $aboutUs,

        ]);
    }

    #CREATE
    #[Route("/new_aboutUs", name:"new_aboutUs")]
    public function new_aboutus(Request $request, EntityManagerInterface $em, SluggerInterface $slugger){
        $about_us = new AboutUs();
        $form = $this->createForm(AboutType::class, $about_us);
        $data["form"] = $form;
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if necessary
                }

                $about_us->setImage($newFilename);
            }

            $em->persist($about_us);
            $em->flush();
            return $this->redirectToRoute("app_user_index");
        }
        return $this->render("about-us/new_aboutUs.html.twig", $data);
    }

    #DELETE

    #[Route("/delete/aboutus/{id}", name: "delete_aboutus")]
    public function delete(EntityManagerInterface $em, AboutUsRepository $aboutUsRepository, int $id)
    {
        $action = $aboutUsRepository->FindOneBy(["id" => $id]);
        $em->remove($action);
        $em->flush();
        return $this->redirectToRoute("app_user_index");
    }


    #UPDATE
    #[Route("/aboutus/{id}", name: "update_aboutUs")]
    public function update(int $id, AboutUsRepository $aboutUsRepository, Request $request, EntityManagerInterface $em)
    {
        $aboutUs = $aboutUsRepository->findOneBy(["id" => $id]);

        $form = $this->createForm(AboutType::class, $aboutUs, ["label" => "modifier"]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($aboutUs);
            $em->flush();
            return $this->redirectToRoute("app_user_index");
        }

        return $this->render("about-us/update.html.twig", [
            "aboutUs" => $aboutUs,
            "form" => $form,
        ]);
    }
}
