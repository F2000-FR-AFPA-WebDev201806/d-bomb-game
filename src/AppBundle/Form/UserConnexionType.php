<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type as TypeForm;
use \Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;

class UserConnexionType extends AbstractType {

    public function BuildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('login', TypeForm\TextType::class)
                ->add('password', TypeForm\PasswordType::class)
                ->add('save', TypeForm\SubmitType::class, array('label' => 'valider'));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }

}
