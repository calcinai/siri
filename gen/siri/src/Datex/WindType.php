<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing WindType
 *
 * Wind conditions on the road.
 * XSD Type: Wind
 */
class WindType
{

    /**
     * The maximum wind speed in a measurement period of 10 minutes.
     *
     * @property float $maximumWindSpeed
     */
    private $maximumWindSpeed = null;

    /**
     * The average direction from which the wind blows, in terms of a bearing measured in degrees (0 - 359).
     *
     * @property int $windDirectionBearing
     */
    private $windDirectionBearing = null;

    /**
     * The average direction from which the wind blows, in terms of points of the compass.
     *
     * @property string $windDirectionCompass
     */
    private $windDirectionCompass = null;

    /**
     * The height in metres above the road surface at which the wind is measured.
     *
     * @property int $windMeasurementHeight
     */
    private $windMeasurementHeight = null;

    /**
     * The wind speed averaged over at least 10 minutes, measured at a default height of10 metres (meteo standard) above the road surface, unless measurement height is specified.
     *
     * @property float $windSpeed
     */
    private $windSpeed = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $windExtension
     */
    private $windExtension = null;

    /**
     * Gets as maximumWindSpeed
     *
     * The maximum wind speed in a measurement period of 10 minutes.
     *
     * @return float
     */
    public function getMaximumWindSpeed()
    {
        return $this->maximumWindSpeed;
    }

    /**
     * Sets a new maximumWindSpeed
     *
     * The maximum wind speed in a measurement period of 10 minutes.
     *
     * @param float $maximumWindSpeed
     * @return self
     */
    public function setMaximumWindSpeed($maximumWindSpeed)
    {
        $this->maximumWindSpeed = $maximumWindSpeed;
        return $this;
    }

    /**
     * Gets as windDirectionBearing
     *
     * The average direction from which the wind blows, in terms of a bearing measured in degrees (0 - 359).
     *
     * @return int
     */
    public function getWindDirectionBearing()
    {
        return $this->windDirectionBearing;
    }

    /**
     * Sets a new windDirectionBearing
     *
     * The average direction from which the wind blows, in terms of a bearing measured in degrees (0 - 359).
     *
     * @param int $windDirectionBearing
     * @return self
     */
    public function setWindDirectionBearing($windDirectionBearing)
    {
        $this->windDirectionBearing = $windDirectionBearing;
        return $this;
    }

    /**
     * Gets as windDirectionCompass
     *
     * The average direction from which the wind blows, in terms of points of the compass.
     *
     * @return string
     */
    public function getWindDirectionCompass()
    {
        return $this->windDirectionCompass;
    }

    /**
     * Sets a new windDirectionCompass
     *
     * The average direction from which the wind blows, in terms of points of the compass.
     *
     * @param string $windDirectionCompass
     * @return self
     */
    public function setWindDirectionCompass($windDirectionCompass)
    {
        $this->windDirectionCompass = $windDirectionCompass;
        return $this;
    }

    /**
     * Gets as windMeasurementHeight
     *
     * The height in metres above the road surface at which the wind is measured.
     *
     * @return int
     */
    public function getWindMeasurementHeight()
    {
        return $this->windMeasurementHeight;
    }

    /**
     * Sets a new windMeasurementHeight
     *
     * The height in metres above the road surface at which the wind is measured.
     *
     * @param int $windMeasurementHeight
     * @return self
     */
    public function setWindMeasurementHeight($windMeasurementHeight)
    {
        $this->windMeasurementHeight = $windMeasurementHeight;
        return $this;
    }

    /**
     * Gets as windSpeed
     *
     * The wind speed averaged over at least 10 minutes, measured at a default height of10 metres (meteo standard) above the road surface, unless measurement height is specified.
     *
     * @return float
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Sets a new windSpeed
     *
     * The wind speed averaged over at least 10 minutes, measured at a default height of10 metres (meteo standard) above the road surface, unless measurement height is specified.
     *
     * @param float $windSpeed
     * @return self
     */
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;
        return $this;
    }

    /**
     * Gets as windExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getWindExtension()
    {
        return $this->windExtension;
    }

    /**
     * Sets a new windExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $windExtension
     * @return self
     */
    public function setWindExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $windExtension)
    {
        $this->windExtension = $windExtension;
        return $this;
    }


}

