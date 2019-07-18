<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ClosedTimestampRangeStructureType
 *
 * Data Type for a range of date and times. Both start and end time are required.
 * XSD Type: ClosedTimestampRangeStructure
 */
class ClosedTimestampRangeStructureType
{

    /**
     * The (inclusive) start date and time.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The (inclusive) end date and time.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as startTime
     *
     * The (inclusive) start date and time.
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
     * The (inclusive) start date and time.
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
     * The (inclusive) end date and time.
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
     * The (inclusive) end date and time.
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

