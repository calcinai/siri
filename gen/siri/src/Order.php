<?php

namespace Calcinai\Siri;

/**
 * Class representing Order
 *
 * For implementations for which the overall Order is not used for VisitNumber, (i.e. if VisitNumberIsOrder is false) then can be used to associate the stop Order as well if useful.
 */
class Order
{

    /**
     * @property int $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param int $value
     * @return int
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

