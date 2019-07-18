<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing WeatherValueType
 *
 * Measured or derived values relating to the weather at a specific location.
 * XSD Type: WeatherValue
 */
class WeatherValueType extends BasicDataValueType
{

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $weatherValueExtension
     */
    private $weatherValueExtension = null;

    /**
     * Gets as weatherValueExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getWeatherValueExtension()
    {
        return $this->weatherValueExtension;
    }

    /**
     * Sets a new weatherValueExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $weatherValueExtension
     * @return self
     */
    public function setWeatherValueExtension(\Calcinai\Siri\Datex\ExtensionType $weatherValueExtension)
    {
        $this->weatherValueExtension = $weatherValueExtension;
        return $this;
    }


}

