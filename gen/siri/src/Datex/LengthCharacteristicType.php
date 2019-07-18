<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing LengthCharacteristicType
 *
 * Length characteristic of a vehicle.
 * XSD Type: LengthCharacteristic
 */
class LengthCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The overall distance between the front and back of an individual vehicle, including the length of any trailers, couplings, etc.
     *
     * @property float $vehicleLength
     */
    private $vehicleLength = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $lengthCharacteristicExtension
     */
    private $lengthCharacteristicExtension = null;

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
     * Gets as vehicleLength
     *
     * The overall distance between the front and back of an individual vehicle, including the length of any trailers, couplings, etc.
     *
     * @return float
     */
    public function getVehicleLength()
    {
        return $this->vehicleLength;
    }

    /**
     * Sets a new vehicleLength
     *
     * The overall distance between the front and back of an individual vehicle, including the length of any trailers, couplings, etc.
     *
     * @param float $vehicleLength
     * @return self
     */
    public function setVehicleLength($vehicleLength)
    {
        $this->vehicleLength = $vehicleLength;
        return $this;
    }

    /**
     * Gets as lengthCharacteristicExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getLengthCharacteristicExtension()
    {
        return $this->lengthCharacteristicExtension;
    }

    /**
     * Sets a new lengthCharacteristicExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $lengthCharacteristicExtension
     * @return self
     */
    public function setLengthCharacteristicExtension(\Calcinai\Siri\Datex\ExtensionType $lengthCharacteristicExtension)
    {
        $this->lengthCharacteristicExtension = $lengthCharacteristicExtension;
        return $this;
    }


}

