<?php

namespace Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Default preview interval. Default is 60 minutes
     *
     * @property \DateInterval $defaultPreviewInterval
     */
    private $defaultPreviewInterval = null;

    /**
     * Whether start time other than now can be specified for preview interval. Default True
     *
     * @property bool $byStartTime
     */
    private $byStartTime = null;

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
     * @property bool $filterByDestination
     */
    private $filterByDestination = null;

    /**
     * Whether results can be filtered by VistitType, eg arrivals, departures. Default True
     *
     * @property bool $filterByVisitType
     */
    private $filterByVisitType = null;

    /**
     * Gets as defaultPreviewInterval
     *
     * Default preview interval. Default is 60 minutes
     *
     * @return \DateInterval
     */
    public function getDefaultPreviewInterval()
    {
        return $this->defaultPreviewInterval;
    }

    /**
     * Sets a new defaultPreviewInterval
     *
     * Default preview interval. Default is 60 minutes
     *
     * @param \DateInterval $defaultPreviewInterval
     * @return self
     */
    public function setDefaultPreviewInterval(\DateInterval $defaultPreviewInterval)
    {
        $this->defaultPreviewInterval = $defaultPreviewInterval;
        return $this;
    }

    /**
     * Gets as byStartTime
     *
     * Whether start time other than now can be specified for preview interval. Default True
     *
     * @return bool
     */
    public function getByStartTime()
    {
        return $this->byStartTime;
    }

    /**
     * Sets a new byStartTime
     *
     * Whether start time other than now can be specified for preview interval. Default True
     *
     * @param bool $byStartTime
     * @return self
     */
    public function setByStartTime($byStartTime)
    {
        $this->byStartTime = $byStartTime;
        return $this;
    }

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

    /**
     * Gets as filterByDestination
     *
     * @return bool
     */
    public function getFilterByDestination()
    {
        return $this->filterByDestination;
    }

    /**
     * Sets a new filterByDestination
     *
     * @param bool $filterByDestination
     * @return self
     */
    public function setFilterByDestination($filterByDestination)
    {
        $this->filterByDestination = $filterByDestination;
        return $this;
    }

    /**
     * Gets as filterByVisitType
     *
     * Whether results can be filtered by VistitType, eg arrivals, departures. Default True
     *
     * @return bool
     */
    public function getFilterByVisitType()
    {
        return $this->filterByVisitType;
    }

    /**
     * Sets a new filterByVisitType
     *
     * Whether results can be filtered by VistitType, eg arrivals, departures. Default True
     *
     * @param bool $filterByVisitType
     * @return self
     */
    public function setFilterByVisitType($filterByVisitType)
    {
        $this->filterByVisitType = $filterByVisitType;
        return $this;
    }


}

