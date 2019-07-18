<?php

namespace Calcinai\Siri;

/**
 * Class representing HalfOpenTimeRangeStructureType
 *
 * Data Type for a range of times. Start time must be specified, end time is optional.
 * XSD Type: HalfOpenTimeRangeStructure
 */
class HalfOpenTimeRangeStructureType
{

    /**
     * The (inclusive) start time.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
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
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
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
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
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

