<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ExchangeEnumerationsType
 *
 * Collection of enumerations which are used within the Exchange sub-model.
 * XSD Type: ExchangeEnumerations
 */
class ExchangeEnumerationsType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $exchangeEnumerationsExtension
     */
    private $exchangeEnumerationsExtension = null;

    /**
     * @property string $denyReasonEnum
     */
    private $denyReasonEnum = null;

    /**
     * @property string $subscriptionStateEnum
     */
    private $subscriptionStateEnum = null;

    /**
     * @property string $requestTypeEnum
     */
    private $requestTypeEnum = null;

    /**
     * @property string $changedFlagEnum
     */
    private $changedFlagEnum = null;

    /**
     * @property string $compressionMethodEnum
     */
    private $compressionMethodEnum = null;

    /**
     * @property string $updateMethodEnum
     */
    private $updateMethodEnum = null;

    /**
     * @property string $responseEnum
     */
    private $responseEnum = null;

    /**
     * @property string $operatingModeEnum
     */
    private $operatingModeEnum = null;

    /**
     * Gets as exchangeEnumerationsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getExchangeEnumerationsExtension()
    {
        return $this->exchangeEnumerationsExtension;
    }

    /**
     * Sets a new exchangeEnumerationsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $exchangeEnumerationsExtension
     * @return self
     */
    public function setExchangeEnumerationsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $exchangeEnumerationsExtension)
    {
        $this->exchangeEnumerationsExtension = $exchangeEnumerationsExtension;
        return $this;
    }

    /**
     * Gets as denyReasonEnum
     *
     * @return string
     */
    public function getDenyReasonEnum()
    {
        return $this->denyReasonEnum;
    }

    /**
     * Sets a new denyReasonEnum
     *
     * @param string $denyReasonEnum
     * @return self
     */
    public function setDenyReasonEnum($denyReasonEnum)
    {
        $this->denyReasonEnum = $denyReasonEnum;
        return $this;
    }

    /**
     * Gets as subscriptionStateEnum
     *
     * @return string
     */
    public function getSubscriptionStateEnum()
    {
        return $this->subscriptionStateEnum;
    }

    /**
     * Sets a new subscriptionStateEnum
     *
     * @param string $subscriptionStateEnum
     * @return self
     */
    public function setSubscriptionStateEnum($subscriptionStateEnum)
    {
        $this->subscriptionStateEnum = $subscriptionStateEnum;
        return $this;
    }

    /**
     * Gets as requestTypeEnum
     *
     * @return string
     */
    public function getRequestTypeEnum()
    {
        return $this->requestTypeEnum;
    }

    /**
     * Sets a new requestTypeEnum
     *
     * @param string $requestTypeEnum
     * @return self
     */
    public function setRequestTypeEnum($requestTypeEnum)
    {
        $this->requestTypeEnum = $requestTypeEnum;
        return $this;
    }

    /**
     * Gets as changedFlagEnum
     *
     * @return string
     */
    public function getChangedFlagEnum()
    {
        return $this->changedFlagEnum;
    }

    /**
     * Sets a new changedFlagEnum
     *
     * @param string $changedFlagEnum
     * @return self
     */
    public function setChangedFlagEnum($changedFlagEnum)
    {
        $this->changedFlagEnum = $changedFlagEnum;
        return $this;
    }

    /**
     * Gets as compressionMethodEnum
     *
     * @return string
     */
    public function getCompressionMethodEnum()
    {
        return $this->compressionMethodEnum;
    }

    /**
     * Sets a new compressionMethodEnum
     *
     * @param string $compressionMethodEnum
     * @return self
     */
    public function setCompressionMethodEnum($compressionMethodEnum)
    {
        $this->compressionMethodEnum = $compressionMethodEnum;
        return $this;
    }

    /**
     * Gets as updateMethodEnum
     *
     * @return string
     */
    public function getUpdateMethodEnum()
    {
        return $this->updateMethodEnum;
    }

    /**
     * Sets a new updateMethodEnum
     *
     * @param string $updateMethodEnum
     * @return self
     */
    public function setUpdateMethodEnum($updateMethodEnum)
    {
        $this->updateMethodEnum = $updateMethodEnum;
        return $this;
    }

    /**
     * Gets as responseEnum
     *
     * @return string
     */
    public function getResponseEnum()
    {
        return $this->responseEnum;
    }

    /**
     * Sets a new responseEnum
     *
     * @param string $responseEnum
     * @return self
     */
    public function setResponseEnum($responseEnum)
    {
        $this->responseEnum = $responseEnum;
        return $this;
    }

    /**
     * Gets as operatingModeEnum
     *
     * @return string
     */
    public function getOperatingModeEnum()
    {
        return $this->operatingModeEnum;
    }

    /**
     * Sets a new operatingModeEnum
     *
     * @param string $operatingModeEnum
     * @return self
     */
    public function setOperatingModeEnum($operatingModeEnum)
    {
        $this->operatingModeEnum = $operatingModeEnum;
        return $this;
    }


}

