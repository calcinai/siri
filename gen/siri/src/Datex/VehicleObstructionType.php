<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing VehicleObstructionType
 *
 * An obstruction on the road caused by one or more vehicles.
 * XSD Type: VehicleObstruction
 */
class VehicleObstructionType extends ObstructionType
{

    /**
     * Characterization of an obstruction on the road caused by one or more vehicles.
     *
     * @property string $vehicleObstructionType
     */
    private $vehicleObstructionType = null;

    /**
     * @property \Calcinai\Siri\Datex\VehicleType[] $obstructingVehicle
     */
    private $obstructingVehicle = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $vehicleObstructionExtension
     */
    private $vehicleObstructionExtension = null;

    /**
     * Gets as vehicleObstructionType
     *
     * Characterization of an obstruction on the road caused by one or more vehicles.
     *
     * @return string
     */
    public function getVehicleObstructionType()
    {
        return $this->vehicleObstructionType;
    }

    /**
     * Sets a new vehicleObstructionType
     *
     * Characterization of an obstruction on the road caused by one or more vehicles.
     *
     * @param string $vehicleObstructionType
     * @return self
     */
    public function setVehicleObstructionType($vehicleObstructionType)
    {
        $this->vehicleObstructionType = $vehicleObstructionType;
        return $this;
    }

    /**
     * Adds as obstructingVehicle
     *
     * @return self
     * @param \Calcinai\Siri\Datex\VehicleType $obstructingVehicle
     */
    public function addToObstructingVehicle(\Calcinai\Siri\Datex\VehicleType $obstructingVehicle)
    {
        $this->obstructingVehicle[] = $obstructingVehicle;
        return $this;
    }

    /**
     * isset obstructingVehicle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObstructingVehicle($index)
    {
        return isset($this->obstructingVehicle[$index]);
    }

    /**
     * unset obstructingVehicle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObstructingVehicle($index)
    {
        unset($this->obstructingVehicle[$index]);
    }

    /**
     * Gets as obstructingVehicle
     *
     * @return \Calcinai\Siri\Datex\VehicleType[]
     */
    public function getObstructingVehicle()
    {
        return $this->obstructingVehicle;
    }

    /**
     * Sets a new obstructingVehicle
     *
     * @param \Calcinai\Siri\Datex\VehicleType[] $obstructingVehicle
     * @return self
     */
    public function setObstructingVehicle(array $obstructingVehicle)
    {
        $this->obstructingVehicle = $obstructingVehicle;
        return $this;
    }

    /**
     * Gets as vehicleObstructionExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getVehicleObstructionExtension()
    {
        return $this->vehicleObstructionExtension;
    }

    /**
     * Sets a new vehicleObstructionExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $vehicleObstructionExtension
     * @return self
     */
    public function setVehicleObstructionExtension(\Calcinai\Siri\Datex\ExtensionType $vehicleObstructionExtension)
    {
        $this->vehicleObstructionExtension = $vehicleObstructionExtension;
        return $this;
    }


}

