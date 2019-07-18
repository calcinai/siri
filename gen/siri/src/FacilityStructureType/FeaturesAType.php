<?php

namespace Calcinai\Siri\FacilityStructureType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @property \Calcinai\Siri\AllFacilitiesFeatureStructureType[] $feature
     */
    private $feature = [
        
    ];

    /**
     * Adds as feature
     *
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @return self
     * @param \Calcinai\Siri\AllFacilitiesFeatureStructureType $feature
     */
    public function addToFeature(\Calcinai\Siri\AllFacilitiesFeatureStructureType $feature)
    {
        $this->feature[] = $feature;
        return $this;
    }

    /**
     * isset feature
     *
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeature($index)
    {
        return isset($this->feature[$index]);
    }

    /**
     * unset feature
     *
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeature($index)
    {
        unset($this->feature[$index]);
    }

    /**
     * Gets as feature
     *
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @return \Calcinai\Siri\AllFacilitiesFeatureStructureType[]
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets a new feature
     *
     * Description of the feauture of the facility. Several features may be associated to a single facility.
     *
     * @param \Calcinai\Siri\AllFacilitiesFeatureStructureType[] $feature
     * @return self
     */
    public function setFeature(array $feature)
    {
        $this->feature = $feature;
        return $this;
    }


}

