<?php

namespace Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType;

/**
 * Class representing MeasurementEquipmentTypeUsedAType
 */
class MeasurementEquipmentTypeUsedAType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[] $value
     */
    private $value = [
        
    ];

    /**
     * Adds as value
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType $value
     */
    public function addToValue(\Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * @return \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

