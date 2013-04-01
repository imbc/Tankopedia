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
     * @ORM\Column(name="loadLimit", type="decimal", precision=6, scale=2)
     */
    private $loadLimit;

    /**
     * @ORM\Column(name="traverseSpeed", type="decimal", precision=6, scale=2)
     */
    private $traverseSpeed;

    /**
     * Constructor
     */
    public function __construct( $name = null, $tier = null, $nationality = null,
            $cost = null, $weight = null, $loadLimit = null, $traverseSpeed = null )
    {
        parent::__construct( $name, $tier, $nationality, $cost, $weight );
        if( $loadLimit !== null ) $this->loadLimit = $loadLimit;
        if( $traverseSpeed !== null ) $this->traverseSpeed = $traverseSpeed;
    }

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

    /**
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return parent::TYPE_ENGINE;
    }
}