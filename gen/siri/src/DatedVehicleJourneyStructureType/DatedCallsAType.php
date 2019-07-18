<?php

namespace Calcinai\Siri\DatedVehicleJourneyStructureType;

/**
 * Class representing DatedCallsAType
 */
class DatedCallsAType
{

    /**
     * @property \Calcinai\Siri\DatedCall[] $datedCall
     */
    private $datedCall = [
        
    ];

    /**
     * Adds as datedCall
     *
     * @return self
     * @param \Calcinai\Siri\DatedCall $datedCall
     */
    public function addToDatedCall(\Calcinai\Siri\DatedCall $datedCall)
    {
        $this->datedCall[] = $datedCall;
        return $this;
    }

    /**
     * isset datedCall
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatedCall($index)
    {
        return isset($this->datedCall[$index]);
    }

    /**
     * unset datedCall
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatedCall($index)
    {
        unset($this->datedCall[$index]);
    }

    /**
     * Gets as datedCall
     *
     * @return \Calcinai\Siri\DatedCall[]
     */
    public function getDatedCall()
    {
        return $this->datedCall;
    }

    /**
     * Sets a new datedCall
     *
     * @param \Calcinai\Siri\DatedCall[] $datedCall
     * @return self
     */
    public function setDatedCall(array $datedCall)
    {
        $this->datedCall = $datedCall;
        return $this;
    }


}

