<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing LaneUsageType
 *
 * Supplementary lane usage advice.
 * XSD Type: LaneUsage
 */
class LaneUsageType extends AdviceType
{

    /**
     * Additional information advising of potential lane usage that can be provided to travellers.
     *
     * @property string $laneUsageAdvice
     */
    private $laneUsageAdvice = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $laneUsageExtension
     */
    private $laneUsageExtension = null;

    /**
     * Gets as laneUsageAdvice
     *
     * Additional information advising of potential lane usage that can be provided to travellers.
     *
     * @return string
     */
    public function getLaneUsageAdvice()
    {
        return $this->laneUsageAdvice;
    }

    /**
     * Sets a new laneUsageAdvice
     *
     * Additional information advising of potential lane usage that can be provided to travellers.
     *
     * @param string $laneUsageAdvice
     * @return self
     */
    public function setLaneUsageAdvice($laneUsageAdvice)
    {
        $this->laneUsageAdvice = $laneUsageAdvice;
        return $this;
    }

    /**
     * Gets as laneUsageExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getLaneUsageExtension()
    {
        return $this->laneUsageExtension;
    }

    /**
     * Sets a new laneUsageExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $laneUsageExtension
     * @return self
     */
    public function setLaneUsageExtension(\Calcinai\Siri\Datex\ExtensionType $laneUsageExtension)
    {
        $this->laneUsageExtension = $laneUsageExtension;
        return $this;
    }


}

