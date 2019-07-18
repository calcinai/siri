<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing FeatureRefStructureType
 *
 * Type for Reference to a Feature
 * XSD Type: FeatureRefStructure
 */
class FeatureRefStructureType
{

    /**
     * Unique identfiier of referenced element, eg TOID
     *
     * @property string $featureIdRef
     */
    private $featureIdRef = null;

    /**
     * Type of FeatureId
     *
     * @property string $featureType
     */
    private $featureType = null;

    /**
     * Gets as featureIdRef
     *
     * Unique identfiier of referenced element, eg TOID
     *
     * @return string
     */
    public function getFeatureIdRef()
    {
        return $this->featureIdRef;
    }

    /**
     * Sets a new featureIdRef
     *
     * Unique identfiier of referenced element, eg TOID
     *
     * @param string $featureIdRef
     * @return self
     */
    public function setFeatureIdRef($featureIdRef)
    {
        $this->featureIdRef = $featureIdRef;
        return $this;
    }

    /**
     * Gets as featureType
     *
     * Type of FeatureId
     *
     * @return string
     */
    public function getFeatureType()
    {
        return $this->featureType;
    }

    /**
     * Sets a new featureType
     *
     * Type of FeatureId
     *
     * @param string $featureType
     * @return self
     */
    public function setFeatureType($featureType)
    {
        $this->featureType = $featureType;
        return $this;
    }


}

