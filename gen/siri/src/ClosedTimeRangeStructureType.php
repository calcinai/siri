<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ClosedTimeRangeStructureType
 *
 * Data Type for a range of times. Both start and end time are required.
 * XSD Type: ClosedTimeRangeStructure
 */
class ClosedTimeRangeStructureType
{

    /**
     * The (inclusive) start time.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The (inclusive) end time.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as startTime
     *
     * The (inclusive) start time.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The (inclusive) start time.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The (inclusive) end time.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The (inclusive) end time.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }


}

