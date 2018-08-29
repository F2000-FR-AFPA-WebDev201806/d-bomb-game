<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Game")
 */
class Game {

    /**
     *
     * @ORM\Column(Type="integer" )
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(Type="DateTime)
     */
    private $created_date;

    /**
     *
     * @ORM\Column(Type="Integer", length=5)
     */
    private $score;

    /**
     *
     * @ORM\Column (Type="string", length=20)
     */
    private $type;

    /**
     *
     * @ORM\Column (type="string", length="10")
     */
    private $statut;

    /**
     * @ORM\Column (type="string", length=100)
     *
     */
    private $data;

    /**
     * Many games have many users
     * @ManyToMany(TargetEntity="User", mappedBy="games)
     */
    private $users;

    public function __construct() {
        $this->users = new ArrayCollection();
    }

}
