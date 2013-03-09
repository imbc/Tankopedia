<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\Nationality")
 * @ORM\Table(name="tanks__nationality")
 */
class Nationality
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="abreviation", type="string")
     */
    private $abreviation;

    /**
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Module", mappedBy="nationality")
     **/
    private $modules;

    /**
     * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="nationality")
     **/
    private $tanks;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @param \Imbc\TankopediaBundle\Entity\Module $modules
     * @return Nationality
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
        $this->modules->removeElement($modules);
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
     * @return Nationality
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
        $this->tanks->removeElement($tanks);
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