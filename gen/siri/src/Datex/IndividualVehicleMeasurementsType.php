<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing IndividualVehicleMeasurementsType
 *
 * Measurements relating to individual vehicles.
 * XSD Type: IndividualVehicleMeasurements
 */
class IndividualVehicleMeasurementsType extends TrafficValueType
{

    /**
     * @property \Calcinai\Siri\Datex\VehicleSpeedType $vehicleSpeed
     */
    private $vehicleSpeed = null;

    /**
     * @property \Calcinai\Siri\Datex\VehicleDetectionTimeType $vehicleDetectionTime
     */
    private $vehicleDetectionTime = null;

    /**
     * @property \Calcinai\Siri\Datex\VehicleHeadwayType $vehicleHeadway
     */
    private $vehicleHeadway = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $individualVehicleMeasurementsExtension
     */
    private $individualVehicleMeasurementsExtension = null;

    /**
     * Gets as vehicleSpeed
     *
     * @return \Calcinai\Siri\Datex\VehicleSpeedType
     */
    public function getVehicleSpeed()
    {
        return $this->vehicleSpeed;
    }

    /**
     * Sets a new vehicleSpeed
     *
     * @param \Calcinai\Siri\Datex\VehicleSpeedType $vehicleSpeed
     * @return self
     */
    public function setVehicleSpeed(\Calcinai\Siri\Datex\VehicleSpeedType $vehicleSpeed)
    {
        $this->vehicleSpeed = $vehicleSpeed;
        return $this;
    }

    /**
     * Gets as vehicleDetectionTime
     *
     * @return \Calcinai\Siri\Datex\VehicleDetectionTimeType
     */
    public function getVehicleDetectionTime()
    {
        return $this->vehicleDetectionTime;
    }

    /**
     * Sets a new vehicleDetectionTime
     *
     * @param \Calcinai\Siri\Datex\VehicleDetectionTimeType $vehicleDetectionTime
     * @return self
     */
    public function setVehicleDetectionTime(\Calcinai\Siri\Datex\VehicleDetectionTimeType $vehicleDetectionTime)
    {
        $this->vehicleDetectionTime = $vehicleDetectionTime;
        return $this;
    }

    /**
     * Gets as vehicleHeadway
     *
     * @return \Calcinai\Siri\Datex\VehicleHeadwayType
     */
    public function getVehicleHeadway()
    {
        return $this->vehicleHeadway;
    }

    /**
     * Sets a new vehicleHeadway
     *
     * @param \Calcinai\Siri\Datex\VehicleHeadwayType $vehicleHeadway
     * @return self
     */
    public function setVehicleHeadway(\Calcinai\Siri\Datex\VehicleHeadwayType $vehicleHeadway)
    {
        $this->vehicleHeadway = $vehicleHeadway;
        return $this;
    }

    /**
     * Gets as individualVehicleMeasurementsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getIndividualVehicleMeasurementsExtension()
    {
        return $this->individualVehicleMeasurementsExtension;
    }

    /**
     * Sets a new individualVehicleMeasurementsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $individualVehicleMeasurementsExtension
     * @return self
     */
    public function setIndividualVehicleMeasurementsExtension(\Calcinai\Siri\Datex\ExtensionType $individualVehicleMeasurementsExtension)
    {
        $this->individualVehicleMeasurementsExtension = $individualVehicleMeasurementsExtension;
        return $this;
    }


}

