<?php

namespace Calcinai\Siri\Objects\AffectsScopeStructureType;

/**
 * Class representing OperatorsAType
 */
class OperatorsAType
{

    /**
     * All operators.
     *
     * @property string $allOperators
     */
    private $allOperators = null;

    /**
     * Operators of services affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     */
    private $affectedOperator = [
        
    ];

    /**
     * Gets as allOperators
     *
     * All operators.
     *
     * @return string
     */
    public function getAllOperators()
    {
        return $this->allOperators;
    }

    /**
     * Sets a new allOperators
     *
     * All operators.
     *
     * @param string $allOperators
     * @return self
     */
    public function setAllOperators($allOperators)
    {
        $this->allOperators = $allOperators;
        return $this;
    }

    /**
     * Adds as affectedOperator
     *
     * Operators of services affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator
     */
    public function addToAffectedOperator(\Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator)
    {
        $this->affectedOperator[] = $affectedOperator;
        return $this;
    }

    /**
     * isset affectedOperator
     *
     * Operators of services affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedOperator($index)
    {
        return isset($this->affectedOperator[$index]);
    }

    /**
     * unset affectedOperator
     *
     * Operators of services affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedOperator($index)
    {
        unset($this->affectedOperator[$index]);
    }

    /**
     * Gets as affectedOperator
     *
     * Operators of services affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedOperatorStructureType[]
     */
    public function getAffectedOperator()
    {
        return $this->affectedOperator;
    }

    /**
     * Sets a new affectedOperator
     *
     * Operators of services affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     * @return self
     */
    public function setAffectedOperator(array $affectedOperator)
    {
        $this->affectedOperator = $affectedOperator;
        return $this;
    }


}

