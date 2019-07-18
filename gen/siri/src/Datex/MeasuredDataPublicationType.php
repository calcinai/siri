<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MeasuredDataPublicationType
 *
 * A publication containing one or more measurement data sets, each set being measured at a single measurement site.
 * XSD Type: MeasuredDataPublication
 */
class MeasuredDataPublicationType extends PayloadPublicationType
{

    /**
     * A reference to a measurement site table.
     *
     * @property string $measurementSiteTableReference
     */
    private $measurementSiteTableReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SiteMeasurementsType[] $siteMeasurements
     */
    private $siteMeasurements = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $measuredDataPublicationExtension
     */
    private $measuredDataPublicationExtension = null;

    /**
     * Gets as measurementSiteTableReference
     *
     * A reference to a measurement site table.
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
     * A reference to a measurement site table.
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
     * Adds as siteMeasurements
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\SiteMeasurementsType $siteMeasurements
     */
    public function addToSiteMeasurements(\Calcinai\Siri\Objects\Datex\SiteMeasurementsType $siteMeasurements)
    {
        $this->siteMeasurements[] = $siteMeasurements;
        return $this;
    }

    /**
     * isset siteMeasurements
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSiteMeasurements($index)
    {
        return isset($this->siteMeasurements[$index]);
    }

    /**
     * unset siteMeasurements
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSiteMeasurements($index)
    {
        unset($this->siteMeasurements[$index]);
    }

    /**
     * Gets as siteMeasurements
     *
     * @return \Calcinai\Siri\Objects\Datex\SiteMeasurementsType[]
     */
    public function getSiteMeasurements()
    {
        return $this->siteMeasurements;
    }

    /**
     * Sets a new siteMeasurements
     *
     * @param \Calcinai\Siri\Objects\Datex\SiteMeasurementsType[] $siteMeasurements
     * @return self
     */
    public function setSiteMeasurements(array $siteMeasurements)
    {
        $this->siteMeasurements = $siteMeasurements;
        return $this;
    }

    /**
     * Gets as measuredDataPublicationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMeasuredDataPublicationExtension()
    {
        return $this->measuredDataPublicationExtension;
    }

    /**
     * Sets a new measuredDataPublicationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $measuredDataPublicationExtension
     * @return self
     */
    public function setMeasuredDataPublicationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $measuredDataPublicationExtension)
    {
        $this->measuredDataPublicationExtension = $measuredDataPublicationExtension;
        return $this;
    }


}

