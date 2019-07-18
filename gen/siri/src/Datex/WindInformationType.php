<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing WindInformationType
 *
 * Measurements of wind conditions.
 * XSD Type: WindInformation
 */
class WindInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\WindType $wind
     */
    private $wind = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $windInformationExtension
     */
    private $windInformationExtension = null;

    /**
     * Gets as wind
     *
     * @return \Calcinai\Siri\Objects\Datex\WindType
     */
    public function getWind()
    {
        return $this->wind;
    }

    /**
     * Sets a new wind
     *
     * @param \Calcinai\Siri\Objects\Datex\WindType $wind
     * @return self
     */
    public function setWind(\Calcinai\Siri\Objects\Datex\WindType $wind)
    {
        $this->wind = $wind;
        return $this;
    }

    /**
     * Gets as windInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getWindInformationExtension()
    {
        return $this->windInformationExtension;
    }

    /**
     * Sets a new windInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $windInformationExtension
     * @return self
     */
    public function setWindInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $windInformationExtension)
    {
        $this->windInformationExtension = $windInformationExtension;
        return $this;
    }


}

