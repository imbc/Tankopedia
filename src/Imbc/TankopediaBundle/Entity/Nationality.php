<?php

namespace Imbc\TankopediaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\NationalityRepository")
 * @ORM\Table(name="top__nationality")
 */
class Nationality
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="abreviation", type="string")
     */
    protected $abreviation;

    /**
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="nationality")
     * */
    protected $modules;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="nationality")
     * */
    protected $tanks;

    /**
     * @Gedmo\Slug(fields={"abreviation"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * Constructor
     */
    public function __construct( $abbreviation = null, $name = null )
    {
        if( $abbreviation !== null ) $this->abreviation = $abbreviation;
        if( $name !== null ) $this->name = $name;
        $this->modules = new ArrayCollection();
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
     * Set abreviation
     *
     * @param string $abreviation
     * @return Nationality
     */
    public function setAbreviation( $abreviation )
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Nationality
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
     * @return Nationality
     */
    public function addModule( \Imbc\TankopediaBundle\Entity\Module $module )
    {
        if( !$this->modules->contains( $module ) )
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
        if( !$this->modules->contains( $module ) )
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
     * @param \Imbc\TankopediaBundle\Entity\Tank $tank
     * @return Nationality
     */
    public function addTank( \Imbc\TankopediaBundle\Entity\Tank $tank )
    {
        if( !$this->tanks->contains( $tank ) )
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
        if( !$this->tanks->contains( $tank ) )
        {
            $this->tanks->removeElement( $tank );
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

    public function __toString()
    {
        return $this->name;
    }
}
