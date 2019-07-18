<?php

namespace Calcinai\Siri;

/**
 * Class representing MonitoredVehicleJourneyStructureType
 *
 * Type for Monitored Vehicle Journey.
 * XSD Type: MonitoredVehicleJourneyStructure
 */
class MonitoredVehicleJourneyStructureType
{

    /**
     * Line Reference.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Direction Reference.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * A reference to the dated vehicle journey that the vehicle is making, unique with the data horizon of the service.
     *
     * @property \Calcinai\Siri\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef
     */
    private $framedVehicleJourneyRef = null;

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
     * @property \Calcinai\Siri\PublishedLineName $publishedLineName
     */
    private $publishedLineName = null;

    /**
     * Description of the direction.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $directionName
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
     * @property string $originRef
     */
    private $originRef = null;

    /**
     * Name of the origin of the journey.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originName
     */
    private $originName = null;

    /**
     * Short name of the origin of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as Origin Name.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originShortName
     */
    private $originShortName = null;

    /**
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\PlaceNameStructureType $via
     */
    private $via = null;

    /**
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * Description of the destination stop (vehicle signage), Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $destinationName
     */
    private $destinationName = null;

    /**
     * Short name of the destination of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as DestinationName.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $destinationShortName
     */
    private $destinationShortName = null;

    /**
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $vehicleJourneyName
     */
    private $vehicleJourneyName = null;

    /**
     * @property \Calcinai\Siri\JourneyNote $journeyNote
     */
    private $journeyNote = null;

    /**
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Default is false.
     *
     * @property bool $headwayService
     */
    private $headwayService = null;

    /**
     * Timetabled DepartureTime from Origin.
     *
     * @property \DateTime $originAimedDepartureTime
     */
    private $originAimedDepartureTime = null;

    /**
     * Timetabled Arrival time at Destination.
     *
     * @property \DateTime $destinationAimedArrivalTime
     */
    private $destinationAimedArrivalTime = null;

    /**
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @property \Calcinai\Siri\FacilityConditionElement $facilityConditionElement
     */
    private $facilityConditionElement = null;

    /**
     * @property \Calcinai\Siri\FacilityChangeElement $facilityChangeElement
     */
    private $facilityChangeElement = null;

    /**
     * @property \Calcinai\Siri\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Whether there is real-time information available for journey; if not present, not known.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Condition indicating nature of realtime fault. Present if Journey is normally monitored but temporarily cannot be Monitored for a known reason.
     *
     * @property string $monitoringError
     */
    private $monitoringError = null;

    /**
     * Whether the vehicle is in traffic congestion. If not, present, not known.
     *
     * @property bool $inCongestion
     */
    private $inCongestion = null;

    /**
     * Whether the panic alarm on the vehicle is activated. This may lead to indeterminate predictions. If absent, false.
     *
     * @property bool $inPanic
     */
    private $inPanic = null;

    /**
     * Whether the prediction should be judged as inaccurate.
     *
     * @property bool $predictionInaccurate
     */
    private $predictionInaccurate = null;

    /**
     * System originating real time data. Can be used to make judgements of relative quality and accuracy compared to other feeds.
     *
     * @property string $dataSource
     */
    private $dataSource = null;

    /**
     * Confidence level in data. Default is reliable.
     *
     * @property string $confidenceLevel
     */
    private $confidenceLevel = null;

    /**
     * Current geospatial location of vehicle. Measured to front of vehicle.
     *
     * @property \Calcinai\Siri\LocationStructureType $vehicleLocation
     */
    private $vehicleLocation = null;

    /**
     * Bearing in compass degrees in which vehicel is heading
     *
     * @property float $bearing
     */
    private $bearing = null;

    /**
     * Rate of progress of vehicle. Default is Normal
     *
     * @property string $progressRate
     */
    private $progressRate = null;

    /**
     * How full vehicle is. Enumeration. If omitted, not known.
     *
     * @property string $occupancy
     */
    private $occupancy = null;

    /**
     * Delay, to a precision in seconds. Early times are shown as negative values.
     *
     * @property \DateInterval $delay
     */
    private $delay = null;

    /**
     * A non-displayable status describing the running of this vehicle.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $progressStatus
     */
    private $progressStatus = null;

    /**
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @property \Calcinai\Siri\TrainBlockPartStructureType $trainBlockPart
     */
    private $trainBlockPart = null;

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
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\PreviousCallStructureType[] $previousCalls
     */
    private $previousCalls = null;

