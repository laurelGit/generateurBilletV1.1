<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Security\Core\User\UserInterface;

class ClientFormType extends AbstractType
{
    public UserInterface $user;
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-group row form-control',
                    'style' => 'border-style: none;',
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'form-group row form-control',
                    'style' => 'border-style: none;',
                ]
            ])
            ->add('contact', TextType::class, [
                'error_mapping' => [
                    '.' => 'contact'
                ],
                'attr' => [
                    'class' => 'form-group row form-control',
                    'style' => 'border-style: none;',
                ]
            ])
            ->add('email', EmailType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-group row form-control',
                    'style' => 'border-style: none; background-color: white;',
                ]
            ])
            ->add('categorie', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-group row form-select',
                    'style' => 'border-style: none;',
                    'empty_data' => 'friend'
                ],
                'choices' => [
                    'Categorie de Billet' => [
                        'STANDARD : 3000F' => 'STANDARD',
                        'COUPLE : 5000F' => 'COUPLE',
                        'VIP : 10000F' => 'VIP',
                        'VIP-COUPLE : 15000F' => 'VIP-COUPLE',
                        'INVITE' => 'INVITE'
                    ]
                ],
            ])
            ->add('vendeur_id', CheckboxType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input form-group row',
                    'id' => 'flexSwitchCheckDefault'
                ],
                'label' => 'Switcher pour payer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
