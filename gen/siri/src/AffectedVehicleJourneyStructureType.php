<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedVehicleJourneyStructureType
 *
 * Type for information about a vehicle journey affected by an Situation
 * XSD Type: AffectedVehicleJourneyStructure
 */
class AffectedVehicleJourneyStructureType
{

    /**
     * Identifier of a service vehicle journey.
     *
     * @property string[] $vehicleJourneyRef
     */
    private $vehicleJourneyRef = [
        
    ];

    /**
     * Identifier of a specific vehicle journey.
     *
     * @property string[] $datedVehicleJourneyRef
     */
    private $datedVehicleJourneyRef = [
        
    ];

    /**
     * Name of journey
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $journeyName
     */
    private $journeyName = null;

    /**
     * Operator of affected line.
     *
     * @property \Calcinai\Siri\Objects\AffectedOperatorStructureType $operator
     */
    private $operator = null;

    /**
     * Identfier of the Line the journey runs.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishedLineName $publishedLineName
     */
    private $publishedLineName = null;

    /**
     * Direction on line win which journey runs Reference.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $origins
     */
    private $origins = [
        
    ];

    /**
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $destinations
     */
    private $destinations = [
        
    ];

    /**
     * Route
     *
     * @property \Calcinai\Siri\Objects\AffectedRouteStructureType[] $route
     */
    private $route = [
        
    ];

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
     * @property \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     */
    private $accessibilityAssessment = null;

    /**
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @property \Calcinai\Siri\Objects\AffectedCallStructureType[] $calls
     */
    private $calls = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as vehicleJourneyRef
     *
     * Identifier of a service vehicle journey.
     *
     * @return self
     * @param string $vehicleJourneyRef
     */
    public function addToVehicleJourneyRef($vehicleJourneyRef)
    {
        $this->vehicleJourneyRef[] = $vehicleJourneyRef;
        return $this;
    }

    /**
     * isset vehicleJourneyRef
     *
     * Identifier of a service vehicle journey.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleJourneyRef($index)
    {
        return isset($this->vehicleJourneyRef[$index]);
    }

    /**
     * unset vehicleJourneyRef
     *
     * Identifier of a service vehicle journey.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleJourneyRef($index)
    {
        unset($this->vehicleJourneyRef[$index]);
    }

    /**
     * Gets as vehicleJourneyRef
     *
     * Identifier of a service vehicle journey.
     *
     * @return string[]
     */
    public function getVehicleJourneyRef()
    {
        return $this->vehicleJourneyRef;
    }

    /**
     * Sets a new vehicleJourneyRef
     *
     * Identifier of a service vehicle journey.
     *
     * @param string $vehicleJourneyRef
     * @return self
     */
    public function setVehicleJourneyRef(array $vehicleJourneyRef)
    {
        $this->vehicleJourneyRef = $vehicleJourneyRef;
        return $this;
    }

    /**
     * Adds as datedVehicleJourneyRef
     *
     * Identifier of a specific vehicle journey.
     *
     * @return self
     * @param string $datedVehicleJourneyRef
     */
    public function addToDatedVehicleJourneyRef($datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef[] = $datedVehicleJourneyRef;
        return $this;
    }

    /**
     * isset datedVehicleJourneyRef
     *
     * Identifier of a specific vehicle journey.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatedVehicleJourneyRef($index)
    {
        return isset($this->datedVehicleJourneyRef[$index]);
    }

    /**
     * unset datedVehicleJourneyRef
     *
     * Identifier of a specific vehicle journey.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatedVehicleJourneyRef($index)
    {
        unset($this->datedVehicleJourneyRef[$index]);
    }

    /**
     * Gets as datedVehicleJourneyRef
     *
     * Identifier of a specific vehicle journey.
     *
     * @return string[]
     */
    public function getDatedVehicleJourneyRef()
    {
        return $this->datedVehicleJourneyRef;
    }

    /**
     * Sets a new datedVehicleJourneyRef
     *
     * Identifier of a specific vehicle journey.
     *
     * @param string $datedVehicleJourneyRef
     * @return self
     */
    public function setDatedVehicleJourneyRef(array $datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef = $datedVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as journeyName
     *
     * Name of journey
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getJourneyName()
    {
        return $this->journeyName;
    }

    /**
     * Sets a new journeyName
     *
     * Name of journey
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $journeyName
     * @return self
     */
    public function setJourneyName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $journeyName)
    {
        $this->journeyName = $journeyName;
        return $this;
    }

