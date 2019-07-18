<?php

namespace Calcinai\Siri\StopMonitoringRequestStructureType;

/**
 * Class representing MaximumNumberOfCallsAType
 */
class MaximumNumberOfCallsAType
{

    /**
     * Maximum number of previous calls to include. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Previous absent, include all previous calls.
     *
     * @property int $previous
     */
    private $previous = null;

    /**
     * Maximum number of onwards calls to include. Zero for none. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Onwards absent, include all onwards calls.
     *
     * @property int $onwards
     */
    private $onwards = null;

    /**
     * Gets as previous
     *
     * Maximum number of previous calls to include. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Previous absent, include all previous calls.
     *
     * @return int
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * Sets a new previous
     *
     * Maximum number of previous calls to include. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Previous absent, include all previous calls.
     *
     * @param int $previous
     * @return self
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * Gets as onwards
     *
     * Maximum number of onwards calls to include. Zero for none. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Onwards absent, include all onwards calls.
     *
     * @return int
     */
    public function getOnwards()
    {
        return $this->onwards;
    }

    /**
     * Sets a new onwards
     *
     * Maximum number of onwards calls to include. Zero for none. Only applies if MaximumNumberOfCalls soecified. Zero for none. If MaximumNumber of Calls specified but MaximumNumberOfCalls.Onwards absent, include all onwards calls.
     *
     * @param int $onwards
     * @return self
     */
    public function setOnwards($onwards)
    {
        $this->onwards = $onwards;
        return $this;
    }


}

