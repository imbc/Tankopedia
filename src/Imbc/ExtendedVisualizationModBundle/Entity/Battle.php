<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\BattleRepository")
 * @ORM\Table(name="xvm__battle")
 */
class Battle
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * false - Disable tank icon mirroring (good for alternative icons). True by default.
     * @ORM\Column(type="boolean")
     */
    protected $mirroredVehicleIcons;

    /**
     * false - Disable pop-up panel at the bottom after death. True by default.
     * @ORM\Column(type="boolean")
     */
    protected $showPostmortemTips;

    /**
     * true - Remove the Players Panel mode switcher (buttons for changing size)
     * @ORM\Column(type="boolean")
     */
    // true - Remove the Players Panel mode switcher (buttons for changing size)
    protected $removePanelsModeSwitcher;

    /**
     * false - disable highlighting of selected vehicle icon and squad
     * @ORM\Column(type="boolean")
     */
    protected $highlightVehicleIcon;

    /**
     * Show the clock on the Debug Panel (near FPS). Format: Y:year, M:month, D:day, H:hour, N:minutes, S:seconds. "" - remove clock.
     * @ORM\Column(type="string")
     */
    protected $clockFormat;

    /**
     * true - use standard client vehicle markers
     * @ORM\Column(type="boolean")
     */
    protected $useStandardMarkers;

    /**
     * path to clan icons folder relative to res_mods/[GAME VERSION]/gui/flash
     * @ORM\Column(type="string")
     */
    protected $clanIconsFolder;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get mirroredVehicleIcons
     * @return boolean
     */
    public function getMirroredVehicleIcons()
    {
        return $this->mirroredVehicleIcons;
    }

    /**
     * Set mirroredVehicleIcons
     * @param boolean $mirroredVehicleIcons
     */
    public function setMirroredVehicleIcons( $mirroredVehicleIcons )
    {
        $this->mirroredVehicleIcons = $mirroredVehicleIcons;
    }

    /**
     * Get showPostmortemTips
     * @return boolean
     */
    public function getShowPostmortemTips()
    {
        return $this->showPostmortemTips;
    }

    /**
     * Set showPostmortemTips
     * @param boolean $showPostmortemTips
     */
    public function setShowPostmortemTips( $showPostmortemTips )
    {
        $this->showPostmortemTips = $showPostmortemTips;
    }

    /**
     * Get removePanelsModeSwitcher
     * @return boolean
     */
    public function getRemovePanelsModeSwitcher()
    {
        return $this->removePanelsModeSwitcher;
    }

    /**
     * Set removePanelsModeSwitcher
     * @param boolean $removePanelsModeSwitcher
     */
    public function setRemovePanelsModeSwitcher( $removePanelsModeSwitcher )
    {
        $this->removePanelsModeSwitcher = $removePanelsModeSwitcher;
    }

    /**
     * Get highlightVehicleIcon
     * @return boolean
     */
    public function getHighlightVehicleIcon()
    {
        return $this->highlightVehicleIcon;
    }

    /**
     * Set highlightVehicleIcon
     * @param type $highlightVehicleIcon
     */
    public function setHighlightVehicleIcon( $highlightVehicleIcon )
    {
        $this->highlightVehicleIcon = $highlightVehicleIcon;
    }

    /**
     * Get clockFormat
     * @return string
     */
    public function getClockFormat()
    {
        return $this->clockFormat;
    }

    /**
     * Set clockFormat
     * @param string $clockFormat
     */
    public function setClockFormat( $clockFormat )
    {
        $this->clockFormat = $clockFormat;
    }

    /**
     * Get useStandardMarkers
     * @return boolean
     */
    public function getUseStandardMarkers()
    {
        return $this->useStandardMarkers;
    }

    /**
     * Set useStandardMarkers
     * @param boolean $useStandardMarkers
     */
    public function setUseStandardMarkers( $useStandardMarkers )
    {
        $this->useStandardMarkers = $useStandardMarkers;
    }

    /**
     * Get clanIconsFolder
     * @return string
     */
    public function getClanIconsFolder()
    {
        return $this->clanIconsFolder;
    }

    /**
     * Set clanIconsFolder
     * @param string $clanIconsFolder
     */
    public function setClanIconsFolder( $clanIconsFolder )
    {
        $this->clanIconsFolder = $clanIconsFolder;
    }
}
