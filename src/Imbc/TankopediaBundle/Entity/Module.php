<?php

namespace Imbc\TankopediaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\ModuleRepository")
 * @ORM\Table(name="top__module")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"engine" = "Engine", "gun" = "Gun", "radio" = "Radio", "track" = "Track", "turret" = "Turret"})
 */
abstract class Module
{
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
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Tier", inversedBy="modules")
     * @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     */
    protected $tier;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Nationality", inversedBy="modules")
     * @ORM\JoinColumn(name="nationality_id", referencedColumnName="id")
     */
    private $nationality;

    /**
     * @ORM\Column(name="cost", type="integer")
     */
    protected $cost;

    /**
     * @ORM\Column(name="weight", type="integer")
     */
    protected $weight;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", inversedBy="modules")
     * @ORM\JoinTable(name="top__tank_module")
     **/
    protected $tanks;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    protected $slug;

    /**
     * Constructor
     */
    public function __construct( $name = null, $tier = null, $nationality = null,
            $cost = null, $weight = null )
    {
        if( $name !== null ) $this->name = $name;
        if( $tier !== null ) $this->tier = $tier;
        if( $nationality !== null ) $this->nationality = $nationality;
        if( $cost !== null ) $this->cost = $cost;
        if( $weight !== null ) $this->weight = $weight;

        $this->tanks = new ArrayCollection();
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
     * @return \Imbc\TankopediaBundle\Entity\Module
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
     * Set nationality
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @return \Imbc\TankopediaBundle\Entity\Module
     */
    public function setNationality( \Imbc\TankopediaBundle\Entity\Nationality $nationality = null )
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return \Imbc\TankopediaBundle\Entity\Nationality
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @return \Imbc\TankopediaBundle\Entity\Module
     */
    public function setTier( \Imbc\TankopediaBundle\Entity\Tier $tier )
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
     * Set cost
     *
     * @param integer $cost
     * @return \Imbc\TankopediaBundle\Entity\Module
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
     * @return \Imbc\TankopediaBundle\Entity\Module
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
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tank
     * @return \Imbc\TankopediaBundle\Entity\Module
     */
    public function addTank( \Imbc\TankopediaBundle\Entity\Tank $tank )
    {
        if( !$this->tanks->contains( $tank ))
        {
            $this->tanks->add( $tank );
        }

        return $this;
    }

    /**
     * Remove tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tank
     */
    public function removeTank( \Imbc\TankopediaBundle\Entity\Tank $tank )
    {
        if( $this->tanks->contains( $tank ))
        {
            $this->tanks->removeElement($tank);
        }
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