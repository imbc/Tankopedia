<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * General parameters for the battle interface
 * @ORM\Entity
 * @ORM\Table(name="xvm_otm__shadow")
 */
class Shadow
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $alpha;

    /**
     * @ORM\Column(type="string")
     */
    protected $color;

    /**
     * @ORM\Column(type="integer")
     */
    protected $angle;

    /**
     * @ORM\Column(type="integer")
     */
    protected $distance;

    /**
     * @ORM\Column(type="integer")
     */
    protected $size;

    /**
     * @ORM\Column(type="integer")
     */
    protected $strength;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get alpha
     * @return integer
     */
    public function getAlpha()
    {
        return $this->alpha;
    }

    /**
     * Set alpha
     * @param integer $alpha
     */
    public function setAlpha( $alpha )
    {
        $this->alpha = $alpha;
    }

    /**
     * Get color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color
     * @param string $color
     */
    public function setColor( $color )
    {
        $this->color = $color;
    }

    /**
     * Get angle
     * @return integer
     */
    public function getAngle()
    {
        return $this->angle;
    }

    /**
     * Set angle
     * @param integer $angle
     */
    public function setAngle( $angle )
    {
        $this->angle = $angle;
    }

    /**
     * Get distance
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set distance
     * @param integer $distance
     */
    public function setDistance( $distance )
    {
        $this->distance = $distance;
    }

    /**
     * Get size
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size
     * @param integer $size
     */
    public function setSize( $size )
    {
        $this->size = $size;
    }

    /**
     * Get strength
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set strength
     * @param integer $strength
     */
    public function setStrength( $strength )
    {
        $this->strength = $strength;
    }
}