    /**
     * Gets as operator
     *
     * Operator of affected line.
     *
     * @return \Calcinai\Siri\Objects\AffectedOperatorStructureType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * Operator of affected line.
     *
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType $operator
     * @return self
     */
    public function setOperator(\Calcinai\Siri\Objects\AffectedOperatorStructureType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Identfier of the Line the journey runs.
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
     * Identfier of the Line the journey runs.
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
     * Gets as directionRef
     *
     * Direction on line win which journey runs Reference.
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
     * Direction on line win which journey runs Reference.
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
     * Adds as origins
     *
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType $origins
     */
    public function addToOrigins(\Calcinai\Siri\Objects\AffectedStopPointStructureType $origins)
    {
        $this->origins[] = $origins;
        return $this;
    }

    /**
     * isset origins
     *
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrigins($index)
    {
        return isset($this->origins[$index]);
    }

    /**
     * unset origins
     *
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrigins($index)
    {
        unset($this->origins[$index]);
    }

    /**
     * Gets as origins
     *
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPointStructureType[]
     */
    public function getOrigins()
    {
        return $this->origins;
    }

    /**
     * Sets a new origins
     *
     * Origins from which the line runs. [equivalent to pti15 1 start_point route_description_type]
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $origins
     * @return self
     */
    public function setOrigins(array $origins)
    {
        $this->origins = $origins;
        return $this;
    }

    /**
     * Adds as destinations
     *
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType $destinations
     */
    public function addToDestinations(\Calcinai\Siri\Objects\AffectedStopPointStructureType $destinations)
    {
        $this->destinations[] = $destinations;
        return $this;
    }

    /**
     * isset destinations
     *
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinations($index)
    {
        return isset($this->destinations[$index]);
    }

    /**
     * unset destinations
     *
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinations($index)
    {
        unset($this->destinations[$index]);
    }

    /**
     * Gets as destinations
     *
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPointStructureType[]
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Sets a new destinations
     *
     * Destinations to which the line runs. [equivalent to pti15 2 destination route_description_type]
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $destinations
     * @return self
     */
    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;
        return $this;
    }

    /**
     * Adds as route
     *
     * Route
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedRouteStructureType $route
     */
    public function addToRoute(\Calcinai\Siri\Objects\AffectedRouteStructureType $route)
    {
        $this->route[] = $route;
        return $this;
    }

    /**
     * isset route
     *
     * Route
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoute($index)
    {
        return isset($this->route[$index]);
    }

    /**
     * unset route
     *
     * Route
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoute($index)
    {
        unset($this->route[$index]);
    }

    /**
     * Gets as route
     *
     * Route
     *
     * @return \Calcinai\Siri\Objects\AffectedRouteStructureType[]
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * Route
     *
     * @param \Calcinai\Siri\Objects\AffectedRouteStructureType[] $route
     * @return self
     */
    public function setRoute(array $route)
    {
        $this->route = $route;
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
     * Gets as accessibilityAssessment
     *
     * @return \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType
     */
    public function getAccessibilityAssessment()
    {
        return $this->accessibilityAssessment;
    }

    /**
     * Sets a new accessibilityAssessment
     *
     * @param \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     * @return self
     */
    public function setAccessibilityAssessment(\Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment)
    {
        $this->accessibilityAssessment = $accessibilityAssessment;
        return $this;
    }

    /**
     * Adds as call
     *
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedCallStructureType $call
     */
    public function addToCalls(\Calcinai\Siri\Objects\AffectedCallStructureType $call)
    {
        $this->calls[] = $call;
        return $this;
    }

    /**
     * isset calls
     *
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalls($index)
    {
        return isset($this->calls[$index]);
    }

    /**
     * unset calls
     *
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalls($index)
    {
        unset($this->calls[$index]);
    }

    /**
     * Gets as calls
     *
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @return \Calcinai\Siri\Objects\AffectedCallStructureType[]
     */
    public function getCalls()
    {
        return $this->calls;
    }

    /**
     * Sets a new calls
     *
     * Service pattern of vehicle journey route. [equivalent to pti15 3 stop, 15_5 not-stoppoing, 15-6 temporraryu stop route_description_type]
     *
     * @param \Calcinai\Siri\Objects\AffectedCallStructureType[] $calls
     * @return self
     */
    public function setCalls(array $calls)
    {
        $this->calls = $calls;
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

