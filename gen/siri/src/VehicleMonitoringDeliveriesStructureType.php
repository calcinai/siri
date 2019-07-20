<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringDeliveriesStructureType
 *
 * Type for Deliveries for vehicle monitoring services Used in WSDL.
 * XSD Type: VehicleMonitoringDeliveriesStructure
 */
class VehicleMonitoringDeliveriesStructureType
{

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     */
    private $vehicleMonitoringDelivery = null;

    /**
     * Gets as vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringDelivery
     */
    public function getVehicleMonitoringDelivery()
    {
        return $this->vehicleMonitoringDelivery;
    }

    /**
     * Sets a new vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     * @return self
     */
    public function setVehicleMonitoringDelivery(\Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery)
    {
        $this->vehicleMonitoringDelivery = $vehicleMonitoringDelivery;
        return $this;
    }


}

