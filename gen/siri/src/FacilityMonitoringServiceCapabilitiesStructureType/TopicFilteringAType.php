<?php

namespace Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType;

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
     * @property bool $filterByFacilityRef
     */
    private $filterByFacilityRef = null;

    /**
     * Whether results can be filtered by location. Fixed as true.
     *
     * @property bool $filterByLocationRef
     */
    private $filterByLocationRef = null;

    /**
     * @property bool $filterByVehicleRef
     */
    private $filterByVehicleRef = null;

    /**
     * @property bool $filterByLineRef
     */
    private $filterByLineRef = null;

    /**
     * @property bool $filterByStopPointRef
     */
    private $filterByStopPointRef = null;

    /**
     * @property bool $filterByVehicleJourneyRef
     */
    private $filterByVehicleJourneyRef = null;

    /**
     * @property bool $filterByConnectionLinkRef
     */
    private $filterByConnectionLinkRef = null;

    /**
     * @property bool $filterByInterchangeRef
     */
    private $filterByInterchangeRef = null;

    /**
     * Whether results can be filtered by Specific Needs. Default is true.
     *
     * @property bool $filterBySpecificNeed
     */
    private $filterBySpecificNeed = null;

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
     * Gets as filterByFacilityRef
     *
     * @return bool
     */
    public function getFilterByFacilityRef()
    {
        return $this->filterByFacilityRef;
    }

    /**
     * Sets a new filterByFacilityRef
     *
     * @param bool $filterByFacilityRef
     * @return self
     */
    public function setFilterByFacilityRef($filterByFacilityRef)
    {
        $this->filterByFacilityRef = $filterByFacilityRef;
        return $this;
    }

    /**
     * Gets as filterByLocationRef
     *
     * Whether results can be filtered by location. Fixed as true.
     *
     * @return bool
     */
    public function getFilterByLocationRef()
    {
        return $this->filterByLocationRef;
    }

    /**
     * Sets a new filterByLocationRef
     *
     * Whether results can be filtered by location. Fixed as true.
     *
     * @param bool $filterByLocationRef
     * @return self
     */
    public function setFilterByLocationRef($filterByLocationRef)
    {
        $this->filterByLocationRef = $filterByLocationRef;
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
     * Gets as filterByStopPointRef
     *
     * @return bool
     */
    public function getFilterByStopPointRef()
    {
        return $this->filterByStopPointRef;
    }

    /**
     * Sets a new filterByStopPointRef
     *
     * @param bool $filterByStopPointRef
     * @return self
     */
    public function setFilterByStopPointRef($filterByStopPointRef)
    {
        $this->filterByStopPointRef = $filterByStopPointRef;
        return $this;
    }

    /**
     * Gets as filterByVehicleJourneyRef
     *
     * @return bool
     */
    public function getFilterByVehicleJourneyRef()
    {
        return $this->filterByVehicleJourneyRef;
    }

    /**
     * Sets a new filterByVehicleJourneyRef
     *
     * @param bool $filterByVehicleJourneyRef
     * @return self
     */
    public function setFilterByVehicleJourneyRef($filterByVehicleJourneyRef)
    {
        $this->filterByVehicleJourneyRef = $filterByVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as filterByConnectionLinkRef
     *
     * @return bool
     */
    public function getFilterByConnectionLinkRef()
    {
        return $this->filterByConnectionLinkRef;
    }

    /**
     * Sets a new filterByConnectionLinkRef
     *
     * @param bool $filterByConnectionLinkRef
     * @return self
     */
    public function setFilterByConnectionLinkRef($filterByConnectionLinkRef)
    {
        $this->filterByConnectionLinkRef = $filterByConnectionLinkRef;
        return $this;
    }

    /**
     * Gets as filterByInterchangeRef
     *
     * @return bool
     */
    public function getFilterByInterchangeRef()
    {
        return $this->filterByInterchangeRef;
    }

    /**
     * Sets a new filterByInterchangeRef
     *
     * @param bool $filterByInterchangeRef
     * @return self
     */
    public function setFilterByInterchangeRef($filterByInterchangeRef)
    {
        $this->filterByInterchangeRef = $filterByInterchangeRef;
        return $this;
    }

    /**
     * Gets as filterBySpecificNeed
     *
     * Whether results can be filtered by Specific Needs. Default is true.
     *
     * @return bool
     */
    public function getFilterBySpecificNeed()
    {
        return $this->filterBySpecificNeed;
    }

    /**
     * Sets a new filterBySpecificNeed
     *
     * Whether results can be filtered by Specific Needs. Default is true.
     *
     * @param bool $filterBySpecificNeed
     * @return self
     */
    public function setFilterBySpecificNeed($filterBySpecificNeed)
    {
        $this->filterBySpecificNeed = $filterBySpecificNeed;
        return $this;
    }


}

