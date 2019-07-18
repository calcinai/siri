<?php

namespace Calcinai\Siri;

/**
 * Class representing Siri
 *
 * Service Interface for Real Time Operation.
 */
class Siri
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\ServiceRequest $serviceRequest
     */
    private $serviceRequest = null;

    /**
     * @property \Calcinai\Siri\SubscriptionRequest $subscriptionRequest
     */
    private $subscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\TerminateSubscriptionRequest $terminateSubscriptionRequest
     */
    private $terminateSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\DataReadyNotification $dataReadyNotification
     */
    private $dataReadyNotification = null;

    /**
     * @property \Calcinai\Siri\DataSupplyRequest $dataSupplyRequest
     */
    private $dataSupplyRequest = null;

    /**
     * @property \Calcinai\Siri\CheckStatusRequest $checkStatusRequest
     */
    private $checkStatusRequest = null;

    /**
     * @property \Calcinai\Siri\HeartbeatNotification $heartbeatNotification
     */
    private $heartbeatNotification = null;

    /**
     * @property \Calcinai\Siri\CapabilitiesRequest $capabilitiesRequest
     */
    private $capabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\StopPointsRequest $stopPointsRequest
     */
    private $stopPointsRequest = null;

    /**
     * @property \Calcinai\Siri\LinesRequest $linesRequest
     */
    private $linesRequest = null;

    /**
     * @property \Calcinai\Siri\ServiceFeaturesRequest $serviceFeaturesRequest
     */
    private $serviceFeaturesRequest = null;

    /**
     * @property \Calcinai\Siri\ProductCategoriesRequest $productCategoriesRequest
     */
    private $productCategoriesRequest = null;

    /**
     * @property \Calcinai\Siri\VehicleFeaturesRequest $vehicleFeaturesRequest
     */
    private $vehicleFeaturesRequest = null;

    /**
     * @property \Calcinai\Siri\InfoChannelRequest $infoChannelRequest
     */
    private $infoChannelRequest = null;

    /**
     * @property \Calcinai\Siri\FacilityRequest $facilityRequest
     */
    private $facilityRequest = null;

    /**
     * @property \Calcinai\Siri\SubscriptionResponse $subscriptionResponse
     */
    private $subscriptionResponse = null;

    /**
     * @property \Calcinai\Siri\TerminateSubscriptionResponse $terminateSubscriptionResponse
     */
    private $terminateSubscriptionResponse = null;

    /**
     * @property \Calcinai\Siri\DataReadyAcknowledgement $dataReadyAcknowledgement
     */
    private $dataReadyAcknowledgement = null;

    /**
     * @property \Calcinai\Siri\ServiceDelivery $serviceDelivery
     */
    private $serviceDelivery = null;

    /**
     * @property \Calcinai\Siri\DataReceivedAcknowledgement $dataReceivedAcknowledgement
     */
    private $dataReceivedAcknowledgement = null;

    /**
     * @property \Calcinai\Siri\CheckStatusResponse $checkStatusResponse
     */
    private $checkStatusResponse = null;

    /**
     * Responses with the capabilities of an implementation. Answers a CapabilityRequest
     *
     * @property \Calcinai\Siri\CapabilitiesResponse $capabilitiesResponse
     */
    private $capabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\StopPointsDelivery $stopPointsDelivery
     */
    private $stopPointsDelivery = null;

    /**
     * @property \Calcinai\Siri\LinesDelivery $linesDelivery
     */
    private $linesDelivery = null;

    /**
     * @property \Calcinai\Siri\ProductCategoriesDelivery $productCategoriesDelivery
     */
    private $productCategoriesDelivery = null;

    /**
     * @property \Calcinai\Siri\ServiceFeaturesDelivery $serviceFeaturesDelivery
     */
    private $serviceFeaturesDelivery = null;

    /**
     * @property \Calcinai\Siri\VehicleFeaturesDelivery $vehicleFeaturesDelivery
     */
    private $vehicleFeaturesDelivery = null;

    /**
     * @property \Calcinai\Siri\InfoChannelDelivery $infoChannelDelivery
     */
    private $infoChannelDelivery = null;

    /**
     * @property \Calcinai\Siri\FacilityDelivery $facilityDelivery
     */
    private $facilityDelivery = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

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
     * Gets as serviceRequest
     *
     * @return \Calcinai\Siri\ServiceRequest
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * @param \Calcinai\Siri\ServiceRequest $serviceRequest
     * @return self
     */
    public function setServiceRequest(\Calcinai\Siri\ServiceRequest $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as subscriptionRequest
     *
     * @return \Calcinai\Siri\SubscriptionRequest
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }

    /**
     * Sets a new subscriptionRequest
     *
     * @param \Calcinai\Siri\SubscriptionRequest $subscriptionRequest
     * @return self
     */
    public function setSubscriptionRequest(\Calcinai\Siri\SubscriptionRequest $subscriptionRequest)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }

    /**
     * Gets as terminateSubscriptionRequest
     *
     * @return \Calcinai\Siri\TerminateSubscriptionRequest
     */
    public function getTerminateSubscriptionRequest()
    {
        return $this->terminateSubscriptionRequest;
    }

    /**
     * Sets a new terminateSubscriptionRequest
     *
     * @param \Calcinai\Siri\TerminateSubscriptionRequest $terminateSubscriptionRequest
     * @return self
     */
    public function setTerminateSubscriptionRequest(\Calcinai\Siri\TerminateSubscriptionRequest $terminateSubscriptionRequest)
    {
        $this->terminateSubscriptionRequest = $terminateSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as dataReadyNotification
     *
     * @return \Calcinai\Siri\DataReadyNotification
     */
    public function getDataReadyNotification()
    {
        return $this->dataReadyNotification;
    }

    /**
     * Sets a new dataReadyNotification
     *
     * @param \Calcinai\Siri\DataReadyNotification $dataReadyNotification
     * @return self
     */
    public function setDataReadyNotification(\Calcinai\Siri\DataReadyNotification $dataReadyNotification)
    {
        $this->dataReadyNotification = $dataReadyNotification;
        return $this;
    }

    /**
     * Gets as dataSupplyRequest
     *
     * @return \Calcinai\Siri\DataSupplyRequest
     */
    public function getDataSupplyRequest()
    {
        return $this->dataSupplyRequest;
    }

    /**
     * Sets a new dataSupplyRequest
     *
     * @param \Calcinai\Siri\DataSupplyRequest $dataSupplyRequest
     * @return self
     */
    public function setDataSupplyRequest(\Calcinai\Siri\DataSupplyRequest $dataSupplyRequest)
    {
        $this->dataSupplyRequest = $dataSupplyRequest;
        return $this;
    }

    /**
     * Gets as checkStatusRequest
     *
     * @return \Calcinai\Siri\CheckStatusRequest
     */
    public function getCheckStatusRequest()
    {
        return $this->checkStatusRequest;
    }

    /**
     * Sets a new checkStatusRequest
     *
     * @param \Calcinai\Siri\CheckStatusRequest $checkStatusRequest
     * @return self
     */
    public function setCheckStatusRequest(\Calcinai\Siri\CheckStatusRequest $checkStatusRequest)
    {
        $this->checkStatusRequest = $checkStatusRequest;
        return $this;
    }

    /**
     * Gets as heartbeatNotification
     *
     * @return \Calcinai\Siri\HeartbeatNotification
     */
    public function getHeartbeatNotification()
    {
        return $this->heartbeatNotification;
    }

    /**
     * Sets a new heartbeatNotification
     *
     * @param \Calcinai\Siri\HeartbeatNotification $heartbeatNotification
     * @return self
     */
    public function setHeartbeatNotification(\Calcinai\Siri\HeartbeatNotification $heartbeatNotification)
    {
        $this->heartbeatNotification = $heartbeatNotification;
        return $this;
    }

    /**
     * Gets as capabilitiesRequest
     *
     * @return \Calcinai\Siri\CapabilitiesRequest
     */
    public function getCapabilitiesRequest()
    {
        return $this->capabilitiesRequest;
    }

    /**
     * Sets a new capabilitiesRequest
     *
     * @param \Calcinai\Siri\CapabilitiesRequest $capabilitiesRequest
     * @return self
     */
    public function setCapabilitiesRequest(\Calcinai\Siri\CapabilitiesRequest $capabilitiesRequest)
    {
        $this->capabilitiesRequest = $capabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopPointsRequest
     *
     * @return \Calcinai\Siri\StopPointsRequest
     */
    public function getStopPointsRequest()
    {
        return $this->stopPointsRequest;
    }

    /**
     * Sets a new stopPointsRequest
     *
     * @param \Calcinai\Siri\StopPointsRequest $stopPointsRequest
     * @return self
     */
    public function setStopPointsRequest(\Calcinai\Siri\StopPointsRequest $stopPointsRequest)
    {
        $this->stopPointsRequest = $stopPointsRequest;
        return $this;
    }

    /**
     * Gets as linesRequest
     *
     * @return \Calcinai\Siri\LinesRequest
     */
    public function getLinesRequest()
    {
        return $this->linesRequest;
    }

    /**
     * Sets a new linesRequest
     *
     * @param \Calcinai\Siri\LinesRequest $linesRequest
     * @return self
     */
    public function setLinesRequest(\Calcinai\Siri\LinesRequest $linesRequest)
    {
        $this->linesRequest = $linesRequest;
        return $this;
    }

    /**
     * Gets as serviceFeaturesRequest
     *
     * @return \Calcinai\Siri\ServiceFeaturesRequest
     */
    public function getServiceFeaturesRequest()
    {
        return $this->serviceFeaturesRequest;
    }

    /**
     * Sets a new serviceFeaturesRequest
     *
     * @param \Calcinai\Siri\ServiceFeaturesRequest $serviceFeaturesRequest
     * @return self
     */
    public function setServiceFeaturesRequest(\Calcinai\Siri\ServiceFeaturesRequest $serviceFeaturesRequest)
    {
        $this->serviceFeaturesRequest = $serviceFeaturesRequest;
        return $this;
    }

    /**
     * Gets as productCategoriesRequest
     *
     * @return \Calcinai\Siri\ProductCategoriesRequest
     */
    public function getProductCategoriesRequest()
    {
        return $this->productCategoriesRequest;
    }

    /**
     * Sets a new productCategoriesRequest
     *
     * @param \Calcinai\Siri\ProductCategoriesRequest $productCategoriesRequest
     * @return self
     */
    public function setProductCategoriesRequest(\Calcinai\Siri\ProductCategoriesRequest $productCategoriesRequest)
    {
        $this->productCategoriesRequest = $productCategoriesRequest;
        return $this;
    }

    /**
     * Gets as vehicleFeaturesRequest
     *
     * @return \Calcinai\Siri\VehicleFeaturesRequest
     */
    public function getVehicleFeaturesRequest()
    {
        return $this->vehicleFeaturesRequest;
    }

    /**
     * Sets a new vehicleFeaturesRequest
     *
     * @param \Calcinai\Siri\VehicleFeaturesRequest $vehicleFeaturesRequest
     * @return self
     */
    public function setVehicleFeaturesRequest(\Calcinai\Siri\VehicleFeaturesRequest $vehicleFeaturesRequest)
    {
        $this->vehicleFeaturesRequest = $vehicleFeaturesRequest;
        return $this;
    }

    /**
     * Gets as infoChannelRequest
     *
     * @return \Calcinai\Siri\InfoChannelRequest
     */
    public function getInfoChannelRequest()
    {
        return $this->infoChannelRequest;
    }

    /**
     * Sets a new infoChannelRequest
     *
     * @param \Calcinai\Siri\InfoChannelRequest $infoChannelRequest
     * @return self
     */
    public function setInfoChannelRequest(\Calcinai\Siri\InfoChannelRequest $infoChannelRequest)
    {
        $this->infoChannelRequest = $infoChannelRequest;
        return $this;
    }

    /**
     * Gets as facilityRequest
     *
     * @return \Calcinai\Siri\FacilityRequest
     */
    public function getFacilityRequest()
    {
        return $this->facilityRequest;
    }

    /**
     * Sets a new facilityRequest
     *
     * @param \Calcinai\Siri\FacilityRequest $facilityRequest
     * @return self
     */
    public function setFacilityRequest(\Calcinai\Siri\FacilityRequest $facilityRequest)
    {
        $this->facilityRequest = $facilityRequest;
        return $this;
    }

    /**
     * Gets as subscriptionResponse
     *
     * @return \Calcinai\Siri\SubscriptionResponse
     */
    public function getSubscriptionResponse()
    {
        return $this->subscriptionResponse;
    }

    /**
     * Sets a new subscriptionResponse
     *
     * @param \Calcinai\Siri\SubscriptionResponse $subscriptionResponse
     * @return self
     */
    public function setSubscriptionResponse(\Calcinai\Siri\SubscriptionResponse $subscriptionResponse)
    {
        $this->subscriptionResponse = $subscriptionResponse;
        return $this;
    }

    /**
     * Gets as terminateSubscriptionResponse
     *
     * @return \Calcinai\Siri\TerminateSubscriptionResponse
     */
    public function getTerminateSubscriptionResponse()
    {
        return $this->terminateSubscriptionResponse;
    }

    /**
     * Sets a new terminateSubscriptionResponse
     *
     * @param \Calcinai\Siri\TerminateSubscriptionResponse $terminateSubscriptionResponse
     * @return self
     */
    public function setTerminateSubscriptionResponse(\Calcinai\Siri\TerminateSubscriptionResponse $terminateSubscriptionResponse)
    {
        $this->terminateSubscriptionResponse = $terminateSubscriptionResponse;
        return $this;
    }

    /**
     * Gets as dataReadyAcknowledgement
     *
     * @return \Calcinai\Siri\DataReadyAcknowledgement
     */
    public function getDataReadyAcknowledgement()
    {
        return $this->dataReadyAcknowledgement;
    }

    /**
     * Sets a new dataReadyAcknowledgement
     *
     * @param \Calcinai\Siri\DataReadyAcknowledgement $dataReadyAcknowledgement
     * @return self
     */
    public function setDataReadyAcknowledgement(\Calcinai\Siri\DataReadyAcknowledgement $dataReadyAcknowledgement)
    {
        $this->dataReadyAcknowledgement = $dataReadyAcknowledgement;
        return $this;
    }

    /**
     * Gets as serviceDelivery
     *
     * @return \Calcinai\Siri\ServiceDelivery
     */
    public function getServiceDelivery()
    {
        return $this->serviceDelivery;
    }

    /**
     * Sets a new serviceDelivery
     *
     * @param \Calcinai\Siri\ServiceDelivery $serviceDelivery
     * @return self
     */
    public function setServiceDelivery(\Calcinai\Siri\ServiceDelivery $serviceDelivery)
    {
        $this->serviceDelivery = $serviceDelivery;
        return $this;
    }

    /**
     * Gets as dataReceivedAcknowledgement
     *
     * @return \Calcinai\Siri\DataReceivedAcknowledgement
     */
    public function getDataReceivedAcknowledgement()
    {
        return $this->dataReceivedAcknowledgement;
    }

    /**
     * Sets a new dataReceivedAcknowledgement
     *
     * @param \Calcinai\Siri\DataReceivedAcknowledgement $dataReceivedAcknowledgement
     * @return self
     */
    public function setDataReceivedAcknowledgement(\Calcinai\Siri\DataReceivedAcknowledgement $dataReceivedAcknowledgement)
    {
        $this->dataReceivedAcknowledgement = $dataReceivedAcknowledgement;
        return $this;
    }

    /**
     * Gets as checkStatusResponse
     *
     * @return \Calcinai\Siri\CheckStatusResponse
     */
    public function getCheckStatusResponse()
    {
        return $this->checkStatusResponse;
    }

    /**
     * Sets a new checkStatusResponse
     *
     * @param \Calcinai\Siri\CheckStatusResponse $checkStatusResponse
     * @return self
     */
    public function setCheckStatusResponse(\Calcinai\Siri\CheckStatusResponse $checkStatusResponse)
    {
        $this->checkStatusResponse = $checkStatusResponse;
        return $this;
    }

    /**
     * Gets as capabilitiesResponse
     *
     * Responses with the capabilities of an implementation. Answers a CapabilityRequest
     *
     * @return \Calcinai\Siri\CapabilitiesResponse
     */
    public function getCapabilitiesResponse()
    {
        return $this->capabilitiesResponse;
    }

    /**
     * Sets a new capabilitiesResponse
     *
     * Responses with the capabilities of an implementation. Answers a CapabilityRequest
     *
     * @param \Calcinai\Siri\CapabilitiesResponse $capabilitiesResponse
     * @return self
     */
    public function setCapabilitiesResponse(\Calcinai\Siri\CapabilitiesResponse $capabilitiesResponse)
    {
        $this->capabilitiesResponse = $capabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopPointsDelivery
     *
     * @return \Calcinai\Siri\StopPointsDelivery
     */
    public function getStopPointsDelivery()
    {
        return $this->stopPointsDelivery;
    }

    /**
     * Sets a new stopPointsDelivery
     *
     * @param \Calcinai\Siri\StopPointsDelivery $stopPointsDelivery
     * @return self
     */
    public function setStopPointsDelivery(\Calcinai\Siri\StopPointsDelivery $stopPointsDelivery)
    {
        $this->stopPointsDelivery = $stopPointsDelivery;
        return $this;
    }

    /**
     * Gets as linesDelivery
     *
     * @return \Calcinai\Siri\LinesDelivery
     */
    public function getLinesDelivery()
    {
        return $this->linesDelivery;
    }

    /**
     * Sets a new linesDelivery
     *
     * @param \Calcinai\Siri\LinesDelivery $linesDelivery
     * @return self
     */
    public function setLinesDelivery(\Calcinai\Siri\LinesDelivery $linesDelivery)
    {
        $this->linesDelivery = $linesDelivery;
        return $this;
    }

    /**
     * Gets as productCategoriesDelivery
     *
     * @return \Calcinai\Siri\ProductCategoriesDelivery
     */
    public function getProductCategoriesDelivery()
    {
        return $this->productCategoriesDelivery;
    }

    /**
     * Sets a new productCategoriesDelivery
     *
     * @param \Calcinai\Siri\ProductCategoriesDelivery $productCategoriesDelivery
     * @return self
     */
    public function setProductCategoriesDelivery(\Calcinai\Siri\ProductCategoriesDelivery $productCategoriesDelivery)
    {
        $this->productCategoriesDelivery = $productCategoriesDelivery;
        return $this;
    }

    /**
     * Gets as serviceFeaturesDelivery
     *
     * @return \Calcinai\Siri\ServiceFeaturesDelivery
     */
    public function getServiceFeaturesDelivery()
    {
        return $this->serviceFeaturesDelivery;
    }

    /**
     * Sets a new serviceFeaturesDelivery
     *
     * @param \Calcinai\Siri\ServiceFeaturesDelivery $serviceFeaturesDelivery
     * @return self
     */
    public function setServiceFeaturesDelivery(\Calcinai\Siri\ServiceFeaturesDelivery $serviceFeaturesDelivery)
    {
        $this->serviceFeaturesDelivery = $serviceFeaturesDelivery;
        return $this;
    }

    /**
     * Gets as vehicleFeaturesDelivery
     *
     * @return \Calcinai\Siri\VehicleFeaturesDelivery
     */
    public function getVehicleFeaturesDelivery()
    {
        return $this->vehicleFeaturesDelivery;
    }

    /**
     * Sets a new vehicleFeaturesDelivery
     *
     * @param \Calcinai\Siri\VehicleFeaturesDelivery $vehicleFeaturesDelivery
     * @return self
     */
    public function setVehicleFeaturesDelivery(\Calcinai\Siri\VehicleFeaturesDelivery $vehicleFeaturesDelivery)
    {
        $this->vehicleFeaturesDelivery = $vehicleFeaturesDelivery;
        return $this;
    }

    /**
     * Gets as infoChannelDelivery
     *
     * @return \Calcinai\Siri\InfoChannelDelivery
     */
    public function getInfoChannelDelivery()
    {
        return $this->infoChannelDelivery;
    }

    /**
     * Sets a new infoChannelDelivery
     *
     * @param \Calcinai\Siri\InfoChannelDelivery $infoChannelDelivery
     * @return self
     */
    public function setInfoChannelDelivery(\Calcinai\Siri\InfoChannelDelivery $infoChannelDelivery)
    {
        $this->infoChannelDelivery = $infoChannelDelivery;
        return $this;
    }

    /**
     * Gets as facilityDelivery
     *
     * @return \Calcinai\Siri\FacilityDelivery
     */
    public function getFacilityDelivery()
    {
        return $this->facilityDelivery;
    }

    /**
     * Sets a new facilityDelivery
     *
     * @param \Calcinai\Siri\FacilityDelivery $facilityDelivery
     * @return self
     */
    public function setFacilityDelivery(\Calcinai\Siri\FacilityDelivery $facilityDelivery)
    {
        $this->facilityDelivery = $facilityDelivery;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

