<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing MeasuredValueType
 *
 * Contains optional characteristics for the specific measured value (ordered/indexed to correspond with that of the referenced measurement point) which override the static characteristics defined for the measurement point.
 * XSD Type: MeasuredValue
 */
class MeasuredValueType
{

    /**
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @property \Calcinai\Siri\Datex\MeasuredValueType\MeasurementEquipmentTypeUsedAType\ValueAType[] $measurementEquipmentTypeUsed
     */
    private $measurementEquipmentTypeUsed = null;

    /**
     * @property \Calcinai\Siri\Datex\LocationCharacteristicsOverrideType $locationCharacteristicsOverride
     */
    private $locationCharacteristicsOverride = null;

    /**
     * @property \Calcinai\Siri\Datex\BasicDataValueType $basicDataValue
     */
    private $basicDataValue = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $measuredValueExtension
     */
    private $measuredValueExtension = null;

    /**
     * Adds as value
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @return self
     * @param \Calcinai\Siri\Datex\MeasuredValueType\MeasurementEquipmentTypeUsedAType\ValueAType $value
     */
    public function addToMeasurementEquipmentTypeUsed(\Calcinai\Siri\Datex\MeasuredValueType\MeasurementEquipmentTypeUsedAType\ValueAType $value)
    {
        $this->measurementEquipmentTypeUsed[] = $value;
        return $this;
    }

    /**
     * isset measurementEquipmentTypeUsed
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementEquipmentTypeUsed($index)
    {
        return isset($this->measurementEquipmentTypeUsed[$index]);
    }

    /**
     * unset measurementEquipmentTypeUsed
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementEquipmentTypeUsed($index)
    {
        unset($this->measurementEquipmentTypeUsed[$index]);
    }

    /**
     * Gets as measurementEquipmentTypeUsed
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @return \Calcinai\Siri\Datex\MeasuredValueType\MeasurementEquipmentTypeUsedAType\ValueAType[]
     */
    public function getMeasurementEquipmentTypeUsed()
    {
        return $this->measurementEquipmentTypeUsed;
    }

    /**
     * Sets a new measurementEquipmentTypeUsed
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @param \Calcinai\Siri\Datex\MeasuredValueType\MeasurementEquipmentTypeUsedAType\ValueAType[] $measurementEquipmentTypeUsed
     * @return self
     */
    public function setMeasurementEquipmentTypeUsed(array $measurementEquipmentTypeUsed)
    {
        $this->measurementEquipmentTypeUsed = $measurementEquipmentTypeUsed;
        return $this;
    }

    /**
     * Gets as locationCharacteristicsOverride
     *
     * @return \Calcinai\Siri\Datex\LocationCharacteristicsOverrideType
     */
    public function getLocationCharacteristicsOverride()
    {
        return $this->locationCharacteristicsOverride;
    }

    /**
     * Sets a new locationCharacteristicsOverride
     *
     * @param \Calcinai\Siri\Datex\LocationCharacteristicsOverrideType $locationCharacteristicsOverride
     * @return self
     */
    public function setLocationCharacteristicsOverride(\Calcinai\Siri\Datex\LocationCharacteristicsOverrideType $locationCharacteristicsOverride)
    {
        $this->locationCharacteristicsOverride = $locationCharacteristicsOverride;
        return $this;
    }

    /**
     * Gets as basicDataValue
     *
     * @return \Calcinai\Siri\Datex\BasicDataValueType
     */
    public function getBasicDataValue()
    {
        return $this->basicDataValue;
    }

    /**
     * Sets a new basicDataValue
     *
     * @param \Calcinai\Siri\Datex\BasicDataValueType $basicDataValue
     * @return self
     */
    public function setBasicDataValue(\Calcinai\Siri\Datex\BasicDataValueType $basicDataValue)
    {
        $this->basicDataValue = $basicDataValue;
        return $this;
    }

    /**
     * Gets as measuredValueExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getMeasuredValueExtension()
    {
        return $this->measuredValueExtension;
    }

    /**
     * Sets a new measuredValueExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $measuredValueExtension
     * @return self
     */
    public function setMeasuredValueExtension(\Calcinai\Siri\Datex\ExtensionType $measuredValueExtension)
    {
        $this->measuredValueExtension = $measuredValueExtension;
        return $this;
    }


}

