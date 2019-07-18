<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopTimetableDeliveriesStructureType
 *
 * Type for stop timetable deliveries. Used in WSDL.
 * XSD Type: StopTimetableDeliveriesStructure
 */
class StopTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery
     */
    private $stopTimetableDelivery = null;

    /**
     * Gets as stopTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\StopTimetableDelivery
     */
    public function getStopTimetableDelivery()
    {
        return $this->stopTimetableDelivery;
    }

    /**
     * Sets a new stopTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery
     * @return self
     */
    public function setStopTimetableDelivery(\Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery)
    {
        $this->stopTimetableDelivery = $stopTimetableDelivery;
        return $this;
    }


}

