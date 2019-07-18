<?php

namespace Calcinai\Siri;

/**
 * Class representing ServiceRequestContextStructureType
 *
 * Configurable context for requests. Intended Primarily as a documentation mechanism.
 * XSD Type: ServiceRequestContextStructure
 */
class ServiceRequestContextStructureType
{

    /**
     * Address to which CheckStatus requests are to be sent.
     *
     * @property string $checkStatusAddress
     */
    private $checkStatusAddress = null;

    /**
     * Address to which subscription requests are to be sent.
     *
     * @property string $subscribeAddress
     */
    private $subscribeAddress = null;

    /**
     * Address to which subscription requests are to be sent. If absent, same as SubscribeAddress.
     *
     * @property string $manageSubscriptionAddress
     */
    private $manageSubscriptionAddress = null;

    /**
     * Address to which requests are to return data.
     *
     * @property string $getDataAddress
     */
    private $getDataAddress = null;

    /**
     * Address to which CheckStatus responses and heartbeats are to be sent. If absent, same as SubscriberAddress.
     *
     * @property string $statusResponseAddress
     */
    private $statusResponseAddress = null;

    /**
     * Address to which subscription responses are to be sent.
     *
     * @property string $subscriberAddress
     */
    private $subscriberAddress = null;

    /**
     * Address to which notifcations requests are to be sent. If absent, same as SubscriberAddress.
     *
     * @property string $notifyAddress
     */
    private $notifyAddress = null;

    /**
     * Address to which data is to be sent. If absent, same as NotifyAddress.
     *
     * @property string $consumerAddress
     */
    private $consumerAddress = null;

    /**
     * Default names pace used to scope data identifiers.
     *
     * @property \Calcinai\Siri\DataNameSpacesStructureType $dataNameSpaces
     */
    private $dataNameSpaces = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @property string $wgsDecimalDegrees
     */
    private $wgsDecimalDegrees = null;

    /**
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @property string $gmlCoordinateFormat
     */
    private $gmlCoordinateFormat = null;

    /**
     * Maximum data horizon for requests.
     *
     * @property \DateInterval $dataHorizon
     */
    private $dataHorizon = null;

    /**
     * Timeout for requests. [Should this be separate for each type?]
     *
     * @property \DateInterval $requestTimeout
     */
    private $requestTimeout = null;

    /**
     * Whether Delivery is fetched or retrieved.
     *
     * @property string $deliveryMethod
     */
    private $deliveryMethod = null;

    /**
     * Whether multi-part delivery is allowed, i.e. the breaking up of updates into more than one delivery messages with a MoreData flag,
     *
     * @property bool $multipartDespatch
     */
    private $multipartDespatch = null;

    /**
     * Whether Consumers should issue an acknowledgement on successful receipt of a delivery. Default false.
     *
     * @property bool $confirmDelivery
     */
    private $confirmDelivery = null;

    /**
     * Maximum Number of subscriptions that can be sustained by the subscriber. If absent no limit.
     *
     * @property int $maximimumNumberOfSubscriptions
     */
    private $maximimumNumberOfSubscriptions = null;

    /**
     * Who may make a prediction.
     *
     * @property string $allowedPredictors
     */
    private $allowedPredictors = null;

    /**
     * Name of prediction method used.
     *
     * @property string $predictionFunction
     */
    private $predictionFunction = null;

    /**
     * Gets as checkStatusAddress
     *
     * Address to which CheckStatus requests are to be sent.
     *
     * @return string
     */
    public function getCheckStatusAddress()
    {
        return $this->checkStatusAddress;
    }

    /**
     * Sets a new checkStatusAddress
     *
     * Address to which CheckStatus requests are to be sent.
     *
     * @param string $checkStatusAddress
     * @return self
     */
    public function setCheckStatusAddress($checkStatusAddress)
    {
        $this->checkStatusAddress = $checkStatusAddress;
        return $this;
    }

    /**
     * Gets as subscribeAddress
     *
     * Address to which subscription requests are to be sent.
     *
     * @return string
     */
    public function getSubscribeAddress()
    {
        return $this->subscribeAddress;
    }

    /**
     * Sets a new subscribeAddress
     *
     * Address to which subscription requests are to be sent.
     *
     * @param string $subscribeAddress
     * @return self
     */
    public function setSubscribeAddress($subscribeAddress)
    {
        $this->subscribeAddress = $subscribeAddress;
        return $this;
    }

    /**
     * Gets as manageSubscriptionAddress
     *
     * Address to which subscription requests are to be sent. If absent, same as SubscribeAddress.
     *
     * @return string
     */
    public function getManageSubscriptionAddress()
    {
        return $this->manageSubscriptionAddress;
    }

