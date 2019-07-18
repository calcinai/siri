<?php

namespace Calcinai\Siri\AffectsScopeStructureType;

/**
 * Class representing StopPlacesAType
 */
class StopPlacesAType
{

    /**
     * Stop affected by situation.
     *
     * @property \Calcinai\Siri\AffectedStopPlaceStructureType[] $affectedStopPlace
     */
    private $affectedStopPlace = [
        
    ];

    /**
     * Adds as affectedStopPlace
     *
     * Stop affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedStopPlaceStructureType $affectedStopPlace
     */
    public function addToAffectedStopPlace(\Calcinai\Siri\AffectedStopPlaceStructureType $affectedStopPlace)
    {
        $this->affectedStopPlace[] = $affectedStopPlace;
        return $this;
    }

    /**
     * isset affectedStopPlace
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedStopPlace($index)
    {
        return isset($this->affectedStopPlace[$index]);
    }

    /**
     * unset affectedStopPlace
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedStopPlace($index)
    {
        unset($this->affectedStopPlace[$index]);
    }

    /**
     * Gets as affectedStopPlace
     *
     * Stop affected by situation.
     *
     * @return \Calcinai\Siri\AffectedStopPlaceStructureType[]
     */
    public function getAffectedStopPlace()
    {
        return $this->affectedStopPlace;
    }

    /**
     * Sets a new affectedStopPlace
     *
     * Stop affected by situation.
     *
     * @param \Calcinai\Siri\AffectedStopPlaceStructureType[] $affectedStopPlace
     * @return self
     */
    public function setAffectedStopPlace(array $affectedStopPlace)
    {
        $this->affectedStopPlace = $affectedStopPlace;
        return $this;
    }


}

