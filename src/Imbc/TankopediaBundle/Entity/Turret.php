<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TurretRepository")
 * @ORM\Table(name="tanks__module_turret")
 */
class Turret extends Module
{
    /**
     * @ORM\Column(name="armorFront", type="integer")
     */
    private $armorFront;

    /**
     * @ORM\Column(name="armorSide", type="integer")
     */
    private $armorSide;

    /**
     * @ORM\Column(name="armorRear", type="integer")
     */
    private $armorRear;

    /**
     * @ORM\Column(name="traverseSpeed", type="integer")
     */
    private $traverseSpeed;

    /**
     * @ORM\Column(name="viewRange", type="integer")
     */
    private $viewRange;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Gun", mappedBy="turret")
     */
    private $guns;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->guns = new ArrayCollection();
        $this->tanks = new ArrayCollection();
    }

    /**
     * Add guns
     *
     * @param \Imbc\TankopediaBundle\Entity\Gun $guns
     * @return Turret
     */
    public function addGun(\Imbc\TankopediaBundle\Entity\Gun $guns)
    {
        $this->guns[] = $guns;

        return $this;
    }

    /**
     * Remove guns
     *
     * @param \Imbc\TankopediaBundle\Entity\Gun $guns
     */
    public function removeGun(\Imbc\TankopediaBundle\Entity\Gun $guns)
    {
        $this->guns->removeElement($guns);
    }

    /**
     * Get guns
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGuns()
    {
        return $this->guns;
    }

    /**
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     * @return Turret
     */
    public function addTank(\Imbc\TankopediaBundle\Entity\Tank $tanks)
    {
        $this->tanks[] = $tanks;

        return $this;
    }

    /**
     * Remove tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     */
    public function removeTank(\Imbc\TankopediaBundle\Entity\Tank $tanks)
    {
        $this->tanks->removeElement($tanks);
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
     * @return Turret
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
     * @return Turret
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
     * @return Turret
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
     * @return Turret
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
     * Set armorFront
     *
     * @param integer $armorFront
     * @return Turret
     */
    public function setArmorFront( $armorFront )
    {
        $this->armorFront = $armorFront;

        return $this;
    }

    /**
     * Get armorFront
     *
     * @return integer
     */
    public function getArmorFront()
    {
        return $this->armorFront;
    }

    /**
     * Set armorSide
     *
     * @param integer $armorSide
     * @return Turret
     */
    public function setArmorSide( $armorSide )
    {
        $this->armorSide = $armorSide;

        return $this;
    }

    /**
     * Get armorSide
     *
     * @return integer
     */
    public function getArmorSide()
    {
        return $this->armorSide;
    }

    /**
     * Set armorRear
     *
     * @param integer $armorRear
     * @return Turret
     */
    public function setArmorRear( $armorRear )
    {
        $this->armorRear = $armorRear;

        return $this;
    }

    /**
     * Get armorRear
     *
     * @return integer
     */
    public function getArmorRear()
    {
        return $this->armorRear;
    }

    /**
     * Set traverseSpeed
     *
     * @param integer $traverseSpeed
     * @return Turret
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
     * Set viewRange
     *
     * @param integer $viewRange
     * @return Turret
     */
    public function setViewRange( $viewRange )
    {
        $this->viewRange = $viewRange;

        return $this;
    }

    /**
     * Get viewRange
     *
     * @return integer
     */
    public function getViewRange()
    {
        return $this->viewRange;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Turret
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
     * __toString overriding method
     */
    public function __toString()
    {
        return $this->name;
    }
}