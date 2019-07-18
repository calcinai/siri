<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedVehicleJourneyStructureType
 *
 * Data type for Realtime info about a Vehicle Journey.
 * XSD Type: EstimatedVehicleJourneyStructure
 */
class EstimatedVehicleJourneyStructureType
{

    /**
     * Line Reference.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Identifies the line direction, typically outward or return.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Reference to a dated Vehicle Journey.
     *
     * @property string $datedVehicleJourneyRef
     */
    private $datedVehicleJourneyRef = null;

    /**
     * If no vehicle journey reference is available, identify it by origin and destination and the scheduled times at these stops.
     *
     * @property \Calcinai\Siri\Objects\DatedVehicleJourneyIndirectRefStructureType $datedVehicleJourneyIndirectRef
     */
    private $datedVehicleJourneyIndirectRef = null;

    /**
     * If this is the first message about an extra unplanned vehicle journey, a new and unique code must be given for it. ExtraJourney should be set to 'true'.
     *
     * @property string $estimatedVehicleJourneyCode
     */
    private $estimatedVehicleJourneyCode = null;

    /**
     * Whether this vehicle journey is an addition to the planning data already sent. Default is false: i.e. not an additional journey.
     *
     * @property bool $extraJourney
     */
    private $extraJourney = null;

    /**
     * Whether this vehicle journey is a deletion of a previous scheduled journey. Default is false: this is not a vehicle journey that has been cancelled. An Extra Journey may be deleted.
     *
     * @property bool $cancellation
     */
    private $cancellation = null;

    /**
     * Identifier of Journey Pattern that Journey follows.
     *
     * @property string $journeyPatternRef
     */
    private $journeyPatternRef = null;

    /**
     * A method of transportation such as bus, rail, etc.
     *
     * @property string $vehicleMode
     */
    private $vehicleMode = null;

    /**
     * Identifier of Route that Journey follows.
     *
     * @property string $routeRef
     */
    private $routeRef = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishedLineName $publishedLineName
     */
    private $publishedLineName = null;

    /**
     * Description of the direction.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName
     */
    private $directionName = null;

    /**
     * Alternative Identifier of Line that an external system may associate with journey.
     *
     * @property string $externalLineRef
     */
    private $externalLineRef = null;

    /**
     * Operator of Journey.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @property string $productCategoryRef
     */
    private $productCategoryRef = null;

    /**
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string $serviceFeatureRef
     */
    private $serviceFeatureRef = null;

    /**
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string $vehicleFeatureRef
     */
    private $vehicleFeatureRef = null;

    /**
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleJourneyName
     */
    private $vehicleJourneyName = null;

    /**
     * @property \Calcinai\Siri\Objects\JourneyNote $journeyNote
     */
    private $journeyNote = null;

    /**
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @property bool $headwayService
     */
    private $headwayService = null;

    /**
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @property \Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement
     */
    private $facilityConditionElement = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement
     */
    private $facilityChangeElement = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Whether the vehicle journey is monitored by an AVMS: true if active. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Whether the prediction for the journey is considered to be of a useful accuracy or not. Default is false.
     *
     * @property bool $predictionInaccurate
     */
    private $predictionInaccurate = null;

    /**
     * How full the bus is. Enumeration. If omitted: Passenger load is unknown.
     *
     * @property string $occupancy
     */
    private $occupancy = null;

    /**
     * Block that vehicle is running.
     *
     * @property string $blockRef
     */
    private $blockRef = null;

    /**
     * Course of Journey ('Run') that vehicle is running.
     *
     * @property string $courseOfJourneyRef
     */
    private $courseOfJourneyRef = null;

    /**
     * A reference to the specific vehicle making a journey. This may be omitted if real time data is not available - i.e. it is timetabled data.
     *
     * @property string $vehicleRef
     */
    private $vehicleRef = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedCall[] $estimatedCalls
     */
    private $estimatedCalls = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedCall $estimatedCall
     */
    private $estimatedCall = null;

    /**
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence Defaut is false.
     *
     * @property bool $isCompleteStopSequence
     */
    private $isCompleteStopSequence = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as lineRef
     *
     * Line Reference.
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
     * Line Reference.
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
     * Identifies the line direction, typically outward or return.
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
     * Identifies the line direction, typically outward or return.
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
     * Gets as datedVehicleJourneyRef
     *
     * Reference to a dated Vehicle Journey.
     *
     * @return string
     */
    public function getDatedVehicleJourneyRef()
    {
        return $this->datedVehicleJourneyRef;
    }

