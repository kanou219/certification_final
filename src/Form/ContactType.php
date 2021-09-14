<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,[
                'label' => 'Entrez votre Email',
                'attr' =>[
                    'placeholder' => 'Email'
                ]
                ])

            ->add('objet', TextType::class,[
                'label' => 'Entrez votre Objet',
                'attr' =>[
                    'placeholder' => 'Objet'
                ]
                ])

            ->add('message', TextareaType::class, [
                'label' => 'Entrez votre Message',
                'attr' =>[
                    'placeholder' => 'Message'
                ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
