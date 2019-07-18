<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing DelaysStructureType
 *
 * Type for easement info.
 * XSD Type: DelaysStructure
 */
class DelaysStructureType
{

    /**
     * Time band into which delay will fall.
     *
     * @property string $delayBand
     */
    private $delayBand = null;

    /**
     * Category of delay.
     *
     * @property string $delayType
     */
    private $delayType = null;

    /**
     * Additional Journey time needed to overcome disruption.
     *
     * @property \DateInterval $delay
     */
    private $delay = null;

    /**
     * Gets as delayBand
     *
     * Time band into which delay will fall.
     *
     * @return string
     */
    public function getDelayBand()
    {
        return $this->delayBand;
    }

    /**
     * Sets a new delayBand
     *
     * Time band into which delay will fall.
     *
     * @param string $delayBand
     * @return self
     */
    public function setDelayBand($delayBand)
    {
        $this->delayBand = $delayBand;
        return $this;
    }

    /**
     * Gets as delayType
     *
     * Category of delay.
     *
     * @return string
     */
    public function getDelayType()
    {
        return $this->delayType;
    }

    /**
     * Sets a new delayType
     *
     * Category of delay.
     *
     * @param string $delayType
     * @return self
     */
    public function setDelayType($delayType)
    {
        $this->delayType = $delayType;
        return $this;
    }

    /**
     * Gets as delay
     *
     * Additional Journey time needed to overcome disruption.
     *
     * @return \DateInterval
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Sets a new delay
     *
     * Additional Journey time needed to overcome disruption.
     *
     * @param \DateInterval $delay
     * @return self
     */
    public function setDelay(\DateInterval $delay)
    {
        $this->delay = $delay;
        return $this;
    }


}

