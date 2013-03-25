<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\ModuleRepository")
 * @ORM\Table(name="top__tank_module")
 */
class TankModule
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Tank", inversedBy="tankmodules")
     * @ORM\JoinColumn(name="tank_id", referencedColumnName="id")
     * */
    protected $tanks;

    /**
     * @ORM\ManyToOne(targetEntity="Imbc\TankopediaBundle\Entity\Module", inversedBy="tankmodules")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     * */
    protected $modules;

    /**
     * @ORM\Column(name="xp", type="integer")
     */
    protected $xp;

    public function getId()
    {
        return $this->id;
    }

    public function getTanks()
    {
        return $this->tanks;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function getXp()
    {
        return $this->xp;
    }
}