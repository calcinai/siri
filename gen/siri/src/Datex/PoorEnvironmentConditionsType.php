<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PoorEnvironmentConditionsType
 *
 * Any environmental conditions which may be affecting the driving conditions on the road.
 * XSD Type: PoorEnvironmentConditions
 */
class PoorEnvironmentConditionsType extends ConditionsType
{

    /**
     * The type of environment condition which is affecting driving conditions.
     *
     * @property string $poorEnvironmentType
     */
    private $poorEnvironmentType = null;

    /**
     * @property \Calcinai\Siri\Datex\PrecipitationDetailType $precipitationDetail
     */
    private $precipitationDetail = null;

    /**
     * @property \Calcinai\Siri\Datex\VisibilityType $visibility
     */
    private $visibility = null;

    /**
     * @property \Calcinai\Siri\Datex\PollutionMeasurementType[] $pollutionMeasurement
     */
    private $pollutionMeasurement = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\TemperatureType $temperature
     */
    private $temperature = null;

    /**
     * @property \Calcinai\Siri\Datex\WindType $wind
     */
    private $wind = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $poorEnvironmentConditionsExtension
     */
    private $poorEnvironmentConditionsExtension = null;

    /**
     * Gets as poorEnvironmentType
     *
     * The type of environment condition which is affecting driving conditions.
     *
     * @return string
     */
    public function getPoorEnvironmentType()
    {
        return $this->poorEnvironmentType;
    }

    /**
     * Sets a new poorEnvironmentType
     *
     * The type of environment condition which is affecting driving conditions.
     *
     * @param string $poorEnvironmentType
     * @return self
     */
    public function setPoorEnvironmentType($poorEnvironmentType)
    {
        $this->poorEnvironmentType = $poorEnvironmentType;
        return $this;
    }

    /**
     * Gets as precipitationDetail
     *
     * @return \Calcinai\Siri\Datex\PrecipitationDetailType
     */
    public function getPrecipitationDetail()
    {
        return $this->precipitationDetail;
    }

    /**
     * Sets a new precipitationDetail
     *
     * @param \Calcinai\Siri\Datex\PrecipitationDetailType $precipitationDetail
     * @return self
     */
    public function setPrecipitationDetail(\Calcinai\Siri\Datex\PrecipitationDetailType $precipitationDetail)
    {
        $this->precipitationDetail = $precipitationDetail;
        return $this;
    }

    /**
     * Gets as visibility
     *
     * @return \Calcinai\Siri\Datex\VisibilityType
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets a new visibility
     *
     * @param \Calcinai\Siri\Datex\VisibilityType $visibility
     * @return self
     */
    public function setVisibility(\Calcinai\Siri\Datex\VisibilityType $visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * Adds as pollutionMeasurement
     *
     * @return self
     * @param \Calcinai\Siri\Datex\PollutionMeasurementType $pollutionMeasurement
     */
    public function addToPollutionMeasurement(\Calcinai\Siri\Datex\PollutionMeasurementType $pollutionMeasurement)
    {
        $this->pollutionMeasurement[] = $pollutionMeasurement;
        return $this;
    }

    /**
     * isset pollutionMeasurement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPollutionMeasurement($index)
    {
        return isset($this->pollutionMeasurement[$index]);
    }

    /**
     * unset pollutionMeasurement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPollutionMeasurement($index)
    {
        unset($this->pollutionMeasurement[$index]);
    }

    /**
     * Gets as pollutionMeasurement
     *
     * @return \Calcinai\Siri\Datex\PollutionMeasurementType[]
     */
    public function getPollutionMeasurement()
    {
        return $this->pollutionMeasurement;
    }

    /**
     * Sets a new pollutionMeasurement
     *
     * @param \Calcinai\Siri\Datex\PollutionMeasurementType[] $pollutionMeasurement
     * @return self
     */
    public function setPollutionMeasurement(array $pollutionMeasurement)
    {
        $this->pollutionMeasurement = $pollutionMeasurement;
        return $this;
    }

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
     * Gets as wind
     *
     * @return \Calcinai\Siri\Datex\WindType
     */
    public function getWind()
    {
        return $this->wind;
    }

    /**
     * Sets a new wind
     *
     * @param \Calcinai\Siri\Datex\WindType $wind
     * @return self
     */
    public function setWind(\Calcinai\Siri\Datex\WindType $wind)
    {
        $this->wind = $wind;
        return $this;
    }

    /**
     * Gets as poorEnvironmentConditionsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPoorEnvironmentConditionsExtension()
    {
        return $this->poorEnvironmentConditionsExtension;
    }

    /**
     * Sets a new poorEnvironmentConditionsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $poorEnvironmentConditionsExtension
     * @return self
     */
    public function setPoorEnvironmentConditionsExtension(\Calcinai\Siri\Datex\ExtensionType $poorEnvironmentConditionsExtension)
    {
        $this->poorEnvironmentConditionsExtension = $poorEnvironmentConditionsExtension;
        return $this;
    }


}

