<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceFeaturesDiscoveryRequestStructureType
 *
 * Requests for product category reference data for use in servicerequests.
 * XSD Type: ServiceFeaturesDiscoveryRequestStructure
 */
class ServiceFeaturesDiscoveryRequestStructureType extends AbstractDiscoveryRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Gets as version
     *
     * Version number of request. Fixed
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
     * Version number of request. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

