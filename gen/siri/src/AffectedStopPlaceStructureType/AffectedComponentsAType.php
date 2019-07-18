<?php

namespace Calcinai\Siri\Objects\AffectedStopPlaceStructureType;

/**
 * Class representing AffectedComponentsAType
 */
class AffectedComponentsAType
{

    /**
     * Quay affected by Situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPlaceComponentStructureType[] $affectedComponent
     */
    private $affectedComponent = [
        
    ];

    /**
     * Adds as affectedComponent
     *
     * Quay affected by Situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPlaceComponentStructureType $affectedComponent
     */
    public function addToAffectedComponent(\Calcinai\Siri\Objects\AffectedStopPlaceComponentStructureType $affectedComponent)
    {
        $this->affectedComponent[] = $affectedComponent;
        return $this;
    }

    /**
     * isset affectedComponent
     *
     * Quay affected by Situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedComponent($index)
    {
        return isset($this->affectedComponent[$index]);
    }

    /**
     * unset affectedComponent
     *
     * Quay affected by Situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedComponent($index)
    {
        unset($this->affectedComponent[$index]);
    }

    /**
     * Gets as affectedComponent
     *
     * Quay affected by Situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPlaceComponentStructureType[]
     */
    public function getAffectedComponent()
    {
        return $this->affectedComponent;
    }

    /**
     * Sets a new affectedComponent
     *
     * Quay affected by Situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPlaceComponentStructureType[] $affectedComponent
     * @return self
     */
    public function setAffectedComponent(array $affectedComponent)
    {
        $this->affectedComponent = $affectedComponent;
        return $this;
    }


}

