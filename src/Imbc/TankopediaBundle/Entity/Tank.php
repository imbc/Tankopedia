<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Tank")
 * @ORM\Table(name="tanks__tank")
 */
class Tank
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Type", inversedBy="tank")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Tier", inversedBy="tank")
     * @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     */
    protected $tier;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Nationality", inversedBy="tank")
     * @ORM\JoinColumn(name="tank_id", referencedColumnName="id")
     */
    private $nationality;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="tanks")
     */
    private $modules;

    /**
     * @ORM\Column(name="premium", type="boolean", nullable=true)
     */
    private $premium;

    /**
     * @ORM\Column(name="reward", type="boolean", nullable=true)
     */
    private $reward;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="parent")
     * */
    private $parents;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="child")
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
     * @return string
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
     * Add parents
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $parents
     * @return Tank
     */
    public function addParent( \Imbc\TankopediaBundle\Entity\Tank $parents )
    {
        $this->parents[] = $parents;

        return $this;
    }

    /**
     * Remove parents
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $parents
     */
    public function removeParent( \Imbc\TankopediaBundle\Entity\Tank $parents )
    {
        $this->parents->removeElement( $parents );
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
     * Add children
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $children
     * @return Tank
     */
    public function addChildren( \Imbc\TankopediaBundle\Entity\Tank $children )
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $children
     */
    public function removeChildren( \Imbc\TankopediaBundle\Entity\Tank $children )
    {
        $this->children->removeElement( $children );
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
     * Set type
     *
     * @param \Imbc\TankopediaBundle\Entity\Type $type
     * @return Tank
     */
    public function setType( \Imbc\TankopediaBundle\Entity\Type $type = null )
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Imbc\TankopediaBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
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
    public function setPremium( $premium )
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
    public function setReward( $reward )
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