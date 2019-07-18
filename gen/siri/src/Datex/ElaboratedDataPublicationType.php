<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ElaboratedDataPublicationType
 *
 * A publication containing one or more elaborated data sets.
 * XSD Type: ElaboratedDataPublication
 */
class ElaboratedDataPublicationType extends PayloadPublicationType
{

    /**
     * The default value for the publication of whether the elaborated data is a forecast (true = forecast).
     *
     * @property bool $forecastDefault
     */
    private $forecastDefault = null;

    /**
     * The default value for the publication of the time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @property float $periodDefault
     */
    private $periodDefault = null;

    /**
     * The default for the publication of the time at which the values have been computed/derived.
     *
     * @property \DateTime $timeDefault
     */
    private $timeDefault = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ReferenceSettingsType $referenceSettings
     */
    private $referenceSettings = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ElaboratedDataType[] $elaboratedData
     */
    private $elaboratedData = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataPublicationExtension
     */
    private $elaboratedDataPublicationExtension = null;

    /**
     * Gets as forecastDefault
     *
     * The default value for the publication of whether the elaborated data is a forecast (true = forecast).
     *
     * @return bool
     */
    public function getForecastDefault()
    {
        return $this->forecastDefault;
    }

    /**
     * Sets a new forecastDefault
     *
     * The default value for the publication of whether the elaborated data is a forecast (true = forecast).
     *
     * @param bool $forecastDefault
     * @return self
     */
    public function setForecastDefault($forecastDefault)
    {
        $this->forecastDefault = $forecastDefault;
        return $this;
    }

    /**
     * Gets as periodDefault
     *
     * The default value for the publication of the time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @return float
     */
    public function getPeriodDefault()
    {
        return $this->periodDefault;
    }

    /**
     * Sets a new periodDefault
     *
     * The default value for the publication of the time elapsed between the beginning and the end of the sampling or measurement period. This item may differ from the unit attribute; e.g. an hourly flow can be estimated from a 5-minute measurement period.
     *
     * @param float $periodDefault
     * @return self
     */
    public function setPeriodDefault($periodDefault)
    {
        $this->periodDefault = $periodDefault;
        return $this;
    }

    /**
     * Gets as timeDefault
     *
     * The default for the publication of the time at which the values have been computed/derived.
     *
     * @return \DateTime
     */
    public function getTimeDefault()
    {
        return $this->timeDefault;
    }

    /**
     * Sets a new timeDefault
     *
     * The default for the publication of the time at which the values have been computed/derived.
     *
     * @param \DateTime $timeDefault
     * @return self
     */
    public function setTimeDefault(\DateTime $timeDefault)
    {
        $this->timeDefault = $timeDefault;
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
     * Gets as referenceSettings
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferenceSettingsType
     */
    public function getReferenceSettings()
    {
        return $this->referenceSettings;
    }

    /**
     * Sets a new referenceSettings
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferenceSettingsType $referenceSettings
     * @return self
     */
    public function setReferenceSettings(\Calcinai\Siri\Objects\Datex\ReferenceSettingsType $referenceSettings)
    {
        $this->referenceSettings = $referenceSettings;
        return $this;
    }

    /**
     * Adds as elaboratedData
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\ElaboratedDataType $elaboratedData
     */
    public function addToElaboratedData(\Calcinai\Siri\Objects\Datex\ElaboratedDataType $elaboratedData)
    {
        $this->elaboratedData[] = $elaboratedData;
        return $this;
    }

    /**
     * isset elaboratedData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElaboratedData($index)
    {
        return isset($this->elaboratedData[$index]);
    }

    /**
     * unset elaboratedData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElaboratedData($index)
    {
        unset($this->elaboratedData[$index]);
    }

    /**
     * Gets as elaboratedData
     *
     * @return \Calcinai\Siri\Objects\Datex\ElaboratedDataType[]
     */
    public function getElaboratedData()
    {
        return $this->elaboratedData;
    }

    /**
     * Sets a new elaboratedData
     *
     * @param \Calcinai\Siri\Objects\Datex\ElaboratedDataType[] $elaboratedData
     * @return self
     */
    public function setElaboratedData(array $elaboratedData)
    {
        $this->elaboratedData = $elaboratedData;
        return $this;
    }

    /**
     * Gets as elaboratedDataPublicationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getElaboratedDataPublicationExtension()
    {
        return $this->elaboratedDataPublicationExtension;
    }

    /**
     * Sets a new elaboratedDataPublicationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataPublicationExtension
     * @return self
     */
    public function setElaboratedDataPublicationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataPublicationExtension)
    {
        $this->elaboratedDataPublicationExtension = $elaboratedDataPublicationExtension;
        return $this;
    }


}

