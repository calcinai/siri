<?php

namespace Calcinai\Siri;

/**
 * Class representing CapabilitiesRequestStructureType
 *
 * Type for Requests for capabilities of the current system.
 * XSD Type: CapabilitiesRequestStructure
 */
class CapabilitiesRequestStructureType extends RequestStructureType
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest
     */
    private $productionTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest
     */
    private $estimatedTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest
     */
    private $stopTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest
     */
    private $stopMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest
     */
    private $vehicleMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest
     */
    private $connectionTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest
     */
    private $connectionMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest
     */
    private $generalMessageCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest
     */
    private $facilityMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest
     */
    private $situationExchangeCapabilitiesRequest = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as productionTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\ProductionTimetableCapabilitiesRequest
     */
    public function getProductionTimetableCapabilitiesRequest()
    {
        return $this->productionTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new productionTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest
     * @return self
     */
    public function setProductionTimetableCapabilitiesRequest(\Calcinai\Siri\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest)
    {
        $this->productionTimetableCapabilitiesRequest = $productionTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as estimatedTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\EstimatedTimetableCapabilitiesRequest
     */
    public function getEstimatedTimetableCapabilitiesRequest()
    {
        return $this->estimatedTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new estimatedTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest
     * @return self
     */
    public function setEstimatedTimetableCapabilitiesRequest(\Calcinai\Siri\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest)
    {
        $this->estimatedTimetableCapabilitiesRequest = $estimatedTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\StopTimetableCapabilitiesRequest
     */
    public function getStopTimetableCapabilitiesRequest()
    {
        return $this->stopTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new stopTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest
     * @return self
     */
    public function setStopTimetableCapabilitiesRequest(\Calcinai\Siri\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest)
    {
        $this->stopTimetableCapabilitiesRequest = $stopTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\StopMonitoringCapabilitiesRequest
     */
    public function getStopMonitoringCapabilitiesRequest()
    {
        return $this->stopMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new stopMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest
     * @return self
     */
    public function setStopMonitoringCapabilitiesRequest(\Calcinai\Siri\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest)
    {
        $this->stopMonitoringCapabilitiesRequest = $stopMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\VehicleMonitoringCapabilitiesRequest
     */
    public function getVehicleMonitoringCapabilitiesRequest()
    {
        return $this->vehicleMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new vehicleMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest
     * @return self
     */
    public function setVehicleMonitoringCapabilitiesRequest(\Calcinai\Siri\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest)
    {
        $this->vehicleMonitoringCapabilitiesRequest = $vehicleMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as connectionTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\ConnectionTimetableCapabilitiesRequest
     */
    public function getConnectionTimetableCapabilitiesRequest()
    {
        return $this->connectionTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new connectionTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest
     * @return self
     */
    public function setConnectionTimetableCapabilitiesRequest(\Calcinai\Siri\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest)
    {
        $this->connectionTimetableCapabilitiesRequest = $connectionTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as connectionMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\ConnectionMonitoringCapabilitiesRequest
     */
    public function getConnectionMonitoringCapabilitiesRequest()
    {
        return $this->connectionMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new connectionMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest
     * @return self
     */
    public function setConnectionMonitoringCapabilitiesRequest(\Calcinai\Siri\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest)
    {
        $this->connectionMonitoringCapabilitiesRequest = $connectionMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as generalMessageCapabilitiesRequest
     *
     * @return \Calcinai\Siri\GeneralMessageCapabilitiesRequest
     */
    public function getGeneralMessageCapabilitiesRequest()
    {
        return $this->generalMessageCapabilitiesRequest;
    }

    /**
     * Sets a new generalMessageCapabilitiesRequest
     *
     * @param \Calcinai\Siri\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest
     * @return self
     */
    public function setGeneralMessageCapabilitiesRequest(\Calcinai\Siri\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest)
    {
        $this->generalMessageCapabilitiesRequest = $generalMessageCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as facilityMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\FacilityMonitoringCapabilitiesRequest
     */
    public function getFacilityMonitoringCapabilitiesRequest()
    {
        return $this->facilityMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new facilityMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest
     * @return self
     */
    public function setFacilityMonitoringCapabilitiesRequest(\Calcinai\Siri\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest)
    {
        $this->facilityMonitoringCapabilitiesRequest = $facilityMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as situationExchangeCapabilitiesRequest
     *
     * @return \Calcinai\Siri\SituationExchangeCapabilitiesRequest
     */
    public function getSituationExchangeCapabilitiesRequest()
    {
        return $this->situationExchangeCapabilitiesRequest;
    }

    /**
     * Sets a new situationExchangeCapabilitiesRequest
     *
     * @param \Calcinai\Siri\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest
     * @return self
     */
    public function setSituationExchangeCapabilitiesRequest(\Calcinai\Siri\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest)
    {
        $this->situationExchangeCapabilitiesRequest = $situationExchangeCapabilitiesRequest;
        return $this;
    }


}

