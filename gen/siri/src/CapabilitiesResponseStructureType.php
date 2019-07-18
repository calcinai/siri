<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing CapabilitiesResponseStructureType
 *
 * Type for the capabilities of an implementation.
 * XSD Type: CapabilitiesResponseStructure
 */
class CapabilitiesResponseStructureType extends ProducerResponseStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse
     */
    private $productionTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse
     */
    private $estimatedTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse
     */
    private $stopTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse
     */
    private $stopMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse
     */
    private $vehicleMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse
     */
    private $connectionTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse
     */
    private $connectionMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse
     */
    private $generalMessageCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse
     */
    private $facilityMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     */
    private $situationExchangeServiceCapabilities = null;

    /**
     * Gets as productionTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesResponse
     */
    public function getProductionTimetableCapabilitiesResponse()
    {
        return $this->productionTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new productionTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse
     * @return self
     */
    public function setProductionTimetableCapabilitiesResponse(\Calcinai\Siri\Objects\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse)
    {
        $this->productionTimetableCapabilitiesResponse = $productionTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as estimatedTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesResponse
     */
    public function getEstimatedTimetableCapabilitiesResponse()
    {
        return $this->estimatedTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new estimatedTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse
     * @return self
     */
    public function setEstimatedTimetableCapabilitiesResponse(\Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse)
    {
        $this->estimatedTimetableCapabilitiesResponse = $estimatedTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\StopTimetableCapabilitiesResponse
     */
    public function getStopTimetableCapabilitiesResponse()
    {
        return $this->stopTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new stopTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse
     * @return self
     */
    public function setStopTimetableCapabilitiesResponse(\Calcinai\Siri\Objects\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse)
    {
        $this->stopTimetableCapabilitiesResponse = $stopTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringCapabilitiesResponse
     */
    public function getStopMonitoringCapabilitiesResponse()
    {
        return $this->stopMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new stopMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse
     * @return self
     */
    public function setStopMonitoringCapabilitiesResponse(\Calcinai\Siri\Objects\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse)
    {
        $this->stopMonitoringCapabilitiesResponse = $stopMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesResponse
     */
    public function getVehicleMonitoringCapabilitiesResponse()
    {
        return $this->vehicleMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new vehicleMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse
     * @return self
     */
    public function setVehicleMonitoringCapabilitiesResponse(\Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse)
    {
        $this->vehicleMonitoringCapabilitiesResponse = $vehicleMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as connectionTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponse
     */
    public function getConnectionTimetableCapabilitiesResponse()
    {
        return $this->connectionTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new connectionTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse
     * @return self
     */
    public function setConnectionTimetableCapabilitiesResponse(\Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse)
    {
        $this->connectionTimetableCapabilitiesResponse = $connectionTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as connectionMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesResponse
     */
    public function getConnectionMonitoringCapabilitiesResponse()
    {
        return $this->connectionMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new connectionMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse
     * @return self
     */
    public function setConnectionMonitoringCapabilitiesResponse(\Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse)
    {
        $this->connectionMonitoringCapabilitiesResponse = $connectionMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as generalMessageCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageCapabilitiesResponse
     */
    public function getGeneralMessageCapabilitiesResponse()
    {
        return $this->generalMessageCapabilitiesResponse;
    }

    /**
     * Sets a new generalMessageCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse
     * @return self
     */
    public function setGeneralMessageCapabilitiesResponse(\Calcinai\Siri\Objects\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse)
    {
        $this->generalMessageCapabilitiesResponse = $generalMessageCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as facilityMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesResponse
     */
    public function getFacilityMonitoringCapabilitiesResponse()
    {
        return $this->facilityMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new facilityMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse
     * @return self
     */
    public function setFacilityMonitoringCapabilitiesResponse(\Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse)
    {
        $this->facilityMonitoringCapabilitiesResponse = $facilityMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as situationExchangeServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities
     */
    public function getSituationExchangeServiceCapabilities()
    {
        return $this->situationExchangeServiceCapabilities;
    }

    /**
     * Sets a new situationExchangeServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     * @return self
     */
    public function setSituationExchangeServiceCapabilities(\Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities)
    {
        $this->situationExchangeServiceCapabilities = $situationExchangeServiceCapabilities;
        return $this;
    }


}

