<?php

namespace Calcinai\Siri;

/**
 * Class representing StopPointsDiscoveryRequestStructureType
 *
 * Requests for stop reference data for use in service requests.
 * XSD Type: StopPointsDiscoveryRequestStructure
 */
class StopPointsDiscoveryRequestStructureType extends AbstractDiscoveryRequestStructureType
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

