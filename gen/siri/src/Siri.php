<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\ServiceRequest $serviceRequest
     */
    private $serviceRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\SubscriptionRequest $subscriptionRequest
     */
    private $subscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\TerminateSubscriptionRequest $terminateSubscriptionRequest
     */
    private $terminateSubscriptionRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\DataReadyNotification $dataReadyNotification
     */
    private $dataReadyNotification = null;

    /**
     * @property \Calcinai\Siri\Objects\DataSupplyRequest $dataSupplyRequest
     */
    private $dataSupplyRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\CheckStatusRequest $checkStatusRequest
     */
    private $checkStatusRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\HeartbeatNotification $heartbeatNotification
     */
    private $heartbeatNotification = null;

    /**
     * @property \Calcinai\Siri\Objects\CapabilitiesRequest $capabilitiesRequest
     */
    private $capabilitiesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\StopPointsRequest $stopPointsRequest
     */
    private $stopPointsRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\LinesRequest $linesRequest
     */
    private $linesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ServiceFeaturesRequest $serviceFeaturesRequest
     */
    private $serviceFeaturesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\ProductCategoriesRequest $productCategoriesRequest
     */
    private $productCategoriesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleFeaturesRequest $vehicleFeaturesRequest
     */
    private $vehicleFeaturesRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\InfoChannelRequest $infoChannelRequest
     */
    private $infoChannelRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityRequest $facilityRequest
     */
    private $facilityRequest = null;

    /**
     * @property \Calcinai\Siri\Objects\SubscriptionResponse $subscriptionResponse
     */
    private $subscriptionResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\TerminateSubscriptionResponse $terminateSubscriptionResponse
     */
    private $terminateSubscriptionResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\DataReadyAcknowledgement $dataReadyAcknowledgement
     */
    private $dataReadyAcknowledgement = null;

    /**
     * @property \Calcinai\Siri\Objects\ServiceDelivery $serviceDelivery
     */
    private $serviceDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\DataReceivedAcknowledgement $dataReceivedAcknowledgement
     */
    private $dataReceivedAcknowledgement = null;

    /**
     * @property \Calcinai\Siri\Objects\CheckStatusResponse $checkStatusResponse
     */
    private $checkStatusResponse = null;

    /**
     * Responses with the capabilities of an implementation. Answers a CapabilityRequest
     *
     * @property \Calcinai\Siri\Objects\CapabilitiesResponse $capabilitiesResponse
     */
    private $capabilitiesResponse = null;

    /**
     * @property \Calcinai\Siri\Objects\StopPointsDelivery $stopPointsDelivery
     */
    private $stopPointsDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\LinesDelivery $linesDelivery
     */
    private $linesDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\ProductCategoriesDelivery $productCategoriesDelivery
     */
    private $productCategoriesDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\ServiceFeaturesDelivery $serviceFeaturesDelivery
     */
    private $serviceFeaturesDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleFeaturesDelivery $vehicleFeaturesDelivery
     */
    private $vehicleFeaturesDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\InfoChannelDelivery $infoChannelDelivery
     */
    private $infoChannelDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityDelivery $facilityDelivery
     */
    private $facilityDelivery = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * @return \Calcinai\Siri\Objects\ServiceRequest
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * @param \Calcinai\Siri\Objects\ServiceRequest $serviceRequest
     * @return self
     */
    public function setServiceRequest(\Calcinai\Siri\Objects\ServiceRequest $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as subscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\SubscriptionRequest
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }

    /**
     * Sets a new subscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\SubscriptionRequest $subscriptionRequest
     * @return self
     */
    public function setSubscriptionRequest(\Calcinai\Siri\Objects\SubscriptionRequest $subscriptionRequest)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }

    /**
     * Gets as terminateSubscriptionRequest
     *
     * @return \Calcinai\Siri\Objects\TerminateSubscriptionRequest
     */
    public function getTerminateSubscriptionRequest()
    {
        return $this->terminateSubscriptionRequest;
    }

    /**
     * Sets a new terminateSubscriptionRequest
     *
     * @param \Calcinai\Siri\Objects\TerminateSubscriptionRequest $terminateSubscriptionRequest
     * @return self
     */
    public function setTerminateSubscriptionRequest(\Calcinai\Siri\Objects\TerminateSubscriptionRequest $terminateSubscriptionRequest)
    {
        $this->terminateSubscriptionRequest = $terminateSubscriptionRequest;
        return $this;
    }

    /**
     * Gets as dataReadyNotification
     *
     * @return \Calcinai\Siri\Objects\DataReadyNotification
     */
    public function getDataReadyNotification()
    {
        return $this->dataReadyNotification;
    }

    /**
     * Sets a new dataReadyNotification
     *
     * @param \Calcinai\Siri\Objects\DataReadyNotification $dataReadyNotification
     * @return self
     */
    public function setDataReadyNotification(\Calcinai\Siri\Objects\DataReadyNotification $dataReadyNotification)
    {
        $this->dataReadyNotification = $dataReadyNotification;
        return $this;
    }

    /**
     * Gets as dataSupplyRequest
     *
     * @return \Calcinai\Siri\Objects\DataSupplyRequest
     */
    public function getDataSupplyRequest()
    {
        return $this->dataSupplyRequest;
    }

    /**
     * Sets a new dataSupplyRequest
     *
     * @param \Calcinai\Siri\Objects\DataSupplyRequest $dataSupplyRequest
     * @return self
     */
    public function setDataSupplyRequest(\Calcinai\Siri\Objects\DataSupplyRequest $dataSupplyRequest)
    {
        $this->dataSupplyRequest = $dataSupplyRequest;
        return $this;
    }

    /**
     * Gets as checkStatusRequest
     *
     * @return \Calcinai\Siri\Objects\CheckStatusRequest
     */
    public function getCheckStatusRequest()
    {
        return $this->checkStatusRequest;
    }

    /**
     * Sets a new checkStatusRequest
     *
     * @param \Calcinai\Siri\Objects\CheckStatusRequest $checkStatusRequest
     * @return self
     */
    public function setCheckStatusRequest(\Calcinai\Siri\Objects\CheckStatusRequest $checkStatusRequest)
    {
        $this->checkStatusRequest = $checkStatusRequest;
        return $this;
    }

    /**
     * Gets as heartbeatNotification
     *
     * @return \Calcinai\Siri\Objects\HeartbeatNotification
     */
    public function getHeartbeatNotification()
    {
        return $this->heartbeatNotification;
    }

    /**
     * Sets a new heartbeatNotification
     *
     * @param \Calcinai\Siri\Objects\HeartbeatNotification $heartbeatNotification
     * @return self
     */
    public function setHeartbeatNotification(\Calcinai\Siri\Objects\HeartbeatNotification $heartbeatNotification)
    {
        $this->heartbeatNotification = $heartbeatNotification;
        return $this;
    }

    /**
     * Gets as capabilitiesRequest
     *
     * @return \Calcinai\Siri\Objects\CapabilitiesRequest
     */
    public function getCapabilitiesRequest()
    {
        return $this->capabilitiesRequest;
    }

    /**
     * Sets a new capabilitiesRequest
     *
     * @param \Calcinai\Siri\Objects\CapabilitiesRequest $capabilitiesRequest
     * @return self
     */
    public function setCapabilitiesRequest(\Calcinai\Siri\Objects\CapabilitiesRequest $capabilitiesRequest)
    {
        $this->capabilitiesRequest = $capabilitiesRequest;
        return $this;
    }

    /**
     * Gets as stopPointsRequest
     *
     * @return \Calcinai\Siri\Objects\StopPointsRequest
     */
    public function getStopPointsRequest()
    {
        return $this->stopPointsRequest;
    }

    /**
     * Sets a new stopPointsRequest
     *
     * @param \Calcinai\Siri\Objects\StopPointsRequest $stopPointsRequest
     * @return self
     */
    public function setStopPointsRequest(\Calcinai\Siri\Objects\StopPointsRequest $stopPointsRequest)
    {
        $this->stopPointsRequest = $stopPointsRequest;
        return $this;
    }

    /**
     * Gets as linesRequest
     *
     * @return \Calcinai\Siri\Objects\LinesRequest
     */
    public function getLinesRequest()
    {
        return $this->linesRequest;
    }

    /**
     * Sets a new linesRequest
     *
     * @param \Calcinai\Siri\Objects\LinesRequest $linesRequest
     * @return self
     */
    public function setLinesRequest(\Calcinai\Siri\Objects\LinesRequest $linesRequest)
    {
        $this->linesRequest = $linesRequest;
        return $this;
    }

    /**
     * Gets as serviceFeaturesRequest
     *
     * @return \Calcinai\Siri\Objects\ServiceFeaturesRequest
     */
    public function getServiceFeaturesRequest()
    {
        return $this->serviceFeaturesRequest;
    }

    /**
     * Sets a new serviceFeaturesRequest
     *
     * @param \Calcinai\Siri\Objects\ServiceFeaturesRequest $serviceFeaturesRequest
     * @return self
     */
    public function setServiceFeaturesRequest(\Calcinai\Siri\Objects\ServiceFeaturesRequest $serviceFeaturesRequest)
    {
        $this->serviceFeaturesRequest = $serviceFeaturesRequest;
        return $this;
    }

    /**
     * Gets as productCategoriesRequest
     *
     * @return \Calcinai\Siri\Objects\ProductCategoriesRequest
     */
    public function getProductCategoriesRequest()
    {
        return $this->productCategoriesRequest;
    }

    /**
     * Sets a new productCategoriesRequest
     *
     * @param \Calcinai\Siri\Objects\ProductCategoriesRequest $productCategoriesRequest
     * @return self
     */
    public function setProductCategoriesRequest(\Calcinai\Siri\Objects\ProductCategoriesRequest $productCategoriesRequest)
    {
        $this->productCategoriesRequest = $productCategoriesRequest;
        return $this;
    }

    /**
     * Gets as vehicleFeaturesRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleFeaturesRequest
     */
    public function getVehicleFeaturesRequest()
    {
        return $this->vehicleFeaturesRequest;
    }

    /**
     * Sets a new vehicleFeaturesRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleFeaturesRequest $vehicleFeaturesRequest
     * @return self
     */
    public function setVehicleFeaturesRequest(\Calcinai\Siri\Objects\VehicleFeaturesRequest $vehicleFeaturesRequest)
    {
        $this->vehicleFeaturesRequest = $vehicleFeaturesRequest;
        return $this;
    }

    /**
     * Gets as infoChannelRequest
     *
     * @return \Calcinai\Siri\Objects\InfoChannelRequest
     */
    public function getInfoChannelRequest()
    {
        return $this->infoChannelRequest;
    }

    /**
     * Sets a new infoChannelRequest
     *
     * @param \Calcinai\Siri\Objects\InfoChannelRequest $infoChannelRequest
     * @return self
     */
    public function setInfoChannelRequest(\Calcinai\Siri\Objects\InfoChannelRequest $infoChannelRequest)
    {
        $this->infoChannelRequest = $infoChannelRequest;
        return $this;
    }

    /**
     * Gets as facilityRequest
     *
     * @return \Calcinai\Siri\Objects\FacilityRequest
     */
    public function getFacilityRequest()
    {
        return $this->facilityRequest;
    }

    /**
     * Sets a new facilityRequest
     *
     * @param \Calcinai\Siri\Objects\FacilityRequest $facilityRequest
     * @return self
     */
    public function setFacilityRequest(\Calcinai\Siri\Objects\FacilityRequest $facilityRequest)
    {
        $this->facilityRequest = $facilityRequest;
        return $this;
    }

    /**
     * Gets as subscriptionResponse
     *
     * @return \Calcinai\Siri\Objects\SubscriptionResponse
     */
    public function getSubscriptionResponse()
    {
        return $this->subscriptionResponse;
    }

    /**
     * Sets a new subscriptionResponse
     *
     * @param \Calcinai\Siri\Objects\SubscriptionResponse $subscriptionResponse
     * @return self
     */
    public function setSubscriptionResponse(\Calcinai\Siri\Objects\SubscriptionResponse $subscriptionResponse)
    {
        $this->subscriptionResponse = $subscriptionResponse;
        return $this;
    }

    /**
     * Gets as terminateSubscriptionResponse
     *
     * @return \Calcinai\Siri\Objects\TerminateSubscriptionResponse
     */
    public function getTerminateSubscriptionResponse()
    {
        return $this->terminateSubscriptionResponse;
    }

    /**
     * Sets a new terminateSubscriptionResponse
     *
     * @param \Calcinai\Siri\Objects\TerminateSubscriptionResponse $terminateSubscriptionResponse
     * @return self
     */
    public function setTerminateSubscriptionResponse(\Calcinai\Siri\Objects\TerminateSubscriptionResponse $terminateSubscriptionResponse)
    {
        $this->terminateSubscriptionResponse = $terminateSubscriptionResponse;
        return $this;
    }

    /**
     * Gets as dataReadyAcknowledgement
     *
     * @return \Calcinai\Siri\Objects\DataReadyAcknowledgement
     */
    public function getDataReadyAcknowledgement()
    {
        return $this->dataReadyAcknowledgement;
    }

    /**
     * Sets a new dataReadyAcknowledgement
     *
     * @param \Calcinai\Siri\Objects\DataReadyAcknowledgement $dataReadyAcknowledgement
     * @return self
     */
    public function setDataReadyAcknowledgement(\Calcinai\Siri\Objects\DataReadyAcknowledgement $dataReadyAcknowledgement)
    {
        $this->dataReadyAcknowledgement = $dataReadyAcknowledgement;
        return $this;
    }

    /**
     * Gets as serviceDelivery
     *
     * @return \Calcinai\Siri\Objects\ServiceDelivery
     */
    public function getServiceDelivery()
    {
        return $this->serviceDelivery;
    }

    /**
     * Sets a new serviceDelivery
     *
     * @param \Calcinai\Siri\Objects\ServiceDelivery $serviceDelivery
     * @return self
     */
    public function setServiceDelivery(\Calcinai\Siri\Objects\ServiceDelivery $serviceDelivery)
    {
        $this->serviceDelivery = $serviceDelivery;
        return $this;
    }

    /**
     * Gets as dataReceivedAcknowledgement
     *
     * @return \Calcinai\Siri\Objects\DataReceivedAcknowledgement
     */
    public function getDataReceivedAcknowledgement()
    {
        return $this->dataReceivedAcknowledgement;
    }

    /**
     * Sets a new dataReceivedAcknowledgement
     *
     * @param \Calcinai\Siri\Objects\DataReceivedAcknowledgement $dataReceivedAcknowledgement
     * @return self
     */
    public function setDataReceivedAcknowledgement(\Calcinai\Siri\Objects\DataReceivedAcknowledgement $dataReceivedAcknowledgement)
    {
        $this->dataReceivedAcknowledgement = $dataReceivedAcknowledgement;
        return $this;
    }

    /**
     * Gets as checkStatusResponse
     *
     * @return \Calcinai\Siri\Objects\CheckStatusResponse
     */
    public function getCheckStatusResponse()
    {
        return $this->checkStatusResponse;
    }

    /**
     * Sets a new checkStatusResponse
     *
     * @param \Calcinai\Siri\Objects\CheckStatusResponse $checkStatusResponse
     * @return self
     */
    public function setCheckStatusResponse(\Calcinai\Siri\Objects\CheckStatusResponse $checkStatusResponse)
    {
        $this->checkStatusResponse = $checkStatusResponse;
        return $this;
    }

    /**
     * Gets as capabilitiesResponse
     *
     * Responses with the capabilities of an implementation. Answers a CapabilityRequest
     *
     * @return \Calcinai\Siri\Objects\CapabilitiesResponse
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
     * @param \Calcinai\Siri\Objects\CapabilitiesResponse $capabilitiesResponse
     * @return self
     */
    public function setCapabilitiesResponse(\Calcinai\Siri\Objects\CapabilitiesResponse $capabilitiesResponse)
    {
        $this->capabilitiesResponse = $capabilitiesResponse;
        return $this;
    }

    /**
     * Gets as stopPointsDelivery
     *
     * @return \Calcinai\Siri\Objects\StopPointsDelivery
     */
    public function getStopPointsDelivery()
    {
        return $this->stopPointsDelivery;
    }

    /**
     * Sets a new stopPointsDelivery
     *
     * @param \Calcinai\Siri\Objects\StopPointsDelivery $stopPointsDelivery
     * @return self
     */
    public function setStopPointsDelivery(\Calcinai\Siri\Objects\StopPointsDelivery $stopPointsDelivery)
    {
        $this->stopPointsDelivery = $stopPointsDelivery;
        return $this;
    }

    /**
     * Gets as linesDelivery
     *
     * @return \Calcinai\Siri\Objects\LinesDelivery
     */
    public function getLinesDelivery()
    {
        return $this->linesDelivery;
    }

    /**
     * Sets a new linesDelivery
     *
     * @param \Calcinai\Siri\Objects\LinesDelivery $linesDelivery
     * @return self
     */
    public function setLinesDelivery(\Calcinai\Siri\Objects\LinesDelivery $linesDelivery)
    {
        $this->linesDelivery = $linesDelivery;
        return $this;
    }

    /**
     * Gets as productCategoriesDelivery
     *
     * @return \Calcinai\Siri\Objects\ProductCategoriesDelivery
     */
    public function getProductCategoriesDelivery()
    {
        return $this->productCategoriesDelivery;
    }

    /**
     * Sets a new productCategoriesDelivery
     *
     * @param \Calcinai\Siri\Objects\ProductCategoriesDelivery $productCategoriesDelivery
     * @return self
     */
    public function setProductCategoriesDelivery(\Calcinai\Siri\Objects\ProductCategoriesDelivery $productCategoriesDelivery)
    {
        $this->productCategoriesDelivery = $productCategoriesDelivery;
        return $this;
    }

    /**
     * Gets as serviceFeaturesDelivery
     *
     * @return \Calcinai\Siri\Objects\ServiceFeaturesDelivery
     */
    public function getServiceFeaturesDelivery()
    {
        return $this->serviceFeaturesDelivery;
    }

    /**
     * Sets a new serviceFeaturesDelivery
     *
     * @param \Calcinai\Siri\Objects\ServiceFeaturesDelivery $serviceFeaturesDelivery
     * @return self
     */
    public function setServiceFeaturesDelivery(\Calcinai\Siri\Objects\ServiceFeaturesDelivery $serviceFeaturesDelivery)
    {
        $this->serviceFeaturesDelivery = $serviceFeaturesDelivery;
        return $this;
    }

    /**
     * Gets as vehicleFeaturesDelivery
     *
     * @return \Calcinai\Siri\Objects\VehicleFeaturesDelivery
     */
    public function getVehicleFeaturesDelivery()
    {
        return $this->vehicleFeaturesDelivery;
    }

    /**
     * Sets a new vehicleFeaturesDelivery
     *
     * @param \Calcinai\Siri\Objects\VehicleFeaturesDelivery $vehicleFeaturesDelivery
     * @return self
     */
    public function setVehicleFeaturesDelivery(\Calcinai\Siri\Objects\VehicleFeaturesDelivery $vehicleFeaturesDelivery)
    {
        $this->vehicleFeaturesDelivery = $vehicleFeaturesDelivery;
        return $this;
    }

    /**
     * Gets as infoChannelDelivery
     *
     * @return \Calcinai\Siri\Objects\InfoChannelDelivery
     */
    public function getInfoChannelDelivery()
    {
        return $this->infoChannelDelivery;
    }

    /**
     * Sets a new infoChannelDelivery
     *
     * @param \Calcinai\Siri\Objects\InfoChannelDelivery $infoChannelDelivery
     * @return self
     */
    public function setInfoChannelDelivery(\Calcinai\Siri\Objects\InfoChannelDelivery $infoChannelDelivery)
    {
        $this->infoChannelDelivery = $infoChannelDelivery;
        return $this;
    }

    /**
     * Gets as facilityDelivery
     *
     * @return \Calcinai\Siri\Objects\FacilityDelivery
     */
    public function getFacilityDelivery()
    {
        return $this->facilityDelivery;
    }

    /**
     * Sets a new facilityDelivery
     *
     * @param \Calcinai\Siri\Objects\FacilityDelivery $facilityDelivery
     * @return self
     */
    public function setFacilityDelivery(\Calcinai\Siri\Objects\FacilityDelivery $facilityDelivery)
    {
        $this->facilityDelivery = $facilityDelivery;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

