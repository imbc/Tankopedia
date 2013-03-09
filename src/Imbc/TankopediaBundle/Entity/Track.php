<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Track")
 * @ORM\Table(name="tanks__moduletrack")
 */
class Track extends Module
{
    /**
     * @ORM\Column(name="loadLimit", type="integer")
     */
    private $loadLimit;

    /**
     * @ORM\Column(name="traverseSpeed", type="integer")
     */
    private $traverseSpeed;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Track
     */
    public function setName( $name )
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     * @return Track
     */
    public function setXp( $xp )
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Track
     */
    public function setCost( $cost )
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Track
     */
    public function setWeight( $weight )
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set loadLimit
     *
     * @param integer $loadLimit
     * @return Track
     */
    public function setLoadLimit( $loadLimit )
    {
        $this->loadLimit = $loadLimit;

        return $this;
    }

    /**
     * Get loadLimit
     *
     * @return integer
     */
    public function getLoadLimit()
    {
        return $this->loadLimit;
    }

    /**
     * Set traverseSpeed
     *
     * @param integer $traverseSpeed
     * @return Track
     */
    public function setTraverseSpeed( $traverseSpeed )
    {
        $this->traverseSpeed = $traverseSpeed;

        return $this;
    }

    /**
     * Get traverseSpeed
     *
     * @return integer
     */
    public function getTraverseSpeed()
    {
        return $this->traverseSpeed;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Track
     */
    public function setTier( \Imbc\TankopediaBundle\Entity\Tier $tier = null )
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return \Imbc\TankopediaBundle\Entity\Tier
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Set tank
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tank
     * @return Track
     */
    public function setTank( \Imbc\TankopediaBundle\Entity\Tank $tank = null )
    {
        $this->tank = $tank;

        return $this;
    }

    /**
     * Get tank
     *
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function getTank()
    {
        return $this->tank;
    }

    public function __toString()
    {
        return $this->name;
    }
}