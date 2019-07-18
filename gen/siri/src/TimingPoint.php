<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TimingPoint
 *
 * Whether the stop is a timing point. Times for stops that are not timing points are sometimes interpolated crudely from the timing points, and may represent a lower level of accuracy. Default is true.
 */
class TimingPoint
{

    /**
     * @property bool $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
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

