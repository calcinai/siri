<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VisitNumber
 *
 * Sequence of visit to stop within vehicle journey. Increases monotonically, but not necessarily sequentially.
 */
class VisitNumber
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

