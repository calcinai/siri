<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing VehicleHeadwayType
 *
 * The measured individual vehicle headway, i.e.the distance between this vehicle and the preceding vehicle).
 * XSD Type: VehicleHeadway
 */
class VehicleHeadwayType
{

    /**
     * The measured distance between the front of this vehicle and the rear of the preceding one, in metres at the specified measurement point.
     *
     * @property float $distanceGap
     */
    private $distanceGap = null;

    /**
     * The measured distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle at the specified measurement point.
     *
     * @property float $distanceHeadway
     */
    private $distanceHeadway = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $vehicleHeadwayExtension
     */
    private $vehicleHeadwayExtension = null;

    /**
     * Gets as distanceGap
     *
     * The measured distance between the front of this vehicle and the rear of the preceding one, in metres at the specified measurement point.
     *
     * @return float
     */
    public function getDistanceGap()
    {
        return $this->distanceGap;
    }

    /**
     * Sets a new distanceGap
     *
     * The measured distance between the front of this vehicle and the rear of the preceding one, in metres at the specified measurement point.
     *
     * @param float $distanceGap
     * @return self
     */
    public function setDistanceGap($distanceGap)
    {
        $this->distanceGap = $distanceGap;
        return $this;
    }

    /**
     * Gets as distanceHeadway
     *
     * The measured distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle at the specified measurement point.
     *
     * @return float
     */
    public function getDistanceHeadway()
    {
        return $this->distanceHeadway;
    }

    /**
     * Sets a new distanceHeadway
     *
     * The measured distance between the front (respectively back) of this vehicle and the front (respectively back) of the preceding vehicle at the specified measurement point.
     *
     * @param float $distanceHeadway
     * @return self
     */
    public function setDistanceHeadway($distanceHeadway)
    {
        $this->distanceHeadway = $distanceHeadway;
        return $this;
    }

    /**
     * Gets as vehicleHeadwayExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getVehicleHeadwayExtension()
    {
        return $this->vehicleHeadwayExtension;
    }

    /**
     * Sets a new vehicleHeadwayExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $vehicleHeadwayExtension
     * @return self
     */
    public function setVehicleHeadwayExtension(\Calcinai\Siri\Datex\ExtensionType $vehicleHeadwayExtension)
    {
        $this->vehicleHeadwayExtension = $vehicleHeadwayExtension;
        return $this;
    }


}

