<?php

namespace Calcinai\Siri;

/**
 * Class representing ProgressBetweenStopsStructureType
 *
 * Data type for Progress
 * XSD Type: ProgressBetweenStopsStructure
 */
class ProgressBetweenStopsStructureType
{

    /**
     * The total distance in metres between the previous stop and the next stop.
     *
     * @property float $linkDistance
     */
    private $linkDistance = null;

    /**
     * Perecetage alomg linbk that vehicel has travelled
     *
     * @property float $percentage
     */
    private $percentage = null;

    /**
     * Gets as linkDistance
     *
     * The total distance in metres between the previous stop and the next stop.
     *
     * @return float
     */
    public function getLinkDistance()
    {
        return $this->linkDistance;
    }

    /**
     * Sets a new linkDistance
     *
     * The total distance in metres between the previous stop and the next stop.
     *
     * @param float $linkDistance
     * @return self
     */
    public function setLinkDistance($linkDistance)
    {
        $this->linkDistance = $linkDistance;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * Perecetage alomg linbk that vehicel has travelled
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * Perecetage alomg linbk that vehicel has travelled
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }


}

