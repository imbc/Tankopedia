<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

class Panel
{
    protected $id;
    // 0..250 - Width of the player's name column. Default is 46.
    protected $width;
    // Display format for the left panel (macros allowed, see readme-en.txt)
    protected $formatLeft;
    // Display format for the right panel (macros allowed, see readme-en.txt)
    protected $formatRight;
    // Display format for player nickname (macros allowed, see readme-en.txt)
    protected $nickFormatLeft;
    protected $nickFormatRight;
    // Display format for vehicle name (macros allowed, see readme-en.txt)
    protected $vehicleFormatLeft;
    protected $vehicleFormatRight;

    public function getId()
    {
        return $this->id;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth( $width )
    {
        $this->width = $width;
    }

    public function getFormatLeft()
    {
        return $this->formatLeft;
    }

    public function setFormatLeft( $formatLeft )
    {
        $this->formatLeft = $formatLeft;
    }

    public function getFormatRight()
    {
        return $this->formatRight;
    }

    public function setFormatRight( $formatRight )
    {
        $this->formatRight = $formatRight;
    }

    public function getNickFormatLeft()
    {
        return $this->nickFormatLeft;
    }

    public function setNickFormatLeft( $nickFormatLeft )
    {
        $this->nickFormatLeft = $nickFormatLeft;
    }

    public function getNickFormatRight()
    {
        return $this->nickFormatRight;
    }

    public function setNickFormatRight( $nickFormatRight )
    {
        $this->nickFormatRight = $nickFormatRight;
    }

    public function getVehicleFormatLeft()
    {
        return $this->vehicleFormatLeft;
    }

    public function setVehicleFormatLeft( $vehicleFormatLeft )
    {
        $this->vehicleFormatLeft = $vehicleFormatLeft;
    }

    public function getVehicleFormatRight()
    {
        return $this->vehicleFormatRight;
    }

    public function setVehicleFormatRight( $vehicleFormatRight )
    {
        $this->vehicleFormatRight = $vehicleFormatRight;
    }
}