    /**
     * Sets a new manageSubscriptionAddress
     *
     * Address to which subscription requests are to be sent. If absent, same as SubscribeAddress.
     *
     * @param string $manageSubscriptionAddress
     * @return self
     */
    public function setManageSubscriptionAddress($manageSubscriptionAddress)
    {
        $this->manageSubscriptionAddress = $manageSubscriptionAddress;
        return $this;
    }

    /**
     * Gets as getDataAddress
     *
     * Address to which requests are to return data.
     *
     * @return string
     */
    public function getGetDataAddress()
    {
        return $this->getDataAddress;
    }

    /**
     * Sets a new getDataAddress
     *
     * Address to which requests are to return data.
     *
     * @param string $getDataAddress
     * @return self
     */
    public function setGetDataAddress($getDataAddress)
    {
        $this->getDataAddress = $getDataAddress;
        return $this;
    }

    /**
     * Gets as statusResponseAddress
     *
     * Address to which CheckStatus responses and heartbeats are to be sent. If absent, same as SubscriberAddress.
     *
     * @return string
     */
    public function getStatusResponseAddress()
    {
        return $this->statusResponseAddress;
    }

    /**
     * Sets a new statusResponseAddress
     *
     * Address to which CheckStatus responses and heartbeats are to be sent. If absent, same as SubscriberAddress.
     *
     * @param string $statusResponseAddress
     * @return self
     */
    public function setStatusResponseAddress($statusResponseAddress)
    {
        $this->statusResponseAddress = $statusResponseAddress;
        return $this;
    }

    /**
     * Gets as subscriberAddress
     *
     * Address to which subscription responses are to be sent.
     *
     * @return string
     */
    public function getSubscriberAddress()
    {
        return $this->subscriberAddress;
    }

    /**
     * Sets a new subscriberAddress
     *
     * Address to which subscription responses are to be sent.
     *
     * @param string $subscriberAddress
     * @return self
     */
    public function setSubscriberAddress($subscriberAddress)
    {
        $this->subscriberAddress = $subscriberAddress;
        return $this;
    }

    /**
     * Gets as notifyAddress
     *
     * Address to which notifcations requests are to be sent. If absent, same as SubscriberAddress.
     *
     * @return string
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * Sets a new notifyAddress
     *
     * Address to which notifcations requests are to be sent. If absent, same as SubscriberAddress.
     *
     * @param string $notifyAddress
     * @return self
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
        return $this;
    }

    /**
     * Gets as consumerAddress
     *
     * Address to which data is to be sent. If absent, same as NotifyAddress.
     *
     * @return string
     */
    public function getConsumerAddress()
    {
        return $this->consumerAddress;
    }

    /**
     * Sets a new consumerAddress
     *
     * Address to which data is to be sent. If absent, same as NotifyAddress.
     *
     * @param string $consumerAddress
     * @return self
     */
    public function setConsumerAddress($consumerAddress)
    {
        $this->consumerAddress = $consumerAddress;
        return $this;
    }

    /**
     * Gets as dataNameSpaces
     *
     * Default names pace used to scope data identifiers.
     *
     * @return \Calcinai\Siri\DataNameSpacesStructureType
     */
    public function getDataNameSpaces()
    {
        return $this->dataNameSpaces;
    }

    /**
     * Sets a new dataNameSpaces
     *
     * Default names pace used to scope data identifiers.
     *
     * @param \Calcinai\Siri\DataNameSpacesStructureType $dataNameSpaces
     * @return self
     */
    public function setDataNameSpaces(\Calcinai\Siri\DataNameSpacesStructureType $dataNameSpaces)
    {
        $this->dataNameSpaces = $dataNameSpaces;
        return $this;
    }

    /**
     * Gets as language
     *
     * Preferred language in which to return text values.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Preferred language in which to return text values.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as wgsDecimalDegrees
     *
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @return string
     */
    public function getWgsDecimalDegrees()
    {
        return $this->wgsDecimalDegrees;
    }

    /**
     * Sets a new wgsDecimalDegrees
     *
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @param string $wgsDecimalDegrees
     * @return self
     */
    public function setWgsDecimalDegrees($wgsDecimalDegrees)
    {
        $this->wgsDecimalDegrees = $wgsDecimalDegrees;
        return $this;
    }

    /**
     * Gets as gmlCoordinateFormat
     *
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @return string
     */
    public function getGmlCoordinateFormat()
    {
        return $this->gmlCoordinateFormat;
    }

