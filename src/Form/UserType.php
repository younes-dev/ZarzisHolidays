<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('email')
            ->add('password')
            ->add('retypePassword')
            ->add('username')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('isValide', CheckboxType::class, [
            'required' => false,
                'label' => "Status",

//                'attr' => [
//                    'checked' => 'checked',
//                     'value' => '1'
//                ]

            ])

            // ChoiceType working fine
//            ->add('isValide', ChoiceType::class, [
//                'choices' => [
//                    'Yes' => true,
//                    'No' => false
//                ],
//                'expanded' => true,
//            ])
//
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'SUPER ADMIN' => 'ROLE_SUPER_ADMIN',
                    'ADMIN' => 'ROLE_ADMIN',
                    'USER' => 'ROLE_USER',
                    'Editor' => 'ROLE_EDITOR',
                ],
//                'expanded' => false,
//                'multiple' => false,
//                'label' => 'Rôles'
//                'label' => false
            ])
        ;

        // https://github.com/xdth/symfony5_auth_crud/blob/master/src/Controller/UserController.php
        // Data transformer // https://dthlabs.com/select-or-checkbox-in-a-symfony5-form-for-user-roles/
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function (array $rolesArray) {
                    // transform the array to a string
                    return count($rolesArray) ? $rolesArray[0]: null;
                },

                function (string $rolesString) {
                    // transform the string back to an array
                    return [$rolesString];
                }
            ));

            // remove and hide roles field in Add New User
//            $builder->addEventListener(FormEvents::PRE_SUBMIT,
//                function (FormEvent $event) {
//                    $data = $event->getData();
//                    $form = $event->getForm();
//
//                    $form->remove('roles');
//             });
        }

    public function getName() {
        return 'remove';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
