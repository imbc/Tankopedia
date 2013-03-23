<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TankRepository")
 * @ORM\Table(name="top__tank")
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
    protected $id;

    /**
     * @ORM\Column(name="name", type="string")
     *
     * @GRID\Column(title="Tank", type="text", size="-1")
     * @GRID\Column(title="Name",filter="select", selectFrom="source", operatorsVisible=false, align="center")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\TankClass", inversedBy="tanks")
     * @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     *
     * @GRID\Column(field="class.name", title="Class", filter="select", selectFrom="source", operatorsVisible=false, align="center")
     */
    protected $class;

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
    protected $nationality;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="tanks")
     */
    protected $modules;

    /**
     * @ORM\Column(name="premium", type="boolean", nullable=true)
     *
     * @GRID\Column(title="Premium", type="boolean", size="-1")
     */
    protected $premium;

    /**
     * @ORM\Column(name="reward", type="boolean", nullable=true)
     *
     * @GRID\Column(title="Reward", type="boolean", size="-1")
     */
    protected $reward;

    /**
     * @ORM\Column(name="armorFront", type="float")
     */
    protected $armorFront;

    /**
     * @ORM\Column(name="armorSide", type="float")
     */
    protected $armorSide;

    /**
     * @ORM\Column(name="armorRear", type="float")
     */
    protected $armorRear;

    /**
     * @ORM\Column(name="hitPoints", type="integer")
     */
    protected $hitPoints;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="children")
     */
    protected $parents;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", inversedBy="parents")
     * @ORM\JoinTable(name="top__parent_child",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id")}
     *      )
     */
    protected $children;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tier", inversedBy="matchMaker")
     * @ORM\JoinTable(name="top__matchmaking",
     *      joinColumns={@ORM\JoinColumn(name="tank_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tier_id", referencedColumnName="id")}
     *      )
     */
    protected $matchMaker;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new ArrayCollection();
        $this->parents = new ArrayCollection();
        $this->children = new ArrayCollection();
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
     * Get armorFront
     *
     * @return float
     */
    public function getArmorFront()
    {
        return $this->armorFront;
    }

    /**
     * Set armorFront
     *
     * @param float $armorFront
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function setArmorFront( $armorFront )
    {
        $this->armorFront = $armorFront;
        return $this;
    }

    /**
     * Get armorSide
     *
     * @return float
     */
    public function getArmorSide()
    {
        return $this->armorSide;
    }

    /**
     * Set armorSide
     *
     * @param float $armorSide
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function setArmorSide( $armorSide )
    {
        $this->armorSide = $armorSide;
        return $this;
    }

    /**
     * Get armorRear
     *
     * @return float
     */
    public function getArmorRear()
    {
        return $this->armorRear;
    }

    /**
     * Set armorRead
     *
     * @param float $armorRear
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function setArmorRear( $armorRear )
    {
        $this->armorRear = $armorRear;
        return $this;
    }

    /**
     * Get hitPoints
     *
     * @return integer
     */
    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    /**
     * Set hitPoints
     *
     * @param integer $hitPoints
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function setHitPoints( $hitPoints )
    {
        $this->hitPoints = $hitPoints;
        return $this;
    }

    /**
     * Get matchMaker
     *
     * @return \Imbc\TankopediaBundle\Entity\Tier
     */
    public function getMatchMaker()
    {
        return $this->matchMaker;
    }

    /**
     * Set matchMaker
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $matchMaker
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function setMatchMaker( $matchMaker )
    {
        $this->matchMaker = $matchMaker;
        return $this;
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

    /**
     * Get matchMaker
     *
     * @return array
     */
    public function getBattleRange()
    {
        return $this->matchMaker;
    }

    /**
     * Set matchMaker
     *
     * @param ArrayCollection $matchMaker
     * @return Tank
     */
    public function setBattleRange( ArrayCollection $matchMaker)
    {
        $this->matchMaker = $matchMaker;

        return $this;
    }

    /**
     * Add tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $battleTier
     */
    public function addBattleTier( \Imbc\TankopediaBundle\Entity\Tier $battleTier )
    {
        if( !$this->matchMaker->contains( $battleTier ))
        {
            $this->matchMaker->add( $battleTier );
        }
    }

    /**
     * Remove tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $battleTier
     */
    public function removeBattleTier( \Imbc\TankopediaBundle\Entity\Tier $battleTier )
    {
        if( $this->matchMaker->contains( $battleTier ))
        {
            $this->matchMaker->remove( $battleTier );
        }
    }

    public function __toString()
    {
        return $this->name;
    }
}