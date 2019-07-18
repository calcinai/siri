<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficConcentrationType
 *
 * Averaged measurements of traffic concentration.
 * XSD Type: TrafficConcentration
 */
class TrafficConcentrationType extends TrafficValueType
{

    /**
     * An averaged measurement of the concentration of vehicles at the specified measurement point.
     *
     * @property int $concentration
     */
    private $concentration = null;

    /**
     * An averaged measurement of the percentage of time that a section of road at the specified measurement point is occuppied by vehicles.
     *
     * @property float $occupancy
     */
    private $occupancy = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficConcentrationExtension
     */
    private $trafficConcentrationExtension = null;

    /**
     * Gets as concentration
     *
     * An averaged measurement of the concentration of vehicles at the specified measurement point.
     *
     * @return int
     */
    public function getConcentration()
    {
        return $this->concentration;
    }

    /**
     * Sets a new concentration
     *
     * An averaged measurement of the concentration of vehicles at the specified measurement point.
     *
     * @param int $concentration
     * @return self
     */
    public function setConcentration($concentration)
    {
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * An averaged measurement of the percentage of time that a section of road at the specified measurement point is occuppied by vehicles.
     *
     * @return float
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * An averaged measurement of the percentage of time that a section of road at the specified measurement point is occuppied by vehicles.
     *
     * @param float $occupancy
     * @return self
     */
    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Gets as trafficConcentrationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficConcentrationExtension()
    {
        return $this->trafficConcentrationExtension;
    }

    /**
     * Sets a new trafficConcentrationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficConcentrationExtension
     * @return self
     */
    public function setTrafficConcentrationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficConcentrationExtension)
    {
        $this->trafficConcentrationExtension = $trafficConcentrationExtension;
        return $this;
    }


}

