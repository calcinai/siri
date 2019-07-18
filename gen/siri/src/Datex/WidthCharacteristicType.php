<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing WidthCharacteristicType
 *
 * Width characteristic of a vehicle.
 * XSD Type: WidthCharacteristic
 */
class WidthCharacteristicType
{

    /**
     * The operator to be used in the vehicle characteristic comparison operation.
     *
     * @property string $comparisonOperator
     */
    private $comparisonOperator = null;

    /**
     * The maximum width of an individual vehicle, in metres.
     *
     * @property float $vehicleWidth
     */
    private $vehicleWidth = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $widthCharacteristicExtension
     */
    private $widthCharacteristicExtension = null;

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
     * Gets as vehicleWidth
     *
     * The maximum width of an individual vehicle, in metres.
     *
     * @return float
     */
    public function getVehicleWidth()
    {
        return $this->vehicleWidth;
    }

    /**
     * Sets a new vehicleWidth
     *
     * The maximum width of an individual vehicle, in metres.
     *
     * @param float $vehicleWidth
     * @return self
     */
    public function setVehicleWidth($vehicleWidth)
    {
        $this->vehicleWidth = $vehicleWidth;
        return $this;
    }

    /**
     * Gets as widthCharacteristicExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getWidthCharacteristicExtension()
    {
        return $this->widthCharacteristicExtension;
    }

    /**
     * Sets a new widthCharacteristicExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $widthCharacteristicExtension
     * @return self
     */
    public function setWidthCharacteristicExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $widthCharacteristicExtension)
    {
        $this->widthCharacteristicExtension = $widthCharacteristicExtension;
        return $this;
    }


}

