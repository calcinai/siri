<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing HeaviestAxleWeightCharacteristicType
 *
 * Weight characteristic of the heaviest axle on the vehicle.
 * XSD Type: HeaviestAxleWeightCharacteristic
 */
class HeaviestAxleWeightCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The weight of the heaviest axle on the vehicle.
     *
     * @property float $heaviestAxleWeight
     */
    private $heaviestAxleWeight = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $heaviestAxleWeightCharacteristicExtension
     */
    private $heaviestAxleWeightCharacteristicExtension = null;

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
     * Gets as heaviestAxleWeight
     *
     * The weight of the heaviest axle on the vehicle.
     *
     * @return float
     */
    public function getHeaviestAxleWeight()
    {
        return $this->heaviestAxleWeight;
    }

    /**
     * Sets a new heaviestAxleWeight
     *
     * The weight of the heaviest axle on the vehicle.
     *
     * @param float $heaviestAxleWeight
     * @return self
     */
    public function setHeaviestAxleWeight($heaviestAxleWeight)
    {
        $this->heaviestAxleWeight = $heaviestAxleWeight;
        return $this;
    }

    /**
     * Gets as heaviestAxleWeightCharacteristicExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getHeaviestAxleWeightCharacteristicExtension()
    {
        return $this->heaviestAxleWeightCharacteristicExtension;
    }

    /**
     * Sets a new heaviestAxleWeightCharacteristicExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $heaviestAxleWeightCharacteristicExtension
     * @return self
     */
    public function setHeaviestAxleWeightCharacteristicExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $heaviestAxleWeightCharacteristicExtension)
    {
        $this->heaviestAxleWeightCharacteristicExtension = $heaviestAxleWeightCharacteristicExtension;
        return $this;
    }


}

