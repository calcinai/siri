<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TrafficHeadwayType
 *
 * Averaged measurement of traffic headway, i.e. the distance between vehicles.
 * XSD Type: TrafficHeadway
 */
class TrafficHeadwayType extends TrafficValueType
{

    /**
     * The average distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @property float $averageDistanceHeadway
     */
    private $averageDistanceHeadway = null;

    /**
     * The average time gap between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @property float $averageTimeHeadway
     */
    private $averageTimeHeadway = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficHeadwayExtension
     */
    private $trafficHeadwayExtension = null;

    /**
     * Gets as averageDistanceHeadway
     *
     * The average distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @return float
     */
    public function getAverageDistanceHeadway()
    {
        return $this->averageDistanceHeadway;
    }

    /**
     * Sets a new averageDistanceHeadway
     *
     * The average distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @param float $averageDistanceHeadway
     * @return self
     */
    public function setAverageDistanceHeadway($averageDistanceHeadway)
    {
        $this->averageDistanceHeadway = $averageDistanceHeadway;
        return $this;
    }

    /**
     * Gets as averageTimeHeadway
     *
     * The average time gap between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @return float
     */
    public function getAverageTimeHeadway()
    {
        return $this->averageTimeHeadway;
    }

    /**
     * Sets a new averageTimeHeadway
     *
     * The average time gap between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle, averaged for all vehicles within a defined measurement period at the specified measurement point.
     *
     * @param float $averageTimeHeadway
     * @return self
     */
    public function setAverageTimeHeadway($averageTimeHeadway)
    {
        $this->averageTimeHeadway = $averageTimeHeadway;
        return $this;
    }

    /**
     * Gets as trafficHeadwayExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficHeadwayExtension()
    {
        return $this->trafficHeadwayExtension;
    }

    /**
     * Sets a new trafficHeadwayExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficHeadwayExtension
     * @return self
     */
    public function setTrafficHeadwayExtension(\Calcinai\Siri\Datex\ExtensionType $trafficHeadwayExtension)
    {
        $this->trafficHeadwayExtension = $trafficHeadwayExtension;
        return $this;
    }


}

