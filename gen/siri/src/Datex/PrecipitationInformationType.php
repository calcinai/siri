<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PrecipitationInformationType
 *
 * Measurements of precipitation.
 * XSD Type: PrecipitationInformation
 */
class PrecipitationInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\PrecipitationDetailType $precipitationDetail
     */
    private $precipitationDetail = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $precipitationInformationExtension
     */
    private $precipitationInformationExtension = null;

    /**
     * Gets as precipitationDetail
     *
     * @return \Calcinai\Siri\Objects\Datex\PrecipitationDetailType
     */
    public function getPrecipitationDetail()
    {
        return $this->precipitationDetail;
    }

    /**
     * Sets a new precipitationDetail
     *
     * @param \Calcinai\Siri\Objects\Datex\PrecipitationDetailType $precipitationDetail
     * @return self
     */
    public function setPrecipitationDetail(\Calcinai\Siri\Objects\Datex\PrecipitationDetailType $precipitationDetail)
    {
        $this->precipitationDetail = $precipitationDetail;
        return $this;
    }

    /**
     * Gets as precipitationInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPrecipitationInformationExtension()
    {
        return $this->precipitationInformationExtension;
    }

    /**
     * Sets a new precipitationInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $precipitationInformationExtension
     * @return self
     */
    public function setPrecipitationInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $precipitationInformationExtension)
    {
        $this->precipitationInformationExtension = $precipitationInformationExtension;
        return $this;
    }


}

