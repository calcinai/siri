<?php

namespace Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType;

/**
 * Class representing SuitabilitiesAType
 */
class SuitabilitiesAType
{

    /**
     * The Suitability of com[onent to meet a specifc user need.
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitability
     */
    private $suitability = [
        
    ];

    /**
     * Adds as suitability
     *
     * The Suitability of com[onent to meet a specifc user need.
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
     * The Suitability of com[onent to meet a specifc user need.
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
     * The Suitability of com[onent to meet a specifc user need.
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
     * The Suitability of com[onent to meet a specifc user need.
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
     * The Suitability of com[onent to meet a specifc user need.
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

