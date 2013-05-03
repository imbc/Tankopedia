<?php

namespace Imbc\TankopediaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TankClassRepository")
 * @ORM\Table(name="top__class")
 */
class TankClass {
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
	 * @ORM\Column(name="abbreviation", type="string")
	 */
	private $abbreviation;

	/**
	 * @ORM\OneToMany(targetEntity="Imbc\TankopediaBundle\Entity\Tank", mappedBy="class")
	 **/
	private $tanks;

	/**
	 * @Gedmo\Slug(fields={"name"})
	 * @ORM\Column(length=128, unique=true)
	 */
	private $slug;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->tanks = new ArrayCollection();
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set abbreviation
	 *
	 * @param string $abbreviation
	 * @return Type
	 */
	public function setAbbreviation($abbreviation) {
		$this->abbreviation = $abbreviation;

		return $this;
	}

	/**
	 * Get abbreviation
	 *
	 * @return string
	 */
	public function getAbbreviation() {
		return $this->abbreviation;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Type
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Add tanks
	 *
	 * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
	 * @return Type
	 */
	public function addTank(\Imbc\TankopediaBundle\Entity\Tank $tanks) {
		if (!$this->tanks->contains($tanks)) {
			$this->tanks->add($tanks);
		}

		return $this;
	}

	/**
	 * Remove tanks
	 *
	 * @param \Imbc\TankopediaBundle\Entity\Tank $tanks
	 */
	public function removeTank(\Imbc\TankopediaBundle\Entity\Tank $tanks) {
		if ($this->tanks->contains($tanks)) {
			$this->tanks->removeElement($tanks);
		}
	}

	/**
	 * Get tanks
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getTanks() {
		return $this->tanks;
	}

	public function getSlug() {
		return $this->slug;
	}

	public function __toString() {
		return $this->name;
	}
}
