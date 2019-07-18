<?php

namespace Calcinai\Siri;

/**
 * Class representing FilterByConnectionLinkRef
 *
 * Whether results can be filtered by Connection link. Default is true.
 */
class FilterByConnectionLinkRef
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

