<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleFeaturesDiscoveryRequestStructureType
 *
 * Requests for vehicle feature data for use in service requests.
 * XSD Type: VehicleFeaturesDiscoveryRequestStructure
 */
class VehicleFeaturesDiscoveryRequestStructureType extends AbstractDiscoveryRequestStructureType
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

