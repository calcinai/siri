<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing HeightCharacteristicType
 *
 * Height characteristic of a vehicle.
 * XSD Type: HeightCharacteristic
 */
class HeightCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The height of the highest part, excluding antennae, of an individual vehicle above the road surface, in metres.
     *
     * @property float $vehicleHeight
     */
    private $vehicleHeight = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $heightCharacteristicExtension
     */
    private $heightCharacteristicExtension = null;

    /**
     * Gets as comparisonOperator
     *
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @return string
     */
    public function getComparisonOperator()
    {
        return $this->comparisonOperator;
    }

    /**
     * Sets a new comparisonOperator
     *
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @param string $comparisonOperator
     * @return self
     */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->comparisonOperator = $comparisonOperator;
        return $this;
    }

    /**
     * Gets as vehicleHeight
     *
     * The height of the highest part, excluding antennae, of an individual vehicle above the road surface, in metres.
     *
     * @return float
     */
    public function getVehicleHeight()
    {
        return $this->vehicleHeight;
    }

    /**
     * Sets a new vehicleHeight
     *
     * The height of the highest part, excluding antennae, of an individual vehicle above the road surface, in metres.
     *
     * @param float $vehicleHeight
     * @return self
     */
    public function setVehicleHeight($vehicleHeight)
    {
        $this->vehicleHeight = $vehicleHeight;
        return $this;
    }

    /**
     * Gets as heightCharacteristicExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getHeightCharacteristicExtension()
    {
        return $this->heightCharacteristicExtension;
    }

    /**
     * Sets a new heightCharacteristicExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $heightCharacteristicExtension
     * @return self
     */
    public function setHeightCharacteristicExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $heightCharacteristicExtension)
    {
        $this->heightCharacteristicExtension = $heightCharacteristicExtension;
        return $this;
    }


}

