<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VehicleCharacteristicsType
 *
 * The charateristics of a vehicle, e.g. lorry of gross weight greater than 30 tonnes.
 * XSD Type: VehicleCharacteristics
 */
class VehicleCharacteristicsType
{

    /**
     * The type of fuel used by the vehicle.
     *
     * @property string $fuelType
     */
    private $fuelType = null;

    /**
     * The type of load carried by the vehicle, especially in respect of hazardous loads.
     *
     * @property string $loadType
     */
    private $loadType = null;

    /**
     * The type of equipment in use or on board the vehicle.
     *
     * @property string $vehicleEquipment
     */
    private $vehicleEquipment = null;

    /**
     * The type of vehicle.
     *
     * @property string[] $vehicleType
     */
    private $vehicleType = [
        
    ];

    /**
     * The type of usage of the vehicle (i.e. for what purpose is the vehicle being used).
     *
     * @property string $vehicleUsage
     */
    private $vehicleUsage = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\GrossWeightCharacteristicType[] $grossWeightCharacteristic
     */
    private $grossWeightCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeightCharacteristicType[] $heightCharacteristic
     */
    private $heightCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\LengthCharacteristicType[] $lengthCharacteristic
     */
    private $lengthCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\WidthCharacteristicType[] $widthCharacteristic
     */
    private $widthCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaviestAxleWeightCharacteristicType[] $heaviestAxleWeightCharacteristic
     */
    private $heaviestAxleWeightCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\NumberOfAxlesCharacteristicType[] $numberOfAxlesCharacteristic
     */
    private $numberOfAxlesCharacteristic = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleCharacteristicsExtension
     */
    private $vehicleCharacteristicsExtension = null;

    /**
     * Gets as fuelType
     *
     * The type of fuel used by the vehicle.
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets a new fuelType
     *
     * The type of fuel used by the vehicle.
     *
     * @param string $fuelType
     * @return self
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * Gets as loadType
     *
     * The type of load carried by the vehicle, especially in respect of hazardous loads.
     *
     * @return string
     */
    public function getLoadType()
    {
        return $this->loadType;
    }

    /**
     * Sets a new loadType
     *
     * The type of load carried by the vehicle, especially in respect of hazardous loads.
     *
     * @param string $loadType
     * @return self
     */
    public function setLoadType($loadType)
    {
        $this->loadType = $loadType;
        return $this;
    }

    /**
     * Gets as vehicleEquipment
     *
     * The type of equipment in use or on board the vehicle.
     *
     * @return string
     */
    public function getVehicleEquipment()
    {
        return $this->vehicleEquipment;
    }

    /**
     * Sets a new vehicleEquipment
     *
     * The type of equipment in use or on board the vehicle.
     *
     * @param string $vehicleEquipment
     * @return self
     */
    public function setVehicleEquipment($vehicleEquipment)
    {
        $this->vehicleEquipment = $vehicleEquipment;
        return $this;
    }

    /**
     * Adds as vehicleType
     *
     * The type of vehicle.
     *
     * @return self
     * @param string $vehicleType
     */
    public function addToVehicleType($vehicleType)
    {
        $this->vehicleType[] = $vehicleType;
        return $this;
    }

    /**
     * isset vehicleType
     *
     * The type of vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleType($index)
    {
        return isset($this->vehicleType[$index]);
    }

    /**
     * unset vehicleType
     *
     * The type of vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleType($index)
    {
        unset($this->vehicleType[$index]);
    }

    /**
     * Gets as vehicleType
     *
     * The type of vehicle.
     *
     * @return string[]
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * The type of vehicle.
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType(array $vehicleType)
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
     * Adds as grossWeightCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\GrossWeightCharacteristicType $grossWeightCharacteristic
     */
    public function addToGrossWeightCharacteristic(\Calcinai\Siri\Objects\Datex\GrossWeightCharacteristicType $grossWeightCharacteristic)
    {
        $this->grossWeightCharacteristic[] = $grossWeightCharacteristic;
        return $this;
    }

    /**
     * isset grossWeightCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrossWeightCharacteristic($index)
    {
        return isset($this->grossWeightCharacteristic[$index]);
    }

    /**
     * unset grossWeightCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrossWeightCharacteristic($index)
    {
        unset($this->grossWeightCharacteristic[$index]);
    }

    /**
     * Gets as grossWeightCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\GrossWeightCharacteristicType[]
     */
    public function getGrossWeightCharacteristic()
    {
        return $this->grossWeightCharacteristic;
    }

    /**
     * Sets a new grossWeightCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\GrossWeightCharacteristicType[] $grossWeightCharacteristic
     * @return self
     */
    public function setGrossWeightCharacteristic(array $grossWeightCharacteristic)
    {
        $this->grossWeightCharacteristic = $grossWeightCharacteristic;
        return $this;
    }

    /**
     * Adds as heightCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\HeightCharacteristicType $heightCharacteristic
     */
    public function addToHeightCharacteristic(\Calcinai\Siri\Objects\Datex\HeightCharacteristicType $heightCharacteristic)
    {
        $this->heightCharacteristic[] = $heightCharacteristic;
        return $this;
    }

    /**
     * isset heightCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHeightCharacteristic($index)
    {
        return isset($this->heightCharacteristic[$index]);
    }

    /**
     * unset heightCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHeightCharacteristic($index)
    {
        unset($this->heightCharacteristic[$index]);
    }

    /**
     * Gets as heightCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\HeightCharacteristicType[]
     */
    public function getHeightCharacteristic()
    {
        return $this->heightCharacteristic;
    }

    /**
     * Sets a new heightCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\HeightCharacteristicType[] $heightCharacteristic
     * @return self
     */
    public function setHeightCharacteristic(array $heightCharacteristic)
    {
        $this->heightCharacteristic = $heightCharacteristic;
        return $this;
    }

