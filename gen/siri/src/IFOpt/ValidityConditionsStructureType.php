<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing ValidityConditionsStructureType
 *
 * A collection of one or more validity conditions
 * XSD Type: ValidityConditionsStructure
 */
class ValidityConditionsStructureType
{

    /**
     * Reference to the identifier of an administrative area.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition
     */
    private $validityCondition = null;

    /**
     * Gets as validityCondition
     *
     * Reference to the identifier of an administrative area.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType
     */
    public function getValidityCondition()
    {
        return $this->validityCondition;
    }

    /**
     * Sets a new validityCondition
     *
     * Reference to the identifier of an administrative area.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition
     * @return self
     */
    public function setValidityCondition(\Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition)
    {
        $this->validityCondition = $validityCondition;
        return $this;
    }


}

