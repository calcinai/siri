<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MeasurementSpecificCharacteristicsType
 *
 * Characteristics which are specific to an individual measurement type (specified in a known order) at the given measurement site.
 * XSD Type: MeasurementSpecificCharacteristics
 */
class MeasurementSpecificCharacteristicsType
{

    /**
     * The extent to which the specific measured values may be subject to error, measured as a percentage of the data value.
     *
     * @property float $accuracy
     */
    private $accuracy = null;

    /**
     * The time elapsed between the beginning and the end of the sampling or measurements period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @property float $period
     */
    private $period = null;

    /**
     * Coefficient required when a moving average is computed to give specific weights to the former average and the new data. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
     *
     * @property float $smoothingFactor
     */
    private $smoothingFactor = null;

    /**
     * The lane to which the specific measurement at the measurement site relates. This overrides any lane specified for the measurement site as a whole.
     *
     * @property string $specificLane
     */
    private $specificLane = null;

    /**
     * The type of this specific measurement at the measurement site.
     *
     * @property string $specificMeasurementValueType
     */
    private $specificMeasurementValueType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $specificVehicleCharacteristics
     */
    private $specificVehicleCharacteristics = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSpecificCharacteristicsExtension
     */
    private $measurementSpecificCharacteristicsExtension = null;

    /**
     * Gets as accuracy
     *
     * The extent to which the specific measured values may be subject to error, measured as a percentage of the data value.
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
     * The extent to which the specific measured values may be subject to error, measured as a percentage of the data value.
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
     * Gets as period
     *
     * The time elapsed between the beginning and the end of the sampling or measurements period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
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
     * The time elapsed between the beginning and the end of the sampling or measurements period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
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
     * Coefficient required when a moving average is computed to give specific weights to the former average and the new data. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
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
     * Coefficient required when a moving average is computed to give specific weights to the former average and the new data. A typical formula is, F being the smoothing factor: New average = (old average) F + (new data) (1 - F).
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
     * Gets as specificLane
     *
     * The lane to which the specific measurement at the measurement site relates. This overrides any lane specified for the measurement site as a whole.
     *
     * @return string
     */
    public function getSpecificLane()
    {
        return $this->specificLane;
    }

    /**
     * Sets a new specificLane
     *
     * The lane to which the specific measurement at the measurement site relates. This overrides any lane specified for the measurement site as a whole.
     *
     * @param string $specificLane
     * @return self
     */
    public function setSpecificLane($specificLane)
    {
        $this->specificLane = $specificLane;
        return $this;
    }

    /**
     * Gets as specificMeasurementValueType
     *
     * The type of this specific measurement at the measurement site.
     *
     * @return string
     */
    public function getSpecificMeasurementValueType()
    {
        return $this->specificMeasurementValueType;
    }

    /**
     * Sets a new specificMeasurementValueType
     *
     * The type of this specific measurement at the measurement site.
     *
     * @param string $specificMeasurementValueType
     * @return self
     */
    public function setSpecificMeasurementValueType($specificMeasurementValueType)
    {
        $this->specificMeasurementValueType = $specificMeasurementValueType;
        return $this;
    }

    /**
     * Gets as specificVehicleCharacteristics
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType
     */
    public function getSpecificVehicleCharacteristics()
    {
        return $this->specificVehicleCharacteristics;
    }

    /**
     * Sets a new specificVehicleCharacteristics
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $specificVehicleCharacteristics
     * @return self
     */
    public function setSpecificVehicleCharacteristics(\Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $specificVehicleCharacteristics)
    {
        $this->specificVehicleCharacteristics = $specificVehicleCharacteristics;
        return $this;
    }

    /**
     * Gets as measurementSpecificCharacteristicsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMeasurementSpecificCharacteristicsExtension()
    {
        return $this->measurementSpecificCharacteristicsExtension;
    }

    /**
     * Sets a new measurementSpecificCharacteristicsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSpecificCharacteristicsExtension
     * @return self
     */
    public function setMeasurementSpecificCharacteristicsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $measurementSpecificCharacteristicsExtension)
    {
        $this->measurementSpecificCharacteristicsExtension = $measurementSpecificCharacteristicsExtension;
        return $this;
    }


}

