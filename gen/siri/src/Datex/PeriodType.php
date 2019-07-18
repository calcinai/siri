<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PeriodType
 *
 * A continuous time period or a set of discontinuous time periods defined by the intersection of a set of criteria all within an overall delimiting interval.
 * XSD Type: Period
 */
class PeriodType
{

    /**
     * Start of period.
     *
     * @property \DateTime $startOfPeriod
     */
    private $startOfPeriod = null;

    /**
     * End of a period.
     *
     * @property \DateTime $endOfPeriod
     */
    private $endOfPeriod = null;

    /**
     * The name of the period
     *
     * @property \Calcinai\Siri\Datex\PeriodType\PeriodNameAType\ValueAType[] $periodName
     */
    private $periodName = null;

    /**
     * @property \Calcinai\Siri\Datex\TimePeriodOfDayType[] $recurringTimePeriodOfDay
     */
    private $recurringTimePeriodOfDay = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\DayWeekMonthType[] $recurringDayWeekMonthPeriod
     */
    private $recurringDayWeekMonthPeriod = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $periodExtension
     */
    private $periodExtension = null;

    /**
     * Gets as startOfPeriod
     *
     * Start of period.
     *
     * @return \DateTime
     */
    public function getStartOfPeriod()
    {
        return $this->startOfPeriod;
    }

    /**
     * Sets a new startOfPeriod
     *
     * Start of period.
     *
     * @param \DateTime $startOfPeriod
     * @return self
     */
    public function setStartOfPeriod(\DateTime $startOfPeriod)
    {
        $this->startOfPeriod = $startOfPeriod;
        return $this;
    }

    /**
     * Gets as endOfPeriod
     *
     * End of a period.
     *
     * @return \DateTime
     */
    public function getEndOfPeriod()
    {
        return $this->endOfPeriod;
    }

    /**
     * Sets a new endOfPeriod
     *
     * End of a period.
     *
     * @param \DateTime $endOfPeriod
     * @return self
     */
    public function setEndOfPeriod(\DateTime $endOfPeriod)
    {
        $this->endOfPeriod = $endOfPeriod;
        return $this;
    }

    /**
     * Adds as value
     *
     * The name of the period
     *
     * @return self
     * @param \Calcinai\Siri\Datex\PeriodType\PeriodNameAType\ValueAType $value
     */
    public function addToPeriodName(\Calcinai\Siri\Datex\PeriodType\PeriodNameAType\ValueAType $value)
    {
        $this->periodName[] = $value;
        return $this;
    }

    /**
     * isset periodName
     *
     * The name of the period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriodName($index)
    {
        return isset($this->periodName[$index]);
    }

    /**
     * unset periodName
     *
     * The name of the period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriodName($index)
    {
        unset($this->periodName[$index]);
    }

    /**
     * Gets as periodName
     *
     * The name of the period
     *
     * @return \Calcinai\Siri\Datex\PeriodType\PeriodNameAType\ValueAType[]
     */
    public function getPeriodName()
    {
        return $this->periodName;
    }

    /**
     * Sets a new periodName
     *
     * The name of the period
     *
     * @param \Calcinai\Siri\Datex\PeriodType\PeriodNameAType\ValueAType[] $periodName
     * @return self
     */
    public function setPeriodName(array $periodName)
    {
        $this->periodName = $periodName;
        return $this;
    }

    /**
     * Adds as recurringTimePeriodOfDay
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TimePeriodOfDayType $recurringTimePeriodOfDay
     */
    public function addToRecurringTimePeriodOfDay(\Calcinai\Siri\Datex\TimePeriodOfDayType $recurringTimePeriodOfDay)
    {
        $this->recurringTimePeriodOfDay[] = $recurringTimePeriodOfDay;
        return $this;
    }

    /**
     * isset recurringTimePeriodOfDay
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecurringTimePeriodOfDay($index)
    {
        return isset($this->recurringTimePeriodOfDay[$index]);
    }

    /**
     * unset recurringTimePeriodOfDay
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecurringTimePeriodOfDay($index)
    {
        unset($this->recurringTimePeriodOfDay[$index]);
    }

    /**
     * Gets as recurringTimePeriodOfDay
     *
     * @return \Calcinai\Siri\Datex\TimePeriodOfDayType[]
     */
    public function getRecurringTimePeriodOfDay()
    {
        return $this->recurringTimePeriodOfDay;
    }

    /**
     * Sets a new recurringTimePeriodOfDay
     *
     * @param \Calcinai\Siri\Datex\TimePeriodOfDayType[] $recurringTimePeriodOfDay
     * @return self
     */
    public function setRecurringTimePeriodOfDay(array $recurringTimePeriodOfDay)
    {
        $this->recurringTimePeriodOfDay = $recurringTimePeriodOfDay;
        return $this;
    }

    /**
     * Adds as recurringDayWeekMonthPeriod
     *
     * @return self
     * @param \Calcinai\Siri\Datex\DayWeekMonthType $recurringDayWeekMonthPeriod
     */
    public function addToRecurringDayWeekMonthPeriod(\Calcinai\Siri\Datex\DayWeekMonthType $recurringDayWeekMonthPeriod)
    {
        $this->recurringDayWeekMonthPeriod[] = $recurringDayWeekMonthPeriod;
        return $this;
    }

    /**
     * isset recurringDayWeekMonthPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecurringDayWeekMonthPeriod($index)
    {
        return isset($this->recurringDayWeekMonthPeriod[$index]);
    }

    /**
     * unset recurringDayWeekMonthPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecurringDayWeekMonthPeriod($index)
    {
        unset($this->recurringDayWeekMonthPeriod[$index]);
    }

    /**
     * Gets as recurringDayWeekMonthPeriod
     *
     * @return \Calcinai\Siri\Datex\DayWeekMonthType[]
     */
    public function getRecurringDayWeekMonthPeriod()
    {
        return $this->recurringDayWeekMonthPeriod;
    }

    /**
     * Sets a new recurringDayWeekMonthPeriod
     *
     * @param \Calcinai\Siri\Datex\DayWeekMonthType[] $recurringDayWeekMonthPeriod
     * @return self
     */
    public function setRecurringDayWeekMonthPeriod(array $recurringDayWeekMonthPeriod)
    {
        $this->recurringDayWeekMonthPeriod = $recurringDayWeekMonthPeriod;
        return $this;
    }

    /**
     * Gets as periodExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPeriodExtension()
    {
        return $this->periodExtension;
    }

    /**
     * Sets a new periodExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $periodExtension
     * @return self
     */
    public function setPeriodExtension(\Calcinai\Siri\Datex\ExtensionType $periodExtension)
    {
        $this->periodExtension = $periodExtension;
        return $this;
    }


}

