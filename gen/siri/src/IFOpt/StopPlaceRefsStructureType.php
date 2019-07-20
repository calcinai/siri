<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing StopPlaceRefsStructureType
 *
 * Type for a collection of one or more stop refs.
 * XSD Type: StopPlaceRefsStructure
 */
class StopPlaceRefsStructureType
{

    /**
     * @property string $stopPlaceRef
     */
    private $stopPlaceRef = null;

    /**
     * Gets as stopPlaceRef
     *
     * @return string
     */
    public function getStopPlaceRef()
    {
        return $this->stopPlaceRef;
    }

    /**
     * Sets a new stopPlaceRef
     *
     * @param string $stopPlaceRef
     * @return self
     */
    public function setStopPlaceRef($stopPlaceRef)
    {
        $this->stopPlaceRef = $stopPlaceRef;
        return $this;
    }


}

