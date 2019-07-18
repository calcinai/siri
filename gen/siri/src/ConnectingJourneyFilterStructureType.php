<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectingJourneyFilterStructureType
 *
 * Type for filter for conencting journeys
 * XSD Type: ConnectingJourneyFilterStructure
 */
class ConnectingJourneyFilterStructureType
{

    /**
     * A reference to a dated vehicle journey.
     *
     * @property string $datedVehicleJourneyRef
     */
    private $datedVehicleJourneyRef = null;

    /**
     * @property int $visitNumber
     */
    private $visitNumber = null;

    /**
     * Timetabled Arrival time at the connection point.
     *
     * @property \DateTime $timetabledArrivalTime
     */
    private $timetabledArrivalTime = null;

    /**
     * Gets as datedVehicleJourneyRef
     *
     * A reference to a dated vehicle journey.
     *
     * @return string
     */
    public function getDatedVehicleJourneyRef()
    {
        return $this->datedVehicleJourneyRef;
    }

    /**
     * Sets a new datedVehicleJourneyRef
     *
     * A reference to a dated vehicle journey.
     *
     * @param string $datedVehicleJourneyRef
     * @return self
     */
    public function setDatedVehicleJourneyRef($datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef = $datedVehicleJourneyRef;
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
     * Gets as timetabledArrivalTime
     *
     * Timetabled Arrival time at the connection point.
     *
     * @return \DateTime
     */
    public function getTimetabledArrivalTime()
    {
        return $this->timetabledArrivalTime;
    }

    /**
     * Sets a new timetabledArrivalTime
     *
     * Timetabled Arrival time at the connection point.
     *
     * @param \DateTime $timetabledArrivalTime
     * @return self
     */
    public function setTimetabledArrivalTime(\DateTime $timetabledArrivalTime)
    {
        $this->timetabledArrivalTime = $timetabledArrivalTime;
        return $this;
    }


}

