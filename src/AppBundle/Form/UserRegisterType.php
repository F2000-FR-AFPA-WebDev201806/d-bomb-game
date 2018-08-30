<?php

namespace AppBundle\Model;

use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;
use \Symfony\Component\Form\AbstractType;

class UserRegisterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('login', TypeForm\TextType::class, array('label' => 'Pseudo'))
                ->add('password', TypeForm\TextType::class, array('label' => 'Password'))
                ->add('confirm', TypeForm\TextType::class, array('label' => 'Confirmation Password'))
                ->add('mail', TypeForm\TextType::class, array('label' => 'Email'))
                ->add('tel', TypeForm\TelType::class, array('label' => 'Tel'))
                ->add('save', TypeForm\SubmitType::class, array('label' => 'Valider'));
    }

}
