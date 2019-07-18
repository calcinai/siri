<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MeasurementSiteRecordType
 *
 * An identifiable single measurement site entry/record in the Measurement Site table.
 * XSD Type: MeasurementSiteRecord
 */
class MeasurementSiteRecordType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Method of computation which is used to compute the measured value(s) at the measurement site.
     *
     * @property string $computationMethod
     */
    private $computationMethod = null;

    /**
     * The reference given to the measurement equipment at the site.
     *
     * @property string $measurementEquipmentReference
     */
    private $measurementEquipmentReference = null;

    /**
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @property \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[] $measurementEquipmentTypeUsed
     */
    private $measurementEquipmentTypeUsed = null;

    /**
     * Name of a measurement site.
     *
     * @property \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSiteNameAType\ValueAType[] $measurementSiteName
     */
    private $measurementSiteName = null;

    /**
     * The number of lanes over which the measured value is determined.
     *
     * @property int $measurementSiteNumberOfLanes
     */
    private $measurementSiteNumberOfLanes = null;

    /**
     * Identification of a measurement site used by the supplier or consumer systems.
     *
     * @property string $measurementSiteReference
     */
    private $measurementSiteReference = null;

    /**
     * Side of the road on which measurements are acquired, corresponding to the direction of the road.
     *
     * @property string $measurementSide
     */
    private $measurementSide = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSpecificCharacteristicsAType[] $measurementSpecificCharacteristics
     */
    private $measurementSpecificCharacteristics = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\LocationType $measurementSiteLocation
     */
    private $measurementSiteLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteRecordExtension
     */
    private $measurementSiteRecordExtension = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as computationMethod
     *
     * Method of computation which is used to compute the measured value(s) at the measurement site.
     *
     * @return string
     */
    public function getComputationMethod()
    {
        return $this->computationMethod;
    }

    /**
     * Sets a new computationMethod
     *
     * Method of computation which is used to compute the measured value(s) at the measurement site.
     *
     * @param string $computationMethod
     * @return self
     */
    public function setComputationMethod($computationMethod)
    {
        $this->computationMethod = $computationMethod;
        return $this;
    }

    /**
     * Gets as measurementEquipmentReference
     *
     * The reference given to the measurement equipment at the site.
     *
     * @return string
     */
    public function getMeasurementEquipmentReference()
    {
        return $this->measurementEquipmentReference;
    }

    /**
     * Sets a new measurementEquipmentReference
     *
     * The reference given to the measurement equipment at the site.
     *
     * @param string $measurementEquipmentReference
     * @return self
     */
    public function setMeasurementEquipmentReference($measurementEquipmentReference)
    {
        $this->measurementEquipmentReference = $measurementEquipmentReference;
        return $this;
    }

    /**
     * Adds as value
     *
     * The type of equipment used to gather the raw information from which the data values are determined, e.g. 'loop', 'ANPR' (automatic number plate recognition) or 'urban traffic management system' (such as SCOOT).
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType $value
     */
    public function addToMeasurementEquipmentTypeUsed(\Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType $value)
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
     * @return \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[]
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
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementEquipmentTypeUsedAType\ValueAType[] $measurementEquipmentTypeUsed
     * @return self
     */
    public function setMeasurementEquipmentTypeUsed(array $measurementEquipmentTypeUsed)
    {
        $this->measurementEquipmentTypeUsed = $measurementEquipmentTypeUsed;
        return $this;
    }

    /**
     * Adds as value
     *
     * Name of a measurement site.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSiteNameAType\ValueAType $value
     */
    public function addToMeasurementSiteName(\Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSiteNameAType\ValueAType $value)
    {
        $this->measurementSiteName[] = $value;
        return $this;
    }

    /**
     * isset measurementSiteName
     *
     * Name of a measurement site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementSiteName($index)
    {
        return isset($this->measurementSiteName[$index]);
    }

    /**
     * unset measurementSiteName
     *
     * Name of a measurement site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementSiteName($index)
    {
        unset($this->measurementSiteName[$index]);
    }

    /**
     * Gets as measurementSiteName
     *
     * Name of a measurement site.
     *
     * @return \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSiteNameAType\ValueAType[]
     */
    public function getMeasurementSiteName()
    {
        return $this->measurementSiteName;
    }

    /**
     * Sets a new measurementSiteName
     *
     * Name of a measurement site.
     *
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSiteNameAType\ValueAType[] $measurementSiteName
     * @return self
     */
    public function setMeasurementSiteName(array $measurementSiteName)
    {
        $this->measurementSiteName = $measurementSiteName;
        return $this;
    }

    /**
     * Gets as measurementSiteNumberOfLanes
     *
     * The number of lanes over which the measured value is determined.
     *
     * @return int
     */
    public function getMeasurementSiteNumberOfLanes()
    {
        return $this->measurementSiteNumberOfLanes;
    }

    /**
     * Sets a new measurementSiteNumberOfLanes
     *
     * The number of lanes over which the measured value is determined.
     *
     * @param int $measurementSiteNumberOfLanes
     * @return self
     */
    public function setMeasurementSiteNumberOfLanes($measurementSiteNumberOfLanes)
    {
        $this->measurementSiteNumberOfLanes = $measurementSiteNumberOfLanes;
        return $this;
    }

    /**
     * Gets as measurementSiteReference
     *
     * Identification of a measurement site used by the supplier or consumer systems.
     *
     * @return string
     */
    public function getMeasurementSiteReference()
    {
        return $this->measurementSiteReference;
    }

    /**
     * Sets a new measurementSiteReference
     *
     * Identification of a measurement site used by the supplier or consumer systems.
     *
     * @param string $measurementSiteReference
     * @return self
     */
    public function setMeasurementSiteReference($measurementSiteReference)
    {
        $this->measurementSiteReference = $measurementSiteReference;
        return $this;
    }

    /**
     * Gets as measurementSide
     *
     * Side of the road on which measurements are acquired, corresponding to the direction of the road.
     *
     * @return string
     */
    public function getMeasurementSide()
    {
        return $this->measurementSide;
    }

    /**
     * Sets a new measurementSide
     *
     * Side of the road on which measurements are acquired, corresponding to the direction of the road.
     *
     * @param string $measurementSide
     * @return self
     */
    public function setMeasurementSide($measurementSide)
    {
        $this->measurementSide = $measurementSide;
        return $this;
    }

    /**
     * Adds as measurementSpecificCharacteristics
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSpecificCharacteristicsAType $measurementSpecificCharacteristics
     */
    public function addToMeasurementSpecificCharacteristics(\Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSpecificCharacteristicsAType $measurementSpecificCharacteristics)
    {
        $this->measurementSpecificCharacteristics[] = $measurementSpecificCharacteristics;
        return $this;
    }

    /**
     * isset measurementSpecificCharacteristics
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementSpecificCharacteristics($index)
    {
        return isset($this->measurementSpecificCharacteristics[$index]);
    }

    /**
     * unset measurementSpecificCharacteristics
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementSpecificCharacteristics($index)
    {
        unset($this->measurementSpecificCharacteristics[$index]);
    }

    /**
     * Gets as measurementSpecificCharacteristics
     *
     * @return \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSpecificCharacteristicsAType[]
     */
    public function getMeasurementSpecificCharacteristics()
    {
        return $this->measurementSpecificCharacteristics;
    }

    /**
     * Sets a new measurementSpecificCharacteristics
     *
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType\MeasurementSpecificCharacteristicsAType[] $measurementSpecificCharacteristics
     * @return self
     */
    public function setMeasurementSpecificCharacteristics(array $measurementSpecificCharacteristics)
    {
        $this->measurementSpecificCharacteristics = $measurementSpecificCharacteristics;
        return $this;
    }

    /**
     * Gets as measurementSiteLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\LocationType
     */
    public function getMeasurementSiteLocation()
    {
        return $this->measurementSiteLocation;
    }

    /**
     * Sets a new measurementSiteLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\LocationType $measurementSiteLocation
     * @return self
     */
    public function setMeasurementSiteLocation(\Calcinai\Siri\Objects\Datex\LocationType $measurementSiteLocation)
    {
        $this->measurementSiteLocation = $measurementSiteLocation;
        return $this;
    }

    /**
     * Gets as measurementSiteRecordExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMeasurementSiteRecordExtension()
    {
        return $this->measurementSiteRecordExtension;
    }

    /**
     * Sets a new measurementSiteRecordExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteRecordExtension
     * @return self
     */
    public function setMeasurementSiteRecordExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteRecordExtension)
    {
        $this->measurementSiteRecordExtension = $measurementSiteRecordExtension;
        return $this;
    }


}

