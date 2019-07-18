<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VehiclesInvolvedType
 *
 * Overview of the vehicles involved.
 * XSD Type: VehiclesInvolved
 */
class VehiclesInvolvedType
{

    /**
     * The number of vehicles involved.
     *
     * @property int $numberOfVehicles
     */
    private $numberOfVehicles = null;

    /**
     * The status of the vehicle(s) involved.
     *
     * @property string $vehicleStatus
     */
    private $vehicleStatus = null;

    /**
     * The type of vehicle(s) involved.
     *
     * @property string $vehicleType
     */
    private $vehicleType = null;

    /**
     * The type of usage of the vehicle (i.e. for what purpose is the vehicle being used).
     *
     * @property string $vehicleUsage
     */
    private $vehicleUsage = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $vehiclesInvolvedExtension
     */
    private $vehiclesInvolvedExtension = null;

    /**
     * Gets as numberOfVehicles
     *
     * The number of vehicles involved.
     *
     * @return int
     */
    public function getNumberOfVehicles()
    {
        return $this->numberOfVehicles;
    }

    /**
     * Sets a new numberOfVehicles
     *
     * The number of vehicles involved.
     *
     * @param int $numberOfVehicles
     * @return self
     */
    public function setNumberOfVehicles($numberOfVehicles)
    {
        $this->numberOfVehicles = $numberOfVehicles;
        return $this;
    }

    /**
     * Gets as vehicleStatus
     *
     * The status of the vehicle(s) involved.
     *
     * @return string
     */
    public function getVehicleStatus()
    {
        return $this->vehicleStatus;
    }

    /**
     * Sets a new vehicleStatus
     *
     * The status of the vehicle(s) involved.
     *
     * @param string $vehicleStatus
     * @return self
     */
    public function setVehicleStatus($vehicleStatus)
    {
        $this->vehicleStatus = $vehicleStatus;
        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * The type of vehicle(s) involved.
     *
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * The type of vehicle(s) involved.
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    /**
     * Gets as vehicleUsage
     *
     * The type of usage of the vehicle (i.e. for what purpose is the vehicle being used).
     *
     * @return string
     */
    public function getVehicleUsage()
    {
        return $this->vehicleUsage;
    }

    /**
     * Sets a new vehicleUsage
     *
     * The type of usage of the vehicle (i.e. for what purpose is the vehicle being used).
     *
     * @param string $vehicleUsage
     * @return self
     */
    public function setVehicleUsage($vehicleUsage)
    {
        $this->vehicleUsage = $vehicleUsage;
        return $this;
    }

    /**
     * Gets as vehiclesInvolvedExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVehiclesInvolvedExtension()
    {
        return $this->vehiclesInvolvedExtension;
    }

    /**
     * Sets a new vehiclesInvolvedExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $vehiclesInvolvedExtension
     * @return self
     */
    public function setVehiclesInvolvedExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $vehiclesInvolvedExtension)
    {
        $this->vehiclesInvolvedExtension = $vehiclesInvolvedExtension;
        return $this;
    }


}

