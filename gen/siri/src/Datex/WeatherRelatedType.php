<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing WeatherRelatedType
 *
 * Weather related information.
 * XSD Type: WeatherRelated
 */
class WeatherRelatedType
{

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $weatherRelatedExtension
     */
    private $weatherRelatedExtension = null;

    /**
     * Gets as weatherRelatedExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getWeatherRelatedExtension()
    {
        return $this->weatherRelatedExtension;
    }

    /**
     * Sets a new weatherRelatedExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $weatherRelatedExtension
     * @return self
     */
    public function setWeatherRelatedExtension(\Calcinai\Siri\Datex\ExtensionType $weatherRelatedExtension)
    {
        $this->weatherRelatedExtension = $weatherRelatedExtension;
        return $this;
    }


}

