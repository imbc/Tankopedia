<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TypeRepository")
 * @ORM\Table(name="tanks__type")
 */
class Type
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="type")
     **/
    private $tanks;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return Type
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
     * Add tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     * @return Type
     */
    public function addTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        $this->tanks[] = $tanks;

        return $this;
    }

    /**
     * Remove tanks
     *
     * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
     */
    public function removeTank( \Imbc\TankopediaBundle\Entity\Tank $tanks )
    {
        $this->tanks->removeElement( $tanks );
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

    public function __toString()
    {
        return $this->name;
    }
}