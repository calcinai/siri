<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PollutionMeasurementType
 *
 * Details of atmospheric pollution.
 * XSD Type: PollutionMeasurement
 */
class PollutionMeasurementType
{

    /**
     * The average concentration of the pollutant in the air.
     *
     * @property float $pollutantConcentration
     */
    private $pollutantConcentration = null;

    /**
     * The type of pollutant in the air.
     *
     * @property string $pollutantType
     */
    private $pollutantType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $pollutionMeasurementExtension
     */
    private $pollutionMeasurementExtension = null;

    /**
     * Gets as pollutantConcentration
     *
     * The average concentration of the pollutant in the air.
     *
     * @return float
     */
    public function getPollutantConcentration()
    {
        return $this->pollutantConcentration;
    }

    /**
     * Sets a new pollutantConcentration
     *
     * The average concentration of the pollutant in the air.
     *
     * @param float $pollutantConcentration
     * @return self
     */
    public function setPollutantConcentration($pollutantConcentration)
    {
        $this->pollutantConcentration = $pollutantConcentration;
        return $this;
    }

    /**
     * Gets as pollutantType
     *
     * The type of pollutant in the air.
     *
     * @return string
     */
    public function getPollutantType()
    {
        return $this->pollutantType;
    }

    /**
     * Sets a new pollutantType
     *
     * The type of pollutant in the air.
     *
     * @param string $pollutantType
     * @return self
     */
    public function setPollutantType($pollutantType)
    {
        $this->pollutantType = $pollutantType;
        return $this;
    }

    /**
     * Gets as pollutionMeasurementExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPollutionMeasurementExtension()
    {
        return $this->pollutionMeasurementExtension;
    }

    /**
     * Sets a new pollutionMeasurementExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $pollutionMeasurementExtension
     * @return self
     */
    public function setPollutionMeasurementExtension(\Calcinai\Siri\Datex\ExtensionType $pollutionMeasurementExtension)
    {
        $this->pollutionMeasurementExtension = $pollutionMeasurementExtension;
        return $this;
    }


}

