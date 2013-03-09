<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Engine")
 * @ORM\Table(name="tanks__moduleengine")
 */
class Engine extends Module
{
    const gazoline = 'Gasoline';
    const diesel = 'Diesel';

    /**
     * @ORM\Column(name="power", type="integer")
     */
    private $power;

    /**
     * @ORM\Column(name="fireChance", type="integer")
     */
    private $fireChance;

    /**
     * @ORM\Column(name="fuelType", type="string")
     */
    private $fuelType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tanks = new ArrayCollection();
    }

    /**
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     * @return Engine
     */
    public function addTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        $this->tanks[] = $tanks;

        return $this;
    }

    /**
     * Remove tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     */
    public function removeTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        $this->tanks->removeElement( $tanks );
    }

    /**
     * Get tanks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTanks()
    {
        return $this->tanks;
    }

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
     * @return Engine
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
     * @return Engine
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
     * @return Engine
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
     * @return Engine
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
     * Set power
     *
     * @param integer $power
     * @return Engine
     */
    public function setPower( $power )
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set fireChance
     *
     * @param integer $fireChance
     * @return Engine
     */
    public function setFireChance( $fireChance )
    {
        $this->fireChance = $fireChance;

        return $this;
    }

    /**
     * Get fireChance
     *
     * @return integer
     */
    public function getFireChance()
    {
        return $this->fireChance;
    }

    /**
     * Set fuelType
     *
     * @param string $fuelType
     * @return Engine
     */
    public function setFuelType( $fuelType )
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * Get fuelType
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Engine
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

    public function __toString()
    {
        return $this->name;
    }
}