<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TemperatureInformationType
 *
 * Measurements of atmospheric temperature.
 * XSD Type: TemperatureInformation
 */
class TemperatureInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Datex\TemperatureType $temperature
     */
    private $temperature = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $temperatureInformationExtension
     */
    private $temperatureInformationExtension = null;

    /**
     * Gets as temperature
     *
     * @return \Calcinai\Siri\Datex\TemperatureType
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * @param \Calcinai\Siri\Datex\TemperatureType $temperature
     * @return self
     */
    public function setTemperature(\Calcinai\Siri\Datex\TemperatureType $temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Gets as temperatureInformationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTemperatureInformationExtension()
    {
        return $this->temperatureInformationExtension;
    }

    /**
     * Sets a new temperatureInformationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $temperatureInformationExtension
     * @return self
     */
    public function setTemperatureInformationExtension(\Calcinai\Siri\Datex\ExtensionType $temperatureInformationExtension)
    {
        $this->temperatureInformationExtension = $temperatureInformationExtension;
        return $this;
    }


}

