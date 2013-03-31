<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

class HitLog
{
    protected $id;
    // on/off switch
    protected $enabled;
    // X position (negative values - bind to right side of screen)
    protected $x;
    // Y position (negative values - bind to bottom side of screen)
    protected $y;
    // Width
    protected $w;
    // Height
    protected $h;
    // Number of lines. Old lines will be pushed out
    protected $lines;
    // Log direction: up - lines will be added from up to down, down - from down to up.
    protected $direction;
    // Insert order: begin - insert new values to begin, end - add to end
    protected $insertOrder;
    // group hits by players name
    protected $groupHitsByPlayer;
    // Substitution for {{dead}} macro when tank is dead
    protected $deadMarker;
    protected $blowupMarker;
    // Hits header format, including last hit (macros allowed, see readme-en.txt)
    protected $formatHeader;
    // List of hits format (macros allowed, see readme-en.txt)
    protected $formatHistory;
    //   Shadow options
    protected $shadow;

    public function getId()
    {
        return $this->id;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled( $enabled )
    {
        $this->enabled = $enabled;
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

    public function getLines()
    {
        return $this->lines;
    }

    public function setLines( $lines )
    {
        $this->lines = $lines;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDirection( $direction )
    {
        $this->direction = $direction;
    }

    public function getInsertOrder()
    {
        return $this->insertOrder;
    }

    public function setInsertOrder( $insertOrder )
    {
        $this->insertOrder = $insertOrder;
    }

    public function getGroupHitsByPlayer()
    {
        return $this->groupHitsByPlayer;
    }

    public function setGroupHitsByPlayer( $groupHitsByPlayer )
    {
        $this->groupHitsByPlayer = $groupHitsByPlayer;
    }

    public function getDeadMarker()
    {
        return $this->deadMarker;
    }

    public function setDeadMarker( $deadMarker )
    {
        $this->deadMarker = $deadMarker;
    }

    public function getBlowupMarker()
    {
        return $this->blowupMarker;
    }

    public function setBlowupMarker( $blowupMarker )
    {
        $this->blowupMarker = $blowupMarker;
    }

    public function getFormatHeader()
    {
        return $this->formatHeader;
    }

    public function setFormatHeader( $formatHeader )
    {
        $this->formatHeader = $formatHeader;
    }

    public function getFormatHistory()
    {
        return $this->formatHistory;
    }

    public function setFormatHistory( $formatHistory )
    {
        $this->formatHistory = $formatHistory;
    }

    public function getShadow()
    {
        return $this->shadow;
    }

    public function setShadow( $shadow )
    {
        $this->shadow = $shadow;
    }
}
