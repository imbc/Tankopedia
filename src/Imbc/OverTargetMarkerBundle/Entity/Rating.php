<?php

namespace Imbc\OverTargetMarkerBundle\Entity;

class Rating
{
    protected $id;
    // true - Toggle player statistics on/off. Global setting - without the statistics module, this is always disabled
    protected $showPlayersStatistics;
    // true - Enable downloading of data on opponents in the "fog of war"
    protected $loadEnemyStatsInFogOfWar;
    // true - Enable saving statistics to "xvm-stat.log" file
    protected $enableStatisticsLog;

    public function getId()
    {
        return $this->id;
    }

    public function getShowPlayersStatistics()
    {
        return $this->showPlayersStatistics;
    }

    public function setShowPlayersStatistics( $showPlayersStatistics )
    {
        $this->showPlayersStatistics = $showPlayersStatistics;
    }

    public function getLoadEnemyStatsInFogOfWar()
    {
        return $this->loadEnemyStatsInFogOfWar;
    }

    public function setLoadEnemyStatsInFogOfWar( $loadEnemyStatsInFogOfWar )
    {
        $this->loadEnemyStatsInFogOfWar = $loadEnemyStatsInFogOfWar;
    }

    public function getEnableStatisticsLog()
    {
        return $this->enableStatisticsLog;
    }

    public function setEnableStatisticsLog( $enableStatisticsLog )
    {
        $this->enableStatisticsLog = $enableStatisticsLog;
    }
}
