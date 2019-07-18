<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceFeaturesDeliveryStructureType
 *
 * Type for Response with Service Features available to make requests.
 * XSD Type: ServiceFeaturesDeliveryStructure
 */
class ServiceFeaturesDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\ServiceFeature[] $serviceFeature
     */
    private $serviceFeature = [
        
    ];

    /**
     * Gets as version
     *
     * Version number of response. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of response. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as serviceFeature
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ServiceFeature $serviceFeature
     */
    public function addToServiceFeature(\Calcinai\Siri\Objects\ServiceFeature $serviceFeature)
    {
        $this->serviceFeature[] = $serviceFeature;
        return $this;
    }

    /**
     * isset serviceFeature
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
     * @return \Calcinai\Siri\Objects\ServiceFeature[]
     */
    public function getServiceFeature()
    {
        return $this->serviceFeature;
    }

    /**
     * Sets a new serviceFeature
     *
     * @param \Calcinai\Siri\Objects\ServiceFeature[] $serviceFeature
     * @return self
     */
    public function setServiceFeature(array $serviceFeature)
    {
        $this->serviceFeature = $serviceFeature;
        return $this;
    }


}