    /**
     * Sets a new datedVehicleJourneyRef
     *
     * Reference to a dated Vehicle Journey.
     *
     * @param string $datedVehicleJourneyRef
     * @return self
     */
    public function setDatedVehicleJourneyRef($datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef = $datedVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as datedVehicleJourneyIndirectRef
     *
     * If no vehicle journey reference is available, identify it by origin and destination and the scheduled times at these stops.
     *
     * @return \Calcinai\Siri\Objects\DatedVehicleJourneyIndirectRefStructureType
     */
    public function getDatedVehicleJourneyIndirectRef()
    {
        return $this->datedVehicleJourneyIndirectRef;
    }

    /**
     * Sets a new datedVehicleJourneyIndirectRef
     *
     * If no vehicle journey reference is available, identify it by origin and destination and the scheduled times at these stops.
     *
     * @param \Calcinai\Siri\Objects\DatedVehicleJourneyIndirectRefStructureType $datedVehicleJourneyIndirectRef
     * @return self
     */
    public function setDatedVehicleJourneyIndirectRef(\Calcinai\Siri\Objects\DatedVehicleJourneyIndirectRefStructureType $datedVehicleJourneyIndirectRef)
    {
        $this->datedVehicleJourneyIndirectRef = $datedVehicleJourneyIndirectRef;
        return $this;
    }

    /**
     * Gets as estimatedVehicleJourneyCode
     *
     * If this is the first message about an extra unplanned vehicle journey, a new and unique code must be given for it. ExtraJourney should be set to 'true'.
     *
     * @return string
     */
    public function getEstimatedVehicleJourneyCode()
    {
        return $this->estimatedVehicleJourneyCode;
    }

    /**
     * Sets a new estimatedVehicleJourneyCode
     *
     * If this is the first message about an extra unplanned vehicle journey, a new and unique code must be given for it. ExtraJourney should be set to 'true'.
     *
     * @param string $estimatedVehicleJourneyCode
     * @return self
     */
    public function setEstimatedVehicleJourneyCode($estimatedVehicleJourneyCode)
    {
        $this->estimatedVehicleJourneyCode = $estimatedVehicleJourneyCode;
        return $this;
    }

    /**
     * Gets as extraJourney
     *
     * Whether this vehicle journey is an addition to the planning data already sent. Default is false: i.e. not an additional journey.
     *
     * @return bool
     */
    public function getExtraJourney()
    {
        return $this->extraJourney;
    }

    /**
     * Sets a new extraJourney
     *
     * Whether this vehicle journey is an addition to the planning data already sent. Default is false: i.e. not an additional journey.
     *
     * @param bool $extraJourney
     * @return self
     */
    public function setExtraJourney($extraJourney)
    {
        $this->extraJourney = $extraJourney;
        return $this;
    }

    /**
     * Gets as cancellation
     *
     * Whether this vehicle journey is a deletion of a previous scheduled journey. Default is false: this is not a vehicle journey that has been cancelled. An Extra Journey may be deleted.
     *
     * @return bool
     */
    public function getCancellation()
    {
        return $this->cancellation;
    }

    /**
     * Sets a new cancellation
     *
     * Whether this vehicle journey is a deletion of a previous scheduled journey. Default is false: this is not a vehicle journey that has been cancelled. An Extra Journey may be deleted.
     *
     * @param bool $cancellation
     * @return self
     */
    public function setCancellation($cancellation)
    {
        $this->cancellation = $cancellation;
        return $this;
    }

    /**
     * Gets as journeyPatternRef
     *
     * Identifier of Journey Pattern that Journey follows.
     *
     * @return string
     */
    public function getJourneyPatternRef()
    {
        return $this->journeyPatternRef;
    }

    /**
     * Sets a new journeyPatternRef
     *
     * Identifier of Journey Pattern that Journey follows.
     *
     * @param string $journeyPatternRef
     * @return self
     */
    public function setJourneyPatternRef($journeyPatternRef)
    {
        $this->journeyPatternRef = $journeyPatternRef;
        return $this;
    }

    /**
     * Gets as vehicleMode
     *
     * A method of transportation such as bus, rail, etc.
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
     * A method of transportation such as bus, rail, etc.
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
     * Gets as routeRef
     *
     * Identifier of Route that Journey follows.
     *
     * @return string
     */
    public function getRouteRef()
    {
        return $this->routeRef;
    }

    /**
     * Sets a new routeRef
     *
     * Identifier of Route that Journey follows.
     *
     * @param string $routeRef
     * @return self
     */
    public function setRouteRef($routeRef)
    {
        $this->routeRef = $routeRef;
        return $this;
    }

    /**
     * Gets as publishedLineName
     *
     * @return \Calcinai\Siri\Objects\PublishedLineName
     */
    public function getPublishedLineName()
    {
        return $this->publishedLineName;
    }

    /**
     * Sets a new publishedLineName
     *
     * @param \Calcinai\Siri\Objects\PublishedLineName $publishedLineName
     * @return self
     */
    public function setPublishedLineName(\Calcinai\Siri\Objects\PublishedLineName $publishedLineName)
    {
        $this->publishedLineName = $publishedLineName;
        return $this;
    }

    /**
     * Gets as directionName
     *
     * Description of the direction.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getDirectionName()
    {
        return $this->directionName;
    }

    /**
     * Sets a new directionName
     *
     * Description of the direction.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName
     * @return self
     */
    public function setDirectionName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName)
    {
        $this->directionName = $directionName;
        return $this;
    }

