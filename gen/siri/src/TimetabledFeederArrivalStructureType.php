<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TimetabledFeederArrivalStructureType
 *
 * Type for incoming visit by feeder journey to interchange.
 * XSD Type: TimetabledFeederArrivalStructure
 */
class TimetabledFeederArrivalStructureType extends AbstractFeederItemStructureType
{

    /**
     * Information about the feeder journey.
     *
     * @property \Calcinai\Siri\Objects\InterchangeJourneyStructureType $feederJourney
     */
    private $feederJourney = null;

    /**
     * Identifies the Line.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Identifies the direction, typically outward or return.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * A reference to the dated vehicle journey that the vehicle is making.
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
     * Whether there is real-time information available for journey; if not present, not known.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Timetabled Departure Time from the connection.
     *
     * @property \DateTime $aimedDepartureTime
     */
    private $aimedDepartureTime = null;

    /**
     * Planned Arrival time at the connection point.
     *
     * @property \DateTime $aimedArrivalTime
     */
    private $aimedArrivalTime = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as feederJourney
     *
     * Information about the feeder journey.
     *
     * @return \Calcinai\Siri\Objects\InterchangeJourneyStructureType
     */
    public function getFeederJourney()
    {
        return $this->feederJourney;
    }

    /**
     * Sets a new feederJourney
     *
     * Information about the feeder journey.
     *
     * @param \Calcinai\Siri\Objects\InterchangeJourneyStructureType $feederJourney
     * @return self
     */
    public function setFeederJourney(\Calcinai\Siri\Objects\InterchangeJourneyStructureType $feederJourney)
    {
        $this->feederJourney = $feederJourney;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Identifies the Line.
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
     * Identifies the Line.
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
     * Identifies the direction, typically outward or return.
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
     * Identifies the direction, typically outward or return.
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
     * A reference to the dated vehicle journey that the vehicle is making.
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
     * A reference to the dated vehicle journey that the vehicle is making.
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
     * Gets as aimedDepartureTime
     *
     * Timetabled Departure Time from the connection.
     *
     * @return \DateTime
     */
    public function getAimedDepartureTime()
    {
        return $this->aimedDepartureTime;
    }

    /**
     * Sets a new aimedDepartureTime
     *
     * Timetabled Departure Time from the connection.
     *
     * @param \DateTime $aimedDepartureTime
     * @return self
     */
    public function setAimedDepartureTime(\DateTime $aimedDepartureTime)
    {
        $this->aimedDepartureTime = $aimedDepartureTime;
        return $this;
    }

    /**
     * Gets as aimedArrivalTime
     *
     * Planned Arrival time at the connection point.
     *
     * @return \DateTime
     */
    public function getAimedArrivalTime()
    {
        return $this->aimedArrivalTime;
    }

    /**
     * Sets a new aimedArrivalTime
     *
     * Planned Arrival time at the connection point.
     *
     * @param \DateTime $aimedArrivalTime
     * @return self
     */
    public function setAimedArrivalTime(\DateTime $aimedArrivalTime)
    {
        $this->aimedArrivalTime = $aimedArrivalTime;
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

