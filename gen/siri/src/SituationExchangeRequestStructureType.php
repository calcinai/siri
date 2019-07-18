<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationExchangeRequestStructureType
 *
 * Service Request Type for Situation Exchange Service
 * XSD Type: SituationExchangeRequestStructure
 */
class SituationExchangeRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Forward duration for which Situations should be included, that is, only Situations that start before the end of this window time will be included
     *
     * @property \DateInterval $previewInterval
     */
    private $previewInterval = null;

    /**
     * Start time for for selecting Situations to be sent. Only Situatissn or updates created after this time will be sent. This enables a restart without resending everything
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @property string $vehicleMode
     */
    private $vehicleMode = null;

    /**
     * @property string $airSubmode
     */
    private $airSubmode = null;

    /**
     * @property string $busSubmode
     */
    private $busSubmode = null;

    /**
     * @property string $coachSubmode
     */
    private $coachSubmode = null;

    /**
     * @property string $metroSubmode
     */
    private $metroSubmode = null;

    /**
     * @property string $railSubmode
     */
    private $railSubmode = null;

    /**
     * @property string $tramSubmode
     */
    private $tramSubmode = null;

    /**
     * @property string $waterSubmode
     */
    private $waterSubmode = null;

    /**
     * @property string $accessMode
     */
    private $accessMode = null;

    /**
     * Severity filter value to apply: only Situations with a severity greater than or equal to the specified value will be returned. See TPEG severities. Default is all.
     *
     * @property string $severity
     */
    private $severity = null;

    /**
     * Types of Situation to include
     *
     * @property string $scope
     */
    private $scope = null;

    /**
     * Whether just planned, unplanned or both Situations will be returned.
     *
     * @property string $predictability
     */
    private $predictability = null;

    /**
     * Arbitrary application specific classifiers. Only Situations that match these keywords will be returned
     *
     * @property string $keywords
     */
    private $keywords = null;

    /**
     * Whether incident has been verified or not If not specified return all
     *
     * @property string $verification
     */
    private $verification = null;

    /**
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation. If not specified return open, published closing and closed. l
     *
     * @property string $progress
     */
    private $progress = null;

    /**
     * Whether situation is real or a test. If not specified return all
     *
     * @property string $reality
     */
    private $reality = null;

    /**
     * Identifier of Operator. If unspecified all operators.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Operational unit responsible for managing services.
     *
     * @property string $operationalUnitRef
     */
    private $operationalUnitRef = null;

    /**
     * Identifier of Network.
     *
     * @property string $networkRef
     */
    private $networkRef = null;

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
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * @property string $stopPlaceRef
     */
    private $stopPlaceRef = null;

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
     * Unique identifier of a Country where incident takes place If specified only incidentsto that affect this place country will be returned
     *
     * @property string $countryRef
     */
    private $countryRef = null;

    /**
     * Identifier of Topographic Locality. Only incidents which are deemed to affect this place will be returned
     *
     * @property string $placeRef
     */
    private $placeRef = null;

    /**
     * Bounding box of an arbitrary area . Only incidents geocoded as falliing within area will be included.
     *
     * @property \Calcinai\Siri\Objects\LocationStructureType $location
     */
    private $location = null;

    /**
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @property \Calcinai\Siri\Objects\RoadFilterStructureType[] $situationRoadFilter
     */
    private $situationRoadFilter = null;

    /**
     * Parameters to filter Situation Exchange requests, based on specific needs .
     *
     * @property \Calcinai\Siri\Objects\ACSB\PassengerAccessibilityNeedsStructureType $accessibilityNeedFilter
     */
    private $accessibilityNeedFilter = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The maximum number of situation eleemnts to return in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @property int $maximumNumberOfSituationElements
     */
    private $maximumNumberOfSituationElements = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * Forward duration for which Situations should be included, that is, only Situations that start before the end of this window time will be included
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
     * Forward duration for which Situations should be included, that is, only Situations that start before the end of this window time will be included
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
     * Start time for for selecting Situations to be sent. Only Situatissn or updates created after this time will be sent. This enables a restart without resending everything
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
     * Start time for for selecting Situations to be sent. Only Situatissn or updates created after this time will be sent. This enables a restart without resending everything
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
     * Gets as vehicleMode
     *
     * @return string
     */
    public function getVehicleMode()
    {
        return $this->vehicleMode;
    }

    /**
     * Sets a new vehicleMode
     *
     * @param string $vehicleMode
     * @return self
     */
    public function setVehicleMode($vehicleMode)
    {
        $this->vehicleMode = $vehicleMode;
        return $this;
    }

    /**
     * Gets as airSubmode
     *
     * @return string
     */
    public function getAirSubmode()
    {
        return $this->airSubmode;
    }

    /**
     * Sets a new airSubmode
     *
     * @param string $airSubmode
     * @return self
     */
    public function setAirSubmode($airSubmode)
    {
        $this->airSubmode = $airSubmode;
        return $this;
    }

    /**
     * Gets as busSubmode
     *
     * @return string
     */
    public function getBusSubmode()
    {
        return $this->busSubmode;
    }

    /**
     * Sets a new busSubmode
     *
     * @param string $busSubmode
     * @return self
     */
    public function setBusSubmode($busSubmode)
    {
        $this->busSubmode = $busSubmode;
        return $this;
    }

    /**
     * Gets as coachSubmode
     *
     * @return string
     */
    public function getCoachSubmode()
    {
        return $this->coachSubmode;
    }

    /**
     * Sets a new coachSubmode
     *
     * @param string $coachSubmode
     * @return self
     */
    public function setCoachSubmode($coachSubmode)
    {
        $this->coachSubmode = $coachSubmode;
        return $this;
    }

    /**
     * Gets as metroSubmode
     *
     * @return string
     */
    public function getMetroSubmode()
    {
        return $this->metroSubmode;
    }

    /**
     * Sets a new metroSubmode
     *
     * @param string $metroSubmode
     * @return self
     */
    public function setMetroSubmode($metroSubmode)
    {
        $this->metroSubmode = $metroSubmode;
        return $this;
    }

    /**
     * Gets as railSubmode
     *
     * @return string
     */
    public function getRailSubmode()
    {
        return $this->railSubmode;
    }

    /**
     * Sets a new railSubmode
     *
     * @param string $railSubmode
     * @return self
     */
    public function setRailSubmode($railSubmode)
    {
        $this->railSubmode = $railSubmode;
        return $this;
    }

    /**
     * Gets as tramSubmode
     *
     * @return string
     */
    public function getTramSubmode()
    {
        return $this->tramSubmode;
    }

    /**
     * Sets a new tramSubmode
     *
     * @param string $tramSubmode
     * @return self
     */
    public function setTramSubmode($tramSubmode)
    {
        $this->tramSubmode = $tramSubmode;
        return $this;
    }

    /**
     * Gets as waterSubmode
     *
     * @return string
     */
    public function getWaterSubmode()
    {
        return $this->waterSubmode;
    }

    /**
     * Sets a new waterSubmode
     *
     * @param string $waterSubmode
     * @return self
     */
    public function setWaterSubmode($waterSubmode)
    {
        $this->waterSubmode = $waterSubmode;
        return $this;
    }

    /**
     * Gets as accessMode
     *
     * @return string
     */
    public function getAccessMode()
    {
        return $this->accessMode;
    }

    /**
     * Sets a new accessMode
     *
     * @param string $accessMode
     * @return self
     */
    public function setAccessMode($accessMode)
    {
        $this->accessMode = $accessMode;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Severity filter value to apply: only Situations with a severity greater than or equal to the specified value will be returned. See TPEG severities. Default is all.
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Severity filter value to apply: only Situations with a severity greater than or equal to the specified value will be returned. See TPEG severities. Default is all.
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as scope
     *
     * Types of Situation to include
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * Types of Situation to include
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as predictability
     *
     * Whether just planned, unplanned or both Situations will be returned.
     *
     * @return string
     */
    public function getPredictability()
    {
        return $this->predictability;
    }

    /**
     * Sets a new predictability
     *
     * Whether just planned, unplanned or both Situations will be returned.
     *
     * @param string $predictability
     * @return self
     */
    public function setPredictability($predictability)
    {
        $this->predictability = $predictability;
        return $this;
    }

    /**
     * Gets as keywords
     *
     * Arbitrary application specific classifiers. Only Situations that match these keywords will be returned
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * Arbitrary application specific classifiers. Only Situations that match these keywords will be returned
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as verification
     *
     * Whether incident has been verified or not If not specified return all
     *
     * @return string
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * Whether incident has been verified or not If not specified return all
     *
     * @param string $verification
     * @return self
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }

    /**
     * Gets as progress
     *
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation. If not specified return open, published closing and closed. l
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Sets a new progress
     *
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation. If not specified return open, published closing and closed. l
     *
     * @param string $progress
     * @return self
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * Gets as reality
     *
     * Whether situation is real or a test. If not specified return all
     *
     * @return string
     */
    public function getReality()
    {
        return $this->reality;
    }

    /**
     * Sets a new reality
     *
     * Whether situation is real or a test. If not specified return all
     *
     * @param string $reality
     * @return self
     */
    public function setReality($reality)
    {
        $this->reality = $reality;
        return $this;
    }

    /**
     * Gets as operatorRef
     *
     * Identifier of Operator. If unspecified all operators.
     *
     * @return string
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Identifier of Operator. If unspecified all operators.
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef($operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }

    /**
     * Gets as operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @return string
     */
    public function getOperationalUnitRef()
    {
        return $this->operationalUnitRef;
    }

    /**
     * Sets a new operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @param string $operationalUnitRef
     * @return self
     */
    public function setOperationalUnitRef($operationalUnitRef)
    {
        $this->operationalUnitRef = $operationalUnitRef;
        return $this;
    }

    /**
     * Gets as networkRef
     *
     * Identifier of Network.
     *
     * @return string
     */
    public function getNetworkRef()
    {
        return $this->networkRef;
    }

    /**
     * Sets a new networkRef
     *
     * Identifier of Network.
     *
     * @param string $networkRef
     * @return self
     */
    public function setNetworkRef($networkRef)
    {
        $this->networkRef = $networkRef;
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
     * Gets as stopPlaceRef
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
     * @param string $stopPlaceRef
     * @return self
     */
    public function setStopPlaceRef($stopPlaceRef)
    {
        $this->stopPlaceRef = $stopPlaceRef;
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
     * Gets as countryRef
     *
     * Unique identifier of a Country where incident takes place If specified only incidentsto that affect this place country will be returned
     *
     * @return string
     */
    public function getCountryRef()
    {
        return $this->countryRef;
    }

    /**
     * Sets a new countryRef
     *
     * Unique identifier of a Country where incident takes place If specified only incidentsto that affect this place country will be returned
     *
     * @param string $countryRef
     * @return self
     */
    public function setCountryRef($countryRef)
    {
        $this->countryRef = $countryRef;
        return $this;
    }

    /**
     * Gets as placeRef
     *
     * Identifier of Topographic Locality. Only incidents which are deemed to affect this place will be returned
     *
     * @return string
     */
    public function getPlaceRef()
    {
        return $this->placeRef;
    }

    /**
     * Sets a new placeRef
     *
     * Identifier of Topographic Locality. Only incidents which are deemed to affect this place will be returned
     *
     * @param string $placeRef
     * @return self
     */
    public function setPlaceRef($placeRef)
    {
        $this->placeRef = $placeRef;
        return $this;
    }

    /**
     * Gets as location
     *
     * Bounding box of an arbitrary area . Only incidents geocoded as falliing within area will be included.
     *
     * @return \Calcinai\Siri\Objects\LocationStructureType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Bounding box of an arbitrary area . Only incidents geocoded as falliing within area will be included.
     *
     * @param \Calcinai\Siri\Objects\LocationStructureType $location
     * @return self
     */
    public function setLocation(\Calcinai\Siri\Objects\LocationStructureType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as roadFilter
     *
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\RoadFilterStructureType $roadFilter
     */
    public function addToSituationRoadFilter(\Calcinai\Siri\Objects\RoadFilterStructureType $roadFilter)
    {
        $this->situationRoadFilter[] = $roadFilter;
        return $this;
    }

    /**
     * isset situationRoadFilter
     *
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationRoadFilter($index)
    {
        return isset($this->situationRoadFilter[$index]);
    }

    /**
     * unset situationRoadFilter
     *
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationRoadFilter($index)
    {
        unset($this->situationRoadFilter[$index]);
    }

    /**
     * Gets as situationRoadFilter
     *
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @return \Calcinai\Siri\Objects\RoadFilterStructureType[]
     */
    public function getSituationRoadFilter()
    {
        return $this->situationRoadFilter;
    }

    /**
     * Sets a new situationRoadFilter
     *
     * Parameters to filter Situation Exchange requests, based on the situation Road. Logically ANDed with other values.
     *
     * @param \Calcinai\Siri\Objects\RoadFilterStructureType[] $situationRoadFilter
     * @return self
     */
    public function setSituationRoadFilter(array $situationRoadFilter)
    {
        $this->situationRoadFilter = $situationRoadFilter;
        return $this;
    }

    /**
     * Gets as accessibilityNeedFilter
     *
     * Parameters to filter Situation Exchange requests, based on specific needs .
     *
     * @return \Calcinai\Siri\Objects\ACSB\PassengerAccessibilityNeedsStructureType
     */
    public function getAccessibilityNeedFilter()
    {
        return $this->accessibilityNeedFilter;
    }

    /**
     * Sets a new accessibilityNeedFilter
     *
     * Parameters to filter Situation Exchange requests, based on specific needs .
     *
     * @param \Calcinai\Siri\Objects\ACSB\PassengerAccessibilityNeedsStructureType $accessibilityNeedFilter
     * @return self
     */
    public function setAccessibilityNeedFilter(\Calcinai\Siri\Objects\ACSB\PassengerAccessibilityNeedsStructureType $accessibilityNeedFilter)
    {
        $this->accessibilityNeedFilter = $accessibilityNeedFilter;
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
     * Gets as maximumNumberOfSituationElements
     *
     * The maximum number of situation eleemnts to return in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @return int
     */
    public function getMaximumNumberOfSituationElements()
    {
        return $this->maximumNumberOfSituationElements;
    }

    /**
     * Sets a new maximumNumberOfSituationElements
     *
     * The maximum number of situation eleemnts to return in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @param int $maximumNumberOfSituationElements
     * @return self
     */
    public function setMaximumNumberOfSituationElements($maximumNumberOfSituationElements)
    {
        $this->maximumNumberOfSituationElements = $maximumNumberOfSituationElements;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

