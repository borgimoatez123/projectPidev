<?php

namespace App\Form;

use App\Entity\gestion_user\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('email', EmailType::class)
            ->add('motDePasse', PasswordType::class)
            ->add('telephone', TextType::class)
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'ADMIN',
                    'Client' => 'CLIENT',
                    'Sponsor' => 'SPONSOR',
                ],
            ])
            ->add('compteValide')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Active' => 'active',
                    'Blocked' => 'blocked',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}