<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

class CaptureBar
{
    protected $id;
    // On/off switch
    protected $enabled;
    // Upper textfield offset in case of big font size
    protected $primaryTitleOffset;
    // append plus to three capturers. Cant calculate more than three.
    protected $appendPlus;
    // Capture format (macros allowed, see readme-en.txt)
    protected $enemy;
    protected $ally;

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

    public function getPrimaryTitleOffset()
    {
        return $this->primaryTitleOffset;
    }

    public function setPrimaryTitleOffset( $primaryTitleOffset )
    {
        $this->primaryTitleOffset = $primaryTitleOffset;
    }

    public function getAppendPlus()
    {
        return $this->appendPlus;
    }

    public function setAppendPlus( $appendPlus )
    {
        $this->appendPlus = $appendPlus;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    public function setEnemy( $enemy )
    {
        $this->enemy = $enemy;
    }

    public function getAlly()
    {
        return $this->ally;
    }

    public function setAlly( $ally )
    {
        $this->ally = $ally;
    }
}
