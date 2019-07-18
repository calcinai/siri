<?php

namespace Calcinai\Siri\Objects\PushedActionStructureType;

/**
 * Class representing BeforeNoticesAType
 */
class BeforeNoticesAType
{

    /**
     * Intervals before validity start date to send reminders.
     *
     * @property \DateInterval[] $interval
     */
    private $interval = [
        
    ];

    /**
     * Adds as interval
     *
     * Intervals before validity start date to send reminders.
     *
     * @return self
     * @param \DateInterval $interval
     */
    public function addToInterval(\DateInterval $interval)
    {
        $this->interval[] = $interval;
        return $this;
    }

    /**
     * isset interval
     *
     * Intervals before validity start date to send reminders.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterval($index)
    {
        return isset($this->interval[$index]);
    }

    /**
     * unset interval
     *
     * Intervals before validity start date to send reminders.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterval($index)
    {
        unset($this->interval[$index]);
    }

    /**
     * Gets as interval
     *
     * Intervals before validity start date to send reminders.
     *
     * @return \DateInterval[]
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * Intervals before validity start date to send reminders.
     *
     * @param \DateInterval $interval
     * @return self
     */
    public function setInterval(array $interval)
    {
        $this->interval = $interval;
        return $this;
    }


}

