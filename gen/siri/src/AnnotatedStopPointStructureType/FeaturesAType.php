<?php

namespace Calcinai\Siri\AnnotatedStopPointStructureType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * Description of Service features of stop.
     *
     * @property \Calcinai\Siri\ServiceFeatureStructureType[] $serviceFeature
     */
    private $serviceFeature = [
        
    ];

    /**
     * @property string[] $serviceFeatureRef
     */
    private $serviceFeatureRef = [
        
    ];

    /**
     * Adds as serviceFeature
     *
     * Description of Service features of stop.
     *
     * @return self
     * @param \Calcinai\Siri\ServiceFeatureStructureType $serviceFeature
     */
    public function addToServiceFeature(\Calcinai\Siri\ServiceFeatureStructureType $serviceFeature)
    {
        $this->serviceFeature[] = $serviceFeature;
        return $this;
    }

    /**
     * isset serviceFeature
     *
     * Description of Service features of stop.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFeature($index)
    {
        return isset($this->serviceFeature[$index]);
    }

    /**
     * unset serviceFeature
     *
     * Description of Service features of stop.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFeature($index)
    {
        unset($this->serviceFeature[$index]);
    }

    /**
     * Gets as serviceFeature
     *
     * Description of Service features of stop.
     *
     * @return \Calcinai\Siri\ServiceFeatureStructureType[]
     */
    public function getServiceFeature()
    {
        return $this->serviceFeature;
    }

    /**
     * Sets a new serviceFeature
     *
     * Description of Service features of stop.
     *
     * @param \Calcinai\Siri\ServiceFeatureStructureType[] $serviceFeature
     * @return self
     */
    public function setServiceFeature(array $serviceFeature)
    {
        $this->serviceFeature = $serviceFeature;
        return $this;
    }

    /**
     * Adds as serviceFeatureRef
     *
     * @return self
     * @param string $serviceFeatureRef
     */
    public function addToServiceFeatureRef($serviceFeatureRef)
    {
        $this->serviceFeatureRef[] = $serviceFeatureRef;
        return $this;
    }

    /**
     * isset serviceFeatureRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFeatureRef($index)
    {
        return isset($this->serviceFeatureRef[$index]);
    }

    /**
     * unset serviceFeatureRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFeatureRef($index)
    {
        unset($this->serviceFeatureRef[$index]);
    }

    /**
     * Gets as serviceFeatureRef
     *
     * @return string[]
     */
    public function getServiceFeatureRef()
    {
        return $this->serviceFeatureRef;
    }

    /**
     * Sets a new serviceFeatureRef
     *
     * @param string $serviceFeatureRef
     * @return self
     */
    public function setServiceFeatureRef(array $serviceFeatureRef)
    {
        $this->serviceFeatureRef = $serviceFeatureRef;
        return $this;
    }


}

