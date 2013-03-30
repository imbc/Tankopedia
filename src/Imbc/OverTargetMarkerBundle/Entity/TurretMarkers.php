<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

class TurretMarkers
{
    protected $id;
    // Subject has stock turret and top gun can not be mounted. Subject is highly vulnerable.
    protected $highVulnerability;
    // Subject has stock turret and top gun can be mounted. Subject is somewhat vulnerable.
    protected $lowVulnerability;

    public function getId()
    {
        return $this->id;
    }

    public function getHighVulnerability()
    {
        return $this->highVulnerability;
    }

    public function setHighVulnerability( $highVulnerability )
    {
        $this->highVulnerability = $highVulnerability;
    }

    public function getLowVulnerability()
    {
        return $this->lowVulnerability;
    }

    public function setLowVulnerability( $lowVulnerability )
    {
        $this->lowVulnerability = $lowVulnerability;
    }
}
