<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\MinimapRepository")
 * @ORM\Table(name="xvm__minimap")
 */
class Minimap
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    // On/off modification switch
    protected $enabled;
    // Minimap icon and attached text scaling factor
    protected $iconScale;
    // Nickname shrink value for {{short-nick}} macro
    protected $nickShrink;
    // Attached text X offset relative to icon
    protected $textOffsetX;
    // Attached text Y offset relative to icon
    protected $textOffsetY;
    // Attached text format. Macroses {{level}}, {{vehicle}}, {{short-nick}}
    protected $format;
    // Attached text style
    protected $css;

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

    public function getIconScale()
    {
        return $this->iconScale;
    }

    public function setIconScale( $iconScale )
    {
        $this->iconScale = $iconScale;
    }

    public function getNickShrink()
    {
        return $this->nickShrink;
    }

    public function setNickShrink( $nickShrink )
    {
        $this->nickShrink = $nickShrink;
    }

    public function getTextOffsetX()
    {
        return $this->textOffsetX;
    }

    public function setTextOffsetX( $textOffsetX )
    {
        $this->textOffsetX = $textOffsetX;
    }

    public function getTextOffsetY()
    {
        return $this->textOffsetY;
    }

    public function setTextOffsetY( $textOffsetY )
    {
        $this->textOffsetY = $textOffsetY;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat( $format )
    {
        $this->format = $format;
    }

    public function getCss()
    {
        return $this->css;
    }

    public function setCss( $css )
    {
        $this->css = $css;
    }
}
