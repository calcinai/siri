<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing DatedVehicleJourneyIndirectRefStructureType
 *
 * Type for Origin and Destination stop of a Vehicle Journey
 * XSD Type: DatedVehicleJourneyIndirectRefStructure
 */
class DatedVehicleJourneyIndirectRefStructureType
{

    /**
     * The origin is used to help identify the vehicle journey.
     *
     * @property string $originRef
     */
    private $originRef = null;

    /**
     * Departure Time at Origin stop.
     *
     * @property \DateTime $aimedDepartureTime
     */
    private $aimedDepartureTime = null;

    /**
     * The destination is used to help identify the vehicle journey.
     *
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * Arrival Time at Destination stop.
     *
     * @property \DateTime $aimedArrivalTime
     */
    private $aimedArrivalTime = null;

    /**
     * Gets as originRef
     *
     * The origin is used to help identify the vehicle journey.
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
     * The origin is used to help identify the vehicle journey.
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
     * Gets as aimedDepartureTime
     *
     * Departure Time at Origin stop.
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
     * Departure Time at Origin stop.
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
     * Gets as destinationRef
     *
     * The destination is used to help identify the vehicle journey.
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
     * The destination is used to help identify the vehicle journey.
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
     * Gets as aimedArrivalTime
     *
     * Arrival Time at Destination stop.
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
     * Arrival Time at Destination stop.
     *
     * @param \DateTime $aimedArrivalTime
     * @return self
     */
    public function setAimedArrivalTime(\DateTime $aimedArrivalTime)
    {
        $this->aimedArrivalTime = $aimedArrivalTime;
        return $this;
    }


}

