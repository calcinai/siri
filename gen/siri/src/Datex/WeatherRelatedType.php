<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing WeatherRelatedType
 *
 * Weather related information.
 * XSD Type: WeatherRelated
 */
class WeatherRelatedType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $weatherRelatedExtension
     */
    private $weatherRelatedExtension = null;

    /**
     * Gets as weatherRelatedExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getWeatherRelatedExtension()
    {
        return $this->weatherRelatedExtension;
    }

    /**
     * Sets a new weatherRelatedExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $weatherRelatedExtension
     * @return self
     */
    public function setWeatherRelatedExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $weatherRelatedExtension)
    {
        $this->weatherRelatedExtension = $weatherRelatedExtension;
        return $this;
    }


}

