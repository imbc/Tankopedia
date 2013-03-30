<?php

namespace Imbc\TankopediaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
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
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

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
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    protected $slug;

    /**
     * Constructor
     */
    public function __construct( $name = null )
    {
        if( $name !== null ) $this->name = $name;
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
     * Set name
     *
     * @param string $name
     * @return Tier
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
     * Add modules
     *
     * @param \Imbc\TankopediaBundle\Entity\Module $module
     * @return Tier
     */
    public function addModule( \Imbc\TankopediaBundle\Entity\Module $module )
    {
        if( !$this->modules->contains( $module ))
        {
            $this->modules->add( $module );
        }
        return $this;
    }

    /**
     * Remove modules
     *
     * @param \Imbc\TankopediaBundle\Entity\Module $module
     */
    public function removeModule( \Imbc\TankopediaBundle\Entity\Module $module )
    {
        if( $this->modules->contains( $module ))
        {
            $this->modules->removeElement( $module );
        }
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

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * __toString overriding method
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}