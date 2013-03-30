<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

class PlayerPanel
{
    protected $id;
    // Opacity percentage of the panels. (0 – transparent ... 100 – opaque)
    protected $alpha;
    // Opacity percentage of icons in the panels. (0 – transparent ... 100 – opaque)
    protected $iconAlpha;
    // true - Disable Platoon icons.
    protected $removeSquadIcon;
    // Display options for Team/Clan logos (see battleLoading above).
    protected $clanIcon;
    // Options for the "medium" panels - the first of the medium panels
    protected $mediumPanel;
    // Options for the "medium2" panels - the second of the medium panels
    protected $mediumPanel2;
    // Options for the "large" panels - the widest panels
    protected $largePanel;

    public function getId()
    {
        return $this->id;
    }

    public function getAlpha()
    {
        return $this->alpha;
    }

    public function setAlpha( $alpha )
    {
        $this->alpha = $alpha;
    }

    public function getIconAlpha()
    {
        return $this->iconAlpha;
    }

    public function setIconAlpha( $iconAlpha )
    {
        $this->iconAlpha = $iconAlpha;
    }

    public function getRemoveSquadIcon()
    {
        return $this->removeSquadIcon;
    }

    public function setRemoveSquadIcon( $removeSquadIcon )
    {
        $this->removeSquadIcon = $removeSquadIcon;
    }

    public function getClanIcon()
    {
        return $this->clanIcon;
    }

    public function setClanIcon( $clanIcon )
    {
        $this->clanIcon = $clanIcon;
    }

    public function getMediumPanel()
    {
        return $this->mediumPanel;
    }

    public function setMediumPanel( $mediumPanel )
    {
        $this->mediumPanel = $mediumPanel;
    }

    public function getMediumPanel2()
    {
        return $this->mediumPanel2;
    }

    public function setMediumPanel2( $mediumPanel2 )
    {
        $this->mediumPanel2 = $mediumPanel2;
    }

    public function getLargePanel()
    {
        return $this->largePanel;
    }

    public function setLargePanel( $largePanel )
    {
        $this->largePanel = $largePanel;
    }
}
