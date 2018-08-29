<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
use Doctrine\ORM\Mapping as ORM;

class User {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(Type="string" length=100)
     *
     */
    private $login;

    /**
     *
     * @ORM\Column(Type="string" length=100)
     */
    private $password;

    /**
     *
     * @ORM\Column(Type="string" length=200)
     */
    private $mail;

    /**
     *
     * @ORM\Column(type="integer" length=13)
     */
    private $phone;
    private $avatar;

}
