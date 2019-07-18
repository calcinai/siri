<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing NonWeatherRelatedRoadConditionsType
 *
 * Road surface conditions that are not related to the weather but which may affect driving conditions.
 * XSD Type: NonWeatherRelatedRoadConditions
 */
class NonWeatherRelatedRoadConditionsType extends RoadConditionsType
{

    /**
     * The type of road conditions which are not related to the weather.
     *
     * @property string[] $nonWeatherRelatedRoadConditionType
     */
    private $nonWeatherRelatedRoadConditionType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $nonWeatherRelatedRoadConditionsExtension
     */
    private $nonWeatherRelatedRoadConditionsExtension = null;

    /**
     * Adds as nonWeatherRelatedRoadConditionType
     *
     * The type of road conditions which are not related to the weather.
     *
     * @return self
     * @param string $nonWeatherRelatedRoadConditionType
     */
    public function addToNonWeatherRelatedRoadConditionType($nonWeatherRelatedRoadConditionType)
    {
        $this->nonWeatherRelatedRoadConditionType[] = $nonWeatherRelatedRoadConditionType;
        return $this;
    }

    /**
     * isset nonWeatherRelatedRoadConditionType
     *
     * The type of road conditions which are not related to the weather.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNonWeatherRelatedRoadConditionType($index)
    {
        return isset($this->nonWeatherRelatedRoadConditionType[$index]);
    }

    /**
     * unset nonWeatherRelatedRoadConditionType
     *
     * The type of road conditions which are not related to the weather.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNonWeatherRelatedRoadConditionType($index)
    {
        unset($this->nonWeatherRelatedRoadConditionType[$index]);
    }

    /**
     * Gets as nonWeatherRelatedRoadConditionType
     *
     * The type of road conditions which are not related to the weather.
     *
     * @return string[]
     */
    public function getNonWeatherRelatedRoadConditionType()
    {
        return $this->nonWeatherRelatedRoadConditionType;
    }

    /**
     * Sets a new nonWeatherRelatedRoadConditionType
     *
     * The type of road conditions which are not related to the weather.
     *
     * @param string $nonWeatherRelatedRoadConditionType
     * @return self
     */
    public function setNonWeatherRelatedRoadConditionType(array $nonWeatherRelatedRoadConditionType)
    {
        $this->nonWeatherRelatedRoadConditionType = $nonWeatherRelatedRoadConditionType;
        return $this;
    }

    /**
     * Gets as nonWeatherRelatedRoadConditionsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getNonWeatherRelatedRoadConditionsExtension()
    {
        return $this->nonWeatherRelatedRoadConditionsExtension;
    }

    /**
     * Sets a new nonWeatherRelatedRoadConditionsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $nonWeatherRelatedRoadConditionsExtension
     * @return self
     */
    public function setNonWeatherRelatedRoadConditionsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $nonWeatherRelatedRoadConditionsExtension)
    {
        $this->nonWeatherRelatedRoadConditionsExtension = $nonWeatherRelatedRoadConditionsExtension;
        return $this;
    }


}

