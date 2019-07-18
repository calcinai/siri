<?php

namespace Calcinai\Siri\IFOpt\LocalServiceStructureType;

/**
 * Class representing FeatureRefsAType
 */
class FeatureRefsAType
{

    /**
     * Features of service.
     *
     * @property string[] $featureRef
     */
    private $featureRef = [
        
    ];

    /**
     * Adds as featureRef
     *
     * Features of service.
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
     * Features of service.
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
     * Features of service.
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
     * Features of service.
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
     * Features of service.
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

