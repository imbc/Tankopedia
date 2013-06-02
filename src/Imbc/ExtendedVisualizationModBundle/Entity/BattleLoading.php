<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="Imbc\ExtendedVisualizationModBundle\Entity\Repository\BattleLoadingRepository")
 * @ORM\Table(name="xvm__battle_loading")
 */
class BattleLoading
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    // Show the clock on the Battle Loading Screen. Format: Y:year, M:month, D:day, H:hour, N:minutes, S:seconds. "" - remove clock.
    protected $clockFormat;

    // true – Enable display of "chance to win" (only with xvm-stat) Read more: http://www.koreanrandom.com/forum/topic/1642-chance
    protected $showChances;

    // Show experimental "chance to win" formula
    protected $showChancesExp;

    // Display options for Team/Clan logos
    protected $clanIcon;

    // Display format for the left Players Panel (macros allowed, see readme-en.txt)
    protected $formatLeft;

    // Display format for the right Players Panel (macros allowed, see readme-en.txt)
    protected $formatRight;

    public function getId()
    {
        return $this->id;
    }

    public function getClockFormat()
    {
        return $this->clockFormat;
    }

    public function setClockFormat( $clockFormat )
    {
        $this->clockFormat = $clockFormat;
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