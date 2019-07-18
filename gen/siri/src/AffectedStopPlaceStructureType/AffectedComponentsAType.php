<?php

namespace Calcinai\Siri\AffectedStopPlaceStructureType;

/**
 * Class representing AffectedComponentsAType
 */
class AffectedComponentsAType
{

    /**
     * Quay affected by Situation.
     *
     * @property \Calcinai\Siri\AffectedStopPlaceComponentStructureType[] $affectedComponent
     */
    private $affectedComponent = [
        
    ];

    /**
     * Adds as affectedComponent
     *
     * Quay affected by Situation.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedStopPlaceComponentStructureType $affectedComponent
     */
    public function addToAffectedComponent(\Calcinai\Siri\AffectedStopPlaceComponentStructureType $affectedComponent)
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
     * @return \Calcinai\Siri\AffectedStopPlaceComponentStructureType[]
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
     * @param \Calcinai\Siri\AffectedStopPlaceComponentStructureType[] $affectedComponent
     * @return self
     */
    public function setAffectedComponent(array $affectedComponent)
    {
        $this->affectedComponent = $affectedComponent;
        return $this;
    }


}

