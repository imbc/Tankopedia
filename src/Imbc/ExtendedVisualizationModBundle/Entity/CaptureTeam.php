<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\CaptureTeamRepository")
 * @ORM\Table(name="xvm__captureteam")
 */
class CaptureTeam
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    // Upper textfield
    protected $primaryTitleFormat;
    // Lower textfield
    protected $secondaryTitleFormat;
    // Full capture text
    protected $captureDoneFormat;
    // Extra text available after necessary calculations
    protected $extra;
    protected $shadow;

    public function getId()
    {
        return $this->id;
    }

    public function getPrimaryTitleFormat()
    {
        return $this->primaryTitleFormat;
    }

    public function setPrimaryTitleFormat( $primaryTitleFormat )
    {
        $this->primaryTitleFormat = $primaryTitleFormat;
    }

    public function getSecondaryTitleFormat()
    {
        return $this->secondaryTitleFormat;
    }

    public function setSecondaryTitleFormat( $secondaryTitleFormat )
    {
        $this->secondaryTitleFormat = $secondaryTitleFormat;
    }

    public function getCaptureDoneFormat()
    {
        return $this->captureDoneFormat;
    }

    public function setCaptureDoneFormat( $captureDoneFormat )
    {
        $this->captureDoneFormat = $captureDoneFormat;
    }

    public function getExtra()
    {
        return $this->extra;
    }

    public function setExtra( $extra )
    {
        $this->extra = $extra;
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
