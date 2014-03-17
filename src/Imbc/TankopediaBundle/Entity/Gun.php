<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\GunRepository")
 * @ORM\Table(name="top__module_gun")
 * @ORM\DiscriminatorEntry(value="gun")
 */
class Gun extends Module
{
    /**
     * @ORM\Column(name="ammoCapacity", type="integer")
     */
    protected $ammoCapacity;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Shell", mappedBy="gun")
     */
    protected $shells;

    /**
     * @ORM\Column(name="rateOfFire", type="float")
     */
    protected $rateOfFire;

    /**
     * @ORM\Column(name="accuratie", type="float")
     */
    protected $accuratie;

    /**
     * @ORM\Column(name="aimTimeMin", type="float")
     */
    protected $aimTimeMin;

    /**
     * @ORM\Column(name="aimTimeMax", type="float", nullable=true)
     */
    protected $aimTimeMax;

    /**
     * @ORM\Column(name="elevationMin", type="integer")
     */
    protected $elevationMin;

    /**
     * @ORM\Column(name="elevationMax", type="integer")
     */
    protected $elevationMax;

    /**
     * @ORM\Column(name="requiresTurret", type="boolean", nullable=true)
     */
    protected $requiresTurret;

    /**
     * @ORM\Column(name="caliber", type="float")
     */
    protected $caliber;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Turret", inversedBy="guns");
     * @ORM\JoinColumn(name="turret_id", referencedColumnName="id")
     */
    protected $turret;

    /**
     * Constructor
     */
    public function __construct( $name = null, $tier = null, $nationality = null, $cost = null, $weight = null, $ammoCapacity = null, $rateOfFire = null, $accuratie = null, $aimTimeMin = null, $aimTimeMax = null, $elevationMin = null, $elevationMax = null, $requiresTurret = null, $turret = null, $caliber = null )
    {
        parent::__construct( $name, $tier, $nationality, $cost, $weight );
        if( $ammoCapacity !== null ) $this->ammoCapacity = $ammoCapacity;
        if( $rateOfFire !== null ) $this->rateOfFire = $rateOfFire;
        if( $accuratie !== null ) $this->accuratie = $accuratie;
        if( $aimTimeMin !== null ) $this->aimTimeMin = $aimTimeMin;
        if( $aimTimeMax !== null ) $this->aimTimeMax = $aimTimeMax;
        if( $elevationMin !== null ) $this->elevationMin = $elevationMin;
        if( $elevationMax !== null ) $this->elevationMax = $elevationMax;
        if( $requiresTurret !== null ) $this->requiresTurret = $requiresTurret;
        if( $turret !== null ) $this->turret = $turret;
        if( $caliber !== null ) $this->caliber = $caliber;
        $this->shells = new ArrayCollection();
    }

    /**
     * Set requiresTurret
     *
     * @param boolean $requiresTurret
     * @return Gun
     */
    public function setRequiresTurret( $requiresTurret )
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
    public function setTurret( \Imbc\TankopediaBundle\Entity\Turret $turret = null )
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
     * Add shells
     *
     * @param \Imbc\ShellopediaBundle\Entity\Shell $shell
     * @return \Imbc\ShellopediaBundle\Entity\Module
     */
    public function addShell( \Imbc\ShellopediaBundle\Entity\Shell $shell )
    {
        if( !$this->shells->contains( $shell ) )
        {
            $this->shells->add( $shell );
        }

        return $this;
    }

    /**
     * Remove shells
     *
     * @param \Imbc\ShellopediaBundle\Entity\Shell $shell
     */
    public function removeShell( \Imbc\ShellopediaBundle\Entity\Shell $shell )
    {
        if( $this->shells->contains( $shell ) )
        {
            $this->shells->removeElement( $shell );
        }
    }

    /**
     * Get shell
     *
     * @return string
     */
    public function getShell()
    {
        return $this->shells;
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
     * Set caliber
     *
     * @param integer $caliber
     * @return Gun
     */
    public function setCaliber( $caliber )
    {
        $this->caliber = $caliber;

        return $this;
    }

    /**
     * Get caliber
     *
     * @return integer
     */
    public function getCaliber()
    {
        return $this->caliber;
    }

    /**
     * __toString overriding method
     *
     * @return string
     */
    public function __toString()
    {
        return $this->caliber . ' ' . $this->name;
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return parent::TYPE_ENGINE;
    }
}
