<?php

namespace AppBundle\Form;

use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;
use \Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;

class UserRegisterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('login', TypeForm\TextType::class, array('label' => 'Pseudo'))
                ->add('password', TypeForm\RepeatedType::class, array(
                'type' => TypeForm\PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
                ->add('mail', TypeForm\TextType::class, array('label' => 'Email'))
                ->add('phone', TypeForm\TelType::class, array('label' => 'Tel'))
                ->add('save', TypeForm\SubmitType::class, array('label' => 'Valider'));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }

}
