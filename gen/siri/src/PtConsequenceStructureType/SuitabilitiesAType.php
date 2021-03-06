<?php

namespace Calcinai\Siri\Objects\PtConsequenceStructureType;

/**
 * Class representing SuitabilitiesAType
 */
class SuitabilitiesAType
{

    /**
     * Effect on a passenger need.
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitability
     */
    private $suitability = [
        
    ];

    /**
     * Adds as suitability
     *
     * Effect on a passenger need.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability
     */
    public function addToSuitability(\Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability)
    {
        $this->suitability[] = $suitability;
        return $this;
    }

    /**
     * isset suitability
     *
     * Effect on a passenger need.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuitability($index)
    {
        return isset($this->suitability[$index]);
    }

    /**
     * unset suitability
     *
     * Effect on a passenger need.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuitability($index)
    {
        unset($this->suitability[$index]);
    }

    /**
     * Gets as suitability
     *
     * Effect on a passenger need.
     *
     * @return \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[]
     */
    public function getSuitability()
    {
        return $this->suitability;
    }

    /**
     * Sets a new suitability
     *
     * Effect on a passenger need.
     *
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitability
     * @return self
     */
    public function setSuitability(array $suitability)
    {
        $this->suitability = $suitability;
        return $this;
    }


}

