<?php

namespace Calcinai\Siri;

/**
 * Class representing SubscriptionResponseBodyStructureType
 *
 * Type for Body of Subscription Response. Used in WSDL.
 * XSD Type: SubscriptionResponseBodyStructure
 */
class SubscriptionResponseBodyStructureType
{

    /**
     * @property \Calcinai\Siri\ResponseStatus[] $responseStatus
     */
    private $responseStatus = [
        
    ];

    /**
     * Endpoint address of subscription manager if different from that of the Producer or known default.
     *
     * @property string $subscriptionManagerAddress
     */
    private $subscriptionManagerAddress = null;

    /**
     * Time at which service providing the subscription was last started. Can be used to detect restarts. If absent, unknown.
     *
     * @property \DateTime $serviceStartedTime
     */
    private $serviceStartedTime = null;

    /**
     * Adds as responseStatus
     *
     * @return self
     * @param \Calcinai\Siri\ResponseStatus $responseStatus
     */
    public function addToResponseStatus(\Calcinai\Siri\ResponseStatus $responseStatus)
    {
        $this->responseStatus[] = $responseStatus;
        return $this;
    }

    /**
     * isset responseStatus
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponseStatus($index)
    {
        return isset($this->responseStatus[$index]);
    }

    /**
     * unset responseStatus
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponseStatus($index)
    {
        unset($this->responseStatus[$index]);
    }

    /**
     * Gets as responseStatus
     *
     * @return \Calcinai\Siri\ResponseStatus[]
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * Sets a new responseStatus
     *
     * @param \Calcinai\Siri\ResponseStatus[] $responseStatus
     * @return self
     */
    public function setResponseStatus(array $responseStatus)
    {
        $this->responseStatus = $responseStatus;
        return $this;
    }

    /**
     * Gets as subscriptionManagerAddress
     *
     * Endpoint address of subscription manager if different from that of the Producer or known default.
     *
     * @return string
     */
    public function getSubscriptionManagerAddress()
    {
        return $this->subscriptionManagerAddress;
    }

    /**
     * Sets a new subscriptionManagerAddress
     *
     * Endpoint address of subscription manager if different from that of the Producer or known default.
     *
     * @param string $subscriptionManagerAddress
     * @return self
     */
    public function setSubscriptionManagerAddress($subscriptionManagerAddress)
    {
        $this->subscriptionManagerAddress = $subscriptionManagerAddress;
        return $this;
    }

    /**
     * Gets as serviceStartedTime
     *
     * Time at which service providing the subscription was last started. Can be used to detect restarts. If absent, unknown.
     *
     * @return \DateTime
     */
    public function getServiceStartedTime()
    {
        return $this->serviceStartedTime;
    }

    /**
     * Sets a new serviceStartedTime
     *
     * Time at which service providing the subscription was last started. Can be used to detect restarts. If absent, unknown.
     *
     * @param \DateTime $serviceStartedTime
     * @return self
     */
    public function setServiceStartedTime(\DateTime $serviceStartedTime)
    {
        $this->serviceStartedTime = $serviceStartedTime;
        return $this;
    }


}

