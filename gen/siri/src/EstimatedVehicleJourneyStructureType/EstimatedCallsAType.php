<?php

namespace Calcinai\Siri\Objects\EstimatedVehicleJourneyStructureType;

/**
 * Class representing EstimatedCallsAType
 */
class EstimatedCallsAType
{

    /**
     * @property \Calcinai\Siri\Objects\EstimatedCall[] $estimatedCall
     */
    private $estimatedCall = [
        
    ];

    /**
     * Adds as estimatedCall
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EstimatedCall $estimatedCall
     */
    public function addToEstimatedCall(\Calcinai\Siri\Objects\EstimatedCall $estimatedCall)
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
     * @return \Calcinai\Siri\Objects\EstimatedCall[]
     */
    public function getEstimatedCall()
    {
        return $this->estimatedCall;
    }

    /**
     * Sets a new estimatedCall
     *
     * @param \Calcinai\Siri\Objects\EstimatedCall[] $estimatedCall
     * @return self
     */
    public function setEstimatedCall(array $estimatedCall)
    {
        $this->estimatedCall = $estimatedCall;
        return $this;
    }


}

