<?php

namespace Calcinai\Siri\Objects\FacilityStructureType;

/**
 * Class representing SuitabilitiesAType
 */
class SuitabilitiesAType
{

    /**
     * Type of specific need for wich the facility is appropriate
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitability
     */
    private $suitability = [
        
    ];

    /**
     * Adds as suitability
     *
     * Type of specific need for wich the facility is appropriate
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
     * Type of specific need for wich the facility is appropriate
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
     * Type of specific need for wich the facility is appropriate
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
     * Type of specific need for wich the facility is appropriate
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
     * Type of specific need for wich the facility is appropriate
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

