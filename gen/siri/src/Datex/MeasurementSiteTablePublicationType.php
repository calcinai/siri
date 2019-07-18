<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MeasurementSiteTablePublicationType
 *
 * A publication containing one or more Measurment Site Tables.
 * XSD Type: MeasurementSiteTablePublication
 */
class MeasurementSiteTablePublicationType extends PayloadPublicationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\MeasurementSiteTableType[] $measurementSiteTable
     */
    private $measurementSiteTable = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteTablePublicationExtension
     */
    private $measurementSiteTablePublicationExtension = null;

    /**
     * Gets as headerInformation
     *
     * @return \Calcinai\Siri\Objects\Datex\HeaderInformationType
     */
    public function getHeaderInformation()
    {
        return $this->headerInformation;
    }

    /**
     * Sets a new headerInformation
     *
     * @param \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     * @return self
     */
    public function setHeaderInformation(\Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation)
    {
        $this->headerInformation = $headerInformation;
        return $this;
    }

    /**
     * Adds as measurementSiteTable
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteTableType $measurementSiteTable
     */
    public function addToMeasurementSiteTable(\Calcinai\Siri\Objects\Datex\MeasurementSiteTableType $measurementSiteTable)
    {
        $this->measurementSiteTable[] = $measurementSiteTable;
        return $this;
    }

    /**
     * isset measurementSiteTable
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementSiteTable($index)
    {
        return isset($this->measurementSiteTable[$index]);
    }

    /**
     * unset measurementSiteTable
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementSiteTable($index)
    {
        unset($this->measurementSiteTable[$index]);
    }

    /**
     * Gets as measurementSiteTable
     *
     * @return \Calcinai\Siri\Objects\Datex\MeasurementSiteTableType[]
     */
    public function getMeasurementSiteTable()
    {
        return $this->measurementSiteTable;
    }

    /**
     * Sets a new measurementSiteTable
     *
     * @param \Calcinai\Siri\Objects\Datex\MeasurementSiteTableType[] $measurementSiteTable
     * @return self
     */
    public function setMeasurementSiteTable(array $measurementSiteTable)
    {
        $this->measurementSiteTable = $measurementSiteTable;
        return $this;
    }

    /**
     * Gets as measurementSiteTablePublicationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMeasurementSiteTablePublicationExtension()
    {
        return $this->measurementSiteTablePublicationExtension;
    }

    /**
     * Sets a new measurementSiteTablePublicationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteTablePublicationExtension
     * @return self
     */
    public function setMeasurementSiteTablePublicationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $measurementSiteTablePublicationExtension)
    {
        $this->measurementSiteTablePublicationExtension = $measurementSiteTablePublicationExtension;
        return $this;
    }


}

