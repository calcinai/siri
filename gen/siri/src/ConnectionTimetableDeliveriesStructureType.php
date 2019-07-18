<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionTimetableDeliveriesStructureType
 *
 * Type for Deliveries for Connection Timetable Service. Used in WSDL
 * XSD Type: ConnectionTimetableDeliveriesStructure
 */
class ConnectionTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery
     */
    private $connectionTimetableDelivery = null;

    /**
     * Gets as connectionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableDelivery
     */
    public function getConnectionTimetableDelivery()
    {
        return $this->connectionTimetableDelivery;
    }

    /**
     * Sets a new connectionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery
     * @return self
     */
    public function setConnectionTimetableDelivery(\Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery)
    {
        $this->connectionTimetableDelivery = $connectionTimetableDelivery;
        return $this;
    }


}

