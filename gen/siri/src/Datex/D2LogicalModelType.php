<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing D2LogicalModelType
 *
 * The DATEX II logical model comprising exchange, content payload and management sub-models.
 * XSD Type: D2LogicalModel
 */
class D2LogicalModelType
{

    /**
     * @property mixed $modelBaseVersion
     */
    private $modelBaseVersion = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExchangeType $exchange
     */
    private $exchange = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PayloadPublicationType $payloadPublication
     */
    private $payloadPublication = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $d2LogicalModelExtension
     */
    private $d2LogicalModelExtension = null;

    /**
     * Gets as modelBaseVersion
     *
     * @return mixed
     */
    public function getModelBaseVersion()
    {
        return $this->modelBaseVersion;
    }

    /**
     * Sets a new modelBaseVersion
     *
     * @param mixed $modelBaseVersion
     * @return self
     */
    public function setModelBaseVersion($modelBaseVersion)
    {
        $this->modelBaseVersion = $modelBaseVersion;
        return $this;
    }

    /**
     * Gets as exchange
     *
     * @return \Calcinai\Siri\Objects\Datex\ExchangeType
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     * Sets a new exchange
     *
     * @param \Calcinai\Siri\Objects\Datex\ExchangeType $exchange
     * @return self
     */
    public function setExchange(\Calcinai\Siri\Objects\Datex\ExchangeType $exchange)
    {
        $this->exchange = $exchange;
        return $this;
    }

    /**
     * Gets as payloadPublication
     *
     * @return \Calcinai\Siri\Objects\Datex\PayloadPublicationType
     */
    public function getPayloadPublication()
    {
        return $this->payloadPublication;
    }

    /**
     * Sets a new payloadPublication
     *
     * @param \Calcinai\Siri\Objects\Datex\PayloadPublicationType $payloadPublication
     * @return self
     */
    public function setPayloadPublication(\Calcinai\Siri\Objects\Datex\PayloadPublicationType $payloadPublication)
    {
        $this->payloadPublication = $payloadPublication;
        return $this;
    }

    /**
     * Gets as d2LogicalModelExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getD2LogicalModelExtension()
    {
        return $this->d2LogicalModelExtension;
    }

    /**
     * Sets a new d2LogicalModelExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $d2LogicalModelExtension
     * @return self
     */
    public function setD2LogicalModelExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $d2LogicalModelExtension)
    {
        $this->d2LogicalModelExtension = $d2LogicalModelExtension;
        return $this;
    }


}

