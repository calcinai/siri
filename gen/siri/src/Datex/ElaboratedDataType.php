<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ElaboratedDataType
 *
 * An identifiable instance of data which is derived/computed from one or more measurements over a period of time. It may be a current value or a forecast value predicted from historical measurements.
 * XSD Type: ElaboratedData
 */
class ElaboratedDataType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Indication of whether this elaborated data is a forecast (true = forecast).
     *
     * @property bool $forecast
     */
    private $forecast = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation
     */
    private $sourceInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ValidityType $validity
     */
    private $validity = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\BasicDataValueType $basicDataValue
     */
    private $basicDataValue = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataExtension
     */
    private $elaboratedDataExtension = null;

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
     * Gets as forecast
     *
     * Indication of whether this elaborated data is a forecast (true = forecast).
     *
     * @return bool
     */
    public function getForecast()
    {
        return $this->forecast;
    }

    /**
     * Sets a new forecast
     *
     * Indication of whether this elaborated data is a forecast (true = forecast).
     *
     * @param bool $forecast
     * @return self
     */
    public function setForecast($forecast)
    {
        $this->forecast = $forecast;
        return $this;
    }

    /**
     * Gets as sourceInformation
     *
     * @return \Calcinai\Siri\Objects\Datex\SourceInformationType
     */
    public function getSourceInformation()
    {
        return $this->sourceInformation;
    }

    /**
     * Sets a new sourceInformation
     *
     * @param \Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation
     * @return self
     */
    public function setSourceInformation(\Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation)
    {
        $this->sourceInformation = $sourceInformation;
        return $this;
    }

    /**
     * Gets as validity
     *
     * @return \Calcinai\Siri\Objects\Datex\ValidityType
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Sets a new validity
     *
     * @param \Calcinai\Siri\Objects\Datex\ValidityType $validity
     * @return self
     */
    public function setValidity(\Calcinai\Siri\Objects\Datex\ValidityType $validity)
    {
        $this->validity = $validity;
        return $this;
    }

    /**
     * Gets as basicDataValue
     *
     * @return \Calcinai\Siri\Objects\Datex\BasicDataValueType
     */
    public function getBasicDataValue()
    {
        return $this->basicDataValue;
    }

    /**
     * Sets a new basicDataValue
     *
     * @param \Calcinai\Siri\Objects\Datex\BasicDataValueType $basicDataValue
     * @return self
     */
    public function setBasicDataValue(\Calcinai\Siri\Objects\Datex\BasicDataValueType $basicDataValue)
    {
        $this->basicDataValue = $basicDataValue;
        return $this;
    }

    /**
     * Gets as elaboratedDataExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getElaboratedDataExtension()
    {
        return $this->elaboratedDataExtension;
    }

    /**
     * Sets a new elaboratedDataExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataExtension
     * @return self
     */
    public function setElaboratedDataExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $elaboratedDataExtension)
    {
        $this->elaboratedDataExtension = $elaboratedDataExtension;
        return $this;
    }


}

