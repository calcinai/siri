<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AimedHeadwayInterval
 *
 * For frequency based services, target interval between vehicles at stop.
 */
class AimedHeadwayInterval
{

    /**
     * @property \DateInterval $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param \DateInterval $value
     */
    public function __construct(\DateInterval $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateInterval $value
     * @return \DateInterval
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

