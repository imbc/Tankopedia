<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TurretRepository")
 * @ORM\Table(name="top__module_turret")
 */
class Turret extends Module
{
    /**
     * @ORM\Column(name="armorFront", type="integer")
     */
    protected $armorFront;

    /**
     * @ORM\Column(name="armorSide", type="integer")
     */
    protected $armorSide;

    /**
     * @ORM\Column(name="armorRear", type="integer")
     */
    protected $armorRear;

    /**
     * @ORM\Column(name="traverseSpeed", type="integer")
     */
    protected $traverseSpeed;

    /**
     * @ORM\Column(name="viewRange", type="integer")
     */
    protected $viewRange;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Gun", mappedBy="turret")
     */
    protected $guns;

    /**
     * Add guns
     *
     * @param \Imbc\TankopediaBundle\Entity\Gun $gun
     * @return Turret
     */
    public function addGun( \Imbc\TankopediaBundle\Entity\Gun $gun )
    {
        if( !$this->guns->contains( $gun ))
        {
            $this->guns->add( $gun );
        }

        return $this;
    }

    /**
     * Remove guns
     *
     * @param \Imbc\TankopediaBundle\Entity\Gun $gun
     */
    public function removeGun( \Imbc\TankopediaBundle\Entity\Gun $gun )
    {
        if( $this->guns->contains( $gun ))
        {
            $this->guns->removeElement($gun);
        }
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
}