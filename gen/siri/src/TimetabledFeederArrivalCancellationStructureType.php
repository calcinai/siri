<?php

namespace Calcinai\Siri;

/**
 * Class representing TimetabledFeederArrivalCancellationStructureType
 *
 * Type for Timetabled Deletion of a feeder connection.
 * XSD Type: TimetabledFeederArrivalCancellationStructure
 */
class TimetabledFeederArrivalCancellationStructureType extends AbstractReferencingItemStructureType
{

    /**
     * Identifies the Interchange between two journeys for which data is being returned.
     *
     * @property string $interchangeRef
     */
    private $interchangeRef = null;

    /**
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned. A reference associated with known feeder arrival and distributor departure stop points.
     *
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property int $visitNumber
     */
    private $visitNumber = null;

    /**
     * @property int $order
     */
    private $order = null;

    /**
     * @property \Calcinai\Siri\StopPointName $stopPointName
     */
    private $stopPointName = null;

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
     * Reference to a Vehicle journey.
     *
     * @property \Calcinai\Siri\FramedVehicleJourneyRefStructureType $vehicleJourneyRef
     */
    private $vehicleJourneyRef = null;

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
     * Reason for deletion.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $reason
     */
    private $reason = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as interchangeRef
     *
     * Identifies the Interchange between two journeys for which data is being returned.
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
     * Identifies the Interchange between two journeys for which data is being returned.
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
     * Gets as connectionLinkRef
     *
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned. A reference associated with known feeder arrival and distributor departure stop points.
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
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned. A reference associated with known feeder arrival and distributor departure stop points.
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
     * Gets as visitNumber
     *
     * @return int
     */
    public function getVisitNumber()
    {
        return $this->visitNumber;
    }

    /**
     * Sets a new visitNumber
     *
     * @param int $visitNumber
     * @return self
     */
    public function setVisitNumber($visitNumber)
    {
        $this->visitNumber = $visitNumber;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as stopPointName
     *
     * @return \Calcinai\Siri\StopPointName
     */
    public function getStopPointName()
    {
        return $this->stopPointName;
    }

    /**
     * Sets a new stopPointName
     *
     * @param \Calcinai\Siri\StopPointName $stopPointName
     * @return self
     */
    public function setStopPointName(\Calcinai\Siri\StopPointName $stopPointName)
    {
        $this->stopPointName = $stopPointName;
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
     * Gets as vehicleJourneyRef
     *
     * Reference to a Vehicle journey.
     *
     * @return \Calcinai\Siri\FramedVehicleJourneyRefStructureType
     */
    public function getVehicleJourneyRef()
    {
        return $this->vehicleJourneyRef;
    }

    /**
     * Sets a new vehicleJourneyRef
     *
     * Reference to a Vehicle journey.
     *
     * @param \Calcinai\Siri\FramedVehicleJourneyRefStructureType $vehicleJourneyRef
     * @return self
     */
    public function setVehicleJourneyRef(\Calcinai\Siri\FramedVehicleJourneyRefStructureType $vehicleJourneyRef)
    {
        $this->vehicleJourneyRef = $vehicleJourneyRef;
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
     * Gets as reason
     *
     * Reason for deletion.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Reason for deletion.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $reason
     * @return self
     */
    public function setReason(\Calcinai\Siri\NaturalLanguageStringStructureType $reason)
    {
        $this->reason = $reason;
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

