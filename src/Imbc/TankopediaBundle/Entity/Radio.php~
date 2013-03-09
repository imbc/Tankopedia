<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Radio")
 * @ORM\Table(name="tanks__moduleradio")
 */
class Radio extends Module
{
    /**
     * @ORM\Column(name="signalRange", type="integer")
     */
    private $signalRange;

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
     * @return Radio
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
     * @return Radio
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
     * @return Radio
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
     * @return Radio
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
     * Set signalRange
     *
     * @param integer $signalRange
     * @return Radio
     */
    public function setSignalRange( $signalRange )
    {
        $this->signalRange = $signalRange;

        return $this;
    }

    /**
     * Get signalRange
     *
     * @return integer
     */
    public function getSignalRange()
    {
        return $this->signalRange;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Radio
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
     * @return Radio
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

    /**
     * __toString overriding method
     */
    public function __toString()
    {
        return $this->name;
    }
}