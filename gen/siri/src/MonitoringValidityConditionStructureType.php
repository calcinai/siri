<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing MonitoringValidityConditionStructureType
 *
 * Type for Description of the monitoring conditions (frequency of mesurement, etc): an automatic monitoring of the satus of a lift with pushed alert in case of incident is very different from a daily manual/visual check ....
 * XSD Type: MonitoringValidityConditionStructure
 */
class MonitoringValidityConditionStructureType
{

    /**
     * Date and Time range within which condition is available
     *
     * @property \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType[] $period
     */
    private $period = [
        
    ];

    /**
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @property \Calcinai\Siri\Objects\HalfOpenTimeRangeStructureType[] $timeband
     */
    private $timeband = [
        
    ];

    /**
     * Days type for monitoring availability
     *
     * @property string[] $dayType
     */
    private $dayType = [
        
    ];

    /**
     * Holiday type for monitoring availability
     *
     * @property string[] $holidayType
     */
    private $holidayType = [
        
    ];

    /**
     * Adds as period
     *
     * Date and Time range within which condition is available
     *
     * @return self
     * @param \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $period
     */
    public function addToPeriod(\Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * Date and Time range within which condition is available
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * Date and Time range within which condition is available
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * Date and Time range within which condition is available
     *
     * @return \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Date and Time range within which condition is available
     *
     * @param \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as timeband
     *
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @return self
     * @param \Calcinai\Siri\Objects\HalfOpenTimeRangeStructureType $timeband
     */
    public function addToTimeband(\Calcinai\Siri\Objects\HalfOpenTimeRangeStructureType $timeband)
    {
        $this->timeband[] = $timeband;
        return $this;
    }

    /**
     * isset timeband
     *
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeband($index)
    {
        return isset($this->timeband[$index]);
    }

    /**
     * unset timeband
     *
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeband($index)
    {
        unset($this->timeband[$index]);
    }

    /**
     * Gets as timeband
     *
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @return \Calcinai\Siri\Objects\HalfOpenTimeRangeStructureType[]
     */
    public function getTimeband()
    {
        return $this->timeband;
    }

    /**
     * Sets a new timeband
     *
     * Monitoring period within a single day (monitoring may not be available at night, or may ony occur at certain time of day for manual monitoring, etc.). Several periods can be defined
     *
     * @param \Calcinai\Siri\Objects\HalfOpenTimeRangeStructureType[] $timeband
     * @return self
     */
    public function setTimeband(array $timeband)
    {
        $this->timeband = $timeband;
        return $this;
    }

    /**
     * Adds as dayType
     *
     * Days type for monitoring availability
     *
     * @return self
     * @param string $dayType
     */
    public function addToDayType($dayType)
    {
        $this->dayType[] = $dayType;
        return $this;
    }

    /**
     * isset dayType
     *
     * Days type for monitoring availability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDayType($index)
    {
        return isset($this->dayType[$index]);
    }

    /**
     * unset dayType
     *
     * Days type for monitoring availability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDayType($index)
    {
        unset($this->dayType[$index]);
    }

    /**
     * Gets as dayType
     *
     * Days type for monitoring availability
     *
     * @return string[]
     */
    public function getDayType()
    {
        return $this->dayType;
    }

    /**
     * Sets a new dayType
     *
     * Days type for monitoring availability
     *
     * @param string $dayType
     * @return self
     */
    public function setDayType(array $dayType)
    {
        $this->dayType = $dayType;
        return $this;
    }

    /**
     * Adds as holidayType
     *
     * Holiday type for monitoring availability
     *
     * @return self
     * @param string $holidayType
     */
    public function addToHolidayType($holidayType)
    {
        $this->holidayType[] = $holidayType;
        return $this;
    }

    /**
     * isset holidayType
     *
     * Holiday type for monitoring availability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayType($index)
    {
        return isset($this->holidayType[$index]);
    }

    /**
     * unset holidayType
     *
     * Holiday type for monitoring availability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayType($index)
    {
        unset($this->holidayType[$index]);
    }

    /**
     * Gets as holidayType
     *
     * Holiday type for monitoring availability
     *
     * @return string[]
     */
    public function getHolidayType()
    {
        return $this->holidayType;
    }

    /**
     * Sets a new holidayType
     *
     * Holiday type for monitoring availability
     *
     * @param string $holidayType
     * @return self
     */
    public function setHolidayType(array $holidayType)
    {
        $this->holidayType = $holidayType;
        return $this;
    }


}

