<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ImpactType
 *
 * High level assessment of the impact that an unplanned event or operator action defined by the situation record has on the driving conditions.
 * XSD Type: Impact
 */
class ImpactType
{

    /**
     * Assessment of the impact on traffic conditions resulting from the event.
     *
     * @property string $impactOnTraffic
     */
    private $impactOnTraffic = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ImpactDetailsType $impactDetails
     */
    private $impactDetails = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\DelaysType $delays
     */
    private $delays = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $impactExtension
     */
    private $impactExtension = null;

    /**
     * Gets as impactOnTraffic
     *
     * Assessment of the impact on traffic conditions resulting from the event.
     *
     * @return string
     */
    public function getImpactOnTraffic()
    {
        return $this->impactOnTraffic;
    }

    /**
     * Sets a new impactOnTraffic
     *
     * Assessment of the impact on traffic conditions resulting from the event.
     *
     * @param string $impactOnTraffic
     * @return self
     */
    public function setImpactOnTraffic($impactOnTraffic)
    {
        $this->impactOnTraffic = $impactOnTraffic;
        return $this;
    }

    /**
     * Gets as impactDetails
     *
     * @return \Calcinai\Siri\Objects\Datex\ImpactDetailsType
     */
    public function getImpactDetails()
    {
        return $this->impactDetails;
    }

    /**
     * Sets a new impactDetails
     *
     * @param \Calcinai\Siri\Objects\Datex\ImpactDetailsType $impactDetails
     * @return self
     */
    public function setImpactDetails(\Calcinai\Siri\Objects\Datex\ImpactDetailsType $impactDetails)
    {
        $this->impactDetails = $impactDetails;
        return $this;
    }

    /**
     * Gets as delays
     *
     * @return \Calcinai\Siri\Objects\Datex\DelaysType
     */
    public function getDelays()
    {
        return $this->delays;
    }

    /**
     * Sets a new delays
     *
     * @param \Calcinai\Siri\Objects\Datex\DelaysType $delays
     * @return self
     */
    public function setDelays(\Calcinai\Siri\Objects\Datex\DelaysType $delays)
    {
        $this->delays = $delays;
        return $this;
    }

    /**
     * Gets as impactExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getImpactExtension()
    {
        return $this->impactExtension;
    }

    /**
     * Sets a new impactExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $impactExtension
     * @return self
     */
    public function setImpactExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $impactExtension)
    {
        $this->impactExtension = $impactExtension;
        return $this;
    }


}

