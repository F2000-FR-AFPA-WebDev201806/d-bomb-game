<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;
use \Symfony\Component\OptionsResolver\OptionsResolver;

class UserConnexionType extends AbstractType {

    public function BuildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('login', TypeForm\TextType::class)
                ->add('password', TypeForm\PasswordType::class);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }

}
