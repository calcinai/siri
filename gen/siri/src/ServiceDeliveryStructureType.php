<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceDeliveryStructureType
 *
 * Type for SIRI Service Delivery type.
 * XSD Type: ServiceDeliveryStructure
 */
class ServiceDeliveryStructureType extends ProducerResponseStructureType
{

    /**
     * Default gml coordinate format for eny location elements in response; applies if Coordinates element is used to specify points. May be overridden on individual points.
     *
     * @property string $srsName
     */
    private $srsName = null;

    /**
     * Whether the complerte request could be processed successfully or not. Default is true. If any of the individual requests within the delivery failed, should be set to false.
     *
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning conditions that appluy to the overall request. More Specific error conditions should be included on each request that fails.
     *
     * @property \Calcinai\Siri\Objects\ServiceDeliveryStructureType\ErrorConditionAType $errorCondition
     */
    private $errorCondition = null;

    /**
     * Whether there is a further delvery message with more current updates that follows this one. Default is false.
     *
     * @property bool $moreData
     */
    private $moreData = null;

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableDelivery[] $productionTimetableDelivery
     */
    private $productionTimetableDelivery = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableDelivery[] $estimatedTimetableDelivery
     */
    private $estimatedTimetableDelivery = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableDelivery[] $stopTimetableDelivery
     */
    private $stopTimetableDelivery = [
        
    ];

    /**
     * Delviery for Stop Event service.
     *
     * @property \Calcinai\Siri\Objects\StopMonitoringDelivery[] $stopMonitoringDelivery
     */
    private $stopMonitoringDelivery = [
        
    ];

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\Objects\VehicleMonitoringDelivery[] $vehicleMonitoringDelivery
     */
    private $vehicleMonitoringDelivery = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableDelivery[] $connectionTimetableDelivery
     */
    private $connectionTimetableDelivery = [
        
    ];

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[] $connectionMonitoringFeederDelivery
     */
    private $connectionMonitoringFeederDelivery = [
        
    ];

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[] $connectionMonitoringDistributorDelivery
     */
    private $connectionMonitoringDistributorDelivery = [
        
    ];

    /**
     * Delivery for general Message service.
     *
     * @property \Calcinai\Siri\Objects\GeneralMessageDelivery[] $generalMessageDelivery
     */
    private $generalMessageDelivery = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringDelivery[] $facilityMonitoringDelivery
     */
    private $facilityMonitoringDelivery = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeDelivery[] $situationExchangeDelivery
     */
    private $situationExchangeDelivery = [
        
    ];

    /**
     * Gets as srsName
     *
     * Default gml coordinate format for eny location elements in response; applies if Coordinates element is used to specify points. May be overridden on individual points.
     *
     * @return string
     */
    public function getSrsName()
    {
        return $this->srsName;
    }

    /**
     * Sets a new srsName
     *
     * Default gml coordinate format for eny location elements in response; applies if Coordinates element is used to specify points. May be overridden on individual points.
     *
     * @param string $srsName
     * @return self
     */
    public function setSrsName($srsName)
    {
        $this->srsName = $srsName;
        return $this;
    }

    /**
     * Gets as status
     *
     * Whether the complerte request could be processed successfully or not. Default is true. If any of the individual requests within the delivery failed, should be set to false.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Whether the complerte request could be processed successfully or not. Default is true. If any of the individual requests within the delivery failed, should be set to false.
     *
     * @param bool $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as errorCondition
     *
     * Description of any error or warning conditions that appluy to the overall request. More Specific error conditions should be included on each request that fails.
     *
     * @return \Calcinai\Siri\Objects\ServiceDeliveryStructureType\ErrorConditionAType
     */
    public function getErrorCondition()
    {
        return $this->errorCondition;
    }

    /**
     * Sets a new errorCondition
     *
     * Description of any error or warning conditions that appluy to the overall request. More Specific error conditions should be included on each request that fails.
     *
     * @param \Calcinai\Siri\Objects\ServiceDeliveryStructureType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\Objects\ServiceDeliveryStructureType\ErrorConditionAType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }

    /**
     * Gets as moreData
     *
     * Whether there is a further delvery message with more current updates that follows this one. Default is false.
     *
     * @return bool
     */
    public function getMoreData()
    {
        return $this->moreData;
    }

    /**
     * Sets a new moreData
     *
     * Whether there is a further delvery message with more current updates that follows this one. Default is false.
     *
     * @param bool $moreData
     * @return self
     */
    public function setMoreData($moreData)
    {
        $this->moreData = $moreData;
        return $this;
    }

    /**
     * Adds as productionTimetableDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery
     */
    public function addToProductionTimetableDelivery(\Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery)
    {
        $this->productionTimetableDelivery[] = $productionTimetableDelivery;
        return $this;
    }

