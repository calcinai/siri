<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityMonitoringDeliveriesStructureType
 *
 * Type for Deliveries for vehicle monitoring services Used in WSDL.
 * XSD Type: FacilityMonitoringDeliveriesStructure
 */
class FacilityMonitoringDeliveriesStructureType
{

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery
     */
    private $facilityMonitoringDelivery = null;

    /**
     * Gets as facilityMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringDelivery
     */
    public function getFacilityMonitoringDelivery()
    {
        return $this->facilityMonitoringDelivery;
    }

    /**
     * Sets a new facilityMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery
     * @return self
     */
    public function setFacilityMonitoringDelivery(\Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery)
    {
        $this->facilityMonitoringDelivery = $facilityMonitoringDelivery;
        return $this;
    }


}

