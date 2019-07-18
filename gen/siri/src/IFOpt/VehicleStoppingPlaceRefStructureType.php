<?php

namespace Calcinai\Siri\IFOpt;

/**
 * Class representing VehicleStoppingPlaceRefStructureType
 *
 * Type for Unique reference to Identifier of Vehicle Stopping Place.
 * XSD Type: VehicleStoppingPlaceRefStructure
 */
class VehicleStoppingPlaceRefStructureType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }


}

