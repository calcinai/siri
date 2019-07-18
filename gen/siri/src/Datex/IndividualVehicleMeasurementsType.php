<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing IndividualVehicleMeasurementsType
 *
 * Measurements relating to individual vehicles.
 * XSD Type: IndividualVehicleMeasurements
 */
class IndividualVehicleMeasurementsType extends TrafficValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleSpeedType $vehicleSpeed
     */
    private $vehicleSpeed = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleDetectionTimeType $vehicleDetectionTime
     */
    private $vehicleDetectionTime = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleHeadwayType $vehicleHeadway
     */
    private $vehicleHeadway = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $individualVehicleMeasurementsExtension
     */
    private $individualVehicleMeasurementsExtension = null;

    /**
     * Gets as vehicleSpeed
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleSpeedType
     */
    public function getVehicleSpeed()
    {
        return $this->vehicleSpeed;
    }

    /**
     * Sets a new vehicleSpeed
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleSpeedType $vehicleSpeed
     * @return self
     */
    public function setVehicleSpeed(\Calcinai\Siri\Objects\Datex\VehicleSpeedType $vehicleSpeed)
    {
        $this->vehicleSpeed = $vehicleSpeed;
        return $this;
    }

    /**
     * Gets as vehicleDetectionTime
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleDetectionTimeType
     */
    public function getVehicleDetectionTime()
    {
        return $this->vehicleDetectionTime;
    }

    /**
     * Sets a new vehicleDetectionTime
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleDetectionTimeType $vehicleDetectionTime
     * @return self
     */
    public function setVehicleDetectionTime(\Calcinai\Siri\Objects\Datex\VehicleDetectionTimeType $vehicleDetectionTime)
    {
        $this->vehicleDetectionTime = $vehicleDetectionTime;
        return $this;
    }

    /**
     * Gets as vehicleHeadway
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleHeadwayType
     */
    public function getVehicleHeadway()
    {
        return $this->vehicleHeadway;
    }

    /**
     * Sets a new vehicleHeadway
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleHeadwayType $vehicleHeadway
     * @return self
     */
    public function setVehicleHeadway(\Calcinai\Siri\Objects\Datex\VehicleHeadwayType $vehicleHeadway)
    {
        $this->vehicleHeadway = $vehicleHeadway;
        return $this;
    }

    /**
     * Gets as individualVehicleMeasurementsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getIndividualVehicleMeasurementsExtension()
    {
        return $this->individualVehicleMeasurementsExtension;
    }

    /**
     * Sets a new individualVehicleMeasurementsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $individualVehicleMeasurementsExtension
     * @return self
     */
    public function setIndividualVehicleMeasurementsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $individualVehicleMeasurementsExtension)
    {
        $this->individualVehicleMeasurementsExtension = $individualVehicleMeasurementsExtension;
        return $this;
    }


}

