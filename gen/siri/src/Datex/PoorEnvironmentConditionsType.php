<?php

namespace Calcinai\Siri\Objects\Datex;

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
     * @property \Calcinai\Siri\Objects\Datex\PrecipitationDetailType $precipitationDetail
     */
    private $precipitationDetail = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\VisibilityType $visibility
     */
    private $visibility = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PollutionMeasurementType[] $pollutionMeasurement
     */
    private $pollutionMeasurement = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\TemperatureType $temperature
     */
    private $temperature = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\WindType $wind
     */
    private $wind = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $poorEnvironmentConditionsExtension
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
     * Gets as visibility
     *
     * @return \Calcinai\Siri\Objects\Datex\VisibilityType
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets a new visibility
     *
     * @param \Calcinai\Siri\Objects\Datex\VisibilityType $visibility
     * @return self
     */
    public function setVisibility(\Calcinai\Siri\Objects\Datex\VisibilityType $visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * Adds as pollutionMeasurement
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PollutionMeasurementType $pollutionMeasurement
     */
    public function addToPollutionMeasurement(\Calcinai\Siri\Objects\Datex\PollutionMeasurementType $pollutionMeasurement)
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
     * @return \Calcinai\Siri\Objects\Datex\PollutionMeasurementType[]
     */
    public function getPollutionMeasurement()
    {
        return $this->pollutionMeasurement;
    }

    /**
     * Sets a new pollutionMeasurement
     *
     * @param \Calcinai\Siri\Objects\Datex\PollutionMeasurementType[] $pollutionMeasurement
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
     * @return \Calcinai\Siri\Objects\Datex\TemperatureType
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * @param \Calcinai\Siri\Objects\Datex\TemperatureType $temperature
     * @return self
     */
    public function setTemperature(\Calcinai\Siri\Objects\Datex\TemperatureType $temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

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
     * Gets as poorEnvironmentConditionsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPoorEnvironmentConditionsExtension()
    {
        return $this->poorEnvironmentConditionsExtension;
    }

    /**
     * Sets a new poorEnvironmentConditionsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $poorEnvironmentConditionsExtension
     * @return self
     */
    public function setPoorEnvironmentConditionsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $poorEnvironmentConditionsExtension)
    {
        $this->poorEnvironmentConditionsExtension = $poorEnvironmentConditionsExtension;
        return $this;
    }


}

