<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\RadioRepository")
 * @ORM\Table(name="top__module_radio")
 */
class Radio extends Module
{
    /**
     * @ORM\Column(name="signalRange", type="integer")
     */
    private $signalRange;

    /**
     * Constructor
     */
    public function __construct( $name = null, $tier = null, $nationality = null,
            $cost = null, $weight = null, $signalRange = null )
    {
        parent::__construct( $name, $tier, $nationality, $cost, $weight );
        if( $signalRange !== null ) $this->signalRange = $signalRange;
    }

    /**
     * Set signalRange
     *
     * @param integer $signalRange
     * @return Radio
     */
    public function setSignalRange( $signalRange )
    {
        $this->signalRange = $signalRange;

        return $this;
    }

    /**
     * Get signalRange
     *
     * @return integer
     */
    public function getSignalRange()
    {
        return $this->signalRange;
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