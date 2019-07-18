<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationVersionType
 *
 * Type for version number if entry is update to a previous version. Unique within IncidentNumber. Monotonically increasing within IncidentNumber. Any values for classification, description, affects, effects that are present in an update replace any values on previous incidents and updates with the same identifier. Values that are not updated remain in effect.
 * XSD Type: SituationVersion
 */
class SituationVersionType
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

