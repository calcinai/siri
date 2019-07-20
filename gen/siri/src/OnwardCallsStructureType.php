<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing OnwardCallsStructureType
 *
 * Type for Calling pattern for Journey Pattern.
 * XSD Type: OnwardCallsStructure
 */
class OnwardCallsStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\OnwardCallStructureType $onwardCall
     */
    private $onwardCall = null;

    /**
     * Gets as onwardCall
     *
     * @return \Calcinai\Siri\Objects\OnwardCallStructureType
     */
    public function getOnwardCall()
    {
        return $this->onwardCall;
    }

    /**
     * Sets a new onwardCall
     *
     * @param \Calcinai\Siri\Objects\OnwardCallStructureType $onwardCall
     * @return self
     */
    public function setOnwardCall(\Calcinai\Siri\Objects\OnwardCallStructureType $onwardCall)
    {
        $this->onwardCall = $onwardCall;
        return $this;
    }


}

