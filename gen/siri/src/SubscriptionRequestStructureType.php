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
     * @property \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest
     */
    private $productionTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest
     */
    private $estimatedTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest
     */
    private $stopTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest
     */
    private $stopMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest
     */
    private $vehicleMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest
     */
    private $connectionTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest
     */
    private $connectionMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest
     */
    private $generalMessageSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest
     */
    private $facilityMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest
     */
    private $situationExchangeSubscriptionRequest = null;

    /**
     * Gets as productionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest
     */
    public function getProductionTimetableSubscriptionRequest()
    {
        return $this->productionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new productionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest
     * @return self
     */
    public function setProductionTimetableSubscriptionRequest(\Calcinai\Siri\Objects\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest)
    {
        $this->productionTimetableSubscriptionRequest = $productionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as estimatedTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest
     */
    public function getEstimatedTimetableSubscriptionRequest()
    {
        return $this->estimatedTimetableSubscriptionRequest;
    }

    /**
     * Sets a new estimatedTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest
     * @return self
     */
    public function setEstimatedTimetableSubscriptionRequest(\Calcinai\Siri\Objects\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest)
    {
        $this->estimatedTimetableSubscriptionRequest = $estimatedTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as stopTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest
     */
    public function getStopTimetableSubscriptionRequest()
    {
        return $this->stopTimetableSubscriptionRequest;
    }

    /**
     * Sets a new stopTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest
     * @return self
     */
    public function setStopTimetableSubscriptionRequest(\Calcinai\Siri\Objects\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest)
    {
        $this->stopTimetableSubscriptionRequest = $stopTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest
     */
    public function getStopMonitoringSubscriptionRequest()
    {
        return $this->stopMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new stopMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest
     * @return self
     */
    public function setStopMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest)
    {
        $this->stopMonitoringSubscriptionRequest = $stopMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest
     */
    public function getVehicleMonitoringSubscriptionRequest()
    {
        return $this->vehicleMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new vehicleMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest
     * @return self
     */
    public function setVehicleMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest)
    {
        $this->vehicleMonitoringSubscriptionRequest = $vehicleMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as connectionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest
     */
    public function getConnectionTimetableSubscriptionRequest()
    {
        return $this->connectionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new connectionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest
     * @return self
     */
    public function setConnectionTimetableSubscriptionRequest(\Calcinai\Siri\Objects\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest)
    {
        $this->connectionTimetableSubscriptionRequest = $connectionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as connectionMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest
     */
    public function getConnectionMonitoringSubscriptionRequest()
    {
        return $this->connectionMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new connectionMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest
     * @return self
     */
    public function setConnectionMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest)
    {
        $this->connectionMonitoringSubscriptionRequest = $connectionMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as generalMessageSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest
     */
    public function getGeneralMessageSubscriptionRequest()
    {
        return $this->generalMessageSubscriptionRequest;
    }

    /**
     * Sets a new generalMessageSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest
     * @return self
     */
    public function setGeneralMessageSubscriptionRequest(\Calcinai\Siri\Objects\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest)
    {
        $this->generalMessageSubscriptionRequest = $generalMessageSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as facilityMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest
     */
    public function getFacilityMonitoringSubscriptionRequest()
    {
        return $this->facilityMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new facilityMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest
     * @return self
     */
    public function setFacilityMonitoringSubscriptionRequest(\Calcinai\Siri\Objects\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest)
    {
        $this->facilityMonitoringSubscriptionRequest = $facilityMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as situationExchangeSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest
     */
    public function getSituationExchangeSubscriptionRequest()
    {
        return $this->situationExchangeSubscriptionRequest;
    }

    /**
     * Sets a new situationExchangeSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest
     * @return self
     */
    public function setSituationExchangeSubscriptionRequest(\Calcinai\Siri\Objects\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest)
    {
        $this->situationExchangeSubscriptionRequest = $situationExchangeSubscriptionRequest;
        return $this;
    }


}

