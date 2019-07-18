<?php

namespace Calcinai\Siri\EstimatedVehicleJourneyStructureType;

/**
 * Class representing EstimatedCallsAType
 */
class EstimatedCallsAType
{

    /**
     * @property \Calcinai\Siri\EstimatedCall[] $estimatedCall
     */
    private $estimatedCall = [
        
    ];

    /**
     * Adds as estimatedCall
     *
     * @return self
     * @param \Calcinai\Siri\EstimatedCall $estimatedCall
     */
    public function addToEstimatedCall(\Calcinai\Siri\EstimatedCall $estimatedCall)
    {
        $this->estimatedCall[] = $estimatedCall;
        return $this;
    }

    /**
     * isset estimatedCall
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedCall($index)
    {
        return isset($this->estimatedCall[$index]);
    }

    /**
     * unset estimatedCall
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedCall($index)
    {
        unset($this->estimatedCall[$index]);
    }

    /**
     * Gets as estimatedCall
     *
     * @return \Calcinai\Siri\EstimatedCall[]
     */
    public function getEstimatedCall()
    {
        return $this->estimatedCall;
    }

    /**
     * Sets a new estimatedCall
     *
     * @param \Calcinai\Siri\EstimatedCall[] $estimatedCall
     * @return self
     */
    public function setEstimatedCall(array $estimatedCall)
    {
        $this->estimatedCall = $estimatedCall;
        return $this;
    }


}

