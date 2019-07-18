<?php

namespace Calcinai\Siri\Objects\StopTimetableServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * @property bool $filterByMonitoringRef
     */
    private $filterByMonitoringRef = null;

    /**
     * @property bool $filterByLineRef
     */
    private $filterByLineRef = null;

    /**
     * @property bool $filterByDirectionRef
     */
    private $filterByDirectionRef = null;

    /**
     * Gets as filterByMonitoringRef
     *
     * @return bool
     */
    public function getFilterByMonitoringRef()
    {
        return $this->filterByMonitoringRef;
    }

    /**
     * Sets a new filterByMonitoringRef
     *
     * @param bool $filterByMonitoringRef
     * @return self
     */
    public function setFilterByMonitoringRef($filterByMonitoringRef)
    {
        $this->filterByMonitoringRef = $filterByMonitoringRef;
        return $this;
    }

    /**
     * Gets as filterByLineRef
     *
     * @return bool
     */
    public function getFilterByLineRef()
    {
        return $this->filterByLineRef;
    }

    /**
     * Sets a new filterByLineRef
     *
     * @param bool $filterByLineRef
     * @return self
     */
    public function setFilterByLineRef($filterByLineRef)
    {
        $this->filterByLineRef = $filterByLineRef;
        return $this;
    }

    /**
     * Gets as filterByDirectionRef
     *
     * @return bool
     */
    public function getFilterByDirectionRef()
    {
        return $this->filterByDirectionRef;
    }

    /**
     * Sets a new filterByDirectionRef
     *
     * @param bool $filterByDirectionRef
     * @return self
     */
    public function setFilterByDirectionRef($filterByDirectionRef)
    {
        $this->filterByDirectionRef = $filterByDirectionRef;
        return $this;
    }


}

