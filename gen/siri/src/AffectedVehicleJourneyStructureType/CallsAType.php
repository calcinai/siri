<?php

namespace Calcinai\Siri\Objects\AffectedVehicleJourneyStructureType;

/**
 * Class representing CallsAType
 */
class CallsAType
{

    /**
     * @property \Calcinai\Siri\Objects\AffectedCallStructureType[] $call
     */
    private $call = [
        
    ];

    /**
     * Adds as call
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedCallStructureType $call
     */
    public function addToCall(\Calcinai\Siri\Objects\AffectedCallStructureType $call)
    {
        $this->call[] = $call;
        return $this;
    }

    /**
     * isset call
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCall($index)
    {
        return isset($this->call[$index]);
    }

    /**
     * unset call
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCall($index)
    {
        unset($this->call[$index]);
    }

    /**
     * Gets as call
     *
     * @return \Calcinai\Siri\Objects\AffectedCallStructureType[]
     */
    public function getCall()
    {
        return $this->call;
    }

    /**
     * Sets a new call
     *
     * @param \Calcinai\Siri\Objects\AffectedCallStructureType[] $call
     * @return self
     */
    public function setCall(array $call)
    {
        $this->call = $call;
        return $this;
    }


}

