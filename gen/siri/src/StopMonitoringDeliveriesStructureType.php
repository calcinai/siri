<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitoringDeliveriesStructureType
 *
 * Type for Deliveries for Stop Monitoring Service. Used in WSDL.
 * XSD Type: StopMonitoringDeliveriesStructure
 */
class StopMonitoringDeliveriesStructureType
{

    /**
     * Delviery for Stop Event service.
     *
     * @property \Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery
     */
    private $stopMonitoringDelivery = null;

    /**
     * Gets as stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringDelivery
     */
    public function getStopMonitoringDelivery()
    {
        return $this->stopMonitoringDelivery;
    }

    /**
     * Sets a new stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery
     * @return self
     */
    public function setStopMonitoringDelivery(\Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery)
    {
        $this->stopMonitoringDelivery = $stopMonitoringDelivery;
        return $this;
    }


}

