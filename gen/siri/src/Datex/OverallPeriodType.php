<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing OverallPeriodType
 *
 * A continuous or discontinous period of validity defined by overall bounding start and end times and the possible intersection of valid periods (potentially recurring) with the complement of exception periods (also potentially recurring).
 * XSD Type: OverallPeriod
 */
class OverallPeriodType
{

    /**
     * Start of bounding period of validity defined by date and time.
     *
     * @property \DateTime $overallStartTime
     */
    private $overallStartTime = null;

    /**
     * End of bounding period of validity defined by date and time.
     *
     * @property \DateTime $overallEndTime
     */
    private $overallEndTime = null;

    /**
     * @property \Calcinai\Siri\Datex\PeriodType[] $validPeriod
     */
    private $validPeriod = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\PeriodType[] $exceptionPeriod
     */
    private $exceptionPeriod = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $overallPeriodExtension
     */
    private $overallPeriodExtension = null;

    /**
     * Gets as overallStartTime
     *
     * Start of bounding period of validity defined by date and time.
     *
     * @return \DateTime
     */
    public function getOverallStartTime()
    {
        return $this->overallStartTime;
    }

    /**
     * Sets a new overallStartTime
     *
     * Start of bounding period of validity defined by date and time.
     *
     * @param \DateTime $overallStartTime
     * @return self
     */
    public function setOverallStartTime(\DateTime $overallStartTime)
    {
        $this->overallStartTime = $overallStartTime;
        return $this;
    }

    /**
     * Gets as overallEndTime
     *
     * End of bounding period of validity defined by date and time.
     *
     * @return \DateTime
     */
    public function getOverallEndTime()
    {
        return $this->overallEndTime;
    }

    /**
     * Sets a new overallEndTime
     *
     * End of bounding period of validity defined by date and time.
     *
     * @param \DateTime $overallEndTime
     * @return self
     */
    public function setOverallEndTime(\DateTime $overallEndTime)
    {
        $this->overallEndTime = $overallEndTime;
        return $this;
    }

    /**
     * Adds as validPeriod
     *
     * @return self
     * @param \Calcinai\Siri\Datex\PeriodType $validPeriod
     */
    public function addToValidPeriod(\Calcinai\Siri\Datex\PeriodType $validPeriod)
    {
        $this->validPeriod[] = $validPeriod;
        return $this;
    }

    /**
     * isset validPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidPeriod($index)
    {
        return isset($this->validPeriod[$index]);
    }

    /**
     * unset validPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidPeriod($index)
    {
        unset($this->validPeriod[$index]);
    }

    /**
     * Gets as validPeriod
     *
     * @return \Calcinai\Siri\Datex\PeriodType[]
     */
    public function getValidPeriod()
    {
        return $this->validPeriod;
    }

    /**
     * Sets a new validPeriod
     *
     * @param \Calcinai\Siri\Datex\PeriodType[] $validPeriod
     * @return self
     */
    public function setValidPeriod(array $validPeriod)
    {
        $this->validPeriod = $validPeriod;
        return $this;
    }

    /**
     * Adds as exceptionPeriod
     *
     * @return self
     * @param \Calcinai\Siri\Datex\PeriodType $exceptionPeriod
     */
    public function addToExceptionPeriod(\Calcinai\Siri\Datex\PeriodType $exceptionPeriod)
    {
        $this->exceptionPeriod[] = $exceptionPeriod;
        return $this;
    }

    /**
     * isset exceptionPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExceptionPeriod($index)
    {
        return isset($this->exceptionPeriod[$index]);
    }

    /**
     * unset exceptionPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExceptionPeriod($index)
    {
        unset($this->exceptionPeriod[$index]);
    }

    /**
     * Gets as exceptionPeriod
     *
     * @return \Calcinai\Siri\Datex\PeriodType[]
     */
    public function getExceptionPeriod()
    {
        return $this->exceptionPeriod;
    }

    /**
     * Sets a new exceptionPeriod
     *
     * @param \Calcinai\Siri\Datex\PeriodType[] $exceptionPeriod
     * @return self
     */
    public function setExceptionPeriod(array $exceptionPeriod)
    {
        $this->exceptionPeriod = $exceptionPeriod;
        return $this;
    }

    /**
     * Gets as overallPeriodExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getOverallPeriodExtension()
    {
        return $this->overallPeriodExtension;
    }

    /**
     * Sets a new overallPeriodExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $overallPeriodExtension
     * @return self
     */
    public function setOverallPeriodExtension(\Calcinai\Siri\Datex\ExtensionType $overallPeriodExtension)
    {
        $this->overallPeriodExtension = $overallPeriodExtension;
        return $this;
    }


}

