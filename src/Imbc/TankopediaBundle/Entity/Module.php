<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Module")
 * @ORM\Table(name="tanks__module")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discriminator_column", type="string")
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
     *
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Tier", inversedBy="module")
     * @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     */
    protected $tier;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Nationality", inversedBy="module")
     * @ORM\JoinColumn(name="nationality_id", referencedColumnName="id")
     */
    private $nationality;

    /**
     * @ORM\Column(name="xp", type="integer")
     */
    protected $xp;

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
     * @ORM\JoinColumn(name="tank_id", referencedColumnName="id")
     **/
    protected $tank;

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
     * @return Module
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
     * Set tank
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tank
     * @return Module
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
     * Set nationality
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @return Module
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
     * @return Module
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
     * Set xp
     *
     * @param integer $xp
     * @return Module
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
     * @return Module
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
     * @return Module
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
}