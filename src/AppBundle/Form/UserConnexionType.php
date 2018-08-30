<?php

namespace AppBundle\Model;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;

class UserConnexionType extends AbstractType {

    public function BuildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('login', TypeForm\TextType::class)
                ->add('password', TypeForm\PasswordType::class);
    }

}
