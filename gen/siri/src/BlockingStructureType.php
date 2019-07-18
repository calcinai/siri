<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing BlockingStructureType
 *
 * Type for blocking
 * XSD Type: BlockingStructure
 */
class BlockingStructureType
{

    /**
     * Whether information about parts of the network identified by Affects should be blocked from the Journey Planner. Default is false; do not suppress.
     *
     * @property bool $journeyPlanner
     */
    private $journeyPlanner = null;

    /**
     * Whether information about parts of the network identified by Affects should be blocked from real-time departureinfo systems. Default is false; do not suppress.
     *
     * @property bool $realTime
     */
    private $realTime = null;

    /**
     * Gets as journeyPlanner
     *
     * Whether information about parts of the network identified by Affects should be blocked from the Journey Planner. Default is false; do not suppress.
     *
     * @return bool
     */
    public function getJourneyPlanner()
    {
        return $this->journeyPlanner;
    }

    /**
     * Sets a new journeyPlanner
     *
     * Whether information about parts of the network identified by Affects should be blocked from the Journey Planner. Default is false; do not suppress.
     *
     * @param bool $journeyPlanner
     * @return self
     */
    public function setJourneyPlanner($journeyPlanner)
    {
        $this->journeyPlanner = $journeyPlanner;
        return $this;
    }

    /**
     * Gets as realTime
     *
     * Whether information about parts of the network identified by Affects should be blocked from real-time departureinfo systems. Default is false; do not suppress.
     *
     * @return bool
     */
    public function getRealTime()
    {
        return $this->realTime;
    }

    /**
     * Sets a new realTime
     *
     * Whether information about parts of the network identified by Affects should be blocked from real-time departureinfo systems. Default is false; do not suppress.
     *
     * @param bool $realTime
     * @return self
     */
    public function setRealTime($realTime)
    {
        $this->realTime = $realTime;
        return $this;
    }


}

