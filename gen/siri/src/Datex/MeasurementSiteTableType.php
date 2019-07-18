<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing MeasurementSiteTableType
 *
 * A Measurement Site Table comprising a number of sets of data, each describing the location from where a stream of measured data may be derived. Each location is known as a "measurement site" which can be a point, a linear road section or an area.
 * XSD Type: MeasurementSiteTable
 */
class MeasurementSiteTableType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * An alphanumeric reference for the measurement site table, possibly human readable.
     *
     * @property string $measurementSiteTableReference
     */
    private $measurementSiteTableReference = null;

    /**
     * The version of the measurement site table.
     *
     * @property int $measurementSiteTableVersion
     */
    private $measurementSiteTableVersion = null;

    /**
     * @property \Calcinai\Siri\Datex\MeasurementSiteRecordType[] $measurementSiteRecord
     */
    private $measurementSiteRecord = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $measurementSiteTableExtension
     */
    private $measurementSiteTableExtension = null;

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
     * Gets as measurementSiteTableReference
     *
     * An alphanumeric reference for the measurement site table, possibly human readable.
     *
     * @return string
     */
    public function getMeasurementSiteTableReference()
    {
        return $this->measurementSiteTableReference;
    }

    /**
     * Sets a new measurementSiteTableReference
     *
     * An alphanumeric reference for the measurement site table, possibly human readable.
     *
     * @param string $measurementSiteTableReference
     * @return self
     */
    public function setMeasurementSiteTableReference($measurementSiteTableReference)
    {
        $this->measurementSiteTableReference = $measurementSiteTableReference;
        return $this;
    }

    /**
     * Gets as measurementSiteTableVersion
     *
     * The version of the measurement site table.
     *
     * @return int
     */
    public function getMeasurementSiteTableVersion()
    {
        return $this->measurementSiteTableVersion;
    }

    /**
     * Sets a new measurementSiteTableVersion
     *
     * The version of the measurement site table.
     *
     * @param int $measurementSiteTableVersion
     * @return self
     */
    public function setMeasurementSiteTableVersion($measurementSiteTableVersion)
    {
        $this->measurementSiteTableVersion = $measurementSiteTableVersion;
        return $this;
    }

    /**
     * Adds as measurementSiteRecord
     *
     * @return self
     * @param \Calcinai\Siri\Datex\MeasurementSiteRecordType $measurementSiteRecord
     */
    public function addToMeasurementSiteRecord(\Calcinai\Siri\Datex\MeasurementSiteRecordType $measurementSiteRecord)
    {
        $this->measurementSiteRecord[] = $measurementSiteRecord;
        return $this;
    }

    /**
     * isset measurementSiteRecord
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementSiteRecord($index)
    {
        return isset($this->measurementSiteRecord[$index]);
    }

    /**
     * unset measurementSiteRecord
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementSiteRecord($index)
    {
        unset($this->measurementSiteRecord[$index]);
    }

    /**
     * Gets as measurementSiteRecord
     *
     * @return \Calcinai\Siri\Datex\MeasurementSiteRecordType[]
     */
    public function getMeasurementSiteRecord()
    {
        return $this->measurementSiteRecord;
    }

    /**
     * Sets a new measurementSiteRecord
     *
     * @param \Calcinai\Siri\Datex\MeasurementSiteRecordType[] $measurementSiteRecord
     * @return self
     */
    public function setMeasurementSiteRecord(array $measurementSiteRecord)
    {
        $this->measurementSiteRecord = $measurementSiteRecord;
        return $this;
    }

    /**
     * Gets as measurementSiteTableExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getMeasurementSiteTableExtension()
    {
        return $this->measurementSiteTableExtension;
    }

    /**
     * Sets a new measurementSiteTableExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $measurementSiteTableExtension
     * @return self
     */
    public function setMeasurementSiteTableExtension(\Calcinai\Siri\Datex\ExtensionType $measurementSiteTableExtension)
    {
        $this->measurementSiteTableExtension = $measurementSiteTableExtension;
        return $this;
    }


}

