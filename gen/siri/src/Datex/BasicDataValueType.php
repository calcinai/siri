<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing BasicDataValueType
 *
 * Generic data values of either measured or elaborated data.
 * XSD Type: BasicDataValue
 */
class BasicDataValueType
{

    /**
     * The extent to which the data value may be subject to error, measured as a percentage of the data value.
     *
     * @property float $accuracy
     */
    private $accuracy = null;

    /**
     * Method of computation which has been used to compute this data value.
     *
     * @property string $computationalMethod
     */
    private $computationalMethod = null;

    /**
     * Indication of whether the value is deemed to be faulty by the supplier, (true = faulty). If not present the data value is assumed to be ok. This may be used when automatic fault detection information relating to sensors is available.
     *
     * @property bool $fault
     */
    private $fault = null;

    /**
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @property \Calcinai\Siri\Datex\BasicDataValueType\FaultReasonAType\ValueAType[] $faultReason
     */
    private $faultReason = null;

    /**
     * The number of inputs detected but not completed during the sampling or measurement period; e.g. vehicles detected entering but not exiting the detection zone.
     *
     * @property int $numberOfIncompleteInputs
     */
    private $numberOfIncompleteInputs = null;

    /**
     * The number of input values used in the sampling or measurment period to determine the data value.
     *
     * @property int $numberOfInputValuesUsed
     */
    private $numberOfInputValuesUsed = null;

    /**
     * The time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @property float $period
     */
    private $period = null;

    /**
     * Coefficient required, when a moving average is computed, to give specific weights to the former average and the new data value. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
     *
     * @property float $smoothingFactor
     */
    private $smoothingFactor = null;

    /**
     * The standard deviation of the sample of input values from which this value was derived, measured in the units of the data value.
     *
     * @property float $standardDeviation
     */
    private $standardDeviation = null;

    /**
     * A measure of data quality assigned to the value by the supplier. 100% equates to ideal/perfect quality. The method of calculation is supplier specific and needs to be agreed between supplier and client.
     *
     * @property float $supplierCalculatedDataQuality
     */
    private $supplierCalculatedDataQuality = null;

    /**
     * Point in time at which this specific value has been computed or measured.
     *
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * @property \Calcinai\Siri\Datex\GroupOfLocationsType $affectedLocation
     */
    private $affectedLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $basicDataValueExtension
     */
    private $basicDataValueExtension = null;

    /**
     * Gets as accuracy
     *
     * The extent to which the data value may be subject to error, measured as a percentage of the data value.
     *
     * @return float
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Sets a new accuracy
     *
     * The extent to which the data value may be subject to error, measured as a percentage of the data value.
     *
     * @param float $accuracy
     * @return self
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
        return $this;
    }

    /**
     * Gets as computationalMethod
     *
     * Method of computation which has been used to compute this data value.
     *
     * @return string
     */
    public function getComputationalMethod()
    {
        return $this->computationalMethod;
    }

    /**
     * Sets a new computationalMethod
     *
     * Method of computation which has been used to compute this data value.
     *
     * @param string $computationalMethod
     * @return self
     */
    public function setComputationalMethod($computationalMethod)
    {
        $this->computationalMethod = $computationalMethod;
        return $this;
    }

    /**
     * Gets as fault
     *
     * Indication of whether the value is deemed to be faulty by the supplier, (true = faulty). If not present the data value is assumed to be ok. This may be used when automatic fault detection information relating to sensors is available.
     *
     * @return bool
     */
    public function getFault()
    {
        return $this->fault;
    }

    /**
     * Sets a new fault
     *
     * Indication of whether the value is deemed to be faulty by the supplier, (true = faulty). If not present the data value is assumed to be ok. This may be used when automatic fault detection information relating to sensors is available.
     *
     * @param bool $fault
     * @return self
     */
    public function setFault($fault)
    {
        $this->fault = $fault;
        return $this;
    }

    /**
     * Adds as value
     *
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\BasicDataValueType\FaultReasonAType\ValueAType $value
     */
    public function addToFaultReason(\Calcinai\Siri\Datex\BasicDataValueType\FaultReasonAType\ValueAType $value)
    {
        $this->faultReason[] = $value;
        return $this;
    }

    /**
     * isset faultReason
     *
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFaultReason($index)
    {
        return isset($this->faultReason[$index]);
    }

    /**
     * unset faultReason
     *
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFaultReason($index)
    {
        unset($this->faultReason[$index]);
    }

    /**
     * Gets as faultReason
     *
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @return \Calcinai\Siri\Datex\BasicDataValueType\FaultReasonAType\ValueAType[]
     */
    public function getFaultReason()
    {
        return $this->faultReason;
    }

    /**
     * Sets a new faultReason
     *
     * The reason why the value is deemed to be faulty by the supplier.
     *
     * @param \Calcinai\Siri\Datex\BasicDataValueType\FaultReasonAType\ValueAType[] $faultReason
     * @return self
     */
    public function setFaultReason(array $faultReason)
    {
        $this->faultReason = $faultReason;
        return $this;
    }

