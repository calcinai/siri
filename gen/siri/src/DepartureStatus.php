<?php

namespace Calcinai\Siri;

/**
 * Class representing DepartureStatus
 *
 * Classification of the timeliness of the departure part of the call, according to a fixed list of values. This may reflect a presentation policy, for example calls less than one minute behind target time are still classified as on-time. Applications may use this to guide their own presentation of times.
 */
class DepartureStatus
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