    /**
     * Adds as lengthCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\LengthCharacteristicType $lengthCharacteristic
     */
    public function addToLengthCharacteristic(\Calcinai\Siri\Objects\Datex\LengthCharacteristicType $lengthCharacteristic)
    {
        $this->lengthCharacteristic[] = $lengthCharacteristic;
        return $this;
    }

    /**
     * isset lengthCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLengthCharacteristic($index)
    {
        return isset($this->lengthCharacteristic[$index]);
    }

    /**
     * unset lengthCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLengthCharacteristic($index)
    {
        unset($this->lengthCharacteristic[$index]);
    }

    /**
     * Gets as lengthCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\LengthCharacteristicType[]
     */
    public function getLengthCharacteristic()
    {
        return $this->lengthCharacteristic;
    }

    /**
     * Sets a new lengthCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\LengthCharacteristicType[] $lengthCharacteristic
     * @return self
     */
    public function setLengthCharacteristic(array $lengthCharacteristic)
    {
        $this->lengthCharacteristic = $lengthCharacteristic;
        return $this;
    }

    /**
     * Adds as widthCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\WidthCharacteristicType $widthCharacteristic
     */
    public function addToWidthCharacteristic(\Calcinai\Siri\Objects\Datex\WidthCharacteristicType $widthCharacteristic)
    {
        $this->widthCharacteristic[] = $widthCharacteristic;
        return $this;
    }

    /**
     * isset widthCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWidthCharacteristic($index)
    {
        return isset($this->widthCharacteristic[$index]);
    }

    /**
     * unset widthCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWidthCharacteristic($index)
    {
        unset($this->widthCharacteristic[$index]);
    }

    /**
     * Gets as widthCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\WidthCharacteristicType[]
     */
    public function getWidthCharacteristic()
    {
        return $this->widthCharacteristic;
    }

    /**
     * Sets a new widthCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\WidthCharacteristicType[] $widthCharacteristic
     * @return self
     */
    public function setWidthCharacteristic(array $widthCharacteristic)
    {
        $this->widthCharacteristic = $widthCharacteristic;
        return $this;
    }

    /**
     * Adds as heaviestAxleWeightCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\HeaviestAxleWeightCharacteristicType $heaviestAxleWeightCharacteristic
     */
    public function addToHeaviestAxleWeightCharacteristic(\Calcinai\Siri\Objects\Datex\HeaviestAxleWeightCharacteristicType $heaviestAxleWeightCharacteristic)
    {
        $this->heaviestAxleWeightCharacteristic[] = $heaviestAxleWeightCharacteristic;
        return $this;
    }

    /**
     * isset heaviestAxleWeightCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHeaviestAxleWeightCharacteristic($index)
    {
        return isset($this->heaviestAxleWeightCharacteristic[$index]);
    }

    /**
     * unset heaviestAxleWeightCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHeaviestAxleWeightCharacteristic($index)
    {
        unset($this->heaviestAxleWeightCharacteristic[$index]);
    }

    /**
     * Gets as heaviestAxleWeightCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\HeaviestAxleWeightCharacteristicType[]
     */
    public function getHeaviestAxleWeightCharacteristic()
    {
        return $this->heaviestAxleWeightCharacteristic;
    }

    /**
     * Sets a new heaviestAxleWeightCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\HeaviestAxleWeightCharacteristicType[] $heaviestAxleWeightCharacteristic
     * @return self
     */
    public function setHeaviestAxleWeightCharacteristic(array $heaviestAxleWeightCharacteristic)
    {
        $this->heaviestAxleWeightCharacteristic = $heaviestAxleWeightCharacteristic;
        return $this;
    }

    /**
     * Adds as numberOfAxlesCharacteristic
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\NumberOfAxlesCharacteristicType $numberOfAxlesCharacteristic
     */
    public function addToNumberOfAxlesCharacteristic(\Calcinai\Siri\Objects\Datex\NumberOfAxlesCharacteristicType $numberOfAxlesCharacteristic)
    {
        $this->numberOfAxlesCharacteristic[] = $numberOfAxlesCharacteristic;
        return $this;
    }

    /**
     * isset numberOfAxlesCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumberOfAxlesCharacteristic($index)
    {
        return isset($this->numberOfAxlesCharacteristic[$index]);
    }

    /**
     * unset numberOfAxlesCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumberOfAxlesCharacteristic($index)
    {
        unset($this->numberOfAxlesCharacteristic[$index]);
    }

    /**
     * Gets as numberOfAxlesCharacteristic
     *
     * @return \Calcinai\Siri\Objects\Datex\NumberOfAxlesCharacteristicType[]
     */
    public function getNumberOfAxlesCharacteristic()
    {
        return $this->numberOfAxlesCharacteristic;
    }

    /**
     * Sets a new numberOfAxlesCharacteristic
     *
     * @param \Calcinai\Siri\Objects\Datex\NumberOfAxlesCharacteristicType[] $numberOfAxlesCharacteristic
     * @return self
     */
    public function setNumberOfAxlesCharacteristic(array $numberOfAxlesCharacteristic)
    {
        $this->numberOfAxlesCharacteristic = $numberOfAxlesCharacteristic;
        return $this;
    }

    /**
     * Gets as vehicleCharacteristicsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVehicleCharacteristicsExtension()
    {
        return $this->vehicleCharacteristicsExtension;
    }

    /**
     * Sets a new vehicleCharacteristicsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleCharacteristicsExtension
     * @return self
     */
    public function setVehicleCharacteristicsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $vehicleCharacteristicsExtension)
    {
        $this->vehicleCharacteristicsExtension = $vehicleCharacteristicsExtension;
        return $this;
    }


}

