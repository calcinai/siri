<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TimePeriodByHourType
 *
 * Specification of a continuous period within a 24 hour period by times.
 * XSD Type: TimePeriodByHour
 */
class TimePeriodByHourType extends TimePeriodOfDayType
{

    /**
     * Start of time period.
     *
     * @property \DateTime $startTimeOfPeriod
     */
    private $startTimeOfPeriod = null;

    /**
     * End of time period.
     *
     * @property \DateTime $endTimeOfPeriod
     */
    private $endTimeOfPeriod = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $timePeriodByHourExtension
     */
    private $timePeriodByHourExtension = null;

    /**
     * Gets as startTimeOfPeriod
     *
     * Start of time period.
     *
     * @return \DateTime
     */
    public function getStartTimeOfPeriod()
    {
        return $this->startTimeOfPeriod;
    }

    /**
     * Sets a new startTimeOfPeriod
     *
     * Start of time period.
     *
     * @param \DateTime $startTimeOfPeriod
     * @return self
     */
    public function setStartTimeOfPeriod(\DateTime $startTimeOfPeriod)
    {
        $this->startTimeOfPeriod = $startTimeOfPeriod;
        return $this;
    }

    /**
     * Gets as endTimeOfPeriod
     *
     * End of time period.
     *
     * @return \DateTime
     */
    public function getEndTimeOfPeriod()
    {
        return $this->endTimeOfPeriod;
    }

    /**
     * Sets a new endTimeOfPeriod
     *
     * End of time period.
     *
     * @param \DateTime $endTimeOfPeriod
     * @return self
     */
    public function setEndTimeOfPeriod(\DateTime $endTimeOfPeriod)
    {
        $this->endTimeOfPeriod = $endTimeOfPeriod;
        return $this;
    }

    /**
     * Gets as timePeriodByHourExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTimePeriodByHourExtension()
    {
        return $this->timePeriodByHourExtension;
    }

    /**
     * Sets a new timePeriodByHourExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $timePeriodByHourExtension
     * @return self
     */
    public function setTimePeriodByHourExtension(\Calcinai\Siri\Datex\ExtensionType $timePeriodByHourExtension)
    {
        $this->timePeriodByHourExtension = $timePeriodByHourExtension;
        return $this;
    }


}

