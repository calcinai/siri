<?php

namespace Calcinai\Siri;

/**
 * Class representing SiriServiceDeliveryStructureType
 *
 * Type for a SIRI SIRI Functional Service Delivery types.Used for WSDL.
 * XSD Type: SiriServiceDeliveryStructure
 */
class SiriServiceDeliveryStructureType
{

    /**
     * @property \Calcinai\Siri\ProductionTimetableDelivery $productionTimetableDelivery
     */
    private $productionTimetableDelivery = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetableDelivery $estimatedTimetableDelivery
     */
    private $estimatedTimetableDelivery = null;

    /**
     * @property \Calcinai\Siri\StopTimetableDelivery $stopTimetableDelivery
     */
    private $stopTimetableDelivery = null;

    /**
     * Delviery for Stop Event service.
     *
     * @property \Calcinai\Siri\StopMonitoringDelivery $stopMonitoringDelivery
     */
    private $stopMonitoringDelivery = null;

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     */
    private $vehicleMonitoringDelivery = null;

    /**
     * @property \Calcinai\Siri\ConnectionTimetableDelivery $connectionTimetableDelivery
     */
    private $connectionTimetableDelivery = null;

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     */
    private $connectionMonitoringFeederDelivery = null;

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     */
    private $connectionMonitoringDistributorDelivery = null;

    /**
     * Delivery for general Message service.
     *
     * @property \Calcinai\Siri\GeneralMessageDelivery $generalMessageDelivery
     */
    private $generalMessageDelivery = null;

    /**
     * @property \Calcinai\Siri\FacilityMonitoringDelivery $facilityMonitoringDelivery
     */
    private $facilityMonitoringDelivery = null;

    /**
     * @property \Calcinai\Siri\SituationExchangeDelivery $situationExchangeDelivery
     */
    private $situationExchangeDelivery = null;

    /**
     * Gets as productionTimetableDelivery
     *
     * @return \Calcinai\Siri\ProductionTimetableDelivery
     */
    public function getProductionTimetableDelivery()
    {
        return $this->productionTimetableDelivery;
    }

    /**
     * Sets a new productionTimetableDelivery
     *
     * @param \Calcinai\Siri\ProductionTimetableDelivery $productionTimetableDelivery
     * @return self
     */
    public function setProductionTimetableDelivery(\Calcinai\Siri\ProductionTimetableDelivery $productionTimetableDelivery)
    {
        $this->productionTimetableDelivery = $productionTimetableDelivery;
        return $this;
    }

    /**
     * Gets as estimatedTimetableDelivery
     *
     * @return \Calcinai\Siri\EstimatedTimetableDelivery
     */
    public function getEstimatedTimetableDelivery()
    {
        return $this->estimatedTimetableDelivery;
    }

    /**
     * Sets a new estimatedTimetableDelivery
     *
     * @param \Calcinai\Siri\EstimatedTimetableDelivery $estimatedTimetableDelivery
     * @return self
     */
    public function setEstimatedTimetableDelivery(\Calcinai\Siri\EstimatedTimetableDelivery $estimatedTimetableDelivery)
    {
        $this->estimatedTimetableDelivery = $estimatedTimetableDelivery;
        return $this;
    }

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

    /**
     * Gets as stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @return \Calcinai\Siri\StopMonitoringDelivery
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
     * @param \Calcinai\Siri\StopMonitoringDelivery $stopMonitoringDelivery
     * @return self
     */
    public function setStopMonitoringDelivery(\Calcinai\Siri\StopMonitoringDelivery $stopMonitoringDelivery)
    {
        $this->stopMonitoringDelivery = $stopMonitoringDelivery;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return \Calcinai\Siri\VehicleMonitoringDelivery
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
     * @param \Calcinai\Siri\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     * @return self
     */
    public function setVehicleMonitoringDelivery(\Calcinai\Siri\VehicleMonitoringDelivery $vehicleMonitoringDelivery)
    {
        $this->vehicleMonitoringDelivery = $vehicleMonitoringDelivery;
        return $this;
    }

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

    /**
     * Gets as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\ConnectionMonitoringFeederDelivery
     */
    public function getConnectionMonitoringFeederDelivery()
    {
        return $this->connectionMonitoringFeederDelivery;
    }

    /**
     * Sets a new connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param \Calcinai\Siri\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     * @return self
     */
    public function setConnectionMonitoringFeederDelivery(\Calcinai\Siri\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * Gets as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\ConnectionMonitoringDistributorDelivery
     */
    public function getConnectionMonitoringDistributorDelivery()
    {
        return $this->connectionMonitoringDistributorDelivery;
    }

    /**
     * Sets a new connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param \Calcinai\Siri\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     * @return self
     */
    public function setConnectionMonitoringDistributorDelivery(\Calcinai\Siri\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery = $connectionMonitoringDistributorDelivery;
        return $this;
    }

    /**
     * Gets as generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @return \Calcinai\Siri\GeneralMessageDelivery
     */
    public function getGeneralMessageDelivery()
    {
        return $this->generalMessageDelivery;
    }

    /**
     * Sets a new generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @param \Calcinai\Siri\GeneralMessageDelivery $generalMessageDelivery
     * @return self
     */
    public function setGeneralMessageDelivery(\Calcinai\Siri\GeneralMessageDelivery $generalMessageDelivery)
    {
        $this->generalMessageDelivery = $generalMessageDelivery;
        return $this;
    }

    /**
     * Gets as facilityMonitoringDelivery
     *
     * @return \Calcinai\Siri\FacilityMonitoringDelivery
     */
    public function getFacilityMonitoringDelivery()
    {
        return $this->facilityMonitoringDelivery;
    }

    /**
     * Sets a new facilityMonitoringDelivery
     *
     * @param \Calcinai\Siri\FacilityMonitoringDelivery $facilityMonitoringDelivery
     * @return self
     */
    public function setFacilityMonitoringDelivery(\Calcinai\Siri\FacilityMonitoringDelivery $facilityMonitoringDelivery)
    {
        $this->facilityMonitoringDelivery = $facilityMonitoringDelivery;
        return $this;
    }

    /**
     * Gets as situationExchangeDelivery
     *
     * @return \Calcinai\Siri\SituationExchangeDelivery
     */
    public function getSituationExchangeDelivery()
    {
        return $this->situationExchangeDelivery;
    }

    /**
     * Sets a new situationExchangeDelivery
     *
     * @param \Calcinai\Siri\SituationExchangeDelivery $situationExchangeDelivery
     * @return self
     */
    public function setSituationExchangeDelivery(\Calcinai\Siri\SituationExchangeDelivery $situationExchangeDelivery)
    {
        $this->situationExchangeDelivery = $situationExchangeDelivery;
        return $this;
    }


}