    /**
     * Monitored call at the current stop.
     *
     * @property \Calcinai\Siri\MonitoredCallStructureType $monitoredCall
     */
    private $monitoredCall = null;

    /**
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\OnwardCallStructureType[] $onwardCalls
     */
    private $onwardCalls = null;

    /**
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence. Defaut is false.
     *
     * @property bool $isCompleteStopSequence
     */
    private $isCompleteStopSequence = null;

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
     * Direction Reference.
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
     * Direction Reference.
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
     * Gets as framedVehicleJourneyRef
     *
     * A reference to the dated vehicle journey that the vehicle is making, unique with the data horizon of the service.
     *
     * @return \Calcinai\Siri\FramedVehicleJourneyRefStructureType
     */
    public function getFramedVehicleJourneyRef()
    {
        return $this->framedVehicleJourneyRef;
    }

    /**
     * Sets a new framedVehicleJourneyRef
     *
     * A reference to the dated vehicle journey that the vehicle is making, unique with the data horizon of the service.
     *
     * @param \Calcinai\Siri\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef
     * @return self
     */
    public function setFramedVehicleJourneyRef(\Calcinai\Siri\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef)
    {
        $this->framedVehicleJourneyRef = $framedVehicleJourneyRef;
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
     * @return \Calcinai\Siri\PublishedLineName
     */
    public function getPublishedLineName()
    {
        return $this->publishedLineName;
    }

    /**
     * Sets a new publishedLineName
     *
     * @param \Calcinai\Siri\PublishedLineName $publishedLineName
     * @return self
     */
    public function setPublishedLineName(\Calcinai\Siri\PublishedLineName $publishedLineName)
    {
        $this->publishedLineName = $publishedLineName;
        return $this;
    }

    /**
     * Gets as directionName
     *
     * Description of the direction.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $directionName
     * @return self
     */
    public function setDirectionName(\Calcinai\Siri\NaturalLanguageStringStructureType $directionName)
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
     * Gets as originRef
     *
     * @return string
     */
    public function getOriginRef()
    {
        return $this->originRef;
    }

    /**
     * Sets a new originRef
     *
     * @param string $originRef
     * @return self
     */
    public function setOriginRef($originRef)
    {
        $this->originRef = $originRef;
        return $this;
    }

    /**
     * Gets as originName
     *
     * Name of the origin of the journey.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getOriginName()
    {
        return $this->originName;
    }

    /**
     * Sets a new originName
     *
     * Name of the origin of the journey.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originName
     * @return self
     */
    public function setOriginName(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originName)
    {
        $this->originName = $originName;
        return $this;
    }

    /**
     * Gets as originShortName
     *
     * Short name of the origin of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as Origin Name.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getOriginShortName()
    {
        return $this->originShortName;
    }

    /**
     * Sets a new originShortName
     *
     * Short name of the origin of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as Origin Name.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originShortName
     * @return self
     */
    public function setOriginShortName(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $originShortName)
    {
        $this->originShortName = $originShortName;
        return $this;
    }

    /**
     * Gets as via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @return \Calcinai\Siri\PlaceNameStructureType
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Sets a new via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @param \Calcinai\Siri\PlaceNameStructureType $via
     * @return self
     */
    public function setVia(\Calcinai\Siri\PlaceNameStructureType $via)
    {
        $this->via = $via;
        return $this;
    }

    /**
     * Gets as destinationRef
     *
     * @return string
     */
    public function getDestinationRef()
    {
        return $this->destinationRef;
    }

    /**
     * Sets a new destinationRef
     *
     * @param string $destinationRef
     * @return self
     */
    public function setDestinationRef($destinationRef)
    {
        $this->destinationRef = $destinationRef;
        return $this;
    }

    /**
     * Gets as destinationName
     *
     * Description of the destination stop (vehicle signage), Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * Sets a new destinationName
     *
     * Description of the destination stop (vehicle signage), Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $destinationName
     * @return self
     */
    public function setDestinationName(\Calcinai\Siri\NaturalLanguageStringStructureType $destinationName)
    {
        $this->destinationName = $destinationName;
        return $this;
    }

    /**
     * Gets as destinationShortName
     *
     * Short name of the destination of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as DestinationName.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getDestinationShortName()
    {
        return $this->destinationShortName;
    }

    /**
     * Sets a new destinationShortName
     *
     * Short name of the destination of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as DestinationName.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $destinationShortName
     * @return self
     */
    public function setDestinationShortName(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $destinationShortName)
    {
        $this->destinationShortName = $destinationShortName;
        return $this;
    }

    /**
     * Gets as vehicleJourneyName
     *
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $vehicleJourneyName
     * @return self
     */
    public function setVehicleJourneyName(\Calcinai\Siri\NaturalLanguageStringStructureType $vehicleJourneyName)
    {
        $this->vehicleJourneyName = $vehicleJourneyName;
        return $this;
    }

    /**
     * Gets as journeyNote
     *
     * @return \Calcinai\Siri\JourneyNote
     */
    public function getJourneyNote()
    {
        return $this->journeyNote;
    }

    /**
     * Sets a new journeyNote
     *
     * @param \Calcinai\Siri\JourneyNote $journeyNote
     * @return self
     */
    public function setJourneyNote(\Calcinai\Siri\JourneyNote $journeyNote)
    {
        $this->journeyNote = $journeyNote;
        return $this;
    }

    /**
     * Gets as headwayService
     *
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Default is false.
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
     * Whether this is a Headway Service, that is shown as operating at a prescribed interval rather than to a fixed timetable. Default is false.
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
     * Gets as originAimedDepartureTime
     *
     * Timetabled DepartureTime from Origin.
     *
     * @return \DateTime
     */
    public function getOriginAimedDepartureTime()
    {
        return $this->originAimedDepartureTime;
    }

    /**
     * Sets a new originAimedDepartureTime
     *
     * Timetabled DepartureTime from Origin.
     *
     * @param \DateTime $originAimedDepartureTime
     * @return self
     */
    public function setOriginAimedDepartureTime(\DateTime $originAimedDepartureTime)
    {
        $this->originAimedDepartureTime = $originAimedDepartureTime;
        return $this;
    }

    /**
     * Gets as destinationAimedArrivalTime
     *
     * Timetabled Arrival time at Destination.
     *
     * @return \DateTime
     */
    public function getDestinationAimedArrivalTime()
    {
        return $this->destinationAimedArrivalTime;
    }

    /**
     * Sets a new destinationAimedArrivalTime
     *
     * Timetabled Arrival time at Destination.
     *
     * @param \DateTime $destinationAimedArrivalTime
     * @return self
     */
    public function setDestinationAimedArrivalTime(\DateTime $destinationAimedArrivalTime)
    {
        $this->destinationAimedArrivalTime = $destinationAimedArrivalTime;
        return $this;
    }

    /**
     * Gets as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return \Calcinai\Siri\FacilityConditionElement
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
     * @param \Calcinai\Siri\FacilityConditionElement $facilityConditionElement
     * @return self
     */
    public function setFacilityConditionElement(\Calcinai\Siri\FacilityConditionElement $facilityConditionElement)
    {
        $this->facilityConditionElement = $facilityConditionElement;
        return $this;
    }

    /**
     * Gets as facilityChangeElement
     *
     * @return \Calcinai\Siri\FacilityChangeElement
     */
    public function getFacilityChangeElement()
    {
        return $this->facilityChangeElement;
    }

    /**
     * Sets a new facilityChangeElement
     *
     * @param \Calcinai\Siri\FacilityChangeElement $facilityChangeElement
     * @return self
     */
    public function setFacilityChangeElement(\Calcinai\Siri\FacilityChangeElement $facilityChangeElement)
    {
        $this->facilityChangeElement = $facilityChangeElement;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as monitored
     *
     * Whether there is real-time information available for journey; if not present, not known.
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
     * Whether there is real-time information available for journey; if not present, not known.
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
     * Gets as monitoringError
     *
     * Condition indicating nature of realtime fault. Present if Journey is normally monitored but temporarily cannot be Monitored for a known reason.
     *
     * @return string
     */
    public function getMonitoringError()
    {
        return $this->monitoringError;
    }

    /**
     * Sets a new monitoringError
     *
     * Condition indicating nature of realtime fault. Present if Journey is normally monitored but temporarily cannot be Monitored for a known reason.
     *
     * @param string $monitoringError
     * @return self
     */
    public function setMonitoringError($monitoringError)
    {
        $this->monitoringError = $monitoringError;
        return $this;
    }

    /**
     * Gets as inCongestion
     *
     * Whether the vehicle is in traffic congestion. If not, present, not known.
     *
     * @return bool
     */
    public function getInCongestion()
    {
        return $this->inCongestion;
    }

    /**
     * Sets a new inCongestion
     *
     * Whether the vehicle is in traffic congestion. If not, present, not known.
     *
     * @param bool $inCongestion
     * @return self
     */
    public function setInCongestion($inCongestion)
    {
        $this->inCongestion = $inCongestion;
        return $this;
    }

    /**
     * Gets as inPanic
     *
     * Whether the panic alarm on the vehicle is activated. This may lead to indeterminate predictions. If absent, false.
     *
     * @return bool
     */
    public function getInPanic()
    {
        return $this->inPanic;
    }

    /**
     * Sets a new inPanic
     *
     * Whether the panic alarm on the vehicle is activated. This may lead to indeterminate predictions. If absent, false.
     *
     * @param bool $inPanic
     * @return self
     */
    public function setInPanic($inPanic)
    {
        $this->inPanic = $inPanic;
        return $this;
    }

    /**
     * Gets as predictionInaccurate
     *
     * Whether the prediction should be judged as inaccurate.
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
     * Whether the prediction should be judged as inaccurate.
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
     * Gets as dataSource
     *
     * System originating real time data. Can be used to make judgements of relative quality and accuracy compared to other feeds.
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Sets a new dataSource
     *
     * System originating real time data. Can be used to make judgements of relative quality and accuracy compared to other feeds.
     *
     * @param string $dataSource
     * @return self
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * Gets as confidenceLevel
     *
     * Confidence level in data. Default is reliable.
     *
     * @return string
     */
    public function getConfidenceLevel()
    {
        return $this->confidenceLevel;
    }

    /**
     * Sets a new confidenceLevel
     *
     * Confidence level in data. Default is reliable.
     *
     * @param string $confidenceLevel
     * @return self
     */
    public function setConfidenceLevel($confidenceLevel)
    {
        $this->confidenceLevel = $confidenceLevel;
        return $this;
    }

    /**
     * Gets as vehicleLocation
     *
     * Current geospatial location of vehicle. Measured to front of vehicle.
     *
     * @return \Calcinai\Siri\LocationStructureType
     */
    public function getVehicleLocation()
    {
        return $this->vehicleLocation;
    }

    /**
     * Sets a new vehicleLocation
     *
     * Current geospatial location of vehicle. Measured to front of vehicle.
     *
     * @param \Calcinai\Siri\LocationStructureType $vehicleLocation
     * @return self
     */
    public function setVehicleLocation(\Calcinai\Siri\LocationStructureType $vehicleLocation)
    {
        $this->vehicleLocation = $vehicleLocation;
        return $this;
    }

    /**
     * Gets as bearing
     *
     * Bearing in compass degrees in which vehicel is heading
     *
     * @return float
     */
    public function getBearing()
    {
        return $this->bearing;
    }

    /**
     * Sets a new bearing
     *
     * Bearing in compass degrees in which vehicel is heading
     *
     * @param float $bearing
     * @return self
     */
    public function setBearing($bearing)
    {
        $this->bearing = $bearing;
        return $this;
    }

    /**
     * Gets as progressRate
     *
     * Rate of progress of vehicle. Default is Normal
     *
     * @return string
     */
    public function getProgressRate()
    {
        return $this->progressRate;
    }

    /**
     * Sets a new progressRate
     *
     * Rate of progress of vehicle. Default is Normal
     *
     * @param string $progressRate
     * @return self
     */
    public function setProgressRate($progressRate)
    {
        $this->progressRate = $progressRate;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * How full vehicle is. Enumeration. If omitted, not known.
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
     * How full vehicle is. Enumeration. If omitted, not known.
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
     * Gets as delay
     *
     * Delay, to a precision in seconds. Early times are shown as negative values.
     *
     * @return \DateInterval
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Sets a new delay
     *
     * Delay, to a precision in seconds. Early times are shown as negative values.
     *
     * @param \DateInterval $delay
     * @return self
     */
    public function setDelay(\DateInterval $delay)
    {
        $this->delay = $delay;
        return $this;
    }

    /**
     * Gets as progressStatus
     *
     * A non-displayable status describing the running of this vehicle.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getProgressStatus()
    {
        return $this->progressStatus;
    }

    /**
     * Sets a new progressStatus
     *
     * A non-displayable status describing the running of this vehicle.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $progressStatus
     * @return self
     */
    public function setProgressStatus(\Calcinai\Siri\NaturalLanguageStringStructureType $progressStatus)
    {
        $this->progressStatus = $progressStatus;
        return $this;
    }

    /**
     * Gets as trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @return \Calcinai\Siri\TrainBlockPartStructureType
     */
    public function getTrainBlockPart()
    {
        return $this->trainBlockPart;
    }

    /**
     * Sets a new trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @param \Calcinai\Siri\TrainBlockPartStructureType $trainBlockPart
     * @return self
     */
    public function setTrainBlockPart(\Calcinai\Siri\TrainBlockPartStructureType $trainBlockPart)
    {
        $this->trainBlockPart = $trainBlockPart;
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
     * Adds as previousCall
     *
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @return self
     * @param \Calcinai\Siri\PreviousCallStructureType $previousCall
     */
    public function addToPreviousCalls(\Calcinai\Siri\PreviousCallStructureType $previousCall)
    {
        $this->previousCalls[] = $previousCall;
        return $this;
    }

    /**
     * isset previousCalls
     *
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreviousCalls($index)
    {
        return isset($this->previousCalls[$index]);
    }

    /**
     * unset previousCalls
     *
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreviousCalls($index)
    {
        unset($this->previousCalls[$index]);
    }

    /**
     * Gets as previousCalls
     *
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @return \Calcinai\Siri\PreviousCallStructureType[]
     */
    public function getPreviousCalls()
    {
        return $this->previousCalls;
    }

    /**
     * Sets a new previousCalls
     *
     * Information on stops called at previously, origin and all intermediate stops up to but not including the current stop, in order or visits. Should only be included if the detail level was requested.
     *
     * @param \Calcinai\Siri\PreviousCallStructureType[] $previousCalls
     * @return self
     */
    public function setPreviousCalls(array $previousCalls)
    {
        $this->previousCalls = $previousCalls;
        return $this;
    }

    /**
     * Gets as monitoredCall
     *
     * Monitored call at the current stop.
     *
     * @return \Calcinai\Siri\MonitoredCallStructureType
     */
    public function getMonitoredCall()
    {
        return $this->monitoredCall;
    }

    /**
     * Sets a new monitoredCall
     *
     * Monitored call at the current stop.
     *
     * @param \Calcinai\Siri\MonitoredCallStructureType $monitoredCall
     * @return self
     */
    public function setMonitoredCall(\Calcinai\Siri\MonitoredCallStructureType $monitoredCall)
    {
        $this->monitoredCall = $monitoredCall;
        return $this;
    }

    /**
     * Adds as onwardCall
     *
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @return self
     * @param \Calcinai\Siri\OnwardCallStructureType $onwardCall
     */
    public function addToOnwardCalls(\Calcinai\Siri\OnwardCallStructureType $onwardCall)
    {
        $this->onwardCalls[] = $onwardCall;
        return $this;
    }

    /**
     * isset onwardCalls
     *
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnwardCalls($index)
    {
        return isset($this->onwardCalls[$index]);
    }

    /**
     * unset onwardCalls
     *
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnwardCalls($index)
    {
        unset($this->onwardCalls[$index]);
    }

    /**
     * Gets as onwardCalls
     *
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @return \Calcinai\Siri\OnwardCallStructureType[]
     */
    public function getOnwardCalls()
    {
        return $this->onwardCalls;
    }

    /**
     * Sets a new onwardCalls
     *
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @param \Calcinai\Siri\OnwardCallStructureType[] $onwardCalls
     * @return self
     */
    public function setOnwardCalls(array $onwardCalls)
    {
        $this->onwardCalls = $onwardCalls;
        return $this;
    }

    /**
     * Gets as isCompleteStopSequence
     *
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence. Defaut is false.
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
     * Whether the above call sequence is complete, i.e. represents every call of the route and so can be used to replace a previous call sequence. Defaut is false.
     *
     * @param bool $isCompleteStopSequence
     * @return self
     */
    public function setIsCompleteStopSequence($isCompleteStopSequence)
    {
        $this->isCompleteStopSequence = $isCompleteStopSequence;
        return $this;
    }


}

