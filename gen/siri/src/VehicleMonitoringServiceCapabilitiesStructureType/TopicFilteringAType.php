<?php

namespace Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Default preview interval. Default is 60 minutes.
     *
     * @property \DateInterval $defaultPreviewInterval
     */
    private $defaultPreviewInterval = null;

    /**
     * Whether results can be filtered by Vehicle Monitoring area. Fixed as true.
     *
     * @property bool $filterByVehicleMonitoringRef
     */
    private $filterByVehicleMonitoringRef = null;

    /**
     * @property bool $filterByVehicleRef
     */
    private $filterByVehicleRef = null;

    /**
     * @property bool $filterByLineRef
     */
    private $filterByLineRef = null;

    /**
     * @property bool $filterByDirectionRef
     */
    private $filterByDirectionRef = null;

    /**
     * Gets as defaultPreviewInterval
     *
     * Default preview interval. Default is 60 minutes.
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
     * Default preview interval. Default is 60 minutes.
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
     * Gets as filterByVehicleMonitoringRef
     *
     * Whether results can be filtered by Vehicle Monitoring area. Fixed as true.
     *
     * @return bool
     */
    public function getFilterByVehicleMonitoringRef()
    {
        return $this->filterByVehicleMonitoringRef;
    }

    /**
     * Sets a new filterByVehicleMonitoringRef
     *
     * Whether results can be filtered by Vehicle Monitoring area. Fixed as true.
     *
     * @param bool $filterByVehicleMonitoringRef
     * @return self
     */
    public function setFilterByVehicleMonitoringRef($filterByVehicleMonitoringRef)
    {
        $this->filterByVehicleMonitoringRef = $filterByVehicleMonitoringRef;
        return $this;
    }

    /**
     * Gets as filterByVehicleRef
     *
     * @return bool
     */
    public function getFilterByVehicleRef()
    {
        return $this->filterByVehicleRef;
    }

    /**
     * Sets a new filterByVehicleRef
     *
     * @param bool $filterByVehicleRef
     * @return self
     */
    public function setFilterByVehicleRef($filterByVehicleRef)
    {
        $this->filterByVehicleRef = $filterByVehicleRef;
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

