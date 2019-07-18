<?php

namespace Calcinai\Siri\Objects\SituationExchangeRequestStructureType;

/**
 * Class representing SituationRoadFilterAType
 */
class SituationRoadFilterAType
{

    /**
     * @property \Calcinai\Siri\Objects\RoadFilterStructureType[] $roadFilter
     */
    private $roadFilter = [
        
    ];

    /**
     * Adds as roadFilter
     *
     * @return self
     * @param \Calcinai\Siri\Objects\RoadFilterStructureType $roadFilter
     */
    public function addToRoadFilter(\Calcinai\Siri\Objects\RoadFilterStructureType $roadFilter)
    {
        $this->roadFilter[] = $roadFilter;
        return $this;
    }

    /**
     * isset roadFilter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoadFilter($index)
    {
        return isset($this->roadFilter[$index]);
    }

    /**
     * unset roadFilter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoadFilter($index)
    {
        unset($this->roadFilter[$index]);
    }

    /**
     * Gets as roadFilter
     *
     * @return \Calcinai\Siri\Objects\RoadFilterStructureType[]
     */
    public function getRoadFilter()
    {
        return $this->roadFilter;
    }

    /**
     * Sets a new roadFilter
     *
     * @param \Calcinai\Siri\Objects\RoadFilterStructureType[] $roadFilter
     * @return self
     */
    public function setRoadFilter(array $roadFilter)
    {
        $this->roadFilter = $roadFilter;
        return $this;
    }


}