    /**
     * Gets as numberOfIncompleteInputs
     *
     * The number of inputs detected but not completed during the sampling or measurement period; e.g. vehicles detected entering but not exiting the detection zone.
     *
     * @return int
     */
    public function getNumberOfIncompleteInputs()
    {
        return $this->numberOfIncompleteInputs;
    }

    /**
     * Sets a new numberOfIncompleteInputs
     *
     * The number of inputs detected but not completed during the sampling or measurement period; e.g. vehicles detected entering but not exiting the detection zone.
     *
     * @param int $numberOfIncompleteInputs
     * @return self
     */
    public function setNumberOfIncompleteInputs($numberOfIncompleteInputs)
    {
        $this->numberOfIncompleteInputs = $numberOfIncompleteInputs;
        return $this;
    }

    /**
     * Gets as numberOfInputValuesUsed
     *
     * The number of input values used in the sampling or measurment period to determine the data value.
     *
     * @return int
     */
    public function getNumberOfInputValuesUsed()
    {
        return $this->numberOfInputValuesUsed;
    }

    /**
     * Sets a new numberOfInputValuesUsed
     *
     * The number of input values used in the sampling or measurment period to determine the data value.
     *
     * @param int $numberOfInputValuesUsed
     * @return self
     */
    public function setNumberOfInputValuesUsed($numberOfInputValuesUsed)
    {
        $this->numberOfInputValuesUsed = $numberOfInputValuesUsed;
        return $this;
    }

    /**
     * Gets as period
     *
     * The time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @return float
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @param float $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as smoothingFactor
     *
     * Coefficient required, when a moving average is computed, to give specific weights to the former average and the new data value. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
     *
     * @return float
     */
    public function getSmoothingFactor()
    {
        return $this->smoothingFactor;
    }

    /**
     * Sets a new smoothingFactor
     *
     * Coefficient required, when a moving average is computed, to give specific weights to the former average and the new data value. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
     *
     * @param float $smoothingFactor
     * @return self
     */
    public function setSmoothingFactor($smoothingFactor)
    {
        $this->smoothingFactor = $smoothingFactor;
        return $this;
    }

    /**
     * Gets as standardDeviation
     *
     * The standard deviation of the sample of input values from which this value was derived, measured in the units of the data value.
     *
     * @return float
     */
    public function getStandardDeviation()
    {
        return $this->standardDeviation;
    }

    /**
     * Sets a new standardDeviation
     *
     * The standard deviation of the sample of input values from which this value was derived, measured in the units of the data value.
     *
     * @param float $standardDeviation
     * @return self
     */
    public function setStandardDeviation($standardDeviation)
    {
        $this->standardDeviation = $standardDeviation;
        return $this;
    }

    /**
     * Gets as supplierCalculatedDataQuality
     *
     * A measure of data quality assigned to the value by the supplier. 100% equates to ideal/perfect quality. The method of calculation is supplier specific and needs to be agreed between supplier and client.
     *
     * @return float
     */
    public function getSupplierCalculatedDataQuality()
    {
        return $this->supplierCalculatedDataQuality;
    }

    /**
     * Sets a new supplierCalculatedDataQuality
     *
     * A measure of data quality assigned to the value by the supplier. 100% equates to ideal/perfect quality. The method of calculation is supplier specific and needs to be agreed between supplier and client.
     *
     * @param float $supplierCalculatedDataQuality
     * @return self
     */
    public function setSupplierCalculatedDataQuality($supplierCalculatedDataQuality)
    {
        $this->supplierCalculatedDataQuality = $supplierCalculatedDataQuality;
        return $this;
    }

    /**
     * Gets as time
     *
     * Point in time at which this specific value has been computed or measured.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Point in time at which this specific value has been computed or measured.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as affectedLocation
     *
     * @return \Calcinai\Siri\Datex\GroupOfLocationsType
     */
    public function getAffectedLocation()
    {
        return $this->affectedLocation;
    }

    /**
     * Sets a new affectedLocation
     *
     * @param \Calcinai\Siri\Datex\GroupOfLocationsType $affectedLocation
     * @return self
     */
    public function setAffectedLocation(\Calcinai\Siri\Datex\GroupOfLocationsType $affectedLocation)
    {
        $this->affectedLocation = $affectedLocation;
        return $this;
    }

    /**
     * Gets as basicDataValueExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getBasicDataValueExtension()
    {
        return $this->basicDataValueExtension;
    }

    /**
     * Sets a new basicDataValueExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $basicDataValueExtension
     * @return self
     */
    public function setBasicDataValueExtension(\Calcinai\Siri\Datex\ExtensionType $basicDataValueExtension)
    {
        $this->basicDataValueExtension = $basicDataValueExtension;
        return $this;
    }


}

