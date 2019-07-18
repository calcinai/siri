<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedRoadsStructureType
 *
 * Type for Location model for scope of situation or effect.
 * XSD Type: AffectedRoadsStructure
 */
class AffectedRoadsStructureType
{

    /**
     * Refereences to road network locations affected by the Situation
     *
     * @property \Calcinai\Siri\Datex\GroupOfLocationsType $datex2Locations
     */
    private $datex2Locations = null;

    /**
     * Description of affected road
     *
     * @property \Calcinai\Siri\AffectedRoadStructureType[] $affectedRoad
     */
    private $affectedRoad = [
        
    ];

    /**
     * Gets as datex2Locations
     *
     * Refereences to road network locations affected by the Situation
     *
     * @return \Calcinai\Siri\Datex\GroupOfLocationsType
     */
    public function getDatex2Locations()
    {
        return $this->datex2Locations;
    }

    /**
     * Sets a new datex2Locations
     *
     * Refereences to road network locations affected by the Situation
     *
     * @param \Calcinai\Siri\Datex\GroupOfLocationsType $datex2Locations
     * @return self
     */
    public function setDatex2Locations(\Calcinai\Siri\Datex\GroupOfLocationsType $datex2Locations)
    {
        $this->datex2Locations = $datex2Locations;
        return $this;
    }

    /**
     * Adds as affectedRoad
     *
     * Description of affected road
     *
     * @return self
     * @param \Calcinai\Siri\AffectedRoadStructureType $affectedRoad
     */
    public function addToAffectedRoad(\Calcinai\Siri\AffectedRoadStructureType $affectedRoad)
    {
        $this->affectedRoad[] = $affectedRoad;
        return $this;
    }

    /**
     * isset affectedRoad
     *
     * Description of affected road
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedRoad($index)
    {
        return isset($this->affectedRoad[$index]);
    }

    /**
     * unset affectedRoad
     *
     * Description of affected road
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedRoad($index)
    {
        unset($this->affectedRoad[$index]);
    }

    /**
     * Gets as affectedRoad
     *
     * Description of affected road
     *
     * @return \Calcinai\Siri\AffectedRoadStructureType[]
     */
    public function getAffectedRoad()
    {
        return $this->affectedRoad;
    }

    /**
     * Sets a new affectedRoad
     *
     * Description of affected road
     *
     * @param \Calcinai\Siri\AffectedRoadStructureType[] $affectedRoad
     * @return self
     */
    public function setAffectedRoad(array $affectedRoad)
    {
        $this->affectedRoad = $affectedRoad;
        return $this;
    }


}

