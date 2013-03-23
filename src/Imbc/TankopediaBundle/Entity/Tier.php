<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TierRepository")
 * @ORM\Table(name="top__tier")
 */
class Tier
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="value", type="string")
     */
    protected $value;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="tier")
     * */
    protected $modules;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="tier")
     * */
    protected $tanks;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="matchMaker")
     */
    protected $matchMaker;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new ArrayCollection();
        $this->tanks = new ArrayCollection();
        $this->matchMaker = new ArrayCollection();
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
     * Set value
     *
     * @param string $value
     * @return Tier
     */
    public function setValue( $value )
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Add modules
     *
     * @param \Imbc\TankopediaBundle\Entity\Module $modules
     * @return Tier
     */
    public function addModule( \Imbc\TankopediaBundle\Entity\Module $modules )
    {
        $this->modules[] = $modules;

        return $this;
    }

    /**
     * Remove modules
     *
     * @param \Imbc\TankopediaBundle\Entity\Module $modules
     */
    public function removeModule( \Imbc\TankopediaBundle\Entity\Module $modules )
    {
        $this->modules->removeElement( $modules );
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     * @return Tier
     */
    public function addTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        if( !$this->tanks->contains( $tanks ))
        {
            $this->tanks->add( $tanks );
        }

        return $this;
    }

    /**
     * Remove tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     */
    public function removeTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        if( $this->tanks->contains( $tanks ))
        {
            $this->tanks->removeElement( $tanks );
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

    /**
     * Get matchMaker
     *
     * @return ArrayCollection
     */
    public function getMatchMaker()
    {
        return $this->matchMaker;
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}