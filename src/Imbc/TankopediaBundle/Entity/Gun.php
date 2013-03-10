<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\GunRepository")
 * @ORM\Table(name="tanks__modulegun")
 */
class Gun extends Module
{
    /**
     * @ORM\Column(name="ammoCapacity", type="integer")
     */
    private $ammoCapacity;

    /**
     * @ORM\Column(name="damageAP", type="integer", nullable=true)
     */
    private $damageAP;

    /**
     * @ORM\Column(name="damageAPCR", type="integer", nullable=true)
     */
    private $damageAPCR;

    /**
     * @ORM\Column(name="damageHE", type="integer", nullable=true)
     */
    private $damageHE;

    /**
     * @ORM\Column(name="penetrationAP", type="integer", nullable=true)
     */
    private $penetrationAP;

    /**
     * @ORM\Column(name="penetrationAPCR", type="integer", nullable=true)
     */
    private $penetrationAPCR;

    /**
     * @ORM\Column(name="penetrationHE", type="integer", nullable=true)
     */
    private $penetrationHE;

    /**
     * @ORM\Column(name="shell", type="string")
     */
    private $shell;

    /**
     * @ORM\Column(name="rateOfFire", type="float")
     */
    private $rateOfFire;

    /**
     * @ORM\Column(name="accuratie", type="float")
     */
    private $accuratie;

    /**
     * @ORM\Column(name="aimTimeMin", type="float")
     */
    private $aimTimeMin;

    /**
     * @ORM\Column(name="aimTimeMax", type="float", nullable=true)
     */
    private $aimTimeMax;

    /**
     * @ORM\Column(name="elevationMin", type="integer")
     */
    private $elevationMin;

    /**
     * @ORM\Column(name="elevationMax", type="integer")
     */
    private $elevationMax;

    /**
     * @ORM\Column(name="requiresTurret", type="boolean", nullable=true)
     */
    private $requiresTurret;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Turret", inversedBy="guns");
     * @ORM\JoinColumn(name="turret_id", referencedColumnName="id")
     */
    private $turret;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tanks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set requiresTurret
     *
     * @param boolean $requiresTurret
     * @return Gun
     */
    public function setRequiresTurret($requiresTurret)
    {
        $this->requiresTurret = $requiresTurret;

        return $this;
    }

    /**
     * Get requiresTurret
     *
     * @return boolean
     */
    public function getRequiresTurret()
    {
        return $this->requiresTurret;
    }

    /**
     * Set turret
     *
     * @param \Imbc\TankopediaBundle\Entity\Turret $turret
     * @return Gun
     */
    public function setTurret(\Imbc\TankopediaBundle\Entity\Turret $turret = null)
    {
        $this->turret = $turret;

        return $this;
    }

    /**
     * Get turret
     *
     * @return \Imbc\TankopediaBundle\Entity\Turret
     */
    public function getTurret()
    {
        return $this->turret;
    }

    /**
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     * @return Gun
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
     * @return Gun
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
     * @return Gun
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
     * @return Gun
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
     * @return Gun
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
     * Set ammoCapacity
     *
     * @param integer $ammoCapacity
     * @return Gun
     */
    public function setAmmoCapacity( $ammoCapacity )
    {
        $this->ammoCapacity = $ammoCapacity;

        return $this;
    }

    /**
     * Get ammoCapacity
     *
     * @return integer
     */
    public function getAmmoCapacity()
    {
        return $this->ammoCapacity;
    }

    /**
     * Set damageAP
     *
     * @param integer $damageAP
     * @return Gun
     */
    public function setDamageAP( $damageAP )
    {
        $this->damageAP = $damageAP;

        return $this;
    }

    /**
     * Get damageAP
     *
     * @return integer
     */
    public function getDamageAP()
    {
        return $this->damageAP;
    }

    /**
     * Set damageAPCR
     *
     * @param integer $damageAPCR
     * @return Gun
     */
    public function setDamageAPCR( $damageAPCR )
    {
        $this->damageAPCR = $damageAPCR;

        return $this;
    }

    /**
     * Get damageAPCR
     *
     * @return integer
     */
    public function getDamageAPCR()
    {
        return $this->damageAPCR;
    }

