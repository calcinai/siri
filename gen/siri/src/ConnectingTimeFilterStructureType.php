<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectingTimeFilterStructureType
 *
 * Type for time filter for conencting journeys
 * XSD Type: ConnectingTimeFilterStructure
 */
class ConnectingTimeFilterStructureType
{

    /**
     * Feeder line for which data is to be supplied.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Feeder direction for which data is to be supplied.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Earliest managed Arrival time at the connection point.
     *
     * @property \DateTime $earliestArrivalTime
     */
    private $earliestArrivalTime = null;

    /**
     * Latest managed Arrival time at the connection point.
     *
     * @property \DateTime $latestArrivalTime
     */
    private $latestArrivalTime = null;

    /**
     * Gets as lineRef
     *
     * Feeder line for which data is to be supplied.
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Feeder line for which data is to be supplied.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as directionRef
     *
     * Feeder direction for which data is to be supplied.
     *
     * @return string
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Feeder direction for which data is to be supplied.
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef($directionRef)
    {
        $this->directionRef = $directionRef;
        return $this;
    }

    /**
     * Gets as earliestArrivalTime
     *
     * Earliest managed Arrival time at the connection point.
     *
     * @return \DateTime
     */
    public function getEarliestArrivalTime()
    {
        return $this->earliestArrivalTime;
    }

    /**
     * Sets a new earliestArrivalTime
     *
     * Earliest managed Arrival time at the connection point.
     *
     * @param \DateTime $earliestArrivalTime
     * @return self
     */
    public function setEarliestArrivalTime(\DateTime $earliestArrivalTime)
    {
        $this->earliestArrivalTime = $earliestArrivalTime;
        return $this;
    }

    /**
     * Gets as latestArrivalTime
     *
     * Latest managed Arrival time at the connection point.
     *
     * @return \DateTime
     */
    public function getLatestArrivalTime()
    {
        return $this->latestArrivalTime;
    }

    /**
     * Sets a new latestArrivalTime
     *
     * Latest managed Arrival time at the connection point.
     *
     * @param \DateTime $latestArrivalTime
     * @return self
     */
    public function setLatestArrivalTime(\DateTime $latestArrivalTime)
    {
        $this->latestArrivalTime = $latestArrivalTime;
        return $this;
    }


}

