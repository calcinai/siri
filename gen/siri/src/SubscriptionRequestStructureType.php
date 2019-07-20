<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SubscriptionRequestStructureType
 *
 * Type for SIRI Subscription Request
 * XSD Type: SubscriptionRequestStructure
 */
class SubscriptionRequestStructureType extends AbstractSubscriptionRequestStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest[] $productionTimetableSubscriptionRequest
     */
    private $productionTimetableSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest[] $estimatedTimetableSubscriptionRequest
     */
    private $estimatedTimetableSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest[] $stopTimetableSubscriptionRequest
     */
    private $stopTimetableSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest[] $stopMonitoringSubscriptionRequest
     */
    private $stopMonitoringSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest[] $vehicleMonitoringSubscriptionRequest
     */
    private $vehicleMonitoringSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest[] $connectionTimetableSubscriptionRequest
     */
    private $connectionTimetableSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest[] $connectionMonitoringSubscriptionRequest
     */
    private $connectionMonitoringSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest[] $generalMessageSubscriptionRequest
     */
    private $generalMessageSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest[] $facilityMonitoringSubscriptionRequest
     */
    private $facilityMonitoringSubscriptionRequest = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest[] $situationExchangeSubscriptionRequest
     */
    private $situationExchangeSubscriptionRequest = [
        
    ];

    /**
     * Adds as productionTimetableSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest
     */
    public function addToProductionTimetableSubscriptionRequest(\Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest)
    {
        $this->productionTimetableSubscriptionRequest[] = $productionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * isset productionTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionTimetableSubscriptionRequest($index)
    {
        return isset($this->productionTimetableSubscriptionRequest[$index]);
    }

    /**
     * unset productionTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionTimetableSubscriptionRequest($index)
    {
        unset($this->productionTimetableSubscriptionRequest[$index]);
    }

    /**
     * Gets as productionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest[]
     */
    public function getProductionTimetableSubscriptionRequest()
    {
        return $this->productionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new productionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest[] $productionTimetableSubscriptionRequest
     * @return self
     */
    public function setProductionTimetableSubscriptionRequest(array $productionTimetableSubscriptionRequest)
    {
        $this->productionTimetableSubscriptionRequest = $productionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as estimatedTimetableSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest
     */
    public function addToEstimatedTimetableSubscriptionRequest(\Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest)
    {
        $this->estimatedTimetableSubscriptionRequest[] = $estimatedTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * isset estimatedTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedTimetableSubscriptionRequest($index)
    {
        return isset($this->estimatedTimetableSubscriptionRequest[$index]);
    }

    /**
     * unset estimatedTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedTimetableSubscriptionRequest($index)
    {
        unset($this->estimatedTimetableSubscriptionRequest[$index]);
    }

    /**
     * Gets as estimatedTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest[]
     */
    public function getEstimatedTimetableSubscriptionRequest()
    {
        return $this->estimatedTimetableSubscriptionRequest;
    }

    /**
     * Sets a new estimatedTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest[] $estimatedTimetableSubscriptionRequest
     * @return self
     */
    public function setEstimatedTimetableSubscriptionRequest(array $estimatedTimetableSubscriptionRequest)
    {
        $this->estimatedTimetableSubscriptionRequest = $estimatedTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as stopTimetableSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest
     */
    public function addToStopTimetableSubscriptionRequest(\Calcinai\Siri\Objects\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest)
    {
        $this->stopTimetableSubscriptionRequest[] = $stopTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * isset stopTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopTimetableSubscriptionRequest($index)
    {
        return isset($this->stopTimetableSubscriptionRequest[$index]);
    }

    /**
     * unset stopTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopTimetableSubscriptionRequest($index)
    {
        unset($this->stopTimetableSubscriptionRequest[$index]);
    }

    /**
     * Gets as stopTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest[]
     */
    public function getStopTimetableSubscriptionRequest()
    {
        return $this->stopTimetableSubscriptionRequest;
    }

    /**
     * Sets a new stopTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest[] $stopTimetableSubscriptionRequest
     * @return self
     */
    public function setStopTimetableSubscriptionRequest(array $stopTimetableSubscriptionRequest)
    {
        $this->stopTimetableSubscriptionRequest = $stopTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as stopMonitoringSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest
     */
    public function addToStopMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest)
    {
        $this->stopMonitoringSubscriptionRequest[] = $stopMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * isset stopMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringSubscriptionRequest($index)
    {
        return isset($this->stopMonitoringSubscriptionRequest[$index]);
    }

    /**
     * unset stopMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringSubscriptionRequest($index)
    {
        unset($this->stopMonitoringSubscriptionRequest[$index]);
    }

    /**
     * Gets as stopMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest[]
     */
    public function getStopMonitoringSubscriptionRequest()
    {
        return $this->stopMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new stopMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest[] $stopMonitoringSubscriptionRequest
     * @return self
     */
    public function setStopMonitoringSubscriptionRequest(array $stopMonitoringSubscriptionRequest)
    {
        $this->stopMonitoringSubscriptionRequest = $stopMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as vehicleMonitoringSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest
     */
    public function addToVehicleMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest)
    {
        $this->vehicleMonitoringSubscriptionRequest[] = $vehicleMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * isset vehicleMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMonitoringSubscriptionRequest($index)
    {
        return isset($this->vehicleMonitoringSubscriptionRequest[$index]);
    }

    /**
     * unset vehicleMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMonitoringSubscriptionRequest($index)
    {
        unset($this->vehicleMonitoringSubscriptionRequest[$index]);
    }

    /**
     * Gets as vehicleMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest[]
     */
    public function getVehicleMonitoringSubscriptionRequest()
    {
        return $this->vehicleMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new vehicleMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest[] $vehicleMonitoringSubscriptionRequest
     * @return self
     */
    public function setVehicleMonitoringSubscriptionRequest(array $vehicleMonitoringSubscriptionRequest)
    {
        $this->vehicleMonitoringSubscriptionRequest = $vehicleMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as connectionTimetableSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest
     */
    public function addToConnectionTimetableSubscriptionRequest(\Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest)
    {
        $this->connectionTimetableSubscriptionRequest[] = $connectionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * isset connectionTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionTimetableSubscriptionRequest($index)
    {
        return isset($this->connectionTimetableSubscriptionRequest[$index]);
    }

    /**
     * unset connectionTimetableSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionTimetableSubscriptionRequest($index)
    {
        unset($this->connectionTimetableSubscriptionRequest[$index]);
    }

    /**
     * Gets as connectionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest[]
     */
    public function getConnectionTimetableSubscriptionRequest()
    {
        return $this->connectionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new connectionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest[] $connectionTimetableSubscriptionRequest
     * @return self
     */
    public function setConnectionTimetableSubscriptionRequest(array $connectionTimetableSubscriptionRequest)
    {
        $this->connectionTimetableSubscriptionRequest = $connectionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as connectionMonitoringSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest
     */
    public function addToConnectionMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest)
    {
        $this->connectionMonitoringSubscriptionRequest[] = $connectionMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * isset connectionMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringSubscriptionRequest($index)
    {
        return isset($this->connectionMonitoringSubscriptionRequest[$index]);
    }

    /**
     * unset connectionMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringSubscriptionRequest($index)
    {
        unset($this->connectionMonitoringSubscriptionRequest[$index]);
    }

    /**
     * Gets as connectionMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest[]
     */
    public function getConnectionMonitoringSubscriptionRequest()
    {
        return $this->connectionMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new connectionMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest[] $connectionMonitoringSubscriptionRequest
     * @return self
     */
    public function setConnectionMonitoringSubscriptionRequest(array $connectionMonitoringSubscriptionRequest)
    {
        $this->connectionMonitoringSubscriptionRequest = $connectionMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as generalMessageSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest
     */
    public function addToGeneralMessageSubscriptionRequest(\Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest)
    {
        $this->generalMessageSubscriptionRequest[] = $generalMessageSubscriptionRequest;
        return $this;
    }

    /**
     * isset generalMessageSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralMessageSubscriptionRequest($index)
    {
        return isset($this->generalMessageSubscriptionRequest[$index]);
    }

    /**
     * unset generalMessageSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralMessageSubscriptionRequest($index)
    {
        unset($this->generalMessageSubscriptionRequest[$index]);
    }

    /**
     * Gets as generalMessageSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest[]
     */
    public function getGeneralMessageSubscriptionRequest()
    {
        return $this->generalMessageSubscriptionRequest;
    }

    /**
     * Sets a new generalMessageSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest[] $generalMessageSubscriptionRequest
     * @return self
     */
    public function setGeneralMessageSubscriptionRequest(array $generalMessageSubscriptionRequest)
    {
        $this->generalMessageSubscriptionRequest = $generalMessageSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as facilityMonitoringSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest
     */
    public function addToFacilityMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest)
    {
        $this->facilityMonitoringSubscriptionRequest[] = $facilityMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * isset facilityMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityMonitoringSubscriptionRequest($index)
    {
        return isset($this->facilityMonitoringSubscriptionRequest[$index]);
    }

    /**
     * unset facilityMonitoringSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityMonitoringSubscriptionRequest($index)
    {
        unset($this->facilityMonitoringSubscriptionRequest[$index]);
    }

    /**
     * Gets as facilityMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest[]
     */
    public function getFacilityMonitoringSubscriptionRequest()
    {
        return $this->facilityMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new facilityMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest[] $facilityMonitoringSubscriptionRequest
     * @return self
     */
    public function setFacilityMonitoringSubscriptionRequest(array $facilityMonitoringSubscriptionRequest)
    {
        $this->facilityMonitoringSubscriptionRequest = $facilityMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Adds as situationExchangeSubscriptionRequest
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest
     */
    public function addToSituationExchangeSubscriptionRequest(\Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest)
    {
        $this->situationExchangeSubscriptionRequest[] = $situationExchangeSubscriptionRequest;
        return $this;
    }

    /**
     * isset situationExchangeSubscriptionRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationExchangeSubscriptionRequest($index)
    {
        return isset($this->situationExchangeSubscriptionRequest[$index]);
    }

    /**
     * unset situationExchangeSubscriptionRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationExchangeSubscriptionRequest($index)
    {
        unset($this->situationExchangeSubscriptionRequest[$index]);
    }

    /**
     * Gets as situationExchangeSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest[]
     */
    public function getSituationExchangeSubscriptionRequest()
    {
        return $this->situationExchangeSubscriptionRequest;
    }

    /**
     * Sets a new situationExchangeSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest[] $situationExchangeSubscriptionRequest
     * @return self
     */
    public function setSituationExchangeSubscriptionRequest(array $situationExchangeSubscriptionRequest)
    {
        $this->situationExchangeSubscriptionRequest = $situationExchangeSubscriptionRequest;
        return $this;
    }


}

