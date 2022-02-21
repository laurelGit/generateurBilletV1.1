<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\CallbackTransformer;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class ,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('prenom', TextType::class ,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('email', TextType::class ,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('password', RepeatedType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'type' => PasswordType::class,
                'invalid_message' => 'Les Mot de passe doivent correspondre.',
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Repeter Mot de passe'],
            ])
            ->add('contact', TextType::class ,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => array(
                    'Role' => array(
                        'Vendeur' => 'ROLE_VENDEUR',
                        'Caissier' => 'ROLE_CAISSIER',
                        'Admin' => 'ROLE_ADMIN',
                    )
                ),
                'attr' => [
                    'class' => 'form-group row form-select',
                    'style' => 'border-style: none;'
                ]
            ])
        ;
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                    // transform the array to a string
                    return count($rolesArray)? $rolesArray[0]: null;
                },
                function ($rolesString) {
                    // transform the string back to an array
                    return [$rolesString];
                }
        ));
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
