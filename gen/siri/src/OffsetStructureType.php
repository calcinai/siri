<?php

namespace Calcinai\Siri;

/**
 * Class representing OffsetStructureType
 *
 * Type for information about the lines affected by an Situation
 * XSD Type: OffsetStructure
 */
class OffsetStructureType
{

    /**
     * Distance in metres from start of link at which Situation is to be shown. I f absent use start of link.
     *
     * @property int $distanceFromStart
     */
    private $distanceFromStart = null;

    /**
     * Distance in metres from end of link at which Situation is to be shown. I f absent use end of link.
     *
     * @property int $distanceFromEnd
     */
    private $distanceFromEnd = null;

    /**
     * Gets as distanceFromStart
     *
     * Distance in metres from start of link at which Situation is to be shown. I f absent use start of link.
     *
     * @return int
     */
    public function getDistanceFromStart()
    {
        return $this->distanceFromStart;
    }

    /**
     * Sets a new distanceFromStart
     *
     * Distance in metres from start of link at which Situation is to be shown. I f absent use start of link.
     *
     * @param int $distanceFromStart
     * @return self
     */
    public function setDistanceFromStart($distanceFromStart)
    {
        $this->distanceFromStart = $distanceFromStart;
        return $this;
    }

    /**
     * Gets as distanceFromEnd
     *
     * Distance in metres from end of link at which Situation is to be shown. I f absent use end of link.
     *
     * @return int
     */
    public function getDistanceFromEnd()
    {
        return $this->distanceFromEnd;
    }

    /**
     * Sets a new distanceFromEnd
     *
     * Distance in metres from end of link at which Situation is to be shown. I f absent use end of link.
     *
     * @param int $distanceFromEnd
     * @return self
     */
    public function setDistanceFromEnd($distanceFromEnd)
    {
        $this->distanceFromEnd = $distanceFromEnd;
        return $this;
    }


}