    /**
     * Sets a new gmlCoordinateFormat
     *
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @param string $gmlCoordinateFormat
     * @return self
     */
    public function setGmlCoordinateFormat($gmlCoordinateFormat)
    {
        $this->gmlCoordinateFormat = $gmlCoordinateFormat;
        return $this;
    }

    /**
     * Gets as dataHorizon
     *
     * Maximum data horizon for requests.
     *
     * @return \DateInterval
     */
    public function getDataHorizon()
    {
        return $this->dataHorizon;
    }

    /**
     * Sets a new dataHorizon
     *
     * Maximum data horizon for requests.
     *
     * @param \DateInterval $dataHorizon
     * @return self
     */
    public function setDataHorizon(\DateInterval $dataHorizon)
    {
        $this->dataHorizon = $dataHorizon;
        return $this;
    }

    /**
     * Gets as requestTimeout
     *
     * Timeout for requests. [Should this be separate for each type?]
     *
     * @return \DateInterval
     */
    public function getRequestTimeout()
    {
        return $this->requestTimeout;
    }

    /**
     * Sets a new requestTimeout
     *
     * Timeout for requests. [Should this be separate for each type?]
     *
     * @param \DateInterval $requestTimeout
     * @return self
     */
    public function setRequestTimeout(\DateInterval $requestTimeout)
    {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    /**
     * Gets as deliveryMethod
     *
     * Whether Delivery is fetched or retrieved.
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets a new deliveryMethod
     *
     * Whether Delivery is fetched or retrieved.
     *
     * @param string $deliveryMethod
     * @return self
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    /**
     * Gets as multipartDespatch
     *
     * Whether multi-part delivery is allowed, i.e. the breaking up of updates into more than one delivery messages with a MoreData flag,
     *
     * @return bool
     */
    public function getMultipartDespatch()
    {
        return $this->multipartDespatch;
    }

    /**
     * Sets a new multipartDespatch
     *
     * Whether multi-part delivery is allowed, i.e. the breaking up of updates into more than one delivery messages with a MoreData flag,
     *
     * @param bool $multipartDespatch
     * @return self
     */
    public function setMultipartDespatch($multipartDespatch)
    {
        $this->multipartDespatch = $multipartDespatch;
        return $this;
    }

    /**
     * Gets as confirmDelivery
     *
     * Whether Consumers should issue an acknowledgement on successful receipt of a delivery. Default false.
     *
     * @return bool
     */
    public function getConfirmDelivery()
    {
        return $this->confirmDelivery;
    }

    /**
     * Sets a new confirmDelivery
     *
     * Whether Consumers should issue an acknowledgement on successful receipt of a delivery. Default false.
     *
     * @param bool $confirmDelivery
     * @return self
     */
    public function setConfirmDelivery($confirmDelivery)
    {
        $this->confirmDelivery = $confirmDelivery;
        return $this;
    }

    /**
     * Gets as maximimumNumberOfSubscriptions
     *
     * Maximum Number of subscriptions that can be sustained by the subscriber. If absent no limit.
     *
     * @return int
     */
    public function getMaximimumNumberOfSubscriptions()
    {
        return $this->maximimumNumberOfSubscriptions;
    }

    /**
     * Sets a new maximimumNumberOfSubscriptions
     *
     * Maximum Number of subscriptions that can be sustained by the subscriber. If absent no limit.
     *
     * @param int $maximimumNumberOfSubscriptions
     * @return self
     */
    public function setMaximimumNumberOfSubscriptions($maximimumNumberOfSubscriptions)
    {
        $this->maximimumNumberOfSubscriptions = $maximimumNumberOfSubscriptions;
        return $this;
    }

    /**
     * Gets as allowedPredictors
     *
     * Who may make a prediction.
     *
     * @return string
     */
    public function getAllowedPredictors()
    {
        return $this->allowedPredictors;
    }

    /**
     * Sets a new allowedPredictors
     *
     * Who may make a prediction.
     *
     * @param string $allowedPredictors
     * @return self
     */
    public function setAllowedPredictors($allowedPredictors)
    {
        $this->allowedPredictors = $allowedPredictors;
        return $this;
    }

    /**
     * Gets as predictionFunction
     *
     * Name of prediction method used.
     *
     * @return string
     */
    public function getPredictionFunction()
    {
        return $this->predictionFunction;
    }

    /**
     * Sets a new predictionFunction
     *
     * Name of prediction method used.
     *
     * @param string $predictionFunction
     * @return self
     */
    public function setPredictionFunction($predictionFunction)
    {
        $this->predictionFunction = $predictionFunction;
        return $this;
    }


}

