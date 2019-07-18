<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceDeliveryBodyStructureType
 *
 * Type for SIRI Service Delivery type.
 * XSD Type: ServiceDeliveryBodyStructure
 */
class ServiceDeliveryBodyStructureType
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
     * @property \Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery
     */
    private $productionTimetableDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery
     */
    private $estimatedTimetableDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery
     */
    private $stopTimetableDelivery = null;

    /**
     * Delviery for Stop Event service.
     *
     * @property \Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery
     */
    private $stopMonitoringDelivery = null;

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\Objects\VehicleMonitoringDelivery $vehicleMonitoringDelivery
     */
    private $vehicleMonitoringDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery
     */
    private $connectionTimetableDelivery = null;

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     */
    private $connectionMonitoringFeederDelivery = null;

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     */
    private $connectionMonitoringDistributorDelivery = null;

    /**
     * Delivery for general Message service.
     *
     * @property \Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery
     */
    private $generalMessageDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery
     */
    private $facilityMonitoringDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery
     */
    private $situationExchangeDelivery = null;

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
     * Gets as productionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableDelivery
     */
    public function getProductionTimetableDelivery()
    {
        return $this->productionTimetableDelivery;
    }

    /**
     * Sets a new productionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery
     * @return self
     */
    public function setProductionTimetableDelivery(\Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery)
    {
        $this->productionTimetableDelivery = $productionTimetableDelivery;
        return $this;
    }

    /**
     * Gets as estimatedTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableDelivery
     */
    public function getEstimatedTimetableDelivery()
    {
        return $this->estimatedTimetableDelivery;
    }

    /**
     * Sets a new estimatedTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery
     * @return self
     */
    public function setEstimatedTimetableDelivery(\Calcinai\Siri\Objects\EstimatedTimetableDelivery $estimatedTimetableDelivery)
    {
        $this->estimatedTimetableDelivery = $estimatedTimetableDelivery;
        return $this;
    }

    /**
     * Gets as stopTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\StopTimetableDelivery
     */
    public function getStopTimetableDelivery()
    {
        return $this->stopTimetableDelivery;
    }

    /**
     * Sets a new stopTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery
     * @return self
     */
    public function setStopTimetableDelivery(\Calcinai\Siri\Objects\StopTimetableDelivery $stopTimetableDelivery)
    {
        $this->stopTimetableDelivery = $stopTimetableDelivery;
        return $this;
    }

    /**
     * Gets as stopMonitoringDelivery
     *
     * Delviery for Stop Event service.
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringDelivery
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
     * @param \Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery
     * @return self
     */
    public function setStopMonitoringDelivery(\Calcinai\Siri\Objects\StopMonitoringDelivery $stopMonitoringDelivery)
    {
        $this->stopMonitoringDelivery = $stopMonitoringDelivery;
        return $this;
    }

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

    /**
     * Gets as connectionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableDelivery
     */
    public function getConnectionTimetableDelivery()
    {
        return $this->connectionTimetableDelivery;
    }

    /**
     * Sets a new connectionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery
     * @return self
     */
    public function setConnectionTimetableDelivery(\Calcinai\Siri\Objects\ConnectionTimetableDelivery $connectionTimetableDelivery)
    {
        $this->connectionTimetableDelivery = $connectionTimetableDelivery;
        return $this;
    }

    /**
     * Gets as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery
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
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     * @return self
     */
    public function setConnectionMonitoringFeederDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * Gets as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery
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
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     * @return self
     */
    public function setConnectionMonitoringDistributorDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery = $connectionMonitoringDistributorDelivery;
        return $this;
    }

    /**
     * Gets as generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageDelivery
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
     * @param \Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery
     * @return self
     */
    public function setGeneralMessageDelivery(\Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery)
    {
        $this->generalMessageDelivery = $generalMessageDelivery;
        return $this;
    }

    /**
     * Gets as facilityMonitoringDelivery
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringDelivery
     */
    public function getFacilityMonitoringDelivery()
    {
        return $this->facilityMonitoringDelivery;
    }

    /**
     * Sets a new facilityMonitoringDelivery
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery
     * @return self
     */
    public function setFacilityMonitoringDelivery(\Calcinai\Siri\Objects\FacilityMonitoringDelivery $facilityMonitoringDelivery)
    {
        $this->facilityMonitoringDelivery = $facilityMonitoringDelivery;
        return $this;
    }

    /**
     * Gets as situationExchangeDelivery
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeDelivery
     */
    public function getSituationExchangeDelivery()
    {
        return $this->situationExchangeDelivery;
    }

    /**
     * Sets a new situationExchangeDelivery
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery
     * @return self
     */
    public function setSituationExchangeDelivery(\Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery)
    {
        $this->situationExchangeDelivery = $situationExchangeDelivery;
        return $this;
    }


}

