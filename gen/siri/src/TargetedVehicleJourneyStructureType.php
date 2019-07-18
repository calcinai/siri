<?php

namespace Calcinai\Siri;

/**
 * Class representing TargetedVehicleJourneyStructureType
 *
 * Type for a targeted vehicle journey
 * XSD Type: TargetedVehicleJourneyStructure
 */
class TargetedVehicleJourneyStructureType
{

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
     * @property \Calcinai\Siri\TargetedCall $targetedCall
     */
    private $targetedCall = null;

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
     * @return \Calcinai\Siri\FramedVehicleJourneyRefStructureType
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
     * Gets as targetedCall
     *
     * @return \Calcinai\Siri\TargetedCall
     */
    public function getTargetedCall()
    {
        return $this->targetedCall;
    }

    /**
     * Sets a new targetedCall
     *
     * @param \Calcinai\Siri\TargetedCall $targetedCall
     * @return self
     */
    public function setTargetedCall(\Calcinai\Siri\TargetedCall $targetedCall)
    {
        $this->targetedCall = $targetedCall;
        return $this;
    }


}

