<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing NumberOfAxlesCharacteristicType
 *
 * Number of axles characteristic of a vehicle.
 * XSD Type: NumberOfAxlesCharacteristic
 */
class NumberOfAxlesCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The total number of axles of an individual vehicle.
     *
     * @property int $numberOfAxles
     */
    private $numberOfAxles = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $numberOfAxlesCharacteristicExtension
     */
    private $numberOfAxlesCharacteristicExtension = null;

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
     * Gets as numberOfAxles
     *
     * The total number of axles of an individual vehicle.
     *
     * @return int
     */
    public function getNumberOfAxles()
    {
        return $this->numberOfAxles;
    }

    /**
     * Sets a new numberOfAxles
     *
     * The total number of axles of an individual vehicle.
     *
     * @param int $numberOfAxles
     * @return self
     */
    public function setNumberOfAxles($numberOfAxles)
    {
        $this->numberOfAxles = $numberOfAxles;
        return $this;
    }

    /**
     * Gets as numberOfAxlesCharacteristicExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getNumberOfAxlesCharacteristicExtension()
    {
        return $this->numberOfAxlesCharacteristicExtension;
    }

    /**
     * Sets a new numberOfAxlesCharacteristicExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $numberOfAxlesCharacteristicExtension
     * @return self
     */
    public function setNumberOfAxlesCharacteristicExtension(\Calcinai\Siri\Datex\ExtensionType $numberOfAxlesCharacteristicExtension)
    {
        $this->numberOfAxlesCharacteristicExtension = $numberOfAxlesCharacteristicExtension;
        return $this;
    }


}

