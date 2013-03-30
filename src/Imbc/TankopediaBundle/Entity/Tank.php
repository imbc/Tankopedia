<?php

namespace Imbc\TankopediaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
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
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="children")
     */
    protected $parents;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", inversedBy="parents")
     * @ORM\JoinTable(name="top__tank_relastionship",
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
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     *
     * @GRID\Column(visible=false)
     */
    private $slug;

    /**
     * Constructor
     */
    public function __construct( $name = null, $class = null, $tier = null, $nationality = null,
            $premium = null, $reward = null )
    {
        if( $name !== null ) $this->name = $name;
        if( $class !== null ) $this->class = $class;
        if( $tier !== null ) $this->tier = $tier;
        if( $nationality !== null ) $this->nationality = $nationality;
        if( $premium !== null ) $this->premium = $premium;
        if( $reward !== null ) $this->reward = $reward;
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @param \Imbc\TankopediaBundle\Entity\Module $module
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * Add parent
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $parent
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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
     * @return \Imbc\TankopediaBundle\Entity\Tank
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

    public function getSlug()
    {
        return $this->slug;
    }

    public function __toString()
    {
        return $this->name;
    }
}