<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\DBAL\Types\ArrayType;
use App\Controller\Admin\UserCrudController;
use App\Repository\PlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Symfony\Component\Validator\Constraints\Length;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Validator\Constraints\NotNull;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PasswordField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    private UserPasswordHasherInterface $passwordEncoder;

    public function __construct(PlanRepository $planRepository,UserPasswordHasherInterface $passwordEncoder)
    {
        $this->planRepository = $planRepository;
        $this->passwordEncoder = $passwordEncoder;
    }

    private function getPlanChoices(): array
    {
        $plans = $this->planRepository->findAll();
        $choices = [];

        foreach ($plans as $plan) {
            $choices[$plan->getNom()] = $plan->getId();
        }

        return $choices;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            ChoiceField::new('type')
                ->setChoices([
                    'Adhérent' => 'adherent',
                    'Entreprise' => 'entreprise',
                ]),
            AssociationField::new('plan')
                ->setFormTypeOption('choice_label', 'nom'),
            ArrayField::new('roles'),
            TextField::new('nom'),
            TextField::new('email'),
            TextField::new('adresse'),
            TextField::new('codePostal'),
            TextField::new('ville'),
            TextField::new('pays'),
        ];
        

            // Lorsque vous créez un nouvel employé, ajoutez le champ du mot de passe
        if ($pageName === Crud::PAGE_NEW) {
            $fields[] = TextField::new('plainPassword', 'Mot de passe');
        }

        return $fields;
    }

     // Appelé avant la persistance de l'entité Employe
     public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
     {
         // Vérifiez si l'entité est une instance d'Employe
         if ($entityInstance instanceof User) {
             // Vérifiez si un nouveau mot de passe est défini
             if ($entityInstance->getPlainPassword() !== null) {
                 // Hasher le mot de passe
                 $hashedPassword = $this->passwordEncoder->hashPassword($entityInstance, $entityInstance->getPlainPassword());
                 $entityInstance->setPassword($hashedPassword);
 
                 // Réinitialisez le champ de mot de passe brut pour éviter de le persister tel quel en base de données
                 $entityInstance->setPlainPassword("");
             }
         }
 
         // Passez l'appel à la méthode parente pour effectuer la persistance réelle
         parent::persistEntity($entityManager, $entityInstance);
     }
 
     // Appelé avant la mise à jour de l'entité Employe
     public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
     {
         // Vérifiez si l'entité est une instance d'Employe
         if ($entityInstance instanceof User) {
             // Vérifiez si un nouveau mot de passe est défini
             if ($entityInstance->getPlainPassword() !== null) {
                 // Hasher le mot de passe
                 $hashedPassword = $this->passwordEncoder->hashPassword($entityInstance, $entityInstance->getPlainPassword());
                 $entityInstance->setPassword($hashedPassword);
 
                 // Réinitialisez le champ de mot de passe brut pour éviter de le persister tel quel en base de données
                 $entityInstance->setPlainPassword("");
             }
         }
 
         // Passez l'appel à la méthode parente pour effectuer la mise à jour réelle
         parent::updateEntity($entityManager, $entityInstance);
     }
}
