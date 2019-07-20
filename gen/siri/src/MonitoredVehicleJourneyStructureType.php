<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef
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
     * @property string[] $vehicleMode
     */
    private $vehicleMode = [
        
    ];

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
     * @property string[] $serviceFeatureRef
     */
    private $serviceFeatureRef = [
        
    ];

    /**
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string[] $vehicleFeatureRef
     */
    private $vehicleFeatureRef = [
        
    ];

    /**
     * @property string $originRef
     */
    private $originRef = null;

    /**
     * Name of the origin of the journey.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originName
     */
    private $originName = null;

    /**
     * Short name of the origin of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as Origin Name.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originShortName
     */
    private $originShortName = null;

    /**
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\Objects\PlaceNameStructureType[] $via
     */
    private $via = [
        
    ];

    /**
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * Description of the destination stop (vehicle signage), Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationName
     */
    private $destinationName = null;

    /**
     * Short name of the destination of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as DestinationName.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $destinationShortName
     */
    private $destinationShortName = null;

    /**
     * For train services with Named Journeys. Train name, e.g. “West Coast Express”. If omitted: No train name. Inherited property.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleJourneyName
     */
    private $vehicleJourneyName = null;

    /**
     * @property \Calcinai\Siri\Objects\JourneyNote[] $journeyNote
     */
    private $journeyNote = [
        
    ];

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
     * @property \Calcinai\Siri\Objects\FacilityConditionElement[] $facilityConditionElement
     */
    private $facilityConditionElement = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement
     */
    private $facilityChangeElement = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef[] $situationRef
     */
    private $situationRef = [
        
    ];

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
     * @property \Calcinai\Siri\Objects\LocationStructureType $vehicleLocation
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
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $progressStatus
     */
    private $progressStatus = null;

    /**
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @property \Calcinai\Siri\Objects\TrainBlockPartStructureType[] $trainBlockPart
     */
    private $trainBlockPart = [
        
    ];

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
     * @property \Calcinai\Siri\Objects\PreviousCallStructureType[] $previousCalls
     */
    private $previousCalls = null;

    /**
     * Monitored call at the current stop.
     *
     * @property \Calcinai\Siri\Objects\MonitoredCallStructureType $monitoredCall
     */
    private $monitoredCall = null;

    /**
     * Information on calls at the intermediate stops beyond the current stop, up to and including the destination, in order of visits. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\Objects\OnwardCallStructureType[] $onwardCalls
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
     * @return \Calcinai\Siri\Objects\FramedVehicleJourneyRefStructureType
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
     * @param \Calcinai\Siri\Objects\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef
     * @return self
     */
    public function setFramedVehicleJourneyRef(\Calcinai\Siri\Objects\FramedVehicleJourneyRefStructureType $framedVehicleJourneyRef)
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
     * Adds as vehicleMode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @return self
     * @param string $vehicleMode
     */
    public function addToVehicleMode($vehicleMode)
    {
        $this->vehicleMode[] = $vehicleMode;
        return $this;
    }

    /**
     * isset vehicleMode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMode($index)
    {
        return isset($this->vehicleMode[$index]);
    }

    /**
     * unset vehicleMode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMode($index)
    {
        unset($this->vehicleMode[$index]);
    }

    /**
     * Gets as vehicleMode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @return string[]
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
    public function setVehicleMode(array $vehicleMode)
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
     * Adds as serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return self
     * @param string $serviceFeatureRef
     */
    public function addToServiceFeatureRef($serviceFeatureRef)
    {
        $this->serviceFeatureRef[] = $serviceFeatureRef;
        return $this;
    }

    /**
     * isset serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFeatureRef($index)
    {
        return isset($this->serviceFeatureRef[$index]);
    }

    /**
     * unset serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFeatureRef($index)
    {
        unset($this->serviceFeatureRef[$index]);
    }

    /**
     * Gets as serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string[]
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
    public function setServiceFeatureRef(array $serviceFeatureRef)
    {
        $this->serviceFeatureRef = $serviceFeatureRef;
        return $this;
    }

    /**
     * Adds as vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return self
     * @param string $vehicleFeatureRef
     */
    public function addToVehicleFeatureRef($vehicleFeatureRef)
    {
        $this->vehicleFeatureRef[] = $vehicleFeatureRef;
        return $this;
    }

    /**
     * isset vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleFeatureRef($index)
    {
        return isset($this->vehicleFeatureRef[$index]);
    }

    /**
     * unset vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleFeatureRef($index)
    {
        unset($this->vehicleFeatureRef[$index]);
    }

    /**
     * Gets as vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string[]
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
    public function setVehicleFeatureRef(array $vehicleFeatureRef)
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
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originName
     * @return self
     */
    public function setOriginName(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originName)
    {
        $this->originName = $originName;
        return $this;
    }

    /**
     * Gets as originShortName
     *
     * Short name of the origin of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as Origin Name.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originShortName
     * @return self
     */
    public function setOriginShortName(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $originShortName)
    {
        $this->originShortName = $originShortName;
        return $this;
    }

    /**
     * Adds as via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PlaceNameStructureType $via
     */
    public function addToVia(\Calcinai\Siri\Objects\PlaceNameStructureType $via)
    {
        $this->via[] = $via;
        return $this;
    }

    /**
     * isset via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVia($index)
    {
        return isset($this->via[$index]);
    }

    /**
     * unset via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVia($index)
    {
        unset($this->via[$index]);
    }

    /**
     * Gets as via
     *
     * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
     *
     * @return \Calcinai\Siri\Objects\PlaceNameStructureType[]
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
     * @param \Calcinai\Siri\Objects\PlaceNameStructureType[] $via
     * @return self
     */
    public function setVia(array $via)
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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationName
     * @return self
     */
    public function setDestinationName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationName)
    {
        $this->destinationName = $destinationName;
        return $this;
    }

    /**
     * Gets as destinationShortName
     *
     * Short name of the destination of the journey; used to help identify the vehicle journey on arrival boards. If absent, same as DestinationName.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $destinationShortName
     * @return self
     */
    public function setDestinationShortName(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $destinationShortName)
    {
        $this->destinationShortName = $destinationShortName;
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
     * Adds as journeyNote
     *
     * @return self
     * @param \Calcinai\Siri\Objects\JourneyNote $journeyNote
     */
    public function addToJourneyNote(\Calcinai\Siri\Objects\JourneyNote $journeyNote)
    {
        $this->journeyNote[] = $journeyNote;
        return $this;
    }

    /**
     * isset journeyNote
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJourneyNote($index)
    {
        return isset($this->journeyNote[$index]);
    }

    /**
     * unset journeyNote
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJourneyNote($index)
    {
        unset($this->journeyNote[$index]);
    }

    /**
     * Gets as journeyNote
     *
     * @return \Calcinai\Siri\Objects\JourneyNote[]
     */
    public function getJourneyNote()
    {
        return $this->journeyNote;
    }

    /**
     * Sets a new journeyNote
     *
     * @param \Calcinai\Siri\Objects\JourneyNote[] $journeyNote
     * @return self
     */
    public function setJourneyNote(array $journeyNote)
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
     * Adds as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement
     */
    public function addToFacilityConditionElement(\Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement)
    {
        $this->facilityConditionElement[] = $facilityConditionElement;
        return $this;
    }

    /**
     * isset facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityConditionElement($index)
    {
        return isset($this->facilityConditionElement[$index]);
    }

    /**
     * unset facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityConditionElement($index)
    {
        unset($this->facilityConditionElement[$index]);
    }

    /**
     * Gets as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return \Calcinai\Siri\Objects\FacilityConditionElement[]
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
     * @param \Calcinai\Siri\Objects\FacilityConditionElement[] $facilityConditionElement
     * @return self
     */
    public function setFacilityConditionElement(array $facilityConditionElement)
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
     * Adds as situationRef
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    public function addToSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef[] = $situationRef;
        return $this;
    }

    /**
     * isset situationRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationRef($index)
    {
        return isset($this->situationRef[$index]);
    }

    /**
     * unset situationRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationRef($index)
    {
        unset($this->situationRef[$index]);
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef[]
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef[] $situationRef
     * @return self
     */
    public function setSituationRef(array $situationRef)
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
     * @return \Calcinai\Siri\Objects\LocationStructureType
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
     * @param \Calcinai\Siri\Objects\LocationStructureType $vehicleLocation
     * @return self
     */
    public function setVehicleLocation(\Calcinai\Siri\Objects\LocationStructureType $vehicleLocation)
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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $progressStatus
     * @return self
     */
    public function setProgressStatus(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $progressStatus)
    {
        $this->progressStatus = $progressStatus;
        return $this;
    }

    /**
     * Adds as trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TrainBlockPartStructureType $trainBlockPart
     */
    public function addToTrainBlockPart(\Calcinai\Siri\Objects\TrainBlockPartStructureType $trainBlockPart)
    {
        $this->trainBlockPart[] = $trainBlockPart;
        return $this;
    }

    /**
     * isset trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrainBlockPart($index)
    {
        return isset($this->trainBlockPart[$index]);
    }

    /**
     * unset trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrainBlockPart($index)
    {
        unset($this->trainBlockPart[$index]);
    }

    /**
     * Gets as trainBlockPart
     *
     * If a vehicle journey is a coupled journey, i.e. comprises several coupled block parts, there will be a separate delivery for each block part and this element will indicate the vehicles that the journey part uses.
     *
     * @return \Calcinai\Siri\Objects\TrainBlockPartStructureType[]
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
     * @param \Calcinai\Siri\Objects\TrainBlockPartStructureType[] $trainBlockPart
     * @return self
     */
    public function setTrainBlockPart(array $trainBlockPart)
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
     * @param \Calcinai\Siri\Objects\PreviousCallStructureType $previousCall
     */
    public function addToPreviousCalls(\Calcinai\Siri\Objects\PreviousCallStructureType $previousCall)
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
     * @return \Calcinai\Siri\Objects\PreviousCallStructureType[]
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
     * @param \Calcinai\Siri\Objects\PreviousCallStructureType[] $previousCalls
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
     * @return \Calcinai\Siri\Objects\MonitoredCallStructureType
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
     * @param \Calcinai\Siri\Objects\MonitoredCallStructureType $monitoredCall
     * @return self
     */
    public function setMonitoredCall(\Calcinai\Siri\Objects\MonitoredCallStructureType $monitoredCall)
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
     * @param \Calcinai\Siri\Objects\OnwardCallStructureType $onwardCall
     */
    public function addToOnwardCalls(\Calcinai\Siri\Objects\OnwardCallStructureType $onwardCall)
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
     * @return \Calcinai\Siri\Objects\OnwardCallStructureType[]
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
     * @param \Calcinai\Siri\Objects\OnwardCallStructureType[] $onwardCalls
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