    /**
     * Gets as externalLineRef
     *
     * Alternative Identifier of Line that an external system may associate with journey.
     *
     * @return string
     */
    public function getExternalLineRef()
    {
        return $this->externalLineRef;
    }

    /**
     * Sets a new externalLineRef
     *
     * Alternative Identifier of Line that an external system may associate with journey.
     *
     * @param string $externalLineRef
     * @return self
     */
    public function setExternalLineRef($externalLineRef)
    {
        $this->externalLineRef = $externalLineRef;
        return $this;
    }

    /**
     * Gets as operatorRef
     *
     * Operator of Journey.
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
     * Operator of Journey.
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
     * Gets as productCategoryRef
     *
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @return string
     */
    public function getProductCategoryRef()
    {
        return $this->productCategoryRef;
    }

    /**
     * Sets a new productCategoryRef
     *
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @param string $productCategoryRef
     * @return self
     */
    public function setProductCategoryRef($productCategoryRef)
    {
        $this->productCategoryRef = $productCategoryRef;
        return $this;
    }

    /**
     * Gets as serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string
     */
    public function getServiceFeatureRef()
    {
        return $this->serviceFeatureRef;
    }

    /**
     * Sets a new serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param string $serviceFeatureRef
     * @return self
     */
    public function setServiceFeatureRef($serviceFeatureRef)
    {
        $this->serviceFeatureRef = $serviceFeatureRef;
        return $this;
    }

    /**
     * Gets as vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string
     */
    public function getVehicleFeatureRef()
    {
        return $this->vehicleFeatureRef;
    }

    /**
     * Sets a new vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param string $vehicleFeatureRef
     * @return self
     */
    public function setVehicleFeatureRef($vehicleFeatureRef)
    {
        $this->vehicleFeatureRef = $vehicleFeatureRef;
        return $this;
    }

