<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing NetworkContextStructureType
 *
 * Type for shared context.
 * XSD Type: NetworkContextStructure
 */
class NetworkContextStructureType
{

    /**
     * Default operator for situations.
     *
     * @property \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $operator
     */
    private $operator = [
        
    ];

    /**
     * Default Network of affected lines. These avlues apply to all situations unless overridden on individual instances
     *
     * @property \Calcinai\Siri\Objects\NetworkStructureType $network
     */
    private $network = null;

    /**
     * Adds as operator
     *
     * Default operator for situations.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType $operator
     */
    public function addToOperator(\Calcinai\Siri\Objects\AffectedOperatorStructureType $operator)
    {
        $this->operator[] = $operator;
        return $this;
    }

    /**
     * isset operator
     *
     * Default operator for situations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperator($index)
    {
        return isset($this->operator[$index]);
    }

    /**
     * unset operator
     *
     * Default operator for situations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperator($index)
    {
        unset($this->operator[$index]);
    }

    /**
     * Gets as operator
     *
     * Default operator for situations.
     *
     * @return \Calcinai\Siri\Objects\AffectedOperatorStructureType[]
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * Default operator for situations.
     *
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $operator
     * @return self
     */
    public function setOperator(array $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as network
     *
     * Default Network of affected lines. These avlues apply to all situations unless overridden on individual instances
     *
     * @return \Calcinai\Siri\Objects\NetworkStructureType
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Default Network of affected lines. These avlues apply to all situations unless overridden on individual instances
     *
     * @param \Calcinai\Siri\Objects\NetworkStructureType $network
     * @return self
     */
    public function setNetwork(\Calcinai\Siri\Objects\NetworkStructureType $network)
    {
        $this->network = $network;
        return $this;
    }


}

