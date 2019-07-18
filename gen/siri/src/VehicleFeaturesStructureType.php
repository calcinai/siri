<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleFeaturesStructureType
 *
 * Type for Vehicle Feature description.
 * XSD Type: VehicleFeaturesStructure
 */
class VehicleFeaturesStructureType
{

    /**
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @property string $vehicleFeatureCode
     */
    private $vehicleFeatureCode = null;

    /**
     * Name of feature.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     */
    private $name = null;

    /**
     * Icon used to represent Vehicle feature.
     *
     * @property string $icon
     */
    private $icon = null;

    /**
     * Gets as vehicleFeatureCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @return string
     */
    public function getVehicleFeatureCode()
    {
        return $this->vehicleFeatureCode;
    }

    /**
     * Sets a new vehicleFeatureCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @param string $vehicleFeatureCode
     * @return self
     */
    public function setVehicleFeatureCode($vehicleFeatureCode)
    {
        $this->vehicleFeatureCode = $vehicleFeatureCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of feature.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of feature.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as icon
     *
     * Icon used to represent Vehicle feature.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * Icon used to represent Vehicle feature.
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }


}