    /**
     * Gets as vehicleJourneyName
     *
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getVehicleJourneyName()
    {
        return $this->vehicleJourneyName;
    }

    /**
     * Sets a new vehicleJourneyName
     *
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleJourneyName
     * @return self
     */
    public function setVehicleJourneyName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleJourneyName)
    {
        $this->vehicleJourneyName = $vehicleJourneyName;
        return $this;
    }

    /**
     * Gets as journeyNote
     *
     * @return \Calcinai\Siri\Objects\JourneyNote
     */
    public function getJourneyNote()
    {
        return $this->journeyNote;
    }

    /**
     * Sets a new journeyNote
     *
     * @param \Calcinai\Siri\Objects\JourneyNote $journeyNote
     * @return self
     */
    public function setJourneyNote(\Calcinai\Siri\Objects\JourneyNote $journeyNote)
    {
        $this->journeyNote = $journeyNote;
        return $this;
    }

    /**
     * Gets as headwayService
     *
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @return bool
     */
    public function getHeadwayService()
    {
        return $this->headwayService;
    }

    /**
     * Sets a new headwayService
     *
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @param bool $headwayService
     * @return self
     */
    public function setHeadwayService($headwayService)
    {
        $this->headwayService = $headwayService;
        return $this;
    }

    /**
     * Gets as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return \Calcinai\Siri\Objects\FacilityConditionElement
     */
    public function getFacilityConditionElement()
    {
        return $this->facilityConditionElement;
    }

    /**
     * Sets a new facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param \Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement
     * @return self
     */
    public function setFacilityConditionElement(\Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement)
    {
        $this->facilityConditionElement = $facilityConditionElement;
        return $this;
    }

    /**
     * Gets as facilityChangeElement
     *
     * @return \Calcinai\Siri\Objects\FacilityChangeElement
     */
    public function getFacilityChangeElement()
    {
        return $this->facilityChangeElement;
    }

    /**
     * Sets a new facilityChangeElement
     *
     * @param \Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement
     * @return self
     */
    public function setFacilityChangeElement(\Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement)
    {
        $this->facilityChangeElement = $facilityChangeElement;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as monitored
     *
     * Whether the vehicle journey is monitored by an AVMS: true if active. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @return bool
     */
    public function getMonitored()
    {
        return $this->monitored;
    }

    /**
     * Sets a new monitored
     *
     * Whether the vehicle journey is monitored by an AVMS: true if active. Inherited property: if omitted: same as indicated by (i) any preceding update message, or (ii) if no preceding update, by the referenced dated vehicle journey.
     *
     * @param bool $monitored
     * @return self
     */
    public function setMonitored($monitored)
    {
        $this->monitored = $monitored;
        return $this;
    }

    /**
     * Gets as predictionInaccurate
     *
     * Whether the prediction for the journey is considered to be of a useful accuracy or not. Default is false.
     *
     * @return bool
     */
    public function getPredictionInaccurate()
    {
        return $this->predictionInaccurate;
    }

    /**
     * Sets a new predictionInaccurate
     *
     * Whether the prediction for the journey is considered to be of a useful accuracy or not. Default is false.
     *
     * @param bool $predictionInaccurate
     * @return self
     */
    public function setPredictionInaccurate($predictionInaccurate)
    {
        $this->predictionInaccurate = $predictionInaccurate;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * How full the bus is. Enumeration. If omitted: Passenger load is unknown.
     *
     * @return string
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * How full the bus is. Enumeration. If omitted: Passenger load is unknown.
     *
     * @param string $occupancy
     * @return self
     */
    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Gets as blockRef
     *
     * Block that vehicle is running.
     *
     * @return string
     */
    public function getBlockRef()
    {
        return $this->blockRef;
    }

    /**
     * Sets a new blockRef
     *
     * Block that vehicle is running.
     *
     * @param string $blockRef
     * @return self
     */
    public function setBlockRef($blockRef)
    {
        $this->blockRef = $blockRef;
        return $this;
    }

    /**
     * Gets as courseOfJourneyRef
     *
     * Course of Journey ('Run') that vehicle is running.
     *
     * @return string
     */
    public function getCourseOfJourneyRef()
    {
        return $this->courseOfJourneyRef;
    }

    /**
     * Sets a new courseOfJourneyRef
     *
     * Course of Journey ('Run') that vehicle is running.
     *
     * @param string $courseOfJourneyRef
     * @return self
     */
    public function setCourseOfJourneyRef($courseOfJourneyRef)
    {
        $this->courseOfJourneyRef = $courseOfJourneyRef;
        return $this;
    }

    /**
     * Gets as vehicleRef
     *
     * A reference to the specific vehicle making a journey. This may be omitted if real time data is not available - i.e. it is timetabled data.
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
     * A reference to the specific vehicle making a journey. This may be omitted if real time data is not available - i.e. it is timetabled data.
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
     * Adds as estimatedCall
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EstimatedCall $estimatedCall
     */
    public function addToEstimatedCalls(\Calcinai\Siri\Objects\EstimatedCall $estimatedCall)
    {
        $this->estimatedCalls[] = $estimatedCall;
        return $this;
    }

    /**
     * isset estimatedCalls
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedCalls($index)
    {
        return isset($this->estimatedCalls[$index]);
    }

    /**
     * unset estimatedCalls
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedCalls($index)
    {
        unset($this->estimatedCalls[$index]);
    }

    /**
     * Gets as estimatedCalls
     *
     * @return \Calcinai\Siri\Objects\EstimatedCall[]
     */
    public function getEstimatedCalls()
    {
        return $this->estimatedCalls;
    }

    /**
     * Sets a new estimatedCalls
     *
     * @param \Calcinai\Siri\Objects\EstimatedCall[] $estimatedCalls
     * @return self
     */
    public function setEstimatedCalls(array $estimatedCalls)
    {
        $this->estimatedCalls = $estimatedCalls;
        return $this;
    }

    /**
     * Gets as estimatedCall
     *
     * @return \Calcinai\Siri\Objects\EstimatedCall
     */
    public function getEstimatedCall()
    {
        return $this->estimatedCall;
    }

    /**
     * Sets a new estimatedCall
     *
     * @param \Calcinai\Siri\Objects\EstimatedCall $estimatedCall
     * @return self
     */
    public function setEstimatedCall(\Calcinai\Siri\Objects\EstimatedCall $estimatedCall)
    {
        $this->estimatedCall = $estimatedCall;
        return $this;
    }

    /**
     * Gets as isCompleteStopSequence
     *
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence Defaut is false.
     *
     * @return bool
     */
    public function getIsCompleteStopSequence()
    {
        return $this->isCompleteStopSequence;
    }

    /**
     * Sets a new isCompleteStopSequence
     *
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence Defaut is false.
     *
     * @param bool $isCompleteStopSequence
     * @return self
     */
    public function setIsCompleteStopSequence($isCompleteStopSequence)
    {
        $this->isCompleteStopSequence = $isCompleteStopSequence;
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

