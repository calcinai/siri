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
     * @property \Calcinai\Siri\Objects\ProductionTimetableRequest[] $productionTimetableRequest
     */
    private $productionTimetableRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableRequest[] $estimatedTimetableRequest
     */
    private $estimatedTimetableRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableRequest[] $stopTimetableRequest
     */
    private $stopTimetableRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringMultipleRequest[] $stopMonitoringMultipleRequest
     */
    private $stopMonitoringMultipleRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringRequest[] $stopMonitoringRequest
     */
    private $stopMonitoringRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringRequest[] $vehicleMonitoringRequest
     */
    private $vehicleMonitoringRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableRequest[] $connectionTimetableRequest
     */
    private $connectionTimetableRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringRequest[] $connectionMonitoringRequest
     */
    private $connectionMonitoringRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageRequest[] $generalMessageRequest
     */
    private $generalMessageRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringRequest[] $facilityMonitoringRequest
     */
    private $facilityMonitoringRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeRequest[] $situationExchangeRequest
     */
    private $situationExchangeRequest = [
        
    ];

    /**
     * Adds as productionTimetableRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest
     */
    public function addToProductionTimetableRequest(\Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest)
    {
        $this->productionTimetableRequest[] = $productionTimetableRequest;
        return $this;
    }

    /**
     * isset productionTimetableRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionTimetableRequest($index)
    {
        return isset($this->productionTimetableRequest[$index]);
    }

    /**
     * unset productionTimetableRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionTimetableRequest($index)
    {
        unset($this->productionTimetableRequest[$index]);
    }

    /**
     * Gets as productionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableRequest[]
     */
    public function getProductionTimetableRequest()
    {
        return $this->productionTimetableRequest;
    }

    /**
     * Sets a new productionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableRequest[] $productionTimetableRequest
     * @return self
     */
    public function setProductionTimetableRequest(array $productionTimetableRequest)
    {
        $this->productionTimetableRequest = $productionTimetableRequest;
        return $this;
    }

    /**
     * Adds as estimatedTimetableRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest
     */
    public function addToEstimatedTimetableRequest(\Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest)
    {
        $this->estimatedTimetableRequest[] = $estimatedTimetableRequest;
        return $this;
    }

    /**
     * isset estimatedTimetableRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedTimetableRequest($index)
    {
        return isset($this->estimatedTimetableRequest[$index]);
    }

    /**
     * unset estimatedTimetableRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedTimetableRequest($index)
    {
        unset($this->estimatedTimetableRequest[$index]);
    }

    /**
     * Gets as estimatedTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableRequest[]
     */
    public function getEstimatedTimetableRequest()
    {
        return $this->estimatedTimetableRequest;
    }

    /**
     * Sets a new estimatedTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableRequest[] $estimatedTimetableRequest
     * @return self
     */
    public function setEstimatedTimetableRequest(array $estimatedTimetableRequest)
    {
        $this->estimatedTimetableRequest = $estimatedTimetableRequest;
        return $this;
    }

    /**
     * Adds as stopTimetableRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest
     */
    public function addToStopTimetableRequest(\Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest)
    {
        $this->stopTimetableRequest[] = $stopTimetableRequest;
        return $this;
    }

    /**
     * isset stopTimetableRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopTimetableRequest($index)
    {
        return isset($this->stopTimetableRequest[$index]);
    }

    /**
     * unset stopTimetableRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopTimetableRequest($index)
    {
        unset($this->stopTimetableRequest[$index]);
    }

    /**
     * Gets as stopTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableRequest[]
     */
    public function getStopTimetableRequest()
    {
        return $this->stopTimetableRequest;
    }

    /**
     * Sets a new stopTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableRequest[] $stopTimetableRequest
     * @return self
     */
    public function setStopTimetableRequest(array $stopTimetableRequest)
    {
        $this->stopTimetableRequest = $stopTimetableRequest;
        return $this;
    }

    /**
     * Adds as stopMonitoringMultipleRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopMonitoringMultipleRequest $stopMonitoringMultipleRequest
     */
    public function addToStopMonitoringMultipleRequest(\Calcinai\Siri\Objects\StopMonitoringMultipleRequest $stopMonitoringMultipleRequest)
    {
        $this->stopMonitoringMultipleRequest[] = $stopMonitoringMultipleRequest;
        return $this;
    }

    /**
     * isset stopMonitoringMultipleRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringMultipleRequest($index)
    {
        return isset($this->stopMonitoringMultipleRequest[$index]);
    }

    /**
     * unset stopMonitoringMultipleRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringMultipleRequest($index)
    {
        unset($this->stopMonitoringMultipleRequest[$index]);
    }

    /**
     * Gets as stopMonitoringMultipleRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringMultipleRequest[]
     */
    public function getStopMonitoringMultipleRequest()
    {
        return $this->stopMonitoringMultipleRequest;
    }

    /**
     * Sets a new stopMonitoringMultipleRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringMultipleRequest[] $stopMonitoringMultipleRequest
     * @return self
     */
    public function setStopMonitoringMultipleRequest(array $stopMonitoringMultipleRequest)
    {
        $this->stopMonitoringMultipleRequest = $stopMonitoringMultipleRequest;
        return $this;
    }

    /**
     * Adds as stopMonitoringRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopMonitoringRequest $stopMonitoringRequest
     */
    public function addToStopMonitoringRequest(\Calcinai\Siri\Objects\StopMonitoringRequest $stopMonitoringRequest)
    {
        $this->stopMonitoringRequest[] = $stopMonitoringRequest;
        return $this;
    }

    /**
     * isset stopMonitoringRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringRequest($index)
    {
        return isset($this->stopMonitoringRequest[$index]);
    }

    /**
     * unset stopMonitoringRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringRequest($index)
    {
        unset($this->stopMonitoringRequest[$index]);
    }

    /**
     * Gets as stopMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringRequest[]
     */
    public function getStopMonitoringRequest()
    {
        return $this->stopMonitoringRequest;
    }

    /**
     * Sets a new stopMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringRequest[] $stopMonitoringRequest
     * @return self
     */
    public function setStopMonitoringRequest(array $stopMonitoringRequest)
    {
        $this->stopMonitoringRequest = $stopMonitoringRequest;
        return $this;
    }

    /**
     * Adds as vehicleMonitoringRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest
     */
    public function addToVehicleMonitoringRequest(\Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest)
    {
        $this->vehicleMonitoringRequest[] = $vehicleMonitoringRequest;
        return $this;
    }

    /**
     * isset vehicleMonitoringRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMonitoringRequest($index)
    {
        return isset($this->vehicleMonitoringRequest[$index]);
    }

    /**
     * unset vehicleMonitoringRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMonitoringRequest($index)
    {
        unset($this->vehicleMonitoringRequest[$index]);
    }

    /**
     * Gets as vehicleMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringRequest[]
     */
    public function getVehicleMonitoringRequest()
    {
        return $this->vehicleMonitoringRequest;
    }

    /**
     * Sets a new vehicleMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringRequest[] $vehicleMonitoringRequest
     * @return self
     */
    public function setVehicleMonitoringRequest(array $vehicleMonitoringRequest)
    {
        $this->vehicleMonitoringRequest = $vehicleMonitoringRequest;
        return $this;
    }

    /**
     * Adds as connectionTimetableRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest
     */
    public function addToConnectionTimetableRequest(\Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest)
    {
        $this->connectionTimetableRequest[] = $connectionTimetableRequest;
        return $this;
    }

    /**
     * isset connectionTimetableRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionTimetableRequest($index)
    {
        return isset($this->connectionTimetableRequest[$index]);
    }

    /**
     * unset connectionTimetableRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionTimetableRequest($index)
    {
        unset($this->connectionTimetableRequest[$index]);
    }

    /**
     * Gets as connectionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableRequest[]
     */
    public function getConnectionTimetableRequest()
    {
        return $this->connectionTimetableRequest;
    }

    /**
     * Sets a new connectionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableRequest[] $connectionTimetableRequest
     * @return self
     */
    public function setConnectionTimetableRequest(array $connectionTimetableRequest)
    {
        $this->connectionTimetableRequest = $connectionTimetableRequest;
        return $this;
    }

    /**
     * Adds as connectionMonitoringRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringRequest $connectionMonitoringRequest
     */
    public function addToConnectionMonitoringRequest(\Calcinai\Siri\Objects\ConnectionMonitoringRequest $connectionMonitoringRequest)
    {
        $this->connectionMonitoringRequest[] = $connectionMonitoringRequest;
        return $this;
    }

    /**
     * isset connectionMonitoringRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringRequest($index)
    {
        return isset($this->connectionMonitoringRequest[$index]);
    }

    /**
     * unset connectionMonitoringRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringRequest($index)
    {
        unset($this->connectionMonitoringRequest[$index]);
    }

    /**
     * Gets as connectionMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringRequest[]
     */
    public function getConnectionMonitoringRequest()
    {
        return $this->connectionMonitoringRequest;
    }

    /**
     * Sets a new connectionMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringRequest[] $connectionMonitoringRequest
     * @return self
     */
    public function setConnectionMonitoringRequest(array $connectionMonitoringRequest)
    {
        $this->connectionMonitoringRequest = $connectionMonitoringRequest;
        return $this;
    }

    /**
     * Adds as generalMessageRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest
     */
    public function addToGeneralMessageRequest(\Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest)
    {
        $this->generalMessageRequest[] = $generalMessageRequest;
        return $this;
    }

    /**
     * isset generalMessageRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralMessageRequest($index)
    {
        return isset($this->generalMessageRequest[$index]);
    }

    /**
     * unset generalMessageRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralMessageRequest($index)
    {
        unset($this->generalMessageRequest[$index]);
    }

    /**
     * Gets as generalMessageRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageRequest[]
     */
    public function getGeneralMessageRequest()
    {
        return $this->generalMessageRequest;
    }

    /**
     * Sets a new generalMessageRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageRequest[] $generalMessageRequest
     * @return self
     */
    public function setGeneralMessageRequest(array $generalMessageRequest)
    {
        $this->generalMessageRequest = $generalMessageRequest;
        return $this;
    }

    /**
     * Adds as facilityMonitoringRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityMonitoringRequest $facilityMonitoringRequest
     */
    public function addToFacilityMonitoringRequest(\Calcinai\Siri\Objects\FacilityMonitoringRequest $facilityMonitoringRequest)
    {
        $this->facilityMonitoringRequest[] = $facilityMonitoringRequest;
        return $this;
    }

    /**
     * isset facilityMonitoringRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityMonitoringRequest($index)
    {
        return isset($this->facilityMonitoringRequest[$index]);
    }

    /**
     * unset facilityMonitoringRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityMonitoringRequest($index)
    {
        unset($this->facilityMonitoringRequest[$index]);
    }

    /**
     * Gets as facilityMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringRequest[]
     */
    public function getFacilityMonitoringRequest()
    {
        return $this->facilityMonitoringRequest;
    }

    /**
     * Sets a new facilityMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringRequest[] $facilityMonitoringRequest
     * @return self
     */
    public function setFacilityMonitoringRequest(array $facilityMonitoringRequest)
    {
        $this->facilityMonitoringRequest = $facilityMonitoringRequest;
        return $this;
    }

    /**
     * Adds as situationExchangeRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest
     */
    public function addToSituationExchangeRequest(\Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest)
    {
        $this->situationExchangeRequest[] = $situationExchangeRequest;
        return $this;
    }

    /**
     * isset situationExchangeRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationExchangeRequest($index)
    {
        return isset($this->situationExchangeRequest[$index]);
    }

    /**
     * unset situationExchangeRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationExchangeRequest($index)
    {
        unset($this->situationExchangeRequest[$index]);
    }

    /**
     * Gets as situationExchangeRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeRequest[]
     */
    public function getSituationExchangeRequest()
    {
        return $this->situationExchangeRequest;
    }

    /**
     * Sets a new situationExchangeRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeRequest[] $situationExchangeRequest
     * @return self
     */
    public function setSituationExchangeRequest(array $situationExchangeRequest)
    {
        $this->situationExchangeRequest = $situationExchangeRequest;
        return $this;
    }


}

