<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing AbstractProjectionType
 *
 *
 * XSD Type: AbstractProjection
 */
class AbstractProjectionType
{

    /**
     * GIS Features that this element projects onto.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\FeatureRefStructureType[] $features
     */
    private $features = null;

    /**
     * Adds as gisFeatureRef
     *
     * GIS Features that this element projects onto.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\FeatureRefStructureType $gisFeatureRef
     */
    public function addToFeatures(\Calcinai\Siri\Objects\IFOpt\FeatureRefStructureType $gisFeatureRef)
    {
        $this->features[] = $gisFeatureRef;
        return $this;
    }

    /**
     * isset features
     *
     * GIS Features that this element projects onto.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * GIS Features that this element projects onto.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * GIS Features that this element projects onto.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\FeatureRefStructureType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * GIS Features that this element projects onto.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\FeatureRefStructureType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;
        return $this;
    }


}

