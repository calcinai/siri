<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedTimetableDeliveriesStructureType
 *
 * Data type for Deliveries for Realtime Timetable Service. Used in WSDL.
 * XSD Type: EstimatedTimetableDeliveriesStructure
 */
class EstimatedTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery
     */
    private $estimatedTimetableDelivery = null;

    /**
     * Gets as estimatedTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableDelivery
     */
    public function getEstimatedTimetableDelivery()
    {
        return $this->estimatedTimetableDelivery;
    }

    /**
     * Sets a new estimatedTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery
     * @return self
     */
    public function setEstimatedTimetableDelivery(\Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery)
    {
        $this->estimatedTimetableDelivery = $estimatedTimetableDelivery;
        return $this;
    }


}

