<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing GrossWeightCharacteristicType
 *
 * Gross weight characteristic of a vehicle.
 * XSD Type: GrossWeightCharacteristic
 */
class GrossWeightCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The gross weight of the vehicle and its load, including any trailers.
     *
     * @property float $grossVehicleWeight
     */
    private $grossVehicleWeight = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $grossWeightCharacteristicExtension
     */
    private $grossWeightCharacteristicExtension = null;

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
     * Gets as grossVehicleWeight
     *
     * The gross weight of the vehicle and its load, including any trailers.
     *
     * @return float
     */
    public function getGrossVehicleWeight()
    {
        return $this->grossVehicleWeight;
    }

    /**
     * Sets a new grossVehicleWeight
     *
     * The gross weight of the vehicle and its load, including any trailers.
     *
     * @param float $grossVehicleWeight
     * @return self
     */
    public function setGrossVehicleWeight($grossVehicleWeight)
    {
        $this->grossVehicleWeight = $grossVehicleWeight;
        return $this;
    }

    /**
     * Gets as grossWeightCharacteristicExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getGrossWeightCharacteristicExtension()
    {
        return $this->grossWeightCharacteristicExtension;
    }

    /**
     * Sets a new grossWeightCharacteristicExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $grossWeightCharacteristicExtension
     * @return self
     */
    public function setGrossWeightCharacteristicExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $grossWeightCharacteristicExtension)
    {
        $this->grossWeightCharacteristicExtension = $grossWeightCharacteristicExtension;
        return $this;
    }


}

