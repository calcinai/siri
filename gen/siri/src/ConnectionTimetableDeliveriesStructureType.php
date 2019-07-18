<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionTimetableDeliveriesStructureType
 *
 * Type for Deliveries for Connection Timetable Service. Used in WSDL
 * XSD Type: ConnectionTimetableDeliveriesStructure
 */
class ConnectionTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\ConnectionTimetableDelivery $connectionTimetableDelivery
     */
    private $connectionTimetableDelivery = null;

    /**
     * Gets as connectionTimetableDelivery
     *
     * @return \Calcinai\Siri\ConnectionTimetableDelivery
     */
    public function getConnectionTimetableDelivery()
    {
        return $this->connectionTimetableDelivery;
    }

    /**
     * Sets a new connectionTimetableDelivery
     *
     * @param \Calcinai\Siri\ConnectionTimetableDelivery $connectionTimetableDelivery
     * @return self
     */
    public function setConnectionTimetableDelivery(\Calcinai\Siri\ConnectionTimetableDelivery $connectionTimetableDelivery)
    {
        $this->connectionTimetableDelivery = $connectionTimetableDelivery;
        return $this;
    }


}

