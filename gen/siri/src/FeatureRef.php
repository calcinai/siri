<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FeatureRef
 *
 * Classification of facilities into arbitrary Facility categories. SIRI provides a recommended set of values covering most usages. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
 */
class FeatureRef
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

