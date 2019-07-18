<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing RoadFilterStructureType
 *
 * Type for Parameters to filter Situation Exchange requests, based on the situation RoadLogically ANDed with other values.
 * XSD Type: RoadFilterStructure
 */
class RoadFilterStructureType
{

    /**
     * Identifier/number of the road on which the reference point is located.
     *
     * @property string $roadNumber
     */
    private $roadNumber = null;

    /**
     * The direction at the reference point in terms of general destination direction. If absennt both
     *
     * @property string $directionBound
     */
    private $directionBound = null;

    /**
     * Road reference point identifier, unique on the specified road.
     *
     * @property string $referencePointIdentifier
     */
    private $referencePointIdentifier = null;

    /**
     * Gets as roadNumber
     *
     * Identifier/number of the road on which the reference point is located.
     *
     * @return string
     */
    public function getRoadNumber()
    {
        return $this->roadNumber;
    }

    /**
     * Sets a new roadNumber
     *
     * Identifier/number of the road on which the reference point is located.
     *
     * @param string $roadNumber
     * @return self
     */
    public function setRoadNumber($roadNumber)
    {
        $this->roadNumber = $roadNumber;
        return $this;
    }

    /**
     * Gets as directionBound
     *
     * The direction at the reference point in terms of general destination direction. If absennt both
     *
     * @return string
     */
    public function getDirectionBound()
    {
        return $this->directionBound;
    }

    /**
     * Sets a new directionBound
     *
     * The direction at the reference point in terms of general destination direction. If absennt both
     *
     * @param string $directionBound
     * @return self
     */
    public function setDirectionBound($directionBound)
    {
        $this->directionBound = $directionBound;
        return $this;
    }

    /**
     * Gets as referencePointIdentifier
     *
     * Road reference point identifier, unique on the specified road.
     *
     * @return string
     */
    public function getReferencePointIdentifier()
    {
        return $this->referencePointIdentifier;
    }

    /**
     * Sets a new referencePointIdentifier
     *
     * Road reference point identifier, unique on the specified road.
     *
     * @param string $referencePointIdentifier
     * @return self
     */
    public function setReferencePointIdentifier($referencePointIdentifier)
    {
        $this->referencePointIdentifier = $referencePointIdentifier;
        return $this;
    }


}

