<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SubscriptionResponseStructureType
 *
 * Type for Subscription Response.
 * XSD Type: SubscriptionResponseStructure
 */
class SubscriptionResponseStructureType extends ResponseEndpointStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ResponseStatus $responseStatus
     */
    private $responseStatus = null;

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
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as responseStatus
     *
     * @return \Calcinai\Siri\Objects\ResponseStatus
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * Sets a new responseStatus
     *
     * @param \Calcinai\Siri\Objects\ResponseStatus $responseStatus
     * @return self
     */
    public function setResponseStatus(\Calcinai\Siri\Objects\ResponseStatus $responseStatus)
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

