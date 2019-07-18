<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SpeedPercentileType
 *
 * Details of percentage of vehicles whose speeds fall below a stated threshold, expressed as a percentile of the observation set.
 * XSD Type: SpeedPercentile
 */
class SpeedPercentileType
{

    /**
     * The percentage of vehicles from the observation set whose speed falls below the stated value (i.e. the percentile expressed as a percentage).
     *
     * @property float $threshold
     */
    private $threshold = null;

    /**
     * The value of the speed corresponding to the associated percentile (defined in "threshold").
     *
     * @property float $value
     */
    private $value = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $speedPercentileExtension
     */
    private $speedPercentileExtension = null;

    /**
     * Gets as threshold
     *
     * The percentage of vehicles from the observation set whose speed falls below the stated value (i.e. the percentile expressed as a percentage).
     *
     * @return float
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * Sets a new threshold
     *
     * The percentage of vehicles from the observation set whose speed falls below the stated value (i.e. the percentile expressed as a percentage).
     *
     * @param float $threshold
     * @return self
     */
    public function setThreshold($threshold)
    {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Gets as value
     *
     * The value of the speed corresponding to the associated percentile (defined in "threshold").
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the speed corresponding to the associated percentile (defined in "threshold").
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as speedPercentileExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSpeedPercentileExtension()
    {
        return $this->speedPercentileExtension;
    }

    /**
     * Sets a new speedPercentileExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $speedPercentileExtension
     * @return self
     */
    public function setSpeedPercentileExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $speedPercentileExtension)
    {
        $this->speedPercentileExtension = $speedPercentileExtension;
        return $this;
    }


}

