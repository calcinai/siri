<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractFeederItemStructureType
 *
 * Type for an interchange feeder Activity.
 * XSD Type: AbstractFeederItemStructure
 */
class AbstractFeederItemStructureType extends AbstractIdentifiedItemStructureType
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
     * @property \Calcinai\Siri\Objects\StopPointName $stopPointName
     */
    private $stopPointName = null;

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
     * @return \Calcinai\Siri\Objects\StopPointName
     */
    public function getStopPointName()
    {
        return $this->stopPointName;
    }

    /**
     * Sets a new stopPointName
     *
     * @param \Calcinai\Siri\Objects\StopPointName $stopPointName
     * @return self
     */
    public function setStopPointName(\Calcinai\Siri\Objects\StopPointName $stopPointName)
    {
        $this->stopPointName = $stopPointName;
        return $this;
    }


}

