<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * @ORM\Entity
 * @ORM\Table(name="Game")
 */
class Game {

    /**
     *
     * @ORM\Column(type="integer" )
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $createdDate;

    /**
     *
     * @ORM\Column(type="integer", length=5)
     */
    private $score;

    /**
     *
     * @ORM\Column (type="string", length=20)
     */
    private $type;

    /**
     * @ORM\Column (type="string", length=10)
     */
    private $statut;

    /**
     * @ORM\Column (type="string", length=100)

     */
    private $data;

    /**
     * Many games have many users
     * @ManyToMany(targetEntity="User", mappedBy="games")
     */
    private $users;

    public function __construct() {
        $this->users = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Game
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }

    /**
     * Set score
     *
     * @param \Integer $score
     *
     * @return Game
     */
    public function setScore(\Integer $score) {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return \Integer
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Game
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Game
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Game
     */
    public function setData($data) {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Game
     */
    public function addUser(\AppBundle\Entity\User $user) {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user) {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers() {
        return $this->users;
    }

}
