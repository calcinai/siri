<?php

namespace Calcinai\Siri\AffectsScopeStructureType;

/**
 * Class representing PlacesAType
 */
class PlacesAType
{

    /**
     * Stop affected by situation.
     *
     * @property \Calcinai\Siri\AffectedPlaceStructureType[] $affectedPlace
     */
    private $affectedPlace = [
        
    ];

    /**
     * Adds as affectedPlace
     *
     * Stop affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedPlaceStructureType $affectedPlace
     */
    public function addToAffectedPlace(\Calcinai\Siri\AffectedPlaceStructureType $affectedPlace)
    {
        $this->affectedPlace[] = $affectedPlace;
        return $this;
    }

    /**
     * isset affectedPlace
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedPlace($index)
    {
        return isset($this->affectedPlace[$index]);
    }

    /**
     * unset affectedPlace
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedPlace($index)
    {
        unset($this->affectedPlace[$index]);
    }

    /**
     * Gets as affectedPlace
     *
     * Stop affected by situation.
     *
     * @return \Calcinai\Siri\AffectedPlaceStructureType[]
     */
    public function getAffectedPlace()
    {
        return $this->affectedPlace;
    }

    /**
     * Sets a new affectedPlace
     *
     * Stop affected by situation.
     *
     * @param \Calcinai\Siri\AffectedPlaceStructureType[] $affectedPlace
     * @return self
     */
    public function setAffectedPlace(array $affectedPlace)
    {
        $this->affectedPlace = $affectedPlace;
        return $this;
    }


}

