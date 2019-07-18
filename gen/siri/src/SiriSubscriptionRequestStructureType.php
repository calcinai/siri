<?php

namespace Calcinai\Siri;

/**
 * Class representing SiriSubscriptionRequestStructureType
 *
 * Type for SIRI Service Subscription types. Used for WSDL exchanges.
 * XSD Type: SiriSubscriptionRequestStructure
 */
class SiriSubscriptionRequestStructureType
{

    /**
     * @property \Calcinai\Siri\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest
     */
    private $productionTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest
     */
    private $estimatedTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest
     */
    private $stopTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest
     */
    private $stopMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest
     */
    private $vehicleMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest
     */
    private $connectionTimetableSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest
     */
    private $connectionMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest
     */
    private $generalMessageSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest
     */
    private $facilityMonitoringSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest
     */
    private $situationExchangeSubscriptionRequest = null;

    /**
     * Gets as productionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\ProductionTimetableSubscriptionRequest
     */
    public function getProductionTimetableSubscriptionRequest()
    {
        return $this->productionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new productionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest
     * @return self
     */
    public function setProductionTimetableSubscriptionRequest(\Calcinai\Siri\ProductionTimetableSubscriptionRequest $productionTimetableSubscriptionRequest)
    {
        $this->productionTimetableSubscriptionRequest = $productionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as estimatedTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\EstimatedTimetableSubscriptionRequest
     */
    public function getEstimatedTimetableSubscriptionRequest()
    {
        return $this->estimatedTimetableSubscriptionRequest;
    }

    /**
     * Sets a new estimatedTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest
     * @return self
     */
    public function setEstimatedTimetableSubscriptionRequest(\Calcinai\Siri\EstimatedTimetableSubscriptionRequest $estimatedTimetableSubscriptionRequest)
    {
        $this->estimatedTimetableSubscriptionRequest = $estimatedTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as stopTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\StopTimetableSubscriptionRequest
     */
    public function getStopTimetableSubscriptionRequest()
    {
        return $this->stopTimetableSubscriptionRequest;
    }

    /**
     * Sets a new stopTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest
     * @return self
     */
    public function setStopTimetableSubscriptionRequest(\Calcinai\Siri\StopTimetableSubscriptionRequest $stopTimetableSubscriptionRequest)
    {
        $this->stopTimetableSubscriptionRequest = $stopTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as stopMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\StopMonitoringSubscriptionRequest
     */
    public function getStopMonitoringSubscriptionRequest()
    {
        return $this->stopMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new stopMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest
     * @return self
     */
    public function setStopMonitoringSubscriptionRequest(\Calcinai\Siri\StopMonitoringSubscriptionRequest $stopMonitoringSubscriptionRequest)
    {
        $this->stopMonitoringSubscriptionRequest = $stopMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\VehicleMonitoringSubscriptionRequest
     */
    public function getVehicleMonitoringSubscriptionRequest()
    {
        return $this->vehicleMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new vehicleMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest
     * @return self
     */
    public function setVehicleMonitoringSubscriptionRequest(\Calcinai\Siri\VehicleMonitoringSubscriptionRequest $vehicleMonitoringSubscriptionRequest)
    {
        $this->vehicleMonitoringSubscriptionRequest = $vehicleMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as connectionTimetableSubscriptionRequest
     *
     * @return \Calcinai\Siri\ConnectionTimetableSubscriptionRequest
     */
    public function getConnectionTimetableSubscriptionRequest()
    {
        return $this->connectionTimetableSubscriptionRequest;
    }

    /**
     * Sets a new connectionTimetableSubscriptionRequest
     *
     * @param \Calcinai\Siri\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest
     * @return self
     */
    public function setConnectionTimetableSubscriptionRequest(\Calcinai\Siri\ConnectionTimetableSubscriptionRequest $connectionTimetableSubscriptionRequest)
    {
        $this->connectionTimetableSubscriptionRequest = $connectionTimetableSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as connectionMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\ConnectionMonitoringSubscriptionRequest
     */
    public function getConnectionMonitoringSubscriptionRequest()
    {
        return $this->connectionMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new connectionMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest
     * @return self
     */
    public function setConnectionMonitoringSubscriptionRequest(\Calcinai\Siri\ConnectionMonitoringSubscriptionRequest $connectionMonitoringSubscriptionRequest)
    {
        $this->connectionMonitoringSubscriptionRequest = $connectionMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as generalMessageSubscriptionRequest
     *
     * @return \Calcinai\Siri\GeneralMessageSubscriptionRequest
     */
    public function getGeneralMessageSubscriptionRequest()
    {
        return $this->generalMessageSubscriptionRequest;
    }

    /**
     * Sets a new generalMessageSubscriptionRequest
     *
     * @param \Calcinai\Siri\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest
     * @return self
     */
    public function setGeneralMessageSubscriptionRequest(\Calcinai\Siri\GeneralMessageSubscriptionRequest $generalMessageSubscriptionRequest)
    {
        $this->generalMessageSubscriptionRequest = $generalMessageSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as facilityMonitoringSubscriptionRequest
     *
     * @return \Calcinai\Siri\FacilityMonitoringSubscriptionRequest
     */
    public function getFacilityMonitoringSubscriptionRequest()
    {
        return $this->facilityMonitoringSubscriptionRequest;
    }

    /**
     * Sets a new facilityMonitoringSubscriptionRequest
     *
     * @param \Calcinai\Siri\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest
     * @return self
     */
    public function setFacilityMonitoringSubscriptionRequest(\Calcinai\Siri\FacilityMonitoringSubscriptionRequest $facilityMonitoringSubscriptionRequest)
    {
        $this->facilityMonitoringSubscriptionRequest = $facilityMonitoringSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as situationExchangeSubscriptionRequest
     *
     * @return \Calcinai\Siri\SituationExchangeSubscriptionRequest
     */
    public function getSituationExchangeSubscriptionRequest()
    {
        return $this->situationExchangeSubscriptionRequest;
    }

    /**
     * Sets a new situationExchangeSubscriptionRequest
     *
     * @param \Calcinai\Siri\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest
     * @return self
     */
    public function setSituationExchangeSubscriptionRequest(\Calcinai\Siri\SituationExchangeSubscriptionRequest $situationExchangeSubscriptionRequest)
    {
        $this->situationExchangeSubscriptionRequest = $situationExchangeSubscriptionRequest;
        return $this;
    }


}

