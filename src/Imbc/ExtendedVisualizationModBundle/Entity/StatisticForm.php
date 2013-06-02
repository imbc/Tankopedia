<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * General parameters for the battle interface
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\StatisticFormRepository")
 * @ORM\Table(name="xvm__statisticForm")
 */
class StatisticForm
{
    protected $id;
    
    // true - Enable display of "chance to win" (only with xvm-stat).
    protected $showChances;

    // Show experimental "chance to win" formula
    protected $showChancesExp;

    // true - Disable Platoon icons. This blank space can house, for example, clan logos.
    protected $removeSquadIcon;

    // Display options for Team/Clan logos (see battleLoading above)
    protected $clanIcon;

    // Display format for the left column (macros allowed, see readme-en.txt)
    protected $formatLeft;

    // Display format for the right column (macros allowed, see readme-en.txt)
    protected $formatRight;

    public function getId()
    {
        return $this->id;
    }

    public function getShowChances()
    {
        return $this->showChances;
    }

    public function setShowChances( $showChances )
    {
        $this->showChances = $showChances;
    }

    public function getShowChancesExp()
    {
        return $this->showChancesExp;
    }

    public function setShowChancesExp( $showChancesExp )
    {
        $this->showChancesExp = $showChancesExp;
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
}