    /**
     * isset productionTimetableDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionTimetableDelivery($index)
    {
        return isset($this->productionTimetableDelivery[$index]);
    }

    /**
     * unset productionTimetableDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionTimetableDelivery($index)
    {
        unset($this->productionTimetableDelivery[$index]);
    }

    /**
     * Gets as productionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableDelivery[]
     */
    public function getProductionTimetableDelivery()
    {
        return $this->productionTimetableDelivery;
    }

    /**
     * Sets a new productionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableDelivery[] $productionTimetableDelivery
     * @return self
     */
    public function setProductionTimetableDelivery(array $productionTimetableDelivery)
    {
        $this->productionTimetableDelivery = $productionTimetableDelivery;
        return $this;
    }

    /**
     * Adds as estimatedTimetableDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery
     */
    public function addToEstimatedTimetableDelivery(\Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery)
    {
        $this->estimatedTimetableDelivery[] = $estimatedTimetableDelivery;
        return $this;
    }

    /**
     * isset estimatedTimetableDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedTimetableDelivery($index)
    {
        return isset($this->estimatedTimetableDelivery[$index]);
    }

    /**
     * unset estimatedTimetableDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedTimetableDelivery($index)
    {
        unset($this->estimatedTimetableDelivery[$index]);
    }

    /**
     * Gets as estimatedTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableDelivery[]
     */
    public function getEstimatedTimetableDelivery()
    {
        return $this->estimatedTimetableDelivery;
    }

    /**
     * Sets a new estimatedTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableDelivery[] $estimatedTimetableDelivery
     * @return self
     */
    public function setEstimatedTimetableDelivery(array $estimatedTimetableDelivery)
    {
        $this->estimatedTimetableDelivery = $estimatedTimetableDelivery;
        return $this;
    }

    /**
     * Adds as stopTimetableDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery
     */
    public function addToStopTimetableDelivery(\Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery)
    {
        $this->stopTimetableDelivery[] = $stopTimetableDelivery;
        return $this;
    }

    /**
     * isset stopTimetableDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopTimetableDelivery($index)
    {
        return isset($this->stopTimetableDelivery[$index]);
    }

    /**
     * unset stopTimetableDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopTimetableDelivery($index)
    {
        unset($this->stopTimetableDelivery[$index]);
    }

    /**
     * Gets as stopTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\StopTimetableDelivery[]
     */
    public function getStopTimetableDelivery()
    {
        return $this->stopTimetableDelivery;
    }

    /**
     * Sets a new stopTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\StopTimetableDelivery[] $stopTimetableDelivery
     * @return self
     */
    public function setStopTimetableDelivery(array $stopTimetableDelivery)
    {
        $this->stopTimetableDelivery = $stopTimetableDelivery;
        return $this;
    }

    /**
     * Adds as stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery
     */
    public function addToStopMonitoringDelivery(\Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery)
    {
        $this->stopMonitoringDelivery[] = $stopMonitoringDelivery;
        return $this;
    }

    /**
     * isset stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringDelivery($index)
    {
        return isset($this->stopMonitoringDelivery[$index]);
    }

    /**
     * unset stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringDelivery($index)
    {
        unset($this->stopMonitoringDelivery[$index]);
    }

    /**
     * Gets as stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringDelivery[]
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
     * @param \Calcinai\Siri\Objects\StopMonitoringDelivery[] $stopMonitoringDelivery
     * @return self
     */
    public function setStopMonitoringDelivery(array $stopMonitoringDelivery)
    {
        $this->stopMonitoringDelivery = $stopMonitoringDelivery;
        return $this;
    }

    /**
     * Adds as vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return self
     * @param \Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     */
    public function addToVehicleMonitoringDelivery(\Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery)
    {
        $this->vehicleMonitoringDelivery[] = $vehicleMonitoringDelivery;
        return $this;
    }

    /**
     * isset vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMonitoringDelivery($index)
    {
        return isset($this->vehicleMonitoringDelivery[$index]);
    }

    /**
     * unset vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMonitoringDelivery($index)
    {
        unset($this->vehicleMonitoringDelivery[$index]);
    }

    /**
     * Gets as vehicleMonitoringDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringDelivery[]
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
     * @param \Calcinai\Siri\Objects\VehicleMonitoringDelivery[] $vehicleMonitoringDelivery
     * @return self
     */
    public function setVehicleMonitoringDelivery(array $vehicleMonitoringDelivery)
    {
        $this->vehicleMonitoringDelivery = $vehicleMonitoringDelivery;
        return $this;
    }

    /**
     * Adds as connectionTimetableDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery
     */
    public function addToConnectionTimetableDelivery(\Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery)
    {
        $this->connectionTimetableDelivery[] = $connectionTimetableDelivery;
        return $this;
    }