    /**
     * Set damageHE
     *
     * @param integer $damageHE
     * @return Gun
     */
    public function setDamageHE( $damageHE )
    {
        $this->damageHE = $damageHE;

        return $this;
    }

    /**
     * Get damageHE
     *
     * @return integer
     */
    public function getDamageHE()
    {
        return $this->damageHE;
    }

    /**
     * Set penetrationAP
     *
     * @param integer $penetrationAP
     * @return Gun
     */
    public function setPenetrationAP( $penetrationAP )
    {
        $this->penetrationAP = $penetrationAP;

        return $this;
    }

    /**
     * Get penetrationAP
     *
     * @return integer
     */
    public function getPenetrationAP()
    {
        return $this->penetrationAP;
    }

    /**
     * Set penetrationAPCR
     *
     * @param integer $penetrationAPCR
     * @return Gun
     */
    public function setPenetrationAPCR( $penetrationAPCR )
    {
        $this->penetrationAPCR = $penetrationAPCR;

        return $this;
    }

    /**
     * Get penetrationAPCR
     *
     * @return integer
     */
    public function getPenetrationAPCR()
    {
        return $this->penetrationAPCR;
    }

    /**
     * Set penetrationHE
     *
     * @param integer $penetrationHE
     * @return Gun
     */
    public function setPenetrationHE( $penetrationHE )
    {
        $this->penetrationHE = $penetrationHE;

        return $this;
    }

    /**
     * Get penetrationHE
     *
     * @return integer
     */
    public function getPenetrationHE()
    {
        return $this->penetrationHE;
    }

    /**
     * Set shell
     *
     * @param string $shell
     * @return Gun
     */
    public function setShell( $shell )
    {
        $this->shell = $shell;

        return $this;
    }

    /**
     * Get shell
     *
     * @return string
     */
    public function getShell()
    {
        return $this->shell;
    }

    /**
     * Set rateOfFire
     *
     * @param integer $rateOfFire
     * @return Gun
     */
    public function setRateOfFire( $rateOfFire )
    {
        $this->rateOfFire = $rateOfFire;

        return $this;
    }

    /**
     * Get rateOfFire
     *
     * @return integer
     */
    public function getRateOfFire()
    {
        return $this->rateOfFire;
    }

    /**
     * Set accuratie
     *
     * @param integer $accuratie
     * @return Gun
     */
    public function setAccuratie( $accuratie )
    {
        $this->accuratie = $accuratie;

        return $this;
    }

    /**
     * Get accuratie
     *
     * @return integer
     */
    public function getAccuratie()
    {
        return $this->accuratie;
    }

    /**
     * Set aimTimeMin
     *
     * @param integer $aimTimeMin
     * @return Gun
     */
    public function setAimTimeMin( $aimTimeMin )
    {
        $this->aimTimeMin = $aimTimeMin;

        return $this;
    }

    /**
     * Get aimTimeMin
     *
     * @return integer
     */
    public function getAimTimeMin()
    {
        return $this->aimTimeMin;
    }

    /**
     * Set aimTimeMax
     *
     * @param integer $aimTimeMax
     * @return Gun
     */
    public function setAimTimeMax( $aimTimeMax )
    {
        $this->aimTimeMax = $aimTimeMax;

        return $this;
    }

    /**
     * Get aimTimeMax
     *
     * @return integer
     */
    public function getAimTimeMax()
    {
        return $this->aimTimeMax;
    }

    /**
     * Set elevationMin
     *
     * @param integer $elevationMin
     * @return Gun
     */
    public function setElevationMin( $elevationMin )
    {
        $this->elevationMin = $elevationMin;

        return $this;
    }

    /**
     * Get elevationMin
     *
     * @return integer
     */
    public function getElevationMin()
    {
        return $this->elevationMin;
    }

    /**
     * Set elevationMax
     *
     * @param integer $elevationMax
     * @return Gun
     */
    public function setElevationMax( $elevationMax )
    {
        $this->elevationMax = $elevationMax;

        return $this;
    }

    /**
     * Get elevationMax
     *
     * @return integer
     */
    public function getElevationMax()
    {
        return $this->elevationMax;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Gun
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