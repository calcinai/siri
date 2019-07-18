<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceRequestStructureType
 *
 * SIRI Service Request.
 * XSD Type: ServiceRequestStructure
 */
class ServiceRequestStructureType extends ContextualisedRequestStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest
     */
    private $productionTimetableRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest
     */
    private $estimatedTimetableRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest
     */
    private $stopTimetableRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringMultipleRequest $stopMonitoringMultipleRequest
     */
    private $stopMonitoringMultipleRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringRequest $stopMonitoringRequest
     */
    private $stopMonitoringRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest
     */
    private $vehicleMonitoringRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest
     */
    private $connectionTimetableRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringRequest $connectionMonitoringRequest
     */
    private $connectionMonitoringRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest
     */
    private $generalMessageRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringRequest $facilityMonitoringRequest
     */
    private $facilityMonitoringRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest
     */
    private $situationExchangeRequest = null;

    /**
     * Gets as productionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableRequest
     */
    public function getProductionTimetableRequest()
    {
        return $this->productionTimetableRequest;
    }

    /**
     * Sets a new productionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest
     * @return self
     */
    public function setProductionTimetableRequest(\Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest)
    {
        $this->productionTimetableRequest = $productionTimetableRequest;
        return $this;
    }

    /**
     * Gets as estimatedTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableRequest
     */
    public function getEstimatedTimetableRequest()
    {
        return $this->estimatedTimetableRequest;
    }

    /**
     * Sets a new estimatedTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest
     * @return self
     */
    public function setEstimatedTimetableRequest(\Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest)
    {
        $this->estimatedTimetableRequest = $estimatedTimetableRequest;
        return $this;
    }

    /**
     * Gets as stopTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableRequest
     */
    public function getStopTimetableRequest()
    {
        return $this->stopTimetableRequest;
    }

    /**
     * Sets a new stopTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest
     * @return self
     */
    public function setStopTimetableRequest(\Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest)
    {
        $this->stopTimetableRequest = $stopTimetableRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringMultipleRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringMultipleRequest
     */
    public function getStopMonitoringMultipleRequest()
    {
        return $this->stopMonitoringMultipleRequest;
    }

    /**
     * Sets a new stopMonitoringMultipleRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringMultipleRequest $stopMonitoringMultipleRequest
     * @return self
     */
    public function setStopMonitoringMultipleRequest(\Calcinai\Siri\Objects\StopMonitoringMultipleRequest $stopMonitoringMultipleRequest)
    {
        $this->stopMonitoringMultipleRequest = $stopMonitoringMultipleRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringRequest
     */
    public function getStopMonitoringRequest()
    {
        return $this->stopMonitoringRequest;
    }

    /**
     * Sets a new stopMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringRequest $stopMonitoringRequest
     * @return self
     */
    public function setStopMonitoringRequest(\Calcinai\Siri\Objects\StopMonitoringRequest $stopMonitoringRequest)
    {
        $this->stopMonitoringRequest = $stopMonitoringRequest;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringRequest
     */
    public function getVehicleMonitoringRequest()
    {
        return $this->vehicleMonitoringRequest;
    }

    /**
     * Sets a new vehicleMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest
     * @return self
     */
    public function setVehicleMonitoringRequest(\Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest)
    {
        $this->vehicleMonitoringRequest = $vehicleMonitoringRequest;
        return $this;
    }

    /**
     * Gets as connectionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableRequest
     */
    public function getConnectionTimetableRequest()
    {
        return $this->connectionTimetableRequest;
    }

    /**
     * Sets a new connectionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest
     * @return self
     */
    public function setConnectionTimetableRequest(\Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest)
    {
        $this->connectionTimetableRequest = $connectionTimetableRequest;
        return $this;
    }

    /**
     * Gets as connectionMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringRequest
     */
    public function getConnectionMonitoringRequest()
    {
        return $this->connectionMonitoringRequest;
    }

    /**
     * Sets a new connectionMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringRequest $connectionMonitoringRequest
     * @return self
     */
    public function setConnectionMonitoringRequest(\Calcinai\Siri\Objects\ConnectionMonitoringRequest $connectionMonitoringRequest)
    {
        $this->connectionMonitoringRequest = $connectionMonitoringRequest;
        return $this;
    }

    /**
     * Gets as generalMessageRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageRequest
     */
    public function getGeneralMessageRequest()
    {
        return $this->generalMessageRequest;
    }

    /**
     * Sets a new generalMessageRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest
     * @return self
     */
    public function setGeneralMessageRequest(\Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest)
    {
        $this->generalMessageRequest = $generalMessageRequest;
        return $this;
    }

    /**
     * Gets as facilityMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringRequest
     */
    public function getFacilityMonitoringRequest()
    {
        return $this->facilityMonitoringRequest;
    }

    /**
     * Sets a new facilityMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringRequest $facilityMonitoringRequest
     * @return self
     */
    public function setFacilityMonitoringRequest(\Calcinai\Siri\Objects\FacilityMonitoringRequest $facilityMonitoringRequest)
    {
        $this->facilityMonitoringRequest = $facilityMonitoringRequest;
        return $this;
    }

    /**
     * Gets as situationExchangeRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeRequest
     */
    public function getSituationExchangeRequest()
    {
        return $this->situationExchangeRequest;
    }

    /**
     * Sets a new situationExchangeRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest
     * @return self
     */
    public function setSituationExchangeRequest(\Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest)
    {
        $this->situationExchangeRequest = $situationExchangeRequest;
        return $this;
    }


}