    /**
     * isset connectionTimetableDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionTimetableDelivery($index)
    {
        return isset($this->connectionTimetableDelivery[$index]);
    }

    /**
     * unset connectionTimetableDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionTimetableDelivery($index)
    {
        unset($this->connectionTimetableDelivery[$index]);
    }

    /**
     * Gets as connectionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableDelivery[]
     */
    public function getConnectionTimetableDelivery()
    {
        return $this->connectionTimetableDelivery;
    }

    /**
     * Sets a new connectionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableDelivery[] $connectionTimetableDelivery
     * @return self
     */
    public function setConnectionTimetableDelivery(array $connectionTimetableDelivery)
    {
        $this->connectionTimetableDelivery = $connectionTimetableDelivery;
        return $this;
    }

    /**
     * Adds as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     */
    public function addToConnectionMonitoringFeederDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery[] = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * isset connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringFeederDelivery($index)
    {
        return isset($this->connectionMonitoringFeederDelivery[$index]);
    }

    /**
     * unset connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringFeederDelivery($index)
    {
        unset($this->connectionMonitoringFeederDelivery[$index]);
    }

    /**
     * Gets as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[]
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
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[] $connectionMonitoringFeederDelivery
     * @return self
     */
    public function setConnectionMonitoringFeederDelivery(array $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * Adds as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     */
    public function addToConnectionMonitoringDistributorDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery[] = $connectionMonitoringDistributorDelivery;
        return $this;
    }

    /**
     * isset connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringDistributorDelivery($index)
    {
        return isset($this->connectionMonitoringDistributorDelivery[$index]);
    }

    /**
     * unset connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringDistributorDelivery($index)
    {
        unset($this->connectionMonitoringDistributorDelivery[$index]);
    }

    /**
     * Gets as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[]
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
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[] $connectionMonitoringDistributorDelivery
     * @return self
     */
    public function setConnectionMonitoringDistributorDelivery(array $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery = $connectionMonitoringDistributorDelivery;
        return $this;
    }

    /**
     * Adds as generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery
     */
    public function addToGeneralMessageDelivery(\Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery)
    {
        $this->generalMessageDelivery[] = $generalMessageDelivery;
        return $this;
    }

    /**
     * isset generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralMessageDelivery($index)
    {
        return isset($this->generalMessageDelivery[$index]);
    }

    /**
     * unset generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralMessageDelivery($index)
    {
        unset($this->generalMessageDelivery[$index]);
    }

    /**
     * Gets as generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageDelivery[]
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
     * @param \Calcinai\Siri\Objects\GeneralMessageDelivery[] $generalMessageDelivery
     * @return self
     */
    public function setGeneralMessageDelivery(array $generalMessageDelivery)
    {
        $this->generalMessageDelivery = $generalMessageDelivery;
        return $this;
    }

    /**
     * Adds as facilityMonitoringDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery
     */
    public function addToFacilityMonitoringDelivery(\Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery)
    {
        $this->facilityMonitoringDelivery[] = $facilityMonitoringDelivery;
        return $this;
    }

    /**
     * isset facilityMonitoringDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityMonitoringDelivery($index)
    {
        return isset($this->facilityMonitoringDelivery[$index]);
    }

    /**
     * unset facilityMonitoringDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityMonitoringDelivery($index)
    {
        unset($this->facilityMonitoringDelivery[$index]);
    }

    /**
     * Gets as facilityMonitoringDelivery
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringDelivery[]
     */
    public function getFacilityMonitoringDelivery()
    {
        return $this->facilityMonitoringDelivery;
    }

    /**
     * Sets a new facilityMonitoringDelivery
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringDelivery[] $facilityMonitoringDelivery
     * @return self
     */
    public function setFacilityMonitoringDelivery(array $facilityMonitoringDelivery)
    {
        $this->facilityMonitoringDelivery = $facilityMonitoringDelivery;
        return $this;
    }

    /**
     * Adds as situationExchangeDelivery
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery
     */
    public function addToSituationExchangeDelivery(\Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery)
    {
        $this->situationExchangeDelivery[] = $situationExchangeDelivery;
        return $this;
    }

    /**
     * isset situationExchangeDelivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationExchangeDelivery($index)
    {
        return isset($this->situationExchangeDelivery[$index]);
    }

    /**
     * unset situationExchangeDelivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationExchangeDelivery($index)
    {
        unset($this->situationExchangeDelivery[$index]);
    }

    /**
     * Gets as situationExchangeDelivery
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeDelivery[]
     */
    public function getSituationExchangeDelivery()
    {
        return $this->situationExchangeDelivery;
    }

    /**
     * Sets a new situationExchangeDelivery
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeDelivery[] $situationExchangeDelivery
     * @return self
     */
    public function setSituationExchangeDelivery(array $situationExchangeDelivery)
    {
        $this->situationExchangeDelivery = $situationExchangeDelivery;
        return $this;
    }


}

