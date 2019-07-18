<?php

namespace Calcinai\Siri\IFOpt\AbstractProjectionType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * Identifier of Featurein a GIS data system
     *
     * @property \Calcinai\Siri\IFOpt\FeatureRefStructureType[] $gisFeatureRef
     */
    private $gisFeatureRef = [
        
    ];

    /**
     * Adds as gisFeatureRef
     *
     * Identifier of Featurein a GIS data system
     *
     * @return self
     * @param \Calcinai\Siri\IFOpt\FeatureRefStructureType $gisFeatureRef
     */
    public function addToGisFeatureRef(\Calcinai\Siri\IFOpt\FeatureRefStructureType $gisFeatureRef)
    {
        $this->gisFeatureRef[] = $gisFeatureRef;
        return $this;
    }

    /**
     * isset gisFeatureRef
     *
     * Identifier of Featurein a GIS data system
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGisFeatureRef($index)
    {
        return isset($this->gisFeatureRef[$index]);
    }

    /**
     * unset gisFeatureRef
     *
     * Identifier of Featurein a GIS data system
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGisFeatureRef($index)
    {
        unset($this->gisFeatureRef[$index]);
    }

    /**
     * Gets as gisFeatureRef
     *
     * Identifier of Featurein a GIS data system
     *
     * @return \Calcinai\Siri\IFOpt\FeatureRefStructureType[]
     */
    public function getGisFeatureRef()
    {
        return $this->gisFeatureRef;
    }

    /**
     * Sets a new gisFeatureRef
     *
     * Identifier of Featurein a GIS data system
     *
     * @param \Calcinai\Siri\IFOpt\FeatureRefStructureType[] $gisFeatureRef
     * @return self
     */
    public function setGisFeatureRef(array $gisFeatureRef)
    {
        $this->gisFeatureRef = $gisFeatureRef;
        return $this;
    }


}

