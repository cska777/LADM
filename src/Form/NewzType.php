<?php

namespace App\Form;

use App\Entity\Newz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NewzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Don' => 'Don',
                'Article' => 'Aticle',
                'Action' => 'Action',
            ],
            'label' => 'Type',
            'required' => false,
            'multiple' => false,
            'attr' => [
                'class' => 'civiliteSelect'
            ],
            ])
            ->add('contenu', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Entrez le contenu de l\'article ici...'
                ]
                ])
            ->add('image', FileType::class, [
                'label' => false,
                'required' => false,
                'data_class' => null,
            ])
            ->add('auteur')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Newz::class,
        ]);
    }
}