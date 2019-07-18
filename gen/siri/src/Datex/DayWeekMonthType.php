<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing DayWeekMonthType
 *
 * Specification of periods defined by the intersection of days, weeks and months.
 * XSD Type: DayWeekMonth
 */
class DayWeekMonthType
{

    /**
     * Applicable day of the week.
     *
     * @property string[] $applicableDay
     */
    private $applicableDay = [
        
    ];

    /**
     * Applicable week of the month (1 to 5).
     *
     * @property string[] $applicableWeek
     */
    private $applicableWeek = [
        
    ];

    /**
     * Applicable month of the year.
     *
     * @property string[] $applicableMonth
     */
    private $applicableMonth = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $dayWeekMonthExtension
     */
    private $dayWeekMonthExtension = null;

    /**
     * Adds as applicableDay
     *
     * Applicable day of the week.
     *
     * @return self
     * @param string $applicableDay
     */
    public function addToApplicableDay($applicableDay)
    {
        $this->applicableDay[] = $applicableDay;
        return $this;
    }

    /**
     * isset applicableDay
     *
     * Applicable day of the week.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableDay($index)
    {
        return isset($this->applicableDay[$index]);
    }

    /**
     * unset applicableDay
     *
     * Applicable day of the week.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableDay($index)
    {
        unset($this->applicableDay[$index]);
    }

    /**
     * Gets as applicableDay
     *
     * Applicable day of the week.
     *
     * @return string[]
     */
    public function getApplicableDay()
    {
        return $this->applicableDay;
    }

    /**
     * Sets a new applicableDay
     *
     * Applicable day of the week.
     *
     * @param string $applicableDay
     * @return self
     */
    public function setApplicableDay(array $applicableDay)
    {
        $this->applicableDay = $applicableDay;
        return $this;
    }

    /**
     * Adds as applicableWeek
     *
     * Applicable week of the month (1 to 5).
     *
     * @return self
     * @param string $applicableWeek
     */
    public function addToApplicableWeek($applicableWeek)
    {
        $this->applicableWeek[] = $applicableWeek;
        return $this;
    }

    /**
     * isset applicableWeek
     *
     * Applicable week of the month (1 to 5).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableWeek($index)
    {
        return isset($this->applicableWeek[$index]);
    }

    /**
     * unset applicableWeek
     *
     * Applicable week of the month (1 to 5).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableWeek($index)
    {
        unset($this->applicableWeek[$index]);
    }

    /**
     * Gets as applicableWeek
     *
     * Applicable week of the month (1 to 5).
     *
     * @return string[]
     */
    public function getApplicableWeek()
    {
        return $this->applicableWeek;
    }

    /**
     * Sets a new applicableWeek
     *
     * Applicable week of the month (1 to 5).
     *
     * @param string $applicableWeek
     * @return self
     */
    public function setApplicableWeek(array $applicableWeek)
    {
        $this->applicableWeek = $applicableWeek;
        return $this;
    }

    /**
     * Adds as applicableMonth
     *
     * Applicable month of the year.
     *
     * @return self
     * @param string $applicableMonth
     */
    public function addToApplicableMonth($applicableMonth)
    {
        $this->applicableMonth[] = $applicableMonth;
        return $this;
    }

    /**
     * isset applicableMonth
     *
     * Applicable month of the year.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableMonth($index)
    {
        return isset($this->applicableMonth[$index]);
    }

    /**
     * unset applicableMonth
     *
     * Applicable month of the year.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableMonth($index)
    {
        unset($this->applicableMonth[$index]);
    }

    /**
     * Gets as applicableMonth
     *
     * Applicable month of the year.
     *
     * @return string[]
     */
    public function getApplicableMonth()
    {
        return $this->applicableMonth;
    }

    /**
     * Sets a new applicableMonth
     *
     * Applicable month of the year.
     *
     * @param string $applicableMonth
     * @return self
     */
    public function setApplicableMonth(array $applicableMonth)
    {
        $this->applicableMonth = $applicableMonth;
        return $this;
    }

    /**
     * Gets as dayWeekMonthExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getDayWeekMonthExtension()
    {
        return $this->dayWeekMonthExtension;
    }

    /**
     * Sets a new dayWeekMonthExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $dayWeekMonthExtension
     * @return self
     */
    public function setDayWeekMonthExtension(\Calcinai\Siri\Datex\ExtensionType $dayWeekMonthExtension)
    {
        $this->dayWeekMonthExtension = $dayWeekMonthExtension;
        return $this;
    }


}

