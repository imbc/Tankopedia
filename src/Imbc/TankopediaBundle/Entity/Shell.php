<?php

namespace Imbc\TankopediaBundle\Entity;;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\ShellRepository")
 * @ORM\Table(name="top__shell")
 */
class Shell
{
    const AMMO_AP = 'Armor Piercing';
    const AMMO_APCR = 'Armor Piercing Composite Rigid';
    const AMMO_HE = 'High Explosive';

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @ORM\Column(name="silver", type="integer")
     */
    protected $cost;

    /**
     * @ORM\Column(name="premium", type="boolean")
     */
    protected $premium;

    /**
     * @ORM\Column(name="damage", type="integer")
     */
    protected $damage;

    /**
     * @ORM\Column(name="penetration", type="integer")
     */
    protected $penetration;

    /**
     * @ORM\Column(name="type", type="string")
     */
    protected $type;

    /**
     * @ORM\Column(name="splash", type="integer", nullable=true)
     */
    protected $splash;


    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Gun", inversedBy="shells");
     * @ORM\JoinColumn(name="gun_id", referencedColumnName="id")
     */
    protected $gun;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    protected $slug;

    /**
     * Constructor
     */
    public function __construct( $name = null, $cost = null, $premium = null,
            $damage = null, $penetration = null, $type = null )
    {
        if( $name !== null ) $this->name = $name;
        if( $cost !== null ) $this->cost = $cost;
        if( $premium !== null ) $this->premium = $premium;
        if( $damage !== null ) $this->damage = $damage;
        if( $penetration !== null ) $this->penetration = $penetration;
        if( $type !== null ) $this->type = $type;
        $this->shells = new ArrayCollection();
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
     * @return \Imbc\TankopediaBundle\Entity\Shell
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
     * Set cost
     *
     * @param integer $cost
     * @return \Imbc\TankopediaBundle\Entity\Shell
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
     * Set premium
     *
     * @param boolean $premium
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setPremium( $premium = FALSE )
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set damage
     *
     * @param integer $damage
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setDamage( $damage )
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return integer
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set penetration
     *
     * @param integer $penetration
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setPenetration( $penetration )
    {
        $this->penetration = $penetration;

        return $this;
    }

    /**
     * Get penetration
     *
     * @return integer
     */
    public function getPenetration()
    {
        return $this->penetration;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setType( $type )
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set splash
     *
     * @param integer $splash
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setSplash( $splash )
    {
        $this->splash = $splash;

        return $this;
    }

    /**
     * Get splash
     *
     * @return integer
     */
    public function getSplash()
    {
        return $this->splash;
    }

    /**
     * Set gun
     *
     * @param \Imbc\TankopediaBundle\Entity\Gun $gun
     * @return \Imbc\TankopediaBundle\Entity\Shell
     */
    public function setGun( \Imbc\TankopediaBundle\Entity\Gun $gun = null )
    {
        $this->gun = $gun;

        return $this;
    }

    /**
     * Get gun
     *
     * @return \Imbc\TankopediaBundle\Entity\Gun
     */
    public function getGun()
    {
        return $this->gun;
    }

    /**
     * Get the Slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * __toString overriding method
     */
    public function __toString()
    {
        return $this->name;
    }
}