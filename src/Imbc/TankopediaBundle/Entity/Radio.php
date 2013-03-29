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
}