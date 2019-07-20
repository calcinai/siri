<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PreviousCallsStructureType
 *
 * Type for Ordered list of calls at previous stop.
 * XSD Type: PreviousCallsStructure
 */
class PreviousCallsStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\PreviousCallStructureType $previousCall
     */
    private $previousCall = null;

    /**
     * Gets as previousCall
     *
     * @return \Calcinai\Siri\Objects\PreviousCallStructureType
     */
    public function getPreviousCall()
    {
        return $this->previousCall;
    }

    /**
     * Sets a new previousCall
     *
     * @param \Calcinai\Siri\Objects\PreviousCallStructureType $previousCall
     * @return self
     */
    public function setPreviousCall(\Calcinai\Siri\Objects\PreviousCallStructureType $previousCall)
    {
        $this->previousCall = $previousCall;
        return $this;
    }


}

