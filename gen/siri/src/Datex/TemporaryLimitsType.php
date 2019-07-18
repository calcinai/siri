<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TemporaryLimitsType
 *
 * Temporary limits imposed by the network/road operator at a location on the road network which may be advisory or mandatory.
 * XSD Type: TemporaryLimits
 */
class TemporaryLimitsType extends TrafficControlType
{

    /**
     * Temporary limit defining the maximum advisory or mandatory speed of vehicles.
     *
     * @property float $temporarySpeedLimit
     */
    private $temporarySpeedLimit = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $temporaryLimitsExtension
     */
    private $temporaryLimitsExtension = null;

    /**
     * Gets as temporarySpeedLimit
     *
     * Temporary limit defining the maximum advisory or mandatory speed of vehicles.
     *
     * @return float
     */
    public function getTemporarySpeedLimit()
    {
        return $this->temporarySpeedLimit;
    }

    /**
     * Sets a new temporarySpeedLimit
     *
     * Temporary limit defining the maximum advisory or mandatory speed of vehicles.
     *
     * @param float $temporarySpeedLimit
     * @return self
     */
    public function setTemporarySpeedLimit($temporarySpeedLimit)
    {
        $this->temporarySpeedLimit = $temporarySpeedLimit;
        return $this;
    }

    /**
     * Gets as temporaryLimitsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTemporaryLimitsExtension()
    {
        return $this->temporaryLimitsExtension;
    }

    /**
     * Sets a new temporaryLimitsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $temporaryLimitsExtension
     * @return self
     */
    public function setTemporaryLimitsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $temporaryLimitsExtension)
    {
        $this->temporaryLimitsExtension = $temporaryLimitsExtension;
        return $this;
    }


}

