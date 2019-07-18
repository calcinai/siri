<?php

namespace Calcinai\Siri\Objects\EquipmentAvailabilityStructureType;

/**
 * Class representing EquipmentFeaturesAType
 */
class EquipmentFeaturesAType
{

    /**
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string[] $featureRef
     */
    private $featureRef = [
        
    ];

    /**
     * Adds as featureRef
     *
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return self
     * @param string $featureRef
     */
    public function addToFeatureRef($featureRef)
    {
        $this->featureRef[] = $featureRef;
        return $this;
    }

    /**
     * isset featureRef
     *
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatureRef($index)
    {
        return isset($this->featureRef[$index]);
    }

    /**
     * unset featureRef
     *
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatureRef($index)
    {
        unset($this->featureRef[$index]);
    }

    /**
     * Gets as featureRef
     *
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string[]
     */
    public function getFeatureRef()
    {
        return $this->featureRef;
    }

    /**
     * Sets a new featureRef
     *
     * Service or Stop features associated with equipment. Recommended values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param string $featureRef
     * @return self
     */
    public function setFeatureRef(array $featureRef)
    {
        $this->featureRef = $featureRef;
        return $this;
    }


}

