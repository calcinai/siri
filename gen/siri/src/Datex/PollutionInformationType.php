<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PollutionInformationType
 *
 * Measurements of atmospheric pollution.
 * XSD Type: PollutionInformation
 */
class PollutionInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\PollutionMeasurementType[] $pollutionMeasurement
     */
    private $pollutionMeasurement = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $pollutionInformationExtension
     */
    private $pollutionInformationExtension = null;

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
     * Gets as pollutionInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPollutionInformationExtension()
    {
        return $this->pollutionInformationExtension;
    }

    /**
     * Sets a new pollutionInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $pollutionInformationExtension
     * @return self
     */
    public function setPollutionInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $pollutionInformationExtension)
    {
        $this->pollutionInformationExtension = $pollutionInformationExtension;
        return $this;
    }


}

