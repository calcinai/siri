<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractMonitoredCallStructureType
 *
 * Type for Abstract Call at stop.
 * XSD Type: AbstractMonitoredCallStructure
 */
class AbstractMonitoredCallStructureType
{

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

