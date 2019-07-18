<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest
     */
    private $productionTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest
     */
    private $estimatedTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest
     */
    private $stopTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest
     */
    private $stopMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest
     */
    private $vehicleMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest
     */
    private $connectionTimetableCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest
     */
    private $connectionMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest
     */
    private $generalMessageCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest
     */
    private $facilityMonitoringCapabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest
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
     * @return \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesRequest
     */
    public function getProductionTimetableCapabilitiesRequest()
    {
        return $this->productionTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new productionTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest
     * @return self
     */
    public function setProductionTimetableCapabilitiesRequest(\Calcinai\Siri\Objects\ProductionTimetableCapabilitiesRequest $productionTimetableCapabilitiesRequest)
    {
        $this->productionTimetableCapabilitiesRequest = $productionTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as estimatedTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesRequest
     */
    public function getEstimatedTimetableCapabilitiesRequest()
    {
        return $this->estimatedTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new estimatedTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest
     * @return self
     */
    public function setEstimatedTimetableCapabilitiesRequest(\Calcinai\Siri\Objects\EstimatedTimetableCapabilitiesRequest $estimatedTimetableCapabilitiesRequest)
    {
        $this->estimatedTimetableCapabilitiesRequest = $estimatedTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableCapabilitiesRequest
     */
    public function getStopTimetableCapabilitiesRequest()
    {
        return $this->stopTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new stopTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest
     * @return self
     */
    public function setStopTimetableCapabilitiesRequest(\Calcinai\Siri\Objects\StopTimetableCapabilitiesRequest $stopTimetableCapabilitiesRequest)
    {
        $this->stopTimetableCapabilitiesRequest = $stopTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringCapabilitiesRequest
     */
    public function getStopMonitoringCapabilitiesRequest()
    {
        return $this->stopMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new stopMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest
     * @return self
     */
    public function setStopMonitoringCapabilitiesRequest(\Calcinai\Siri\Objects\StopMonitoringCapabilitiesRequest $stopMonitoringCapabilitiesRequest)
    {
        $this->stopMonitoringCapabilitiesRequest = $stopMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesRequest
     */
    public function getVehicleMonitoringCapabilitiesRequest()
    {
        return $this->vehicleMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new vehicleMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest
     * @return self
     */
    public function setVehicleMonitoringCapabilitiesRequest(\Calcinai\Siri\Objects\VehicleMonitoringCapabilitiesRequest $vehicleMonitoringCapabilitiesRequest)
    {
        $this->vehicleMonitoringCapabilitiesRequest = $vehicleMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as connectionTimetableCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesRequest
     */
    public function getConnectionTimetableCapabilitiesRequest()
    {
        return $this->connectionTimetableCapabilitiesRequest;
    }

    /**
     * Sets a new connectionTimetableCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest
     * @return self
     */
    public function setConnectionTimetableCapabilitiesRequest(\Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesRequest $connectionTimetableCapabilitiesRequest)
    {
        $this->connectionTimetableCapabilitiesRequest = $connectionTimetableCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as connectionMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesRequest
     */
    public function getConnectionMonitoringCapabilitiesRequest()
    {
        return $this->connectionMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new connectionMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest
     * @return self
     */
    public function setConnectionMonitoringCapabilitiesRequest(\Calcinai\Siri\Objects\ConnectionMonitoringCapabilitiesRequest $connectionMonitoringCapabilitiesRequest)
    {
        $this->connectionMonitoringCapabilitiesRequest = $connectionMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as generalMessageCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageCapabilitiesRequest
     */
    public function getGeneralMessageCapabilitiesRequest()
    {
        return $this->generalMessageCapabilitiesRequest;
    }

    /**
     * Sets a new generalMessageCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest
     * @return self
     */
    public function setGeneralMessageCapabilitiesRequest(\Calcinai\Siri\Objects\GeneralMessageCapabilitiesRequest $generalMessageCapabilitiesRequest)
    {
        $this->generalMessageCapabilitiesRequest = $generalMessageCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as facilityMonitoringCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesRequest
     */
    public function getFacilityMonitoringCapabilitiesRequest()
    {
        return $this->facilityMonitoringCapabilitiesRequest;
    }

    /**
     * Sets a new facilityMonitoringCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest
     * @return self
     */
    public function setFacilityMonitoringCapabilitiesRequest(\Calcinai\Siri\Objects\FacilityMonitoringCapabilitiesRequest $facilityMonitoringCapabilitiesRequest)
    {
        $this->facilityMonitoringCapabilitiesRequest = $facilityMonitoringCapabilitiesRequest;
        return $this;
    }

    /**
     * Gets as situationExchangeCapabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeCapabilitiesRequest
     */
    public function getSituationExchangeCapabilitiesRequest()
    {
        return $this->situationExchangeCapabilitiesRequest;
    }

    /**
     * Sets a new situationExchangeCapabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest
     * @return self
     */
    public function setSituationExchangeCapabilitiesRequest(\Calcinai\Siri\Objects\SituationExchangeCapabilitiesRequest $situationExchangeCapabilitiesRequest)
    {
        $this->situationExchangeCapabilitiesRequest = $situationExchangeCapabilitiesRequest;
        return $this;
    }


}

