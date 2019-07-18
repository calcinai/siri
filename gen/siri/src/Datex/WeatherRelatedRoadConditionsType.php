<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing WeatherRelatedRoadConditionsType
 *
 * Road surface conditions that are related to the weather which may affect the driving conditions, such as ice, snow or water.
 * XSD Type: WeatherRelatedRoadConditions
 */
class WeatherRelatedRoadConditionsType extends RoadConditionsType
{

    /**
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @property string[] $weatherRelatedRoadConditionType
     */
    private $weatherRelatedRoadConditionType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements
     */
    private $roadSurfaceConditionMeasurements = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $weatherRelatedRoadConditionsExtension
     */
    private $weatherRelatedRoadConditionsExtension = null;

    /**
     * Adds as weatherRelatedRoadConditionType
     *
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @return self
     * @param string $weatherRelatedRoadConditionType
     */
    public function addToWeatherRelatedRoadConditionType($weatherRelatedRoadConditionType)
    {
        $this->weatherRelatedRoadConditionType[] = $weatherRelatedRoadConditionType;
        return $this;
    }

    /**
     * isset weatherRelatedRoadConditionType
     *
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeatherRelatedRoadConditionType($index)
    {
        return isset($this->weatherRelatedRoadConditionType[$index]);
    }

    /**
     * unset weatherRelatedRoadConditionType
     *
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeatherRelatedRoadConditionType($index)
    {
        unset($this->weatherRelatedRoadConditionType[$index]);
    }

    /**
     * Gets as weatherRelatedRoadConditionType
     *
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @return string[]
     */
    public function getWeatherRelatedRoadConditionType()
    {
        return $this->weatherRelatedRoadConditionType;
    }

    /**
     * Sets a new weatherRelatedRoadConditionType
     *
     * The type of road surface condition which is affecting the driving conditions.
     *
     * @param string $weatherRelatedRoadConditionType
     * @return self
     */
    public function setWeatherRelatedRoadConditionType(array $weatherRelatedRoadConditionType)
    {
        $this->weatherRelatedRoadConditionType = $weatherRelatedRoadConditionType;
        return $this;
    }

    /**
     * Gets as roadSurfaceConditionMeasurements
     *
     * @return \Calcinai\Siri\Datex\RoadSurfaceConditionMeasurementsType
     */
    public function getRoadSurfaceConditionMeasurements()
    {
        return $this->roadSurfaceConditionMeasurements;
    }

    /**
     * Sets a new roadSurfaceConditionMeasurements
     *
     * @param \Calcinai\Siri\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements
     * @return self
     */
    public function setRoadSurfaceConditionMeasurements(\Calcinai\Siri\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements)
    {
        $this->roadSurfaceConditionMeasurements = $roadSurfaceConditionMeasurements;
        return $this;
    }

    /**
     * Gets as weatherRelatedRoadConditionsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getWeatherRelatedRoadConditionsExtension()
    {
        return $this->weatherRelatedRoadConditionsExtension;
    }

    /**
     * Sets a new weatherRelatedRoadConditionsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $weatherRelatedRoadConditionsExtension
     * @return self
     */
    public function setWeatherRelatedRoadConditionsExtension(\Calcinai\Siri\Datex\ExtensionType $weatherRelatedRoadConditionsExtension)
    {
        $this->weatherRelatedRoadConditionsExtension = $weatherRelatedRoadConditionsExtension;
        return $this;
    }


}

