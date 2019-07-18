<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TemperatureType
 *
 * Details of atmospheric temperature.
 * XSD Type: Temperature
 */
class TemperatureType
{

    /**
     * The air temperature measured in the shade between 1.5 and 2 metres above ground level.
     *
     * @property float $airTemperature
     */
    private $airTemperature = null;

    /**
     * The temperature to which the air would have to cool (at constant pressure and water vapour content) in order to reach saturation.
     *
     * @property float $dewPointTemperature
     */
    private $dewPointTemperature = null;

    /**
     * The expected maximum temperature during the forecast period.
     *
     * @property float $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * The expected minimum temperature during the forecast period.
     *
     * @property float $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $temperatureExtension
     */
    private $temperatureExtension = null;

    /**
     * Gets as airTemperature
     *
     * The air temperature measured in the shade between 1.5 and 2 metres above ground level.
     *
     * @return float
     */
    public function getAirTemperature()
    {
        return $this->airTemperature;
    }

    /**
     * Sets a new airTemperature
     *
     * The air temperature measured in the shade between 1.5 and 2 metres above ground level.
     *
     * @param float $airTemperature
     * @return self
     */
    public function setAirTemperature($airTemperature)
    {
        $this->airTemperature = $airTemperature;
        return $this;
    }

    /**
     * Gets as dewPointTemperature
     *
     * The temperature to which the air would have to cool (at constant pressure and water vapour content) in order to reach saturation.
     *
     * @return float
     */
    public function getDewPointTemperature()
    {
        return $this->dewPointTemperature;
    }

    /**
     * Sets a new dewPointTemperature
     *
     * The temperature to which the air would have to cool (at constant pressure and water vapour content) in order to reach saturation.
     *
     * @param float $dewPointTemperature
     * @return self
     */
    public function setDewPointTemperature($dewPointTemperature)
    {
        $this->dewPointTemperature = $dewPointTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * The expected maximum temperature during the forecast period.
     *
     * @return float
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * The expected maximum temperature during the forecast period.
     *
     * @param float $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature($maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * The expected minimum temperature during the forecast period.
     *
     * @return float
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * The expected minimum temperature during the forecast period.
     *
     * @param float $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature($minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as temperatureExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTemperatureExtension()
    {
        return $this->temperatureExtension;
    }

    /**
     * Sets a new temperatureExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $temperatureExtension
     * @return self
     */
    public function setTemperatureExtension(\Calcinai\Siri\Datex\ExtensionType $temperatureExtension)
    {
        $this->temperatureExtension = $temperatureExtension;
        return $this;
    }


}

