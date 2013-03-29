<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\TrackRepository")
 * @ORM\Table(name="top__module_track")
 */
class Track extends Module
{
    /**
     * @ORM\Column(name="loadLimit", type="integer")
     */
    private $loadLimit;

    /**
     * @ORM\Column(name="traverseSpeed", type="integer")
     */
    private $traverseSpeed;

    /**
     * Set loadLimit
     *
     * @param integer $loadLimit
     * @return Track
     */
    public function setLoadLimit( $loadLimit )
    {
        $this->loadLimit = $loadLimit;

        return $this;
    }

    /**
     * Get loadLimit
     *
     * @return integer
     */
    public function getLoadLimit()
    {
        return $this->loadLimit;
    }

    /**
     * Set traverseSpeed
     *
     * @param integer $traverseSpeed
     * @return Track
     */
    public function setTraverseSpeed( $traverseSpeed )
    {
        $this->traverseSpeed = $traverseSpeed;

        return $this;
    }

    /**
     * Get traverseSpeed
     *
     * @return integer
     */
    public function getTraverseSpeed()
    {
        return $this->traverseSpeed;
    }
}