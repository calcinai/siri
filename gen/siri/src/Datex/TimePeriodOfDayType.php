<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TimePeriodOfDayType
 *
 * Specification of a continuous period of time within a 24 hour period.#NOTES#
 * XSD Type: TimePeriodOfDay
 */
class TimePeriodOfDayType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $timePeriodOfDayExtension
     */
    private $timePeriodOfDayExtension = null;

    /**
     * Gets as timePeriodOfDayExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTimePeriodOfDayExtension()
    {
        return $this->timePeriodOfDayExtension;
    }

    /**
     * Sets a new timePeriodOfDayExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $timePeriodOfDayExtension
     * @return self
     */
    public function setTimePeriodOfDayExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $timePeriodOfDayExtension)
    {
        $this->timePeriodOfDayExtension = $timePeriodOfDayExtension;
        return $this;
    }


}

