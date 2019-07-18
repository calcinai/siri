<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VehicleSpeedType
 *
 * Measurement of individual vehicle speed.
 * XSD Type: VehicleSpeed
 */
class VehicleSpeedType
{

    /**
     * The measured speed of the individual vehicle at the specified measurement point.
     *
     * @property float $individualVehicleSpeed
     */
    private $individualVehicleSpeed = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleSpeedExtension
     */
    private $vehicleSpeedExtension = null;

    /**
     * Gets as individualVehicleSpeed
     *
     * The measured speed of the individual vehicle at the specified measurement point.
     *
     * @return float
     */
    public function getIndividualVehicleSpeed()
    {
        return $this->individualVehicleSpeed;
    }

    /**
     * Sets a new individualVehicleSpeed
     *
     * The measured speed of the individual vehicle at the specified measurement point.
     *
     * @param float $individualVehicleSpeed
     * @return self
     */
    public function setIndividualVehicleSpeed($individualVehicleSpeed)
    {
        $this->individualVehicleSpeed = $individualVehicleSpeed;
        return $this;
    }

    /**
     * Gets as vehicleSpeedExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVehicleSpeedExtension()
    {
        return $this->vehicleSpeedExtension;
    }

    /**
     * Sets a new vehicleSpeedExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleSpeedExtension
     * @return self
     */
    public function setVehicleSpeedExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $vehicleSpeedExtension)
    {
        $this->vehicleSpeedExtension = $vehicleSpeedExtension;
        return $this;
    }


}

