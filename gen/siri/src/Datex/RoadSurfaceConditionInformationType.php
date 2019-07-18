<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing RoadSurfaceConditionInformationType
 *
 * Measurements of road surface conditions which are related to the weather.
 * XSD Type: RoadSurfaceConditionInformation
 */
class RoadSurfaceConditionInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements
     */
    private $roadSurfaceConditionMeasurements = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $roadSurfaceConditionInformationExtension
     */
    private $roadSurfaceConditionInformationExtension = null;

    /**
     * Gets as roadSurfaceConditionMeasurements
     *
     * @return \Calcinai\Siri\Objects\Datex\RoadSurfaceConditionMeasurementsType
     */
    public function getRoadSurfaceConditionMeasurements()
    {
        return $this->roadSurfaceConditionMeasurements;
    }

    /**
     * Sets a new roadSurfaceConditionMeasurements
     *
     * @param \Calcinai\Siri\Objects\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements
     * @return self
     */
    public function setRoadSurfaceConditionMeasurements(\Calcinai\Siri\Objects\Datex\RoadSurfaceConditionMeasurementsType $roadSurfaceConditionMeasurements)
    {
        $this->roadSurfaceConditionMeasurements = $roadSurfaceConditionMeasurements;
        return $this;
    }

    /**
     * Gets as roadSurfaceConditionInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getRoadSurfaceConditionInformationExtension()
    {
        return $this->roadSurfaceConditionInformationExtension;
    }

    /**
     * Sets a new roadSurfaceConditionInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $roadSurfaceConditionInformationExtension
     * @return self
     */
    public function setRoadSurfaceConditionInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $roadSurfaceConditionInformationExtension)
    {
        $this->roadSurfaceConditionInformationExtension = $roadSurfaceConditionInformationExtension;
        return $this;
    }


}

