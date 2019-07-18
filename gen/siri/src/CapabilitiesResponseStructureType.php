<?php

namespace Calcinai\Siri;

/**
 * Class representing CapabilitiesResponseStructureType
 *
 * Type for the capabilities of an implementation.
 * XSD Type: CapabilitiesResponseStructure
 */
class CapabilitiesResponseStructureType extends ProducerResponseStructureType
{

    /**
     * @property \Calcinai\Siri\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse
     */
    private $productionTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse
     */
    private $estimatedTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse
     */
    private $stopTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse
     */
    private $stopMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse
     */
    private $vehicleMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse
     */
    private $connectionTimetableCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse
     */
    private $connectionMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse
     */
    private $generalMessageCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse
     */
    private $facilityMonitoringCapabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     */
    private $situationExchangeServiceCapabilities = null;

    /**
     * Gets as productionTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\ProductionTimetableCapabilitiesResponse
     */
    public function getProductionTimetableCapabilitiesResponse()
    {
        return $this->productionTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new productionTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse
     * @return self
     */
    public function setProductionTimetableCapabilitiesResponse(\Calcinai\Siri\ProductionTimetableCapabilitiesResponse $productionTimetableCapabilitiesResponse)
    {
        $this->productionTimetableCapabilitiesResponse = $productionTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as estimatedTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\EstimatedTimetableCapabilitiesResponse
     */
    public function getEstimatedTimetableCapabilitiesResponse()
    {
        return $this->estimatedTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new estimatedTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse
     * @return self
     */
    public function setEstimatedTimetableCapabilitiesResponse(\Calcinai\Siri\EstimatedTimetableCapabilitiesResponse $estimatedTimetableCapabilitiesResponse)
    {
        $this->estimatedTimetableCapabilitiesResponse = $estimatedTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\StopTimetableCapabilitiesResponse
     */
    public function getStopTimetableCapabilitiesResponse()
    {
        return $this->stopTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new stopTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse
     * @return self
     */
    public function setStopTimetableCapabilitiesResponse(\Calcinai\Siri\StopTimetableCapabilitiesResponse $stopTimetableCapabilitiesResponse)
    {
        $this->stopTimetableCapabilitiesResponse = $stopTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\StopMonitoringCapabilitiesResponse
     */
    public function getStopMonitoringCapabilitiesResponse()
    {
        return $this->stopMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new stopMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse
     * @return self
     */
    public function setStopMonitoringCapabilitiesResponse(\Calcinai\Siri\StopMonitoringCapabilitiesResponse $stopMonitoringCapabilitiesResponse)
    {
        $this->stopMonitoringCapabilitiesResponse = $stopMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\VehicleMonitoringCapabilitiesResponse
     */
    public function getVehicleMonitoringCapabilitiesResponse()
    {
        return $this->vehicleMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new vehicleMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse
     * @return self
     */
    public function setVehicleMonitoringCapabilitiesResponse(\Calcinai\Siri\VehicleMonitoringCapabilitiesResponse $vehicleMonitoringCapabilitiesResponse)
    {
        $this->vehicleMonitoringCapabilitiesResponse = $vehicleMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as connectionTimetableCapabilitiesResponse
     *
     * @return \Calcinai\Siri\ConnectionTimetableCapabilitiesResponse
     */
    public function getConnectionTimetableCapabilitiesResponse()
    {
        return $this->connectionTimetableCapabilitiesResponse;
    }

    /**
     * Sets a new connectionTimetableCapabilitiesResponse
     *
     * @param \Calcinai\Siri\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse
     * @return self
     */
    public function setConnectionTimetableCapabilitiesResponse(\Calcinai\Siri\ConnectionTimetableCapabilitiesResponse $connectionTimetableCapabilitiesResponse)
    {
        $this->connectionTimetableCapabilitiesResponse = $connectionTimetableCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as connectionMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\ConnectionMonitoringCapabilitiesResponse
     */
    public function getConnectionMonitoringCapabilitiesResponse()
    {
        return $this->connectionMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new connectionMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse
     * @return self
     */
    public function setConnectionMonitoringCapabilitiesResponse(\Calcinai\Siri\ConnectionMonitoringCapabilitiesResponse $connectionMonitoringCapabilitiesResponse)
    {
        $this->connectionMonitoringCapabilitiesResponse = $connectionMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as generalMessageCapabilitiesResponse
     *
     * @return \Calcinai\Siri\GeneralMessageCapabilitiesResponse
     */
    public function getGeneralMessageCapabilitiesResponse()
    {
        return $this->generalMessageCapabilitiesResponse;
    }

    /**
     * Sets a new generalMessageCapabilitiesResponse
     *
     * @param \Calcinai\Siri\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse
     * @return self
     */
    public function setGeneralMessageCapabilitiesResponse(\Calcinai\Siri\GeneralMessageCapabilitiesResponse $generalMessageCapabilitiesResponse)
    {
        $this->generalMessageCapabilitiesResponse = $generalMessageCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as facilityMonitoringCapabilitiesResponse
     *
     * @return \Calcinai\Siri\FacilityMonitoringCapabilitiesResponse
     */
    public function getFacilityMonitoringCapabilitiesResponse()
    {
        return $this->facilityMonitoringCapabilitiesResponse;
    }

    /**
     * Sets a new facilityMonitoringCapabilitiesResponse
     *
     * @param \Calcinai\Siri\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse
     * @return self
     */
    public function setFacilityMonitoringCapabilitiesResponse(\Calcinai\Siri\FacilityMonitoringCapabilitiesResponse $facilityMonitoringCapabilitiesResponse)
    {
        $this->facilityMonitoringCapabilitiesResponse = $facilityMonitoringCapabilitiesResponse;
        return $this;
    }

    /**
     * Gets as situationExchangeServiceCapabilities
     *
     * @return \Calcinai\Siri\SituationExchangeServiceCapabilities
     */
    public function getSituationExchangeServiceCapabilities()
    {
        return $this->situationExchangeServiceCapabilities;
    }

    /**
     * Sets a new situationExchangeServiceCapabilities
     *
     * @param \Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     * @return self
     */
    public function setSituationExchangeServiceCapabilities(\Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities)
    {
        $this->situationExchangeServiceCapabilities = $situationExchangeServiceCapabilities;
        return $this;
    }


}

