<?php

namespace Calcinai\Siri;

/**
 * Class representing FacilityMonitoringRequestStructureType
 *
 * Service Request Type for Facility Monitoring Service
 * XSD Type: FacilityMonitoringRequestStructure
 */
class FacilityMonitoringRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Forward duration for which Facilities satus change: only status change which will occur within this time span will be returned.
     *
     * @property \DateInterval $previewInterval
     */
    private $previewInterval = null;

    /**
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * @property string $featureRef
     */
    private $featureRef = null;

    /**
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * @property string $vehicleJourneyRef
     */
    private $vehicleJourneyRef = null;

    /**
     * @property string $interchangeRef
     */
    private $interchangeRef = null;

    /**
     * @property string $vehicleRef
     */
    private $vehicleRef = null;

    /**
     * Reference to a stop place
     *
     * @property string $stopPlaceRef
     */
    private $stopPlaceRef = null;

    /**
     * Reference to a stop place component
     *
     * @property string $stopPlaceComponentRef
     */
    private $stopPlaceComponentRef = null;

    /**
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @property \Calcinai\Siri\ACSB\UserNeedStructureType[] $accessibilityNeedsFilter
     */
    private $accessibilityNeedsFilter = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The maximum number of facility status in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @property int $maximumNumberOfFacilityConditions
     */
    private $maximumNumberOfFacilityConditions = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of request. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of request. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as previewInterval
     *
     * Forward duration for which Facilities satus change: only status change which will occur within this time span will be returned.
     *
     * @return \DateInterval
     */
    public function getPreviewInterval()
    {
        return $this->previewInterval;
    }

    /**
     * Sets a new previewInterval
     *
     * Forward duration for which Facilities satus change: only status change which will occur within this time span will be returned.
     *
     * @param \DateInterval $previewInterval
     * @return self
     */
    public function setPreviewInterval(\DateInterval $previewInterval)
    {
        $this->previewInterval = $previewInterval;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as facilityRef
     *
     * @return string
     */
    public function getFacilityRef()
    {
        return $this->facilityRef;
    }

    /**
     * Sets a new facilityRef
     *
     * @param string $facilityRef
     * @return self
     */
    public function setFacilityRef($facilityRef)
    {
        $this->facilityRef = $facilityRef;
        return $this;
    }

    /**
     * Gets as featureRef
     *
     * @return string
     */
    public function getFeatureRef()
    {
        return $this->featureRef;
    }

    /**
     * Sets a new featureRef
     *
     * @param string $featureRef
     * @return self
     */
    public function setFeatureRef($featureRef)
    {
        $this->featureRef = $featureRef;
        return $this;
    }

    /**
     * Gets as lineRef
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
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as connectionLinkRef
     *
     * @return string
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }

    /**
     * Gets as vehicleJourneyRef
     *
     * @return string
     */
    public function getVehicleJourneyRef()
    {
        return $this->vehicleJourneyRef;
    }

    /**
     * Sets a new vehicleJourneyRef
     *
     * @param string $vehicleJourneyRef
     * @return self
     */
    public function setVehicleJourneyRef($vehicleJourneyRef)
    {
        $this->vehicleJourneyRef = $vehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as interchangeRef
     *
     * @return string
     */
    public function getInterchangeRef()
    {
        return $this->interchangeRef;
    }

    /**
     * Sets a new interchangeRef
     *
     * @param string $interchangeRef
     * @return self
     */
    public function setInterchangeRef($interchangeRef)
    {
        $this->interchangeRef = $interchangeRef;
        return $this;
    }

    /**
     * Gets as vehicleRef
     *
     * @return string
     */
    public function getVehicleRef()
    {
        return $this->vehicleRef;
    }

    /**
     * Sets a new vehicleRef
     *
     * @param string $vehicleRef
     * @return self
     */
    public function setVehicleRef($vehicleRef)
    {
        $this->vehicleRef = $vehicleRef;
        return $this;
    }

    /**
     * Gets as stopPlaceRef
     *
     * Reference to a stop place
     *
     * @return string
     */
    public function getStopPlaceRef()
    {
        return $this->stopPlaceRef;
    }

    /**
     * Sets a new stopPlaceRef
     *
     * Reference to a stop place
     *
     * @param string $stopPlaceRef
     * @return self
     */
    public function setStopPlaceRef($stopPlaceRef)
    {
        $this->stopPlaceRef = $stopPlaceRef;
        return $this;
    }

    /**
     * Gets as stopPlaceComponentRef
     *
     * Reference to a stop place component
     *
     * @return string
     */
    public function getStopPlaceComponentRef()
    {
        return $this->stopPlaceComponentRef;
    }

    /**
     * Sets a new stopPlaceComponentRef
     *
     * Reference to a stop place component
     *
     * @param string $stopPlaceComponentRef
     * @return self
     */
    public function setStopPlaceComponentRef($stopPlaceComponentRef)
    {
        $this->stopPlaceComponentRef = $stopPlaceComponentRef;
        return $this;
    }

    /**
     * Adds as userNeed
     *
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @return self
     * @param \Calcinai\Siri\ACSB\UserNeedStructureType $userNeed
     */
    public function addToAccessibilityNeedsFilter(\Calcinai\Siri\ACSB\UserNeedStructureType $userNeed)
    {
        $this->accessibilityNeedsFilter[] = $userNeed;
        return $this;
    }

    /**
     * isset accessibilityNeedsFilter
     *
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessibilityNeedsFilter($index)
    {
        return isset($this->accessibilityNeedsFilter[$index]);
    }

    /**
     * unset accessibilityNeedsFilter
     *
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessibilityNeedsFilter($index)
    {
        unset($this->accessibilityNeedsFilter[$index]);
    }

    /**
     * Gets as accessibilityNeedsFilter
     *
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @return \Calcinai\Siri\ACSB\UserNeedStructureType[]
     */
    public function getAccessibilityNeedsFilter()
    {
        return $this->accessibilityNeedsFilter;
    }

    /**
     * Sets a new accessibilityNeedsFilter
     *
     * Filter only for facilkity changes that affect the following accessibility needs.
     *
     * @param \Calcinai\Siri\ACSB\UserNeedStructureType[] $accessibilityNeedsFilter
     * @return self
     */
    public function setAccessibilityNeedsFilter(array $accessibilityNeedsFilter)
    {
        $this->accessibilityNeedsFilter = $accessibilityNeedsFilter;
        return $this;
    }

    /**
     * Gets as language
     *
     * Preferred language in which to return text values.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Preferred language in which to return text values.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as maximumNumberOfFacilityConditions
     *
     * The maximum number of facility status in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @return int
     */
    public function getMaximumNumberOfFacilityConditions()
    {
        return $this->maximumNumberOfFacilityConditions;
    }

    /**
     * Sets a new maximumNumberOfFacilityConditions
     *
     * The maximum number of facility status in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @param int $maximumNumberOfFacilityConditions
     * @return self
     */
    public function setMaximumNumberOfFacilityConditions($maximumNumberOfFacilityConditions)
    {
        $this->maximumNumberOfFacilityConditions = $maximumNumberOfFacilityConditions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

