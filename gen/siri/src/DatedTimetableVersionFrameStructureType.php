<?php

namespace Calcinai\Siri;

/**
 * Class representing DatedTimetableVersionFrameStructureType
 *
 * Type for Production Timetable of a line.
 * XSD Type: DatedTimetableVersionFrameStructure
 */
class DatedTimetableVersionFrameStructureType extends AbstractItemStructureType
{

    /**
     * Timetable Version.
     *
     * @property string $versionRef
     */
    private $versionRef = null;

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
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @property \Calcinai\Siri\DatedVehicleJourneyStructureType[] $datedVehicleJourney
     */
    private $datedVehicleJourney = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as versionRef
     *
     * Timetable Version.
     *
     * @return string
     */
    public function getVersionRef()
    {
        return $this->versionRef;
    }

    /**
     * Sets a new versionRef
     *
     * Timetable Version.
     *
     * @param string $versionRef
     * @return self
     */
    public function setVersionRef($versionRef)
    {
        $this->versionRef = $versionRef;
        return $this;
    }

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
     * Adds as datedVehicleJourney
     *
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @return self
     * @param \Calcinai\Siri\DatedVehicleJourneyStructureType $datedVehicleJourney
     */
    public function addToDatedVehicleJourney(\Calcinai\Siri\DatedVehicleJourneyStructureType $datedVehicleJourney)
    {
        $this->datedVehicleJourney[] = $datedVehicleJourney;
        return $this;
    }

    /**
     * isset datedVehicleJourney
     *
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatedVehicleJourney($index)
    {
        return isset($this->datedVehicleJourney[$index]);
    }

    /**
     * unset datedVehicleJourney
     *
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatedVehicleJourney($index)
    {
        unset($this->datedVehicleJourney[$index]);
    }

    /**
     * Gets as datedVehicleJourney
     *
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @return \Calcinai\Siri\DatedVehicleJourneyStructureType[]
     */
    public function getDatedVehicleJourney()
    {
        return $this->datedVehicleJourney;
    }

    /**
     * Sets a new datedVehicleJourney
     *
     * Complete list of all planned vehicle journeys for this line and direction.
     *
     * @param \Calcinai\Siri\DatedVehicleJourneyStructureType[] $datedVehicleJourney
     * @return self
     */
    public function setDatedVehicleJourney(array $datedVehicleJourney)
    {
        $this->datedVehicleJourney = $datedVehicleJourney;
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

