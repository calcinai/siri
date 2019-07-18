<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing MonitoredFeederArrivalStructureType
 *
 * Type for Real time connection at a stop.
 * XSD Type: MonitoredFeederArrivalStructure
 */
class MonitoredFeederArrivalStructureType extends AbstractFeederItemStructureType
{

    /**
     * Direct Cleardown identifier of connection arrival Activity that is being deleted.
     *
     * @property string $clearDownRef
     */
    private $clearDownRef = null;

    /**
     * Information about the feeder journey.
     *
     * @property \Calcinai\Siri\Objects\InterchangeJourneyStructureType $feederJourney
     */
    private $feederJourney = null;

    /**
     * @property bool $vehicleAtStop
     */
    private $vehicleAtStop = null;

    /**
     * Number of passengers who wish to transfer at the connection. If absent, not known.
     *
     * @property int $numberOfTransferPassengers
     */
    private $numberOfTransferPassengers = null;

    /**
     * Predicted Arrival Time at the connection zone.
     *
     * @property \DateTime $expectedArrivalTime
     */
    private $expectedArrivalTime = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as clearDownRef
     *
     * Direct Cleardown identifier of connection arrival Activity that is being deleted.
     *
     * @return string
     */
    public function getClearDownRef()
    {
        return $this->clearDownRef;
    }

    /**
     * Sets a new clearDownRef
     *
     * Direct Cleardown identifier of connection arrival Activity that is being deleted.
     *
     * @param string $clearDownRef
     * @return self
     */
    public function setClearDownRef($clearDownRef)
    {
        $this->clearDownRef = $clearDownRef;
        return $this;
    }

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
     * Gets as vehicleAtStop
     *
     * @return bool
     */
    public function getVehicleAtStop()
    {
        return $this->vehicleAtStop;
    }

    /**
     * Sets a new vehicleAtStop
     *
     * @param bool $vehicleAtStop
     * @return self
     */
    public function setVehicleAtStop($vehicleAtStop)
    {
        $this->vehicleAtStop = $vehicleAtStop;
        return $this;
    }

    /**
     * Gets as numberOfTransferPassengers
     *
     * Number of passengers who wish to transfer at the connection. If absent, not known.
     *
     * @return int
     */
    public function getNumberOfTransferPassengers()
    {
        return $this->numberOfTransferPassengers;
    }

    /**
     * Sets a new numberOfTransferPassengers
     *
     * Number of passengers who wish to transfer at the connection. If absent, not known.
     *
     * @param int $numberOfTransferPassengers
     * @return self
     */
    public function setNumberOfTransferPassengers($numberOfTransferPassengers)
    {
        $this->numberOfTransferPassengers = $numberOfTransferPassengers;
        return $this;
    }

    /**
     * Gets as expectedArrivalTime
     *
     * Predicted Arrival Time at the connection zone.
     *
     * @return \DateTime
     */
    public function getExpectedArrivalTime()
    {
        return $this->expectedArrivalTime;
    }

    /**
     * Sets a new expectedArrivalTime
     *
     * Predicted Arrival Time at the connection zone.
     *
     * @param \DateTime $expectedArrivalTime
     * @return self
     */
    public function setExpectedArrivalTime(\DateTime $expectedArrivalTime)
    {
        $this->expectedArrivalTime = $expectedArrivalTime;
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

