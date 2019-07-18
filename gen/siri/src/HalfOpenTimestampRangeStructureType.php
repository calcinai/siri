<?php

namespace Calcinai\Siri;

/**
 * Class representing HalfOpenTimestampRangeStructureType
 *
 * Data Type for a range of date times. Start time must be specified, end time is optional.
 * XSD Type: HalfOpenTimestampRangeStructure
 */
class HalfOpenTimestampRangeStructureType
{

    /**
     * The (inclusive) start time stamp.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The (inclusive) end time stamp. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as startTime
     *
     * The (inclusive) start time stamp.
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
     * The (inclusive) start time stamp.
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
     * The (inclusive) end time stamp. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
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
     * The (inclusive) end time stamp. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
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

