<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficSpeedType
 *
 * Averaged measurements of traffic speed.
 * XSD Type: TrafficSpeed
 */
class TrafficSpeedType extends TrafficValueType
{

    /**
     * An averaged measurement of the speed of vehicles at the specified measurement point.
     *
     * @property float $averageVehicleSpeed
     */
    private $averageVehicleSpeed = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SpeedPercentileType $speedPercentile
     */
    private $speedPercentile = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficSpeedExtension
     */
    private $trafficSpeedExtension = null;

    /**
     * Gets as averageVehicleSpeed
     *
     * An averaged measurement of the speed of vehicles at the specified measurement point.
     *
     * @return float
     */
    public function getAverageVehicleSpeed()
    {
        return $this->averageVehicleSpeed;
    }

    /**
     * Sets a new averageVehicleSpeed
     *
     * An averaged measurement of the speed of vehicles at the specified measurement point.
     *
     * @param float $averageVehicleSpeed
     * @return self
     */
    public function setAverageVehicleSpeed($averageVehicleSpeed)
    {
        $this->averageVehicleSpeed = $averageVehicleSpeed;
        return $this;
    }

    /**
     * Gets as speedPercentile
     *
     * @return \Calcinai\Siri\Objects\Datex\SpeedPercentileType
     */
    public function getSpeedPercentile()
    {
        return $this->speedPercentile;
    }

    /**
     * Sets a new speedPercentile
     *
     * @param \Calcinai\Siri\Objects\Datex\SpeedPercentileType $speedPercentile
     * @return self
     */
    public function setSpeedPercentile(\Calcinai\Siri\Objects\Datex\SpeedPercentileType $speedPercentile)
    {
        $this->speedPercentile = $speedPercentile;
        return $this;
    }

    /**
     * Gets as trafficSpeedExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficSpeedExtension()
    {
        return $this->trafficSpeedExtension;
    }

    /**
     * Sets a new trafficSpeedExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficSpeedExtension
     * @return self
     */
    public function setTrafficSpeedExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficSpeedExtension)
    {
        $this->trafficSpeedExtension = $trafficSpeedExtension;
        return $this;
    }


}

