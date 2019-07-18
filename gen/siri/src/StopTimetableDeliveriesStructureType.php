<?php

namespace Calcinai\Siri;

/**
 * Class representing StopTimetableDeliveriesStructureType
 *
 * Type for stop timetable deliveries. Used in WSDL.
 * XSD Type: StopTimetableDeliveriesStructure
 */
class StopTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\StopTimetableDelivery $stopTimetableDelivery
     */
    private $stopTimetableDelivery = null;

    /**
     * Gets as stopTimetableDelivery
     *
     * @return \Calcinai\Siri\StopTimetableDelivery
     */
    public function getStopTimetableDelivery()
    {
        return $this->stopTimetableDelivery;
    }

    /**
     * Sets a new stopTimetableDelivery
     *
     * @param \Calcinai\Siri\StopTimetableDelivery $stopTimetableDelivery
     * @return self
     */
    public function setStopTimetableDelivery(\Calcinai\Siri\StopTimetableDelivery $stopTimetableDelivery)
    {
        $this->stopTimetableDelivery = $stopTimetableDelivery;
        return $this;
    }


}

