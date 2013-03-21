<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TankRepository")
 * @ORM\Table(name="tanks__tank")
 */
class Tank
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @GRID\Column(visible=false)
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string")
     *
     * @GRID\Column(title="Tank", type="text", size="-1")
     * @GRID\Column(title="Name",filter="select", selectFrom="source", operatorsVisible=false, align="center")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\TankClass", inversedBy="tanks")
     * @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     *
     * @GRID\Column(field="class.name", title="Class", filter="select", selectFrom="source", operatorsVisible=false, align="center")
     */
    private $class;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Tier", inversedBy="tanks")
     * @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     *
     * @GRID\Column(field="tier.value", title="Tier", filter="select", operatorsVisible=false, align="center")
     */
    protected $tier;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Nationality", inversedBy="tanks")
     * @ORM\JoinColumn(name="nationality_id", referencedColumnName="id")
     *
     * @GRID\Column(field="nationality.name", title="Nation", filter="select", type="text", operatorsVisible=false, align="center")
     */
    private $nationality;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="tanks")
     */
    private $modules;

    /**
     * @ORM\Column(name="premium", type="boolean", nullable=true)
     *
     * @GRID\Column(title="Premium", type="boolean", size="-1")
     */
    private $premium;

    /**
     * @ORM\Column(name="reward", type="boolean", nullable=true)
     *
     * @GRID\Column(title="Reward", type="boolean", size="-1")
     */
    private $reward;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="children")
     * */
    private $parents;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", inversedBy="parents")
     * @ORM\JoinTable(name="tanks__parent_child",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id")}
     *      )
     * */
    private $children;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new ArrayCollection();
        $this->parents = new ArrayCollection();
        $this->children = new ArrayCollection();
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
     * @return Tank
     */
    public function setName( $name )
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return stringphp
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add modules
     *
     * @param \Imbc\TankopediaBundle\Entity\Module $modules
     * @return Tank
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
     * Add parent
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $parent
     * @return Tank
     */
    public function addParent( \Imbc\TankopediaBundle\Entity\Tank $parent )
    {
        if( !$this->parents->contains( $parent ))
        {
            $this->parents->add( $parent );
        }

        return $this;
    }

    /**
     * Remove parent
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $parent
     */
    public function removeParent( \Imbc\TankopediaBundle\Entity\Tank $parent )
    {
        if( $this->parents->contains( $parent ))
        {
            $this->parents->removeElement( $parent );
        }
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add child
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $child
     * @return Tank
     */
    public function addChildren( \Imbc\TankopediaBundle\Entity\Tank $child )
    {
        if( !$this->children->contains( $child ))
        {
            $this->children->add( $child );
        }

        return $this;
    }

    /**
     * Remove child
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $child
     */
    public function removeChildren( \Imbc\TankopediaBundle\Entity\Tank $child )
    {
        if( $this->children->contains( $child ))
        {
            $this->children->removeElement( $child );
        }
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set class
     *
     * @param \Imbc\TankopediaBundle\Entity\TankClass $class
     * @return Tank
     */
    public function setClass( \Imbc\TankopediaBundle\Entity\TankClass $class = null )
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \Imbc\TankopediaBundle\Entity\TankClass
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return Tank
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
     * Set nationality
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @return Tank
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
     * Set premium
     *
     * @param boolean $premium
     * @return Tank
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
     * Set reward
     *
     * @param boolean $reward
     * @return Tank
     */
    public function setReward( $reward  = FALSE )
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get reward
     *
     * @return boolean
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function __toString()
    {
        return $this->name;
    }
}