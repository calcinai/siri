<?php

namespace Calcinai\Siri;

/**
 * Class representing DatedVehicleJourneyStructureType
 *
 * Data type for Planned Vehicle Journey (Production Timetable Service).
 * XSD Type: DatedVehicleJourneyStructure
 */
class DatedVehicleJourneyStructureType
{

    /**
     * Identifies the vehicle journey.
     *
     * @property string $datedVehicleJourneyCode
     */
    private $datedVehicleJourneyCode = null;

    /**
     * Vehicle Journey from which this journey is different.
     *
     * @property string $vehicleJourneyRef
     */
    private $vehicleJourneyRef = null;

    /**
     * Whether this journey is an addition to the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: the journey is not an addition.
     *
     * @property bool $extraJourney
     */
    private $extraJourney = null;

    /**
     * Whether this journey is a deletion of a journey in the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: Journey is not a deletion.
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
     * Description of the destination stop (vehicle signage) to show on vehicle, Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay
     */
    private $destinationDisplay = null;

    /**
     * Additional Text associated with line.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $lineNote
     */
    private $lineNote = null;

    /**
     * Whether this is a Headway Service, that is, one shown as operating at a prescribed interval rather than to a fixed timetable.
     *
     * @property bool $headwayService
     */
    private $headwayService = null;

    /**
     * Whether vehicle journeys of line are normally monitored. Provides a default value for the Monitored element on individual journeys of the timetable.
     *
     * @property bool $monitored
     */
    private $monitored = null;

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
     * Complete sequence of stops along the route path, in calling order.
     *
     * @property \Calcinai\Siri\DatedCall[] $datedCalls
     */
    private $datedCalls = null;

    /**
     * @property \Calcinai\Siri\DatedCall $datedCall
     */
    private $datedCall = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as datedVehicleJourneyCode
     *
     * Identifies the vehicle journey.
     *
     * @return string
     */
    public function getDatedVehicleJourneyCode()
    {
        return $this->datedVehicleJourneyCode;
    }

    /**
     * Sets a new datedVehicleJourneyCode
     *
     * Identifies the vehicle journey.
     *
     * @param string $datedVehicleJourneyCode
     * @return self
     */
    public function setDatedVehicleJourneyCode($datedVehicleJourneyCode)
    {
        $this->datedVehicleJourneyCode = $datedVehicleJourneyCode;
        return $this;
    }

    /**
     * Gets as vehicleJourneyRef
     *
     * Vehicle Journey from which this journey is different.
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
     * Vehicle Journey from which this journey is different.
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
     * Gets as extraJourney
     *
     * Whether this journey is an addition to the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: the journey is not an addition.
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
     * Whether this journey is an addition to the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: the journey is not an addition.
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
     * Whether this journey is a deletion of a journey in the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: Journey is not a deletion.
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
     * Whether this journey is a deletion of a journey in the plan. Can only be used when both participants recognise the same schedule version. If omitted, defaults to false: Journey is not a deletion.
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
     * Gets as destinationDisplay
     *
     * Description of the destination stop (vehicle signage) to show on vehicle, Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDestinationDisplay()
    {
        return $this->destinationDisplay;
    }

    /**
     * Sets a new destinationDisplay
     *
     * Description of the destination stop (vehicle signage) to show on vehicle, Can be overwritten for a journey, and then also section by section by the entry in an Individual Call.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay
     * @return self
     */
    public function setDestinationDisplay(\Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay)
    {
        $this->destinationDisplay = $destinationDisplay;
        return $this;
    }

    /**
     * Gets as lineNote
     *
     * Additional Text associated with line.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getLineNote()
    {
        return $this->lineNote;
    }

    /**
     * Sets a new lineNote
     *
     * Additional Text associated with line.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $lineNote
     * @return self
     */
    public function setLineNote(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $lineNote)
    {
        $this->lineNote = $lineNote;
        return $this;
    }

    /**
     * Gets as headwayService
     *
     * Whether this is a Headway Service, that is, one shown as operating at a prescribed interval rather than to a fixed timetable.
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
     * Whether this is a Headway Service, that is, one shown as operating at a prescribed interval rather than to a fixed timetable.
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
     * Gets as monitored
     *
     * Whether vehicle journeys of line are normally monitored. Provides a default value for the Monitored element on individual journeys of the timetable.
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
     * Whether vehicle journeys of line are normally monitored. Provides a default value for the Monitored element on individual journeys of the timetable.
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
     * Adds as datedCall
     *
     * Complete sequence of stops along the route path, in calling order.
     *
     * @return self
     * @param \Calcinai\Siri\DatedCall $datedCall
     */
    public function addToDatedCalls(\Calcinai\Siri\DatedCall $datedCall)
    {
        $this->datedCalls[] = $datedCall;
        return $this;
    }

    /**
     * isset datedCalls
     *
     * Complete sequence of stops along the route path, in calling order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatedCalls($index)
    {
        return isset($this->datedCalls[$index]);
    }

    /**
     * unset datedCalls
     *
     * Complete sequence of stops along the route path, in calling order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatedCalls($index)
    {
        unset($this->datedCalls[$index]);
    }

    /**
     * Gets as datedCalls
     *
     * Complete sequence of stops along the route path, in calling order.
     *
     * @return \Calcinai\Siri\DatedCall[]
     */
    public function getDatedCalls()
    {
        return $this->datedCalls;
    }

    /**
     * Sets a new datedCalls
     *
     * Complete sequence of stops along the route path, in calling order.
     *
     * @param \Calcinai\Siri\DatedCall[] $datedCalls
     * @return self
     */
    public function setDatedCalls(array $datedCalls)
    {
        $this->datedCalls = $datedCalls;
        return $this;
    }

    /**
     * Gets as datedCall
     *
     * @return \Calcinai\Siri\DatedCall
     */
    public function getDatedCall()
    {
        return $this->datedCall;
    }

    /**
     * Sets a new datedCall
     *
     * @param \Calcinai\Siri\DatedCall $datedCall
     * @return self
     */
    public function setDatedCall(\Calcinai\Siri\DatedCall $datedCall)
    {
        $this->datedCall = $datedCall;
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

