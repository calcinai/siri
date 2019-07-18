<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing DelaysType
 *
 * The details of the delays being caused by the situation element defined in the situation record.
 * XSD Type: Delays
 */
class DelaysType
{

    /**
     * The coded additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions".
     *
     * @property string $delayCoded
     */
    private $delayCoded = null;

    /**
     * Course classification of the delay.
     *
     * @property string $delaysType
     */
    private $delaysType = null;

    /**
     * The value of the additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions", given in seconds.
     *
     * @property float $delayTimeValue
     */
    private $delayTimeValue = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $delaysExtension
     */
    private $delaysExtension = null;

    /**
     * Gets as delayCoded
     *
     * The coded additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions".
     *
     * @return string
     */
    public function getDelayCoded()
    {
        return $this->delayCoded;
    }

    /**
     * Sets a new delayCoded
     *
     * The coded additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions".
     *
     * @param string $delayCoded
     * @return self
     */
    public function setDelayCoded($delayCoded)
    {
        $this->delayCoded = $delayCoded;
        return $this;
    }

    /**
     * Gets as delaysType
     *
     * Course classification of the delay.
     *
     * @return string
     */
    public function getDelaysType()
    {
        return $this->delaysType;
    }

    /**
     * Sets a new delaysType
     *
     * Course classification of the delay.
     *
     * @param string $delaysType
     * @return self
     */
    public function setDelaysType($delaysType)
    {
        $this->delaysType = $delaysType;
        return $this;
    }

    /**
     * Gets as delayTimeValue
     *
     * The value of the additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions", given in seconds.
     *
     * @return float
     */
    public function getDelayTimeValue()
    {
        return $this->delayTimeValue;
    }

    /**
     * Sets a new delayTimeValue
     *
     * The value of the additional travel time due to adverse travel conditions of any kind, when compared to "normal conditions", given in seconds.
     *
     * @param float $delayTimeValue
     * @return self
     */
    public function setDelayTimeValue($delayTimeValue)
    {
        $this->delayTimeValue = $delayTimeValue;
        return $this;
    }

    /**
     * Gets as delaysExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getDelaysExtension()
    {
        return $this->delaysExtension;
    }

    /**
     * Sets a new delaysExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $delaysExtension
     * @return self
     */
    public function setDelaysExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $delaysExtension)
    {
        $this->delaysExtension = $delaysExtension;
        return $this;
    }


}

