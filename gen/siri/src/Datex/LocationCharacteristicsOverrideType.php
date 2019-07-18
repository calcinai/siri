<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing LocationCharacteristicsOverrideType
 *
 * Location characteristics which override values set in the referenced measurement point.
 * XSD Type: LocationCharacteristicsOverride
 */
class LocationCharacteristicsOverrideType
{

    /**
     * Overrides for this single measured value instance the lane(s) defined for the set of measurements.
     *
     * @property string $measurementLanesOverride
     */
    private $measurementLanesOverride = null;

    /**
     * Indicates that the direction of flow for the measured lane(s) is the reverse of the normal direction of traffic flow. Default is "no", which indicates traffic flow is in the normal sense as defined by the referenced measurement point.
     *
     * @property bool $reversedFlow
     */
    private $reversedFlow = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $locationCharacteristicsOverrideExtension
     */
    private $locationCharacteristicsOverrideExtension = null;

    /**
     * Gets as measurementLanesOverride
     *
     * Overrides for this single measured value instance the lane(s) defined for the set of measurements.
     *
     * @return string
     */
    public function getMeasurementLanesOverride()
    {
        return $this->measurementLanesOverride;
    }

    /**
     * Sets a new measurementLanesOverride
     *
     * Overrides for this single measured value instance the lane(s) defined for the set of measurements.
     *
     * @param string $measurementLanesOverride
     * @return self
     */
    public function setMeasurementLanesOverride($measurementLanesOverride)
    {
        $this->measurementLanesOverride = $measurementLanesOverride;
        return $this;
    }

    /**
     * Gets as reversedFlow
     *
     * Indicates that the direction of flow for the measured lane(s) is the reverse of the normal direction of traffic flow. Default is "no", which indicates traffic flow is in the normal sense as defined by the referenced measurement point.
     *
     * @return bool
     */
    public function getReversedFlow()
    {
        return $this->reversedFlow;
    }

    /**
     * Sets a new reversedFlow
     *
     * Indicates that the direction of flow for the measured lane(s) is the reverse of the normal direction of traffic flow. Default is "no", which indicates traffic flow is in the normal sense as defined by the referenced measurement point.
     *
     * @param bool $reversedFlow
     * @return self
     */
    public function setReversedFlow($reversedFlow)
    {
        $this->reversedFlow = $reversedFlow;
        return $this;
    }

    /**
     * Gets as locationCharacteristicsOverrideExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getLocationCharacteristicsOverrideExtension()
    {
        return $this->locationCharacteristicsOverrideExtension;
    }

    /**
     * Sets a new locationCharacteristicsOverrideExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $locationCharacteristicsOverrideExtension
     * @return self
     */
    public function setLocationCharacteristicsOverrideExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $locationCharacteristicsOverrideExtension)
    {
        $this->locationCharacteristicsOverrideExtension = $locationCharacteristicsOverrideExtension;
        return $this;
    }


}

