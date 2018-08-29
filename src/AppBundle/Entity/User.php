<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class User {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(Type="string", length=100)
     *
     */
    private $login;

    /**
     *
     * @ORM\Column(Type="string", length=100)
     */
    private $password;

    /**
     *
     * @ORM\Column(Type="string", length=200)
     */
    private $mail;

    /**
     *
     * @ORM\Column(type="integer", length=13)
     */
    private $phone;

    /**
     *
     * @ORM\Column(type="string", length=100)
     */
    private $avatar;

    /**
     * Many users have many games
     * @ManyToMany(targetEntity="Game", inversedBy="users")
     * @JoinTable(name="Users_Games")
     */
    private $games;

    public function __construct() {
        $this->games = new ArrayCollection();
    }

}
