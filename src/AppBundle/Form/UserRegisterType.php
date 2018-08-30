<?php

namespace AppBundle\Model;

use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;

class UserRegisterType extends UserConnexionType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::BuildForm($builder, $options);
        $builder->add('password', TypeForm\PasswordType::class)
                ->add('mail', TypeForm\TextType::class)
                ->add('tel', TypeForm\TelType::class)
                ->add('save', TypeForm\SubmitType::class, array('label' => 'Valider'));
    }

}
