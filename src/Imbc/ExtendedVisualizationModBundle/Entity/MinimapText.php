<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\MinimapTextRepository")
 * @ORM\Table(name="xvm__minimaptext")
 */
class MinimapText
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    // Ally
    protected $ally;
    // Enemy
    protected $enemy;
    // Squadmates
    protected $squad;
    // For oneself and camera receiver in case of death
    protected $oneself;

    public function getId()
    {
        return $this->id;
    }

    public function getAlly()
    {
        return $this->ally;
    }

    public function setAlly( $ally )
    {
        $this->ally = $ally;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    public function setEnemy( $enemy )
    {
        $this->enemy = $enemy;
    }

    public function getSquad()
    {
        return $this->squad;
    }

    public function setSquad( $squad )
    {
        $this->squad = $squad;
    }

    public function getOneself()
    {
        return $this->oneself;
    }

    public function setOneself( $oneself )
    {
        $this->oneself = $oneself;
    }
}
