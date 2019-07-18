<?php

namespace Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Whether results can be filtered by Journey
     *
     * @property bool $filterByJourney
     */
    private $filterByJourney = null;

    /**
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @property bool $filterByTime
     */
    private $filterByTime = null;

    /**
     * Gets as filterByJourney
     *
     * Whether results can be filtered by Journey
     *
     * @return bool
     */
    public function getFilterByJourney()
    {
        return $this->filterByJourney;
    }

    /**
     * Sets a new filterByJourney
     *
     * Whether results can be filtered by Journey
     *
     * @param bool $filterByJourney
     * @return self
     */
    public function setFilterByJourney($filterByJourney)
    {
        $this->filterByJourney = $filterByJourney;
        return $this;
    }

    /**
     * Gets as filterByTime
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @return bool
     */
    public function getFilterByTime()
    {
        return $this->filterByTime;
    }

    /**
     * Sets a new filterByTime
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @param bool $filterByTime
     * @return self
     */
    public function setFilterByTime($filterByTime)
    {
        $this->filterByTime = $filterByTime;
        return $this;
    }


}

