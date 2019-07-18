<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ConditionsType
 *
 * Any conditions which have the potential to degrade normal driving conditions.
 * XSD Type: Conditions
 */
class ConditionsType extends TrafficElementType
{

    /**
     * Description of the driving conditions at the specified location.
     *
     * @property string $drivingConditionType
     */
    private $drivingConditionType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $conditionsExtension
     */
    private $conditionsExtension = null;

    /**
     * Gets as drivingConditionType
     *
     * Description of the driving conditions at the specified location.
     *
     * @return string
     */
    public function getDrivingConditionType()
    {
        return $this->drivingConditionType;
    }

    /**
     * Sets a new drivingConditionType
     *
     * Description of the driving conditions at the specified location.
     *
     * @param string $drivingConditionType
     * @return self
     */
    public function setDrivingConditionType($drivingConditionType)
    {
        $this->drivingConditionType = $drivingConditionType;
        return $this;
    }

    /**
     * Gets as conditionsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getConditionsExtension()
    {
        return $this->conditionsExtension;
    }

    /**
     * Sets a new conditionsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $conditionsExtension
     * @return self
     */
    public function setConditionsExtension(\Calcinai\Siri\Datex\ExtensionType $conditionsExtension)
    {
        $this->conditionsExtension = $conditionsExtension;
        return $this;
    }


}

