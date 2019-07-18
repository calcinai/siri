<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficValueType
 *
 * Measured or derived values relating to traffic or individual vehicle movements on a specific section or at a specific point on the road network.
 * XSD Type: TrafficValue
 */
class TrafficValueType extends BasicDataValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics
     */
    private $vehicleCharacteristics = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficValueExtension
     */
    private $trafficValueExtension = null;

    /**
     * Gets as vehicleCharacteristics
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType
     */
    public function getVehicleCharacteristics()
    {
        return $this->vehicleCharacteristics;
    }

    /**
     * Sets a new vehicleCharacteristics
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics
     * @return self
     */
    public function setVehicleCharacteristics(\Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics)
    {
        $this->vehicleCharacteristics = $vehicleCharacteristics;
        return $this;
    }

    /**
     * Gets as trafficValueExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficValueExtension()
    {
        return $this->trafficValueExtension;
    }

    /**
     * Sets a new trafficValueExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficValueExtension
     * @return self
     */
    public function setTrafficValueExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficValueExtension)
    {
        $this->trafficValueExtension = $trafficValueExtension;
        return $this;
    }


}

