<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing RoadSurfaceConditionMeasurementsType
 *
 * Measurements of the road surface condition which relate specifically to the weather.
 * XSD Type: RoadSurfaceConditionMeasurements
 */
class RoadSurfaceConditionMeasurementsType
{

    /**
     * Indicates the rate at which de-icing agents have been applied to the specified road.
     *
     * @property float $deIcingApplicationRate
     */
    private $deIcingApplicationRate = null;

    /**
     * Indicates the concentration of de-icing agent present in surface water on the specified road.
     *
     * @property float $deIcingConcentration
     */
    private $deIcingConcentration = null;

    /**
     * The measured depth of snow recorded on the road surface.
     *
     * @property float $depthOfSnow
     */
    private $depthOfSnow = null;

    /**
     * The road surface temperature down to which the surface is protected from freezing.
     *
     * @property float $protectionTemperature
     */
    private $protectionTemperature = null;

    /**
     * The temperature measured on the road surface.
     *
     * @property float $roadSurfaceTemperature
     */
    private $roadSurfaceTemperature = null;

    /**
     * Indicates the depth of standing water to be found on the road surface.
     *
     * @property float $waterFilmThickness
     */
    private $waterFilmThickness = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $roadSurfaceConditionMeasurementsExtension
     */
    private $roadSurfaceConditionMeasurementsExtension = null;

    /**
     * Gets as deIcingApplicationRate
     *
     * Indicates the rate at which de-icing agents have been applied to the specified road.
     *
     * @return float
     */
    public function getDeIcingApplicationRate()
    {
        return $this->deIcingApplicationRate;
    }

    /**
     * Sets a new deIcingApplicationRate
     *
     * Indicates the rate at which de-icing agents have been applied to the specified road.
     *
     * @param float $deIcingApplicationRate
     * @return self
     */
    public function setDeIcingApplicationRate($deIcingApplicationRate)
    {
        $this->deIcingApplicationRate = $deIcingApplicationRate;
        return $this;
    }

    /**
     * Gets as deIcingConcentration
     *
     * Indicates the concentration of de-icing agent present in surface water on the specified road.
     *
     * @return float
     */
    public function getDeIcingConcentration()
    {
        return $this->deIcingConcentration;
    }

    /**
     * Sets a new deIcingConcentration
     *
     * Indicates the concentration of de-icing agent present in surface water on the specified road.
     *
     * @param float $deIcingConcentration
     * @return self
     */
    public function setDeIcingConcentration($deIcingConcentration)
    {
        $this->deIcingConcentration = $deIcingConcentration;
        return $this;
    }

    /**
     * Gets as depthOfSnow
     *
     * The measured depth of snow recorded on the road surface.
     *
     * @return float
     */
    public function getDepthOfSnow()
    {
        return $this->depthOfSnow;
    }

    /**
     * Sets a new depthOfSnow
     *
     * The measured depth of snow recorded on the road surface.
     *
     * @param float $depthOfSnow
     * @return self
     */
    public function setDepthOfSnow($depthOfSnow)
    {
        $this->depthOfSnow = $depthOfSnow;
        return $this;
    }

    /**
     * Gets as protectionTemperature
     *
     * The road surface temperature down to which the surface is protected from freezing.
     *
     * @return float
     */
    public function getProtectionTemperature()
    {
        return $this->protectionTemperature;
    }

    /**
     * Sets a new protectionTemperature
     *
     * The road surface temperature down to which the surface is protected from freezing.
     *
     * @param float $protectionTemperature
     * @return self
     */
    public function setProtectionTemperature($protectionTemperature)
    {
        $this->protectionTemperature = $protectionTemperature;
        return $this;
    }

    /**
     * Gets as roadSurfaceTemperature
     *
     * The temperature measured on the road surface.
     *
     * @return float
     */
    public function getRoadSurfaceTemperature()
    {
        return $this->roadSurfaceTemperature;
    }

    /**
     * Sets a new roadSurfaceTemperature
     *
     * The temperature measured on the road surface.
     *
     * @param float $roadSurfaceTemperature
     * @return self
     */
    public function setRoadSurfaceTemperature($roadSurfaceTemperature)
    {
        $this->roadSurfaceTemperature = $roadSurfaceTemperature;
        return $this;
    }

    /**
     * Gets as waterFilmThickness
     *
     * Indicates the depth of standing water to be found on the road surface.
     *
     * @return float
     */
    public function getWaterFilmThickness()
    {
        return $this->waterFilmThickness;
    }

    /**
     * Sets a new waterFilmThickness
     *
     * Indicates the depth of standing water to be found on the road surface.
     *
     * @param float $waterFilmThickness
     * @return self
     */
    public function setWaterFilmThickness($waterFilmThickness)
    {
        $this->waterFilmThickness = $waterFilmThickness;
        return $this;
    }

    /**
     * Gets as roadSurfaceConditionMeasurementsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getRoadSurfaceConditionMeasurementsExtension()
    {
        return $this->roadSurfaceConditionMeasurementsExtension;
    }

    /**
     * Sets a new roadSurfaceConditionMeasurementsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $roadSurfaceConditionMeasurementsExtension
     * @return self
     */
    public function setRoadSurfaceConditionMeasurementsExtension(\Calcinai\Siri\Datex\ExtensionType $roadSurfaceConditionMeasurementsExtension)
    {
        $this->roadSurfaceConditionMeasurementsExtension = $roadSurfaceConditionMeasurementsExtension;
        return $this;
    }


}

