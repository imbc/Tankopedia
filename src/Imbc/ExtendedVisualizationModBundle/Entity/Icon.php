<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\IconRepository")
 * @ORM\Table(name="xvm__icon")
 */
class Icon
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    //   false – Disable Team/Clan logos in Battle Loading Screen
    protected $show;
    //   Position on the X axis, relative to the vehicle icon
    protected $x;
    //   Position on the Y axis, relative to the vehicle icon
    protected $y;
    //   Position on the X axis for right side (positive values run to the *inside* of the table)
    protected $xr;
    //   Position on the Y axis for right side
    protected $yr;
    //   Width of the Team/Clan logo
    protected $w;
    //   Height of the Team/Clan logo
    protected $h;
    //   Transparency of the Team/Clan logo
    protected $alpha;

    public function getId()
    {
        return $this->id;
    }

    public function getShow()
    {
        return $this->show;
    }

    public function setShow( $show )
    {
        $this->show = $show;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX( $x )
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY( $y )
    {
        $this->y = $y;
    }

    public function getXr()
    {
        return $this->xr;
    }

    public function setXr( $xr )
    {
        $this->xr = $xr;
    }

    public function getYr()
    {
        return $this->yr;
    }

    public function setYr( $yr )
    {
        $this->yr = $yr;
    }

    public function getW()
    {
        return $this->w;
    }

    public function setW( $w )
    {
        $this->w = $w;
    }

    public function getH()
    {
        return $this->h;
    }

    public function setH( $h )
    {
        $this->h = $h;
    }

    public function getAlpha()
    {
        return $this->alpha;
    }

    public function setAlpha( $alpha )
    {
        $this->alpha = $alpha;
    }
}
