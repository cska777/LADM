<?php

namespace App\Controller\Admin;

use App\Entity\Abonnement;
use App\Repository\PlanRepository;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class AbonnementCrudController extends AbstractCrudController
{
    private $planRepository;
    private $userRepository;

    public function __construct(PlanRepository $planRepository, UserRepository $userRepository)
    {
        $this->planRepository = $planRepository;
        $this->userRepository = $userRepository;
    }

    public static function getEntityFqcn(): string
    {
        return Abonnement::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield TextField::new('stripeId');
        yield DateTimeField::new('currentPeriodStart');
        yield DateTimeField::new('currentPeriodEnd');
        yield BooleanField::new('isActive');
        // Pour User
        yield AssociationField::new('user')
        ->setFormTypeOption('choice_label', 'email'); 

            yield AssociationField::new('plan')
            ->setFormTypeOption('choice_label', 'nom');   
    }

    private function getUserChoices(): array
    {
        $users = $this->userRepository->findAll();
        $choices = [];

        foreach ($users as $user) {
            $choices[$user->getNom()] = $user->getId();
        }

        return $choices;
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
}
