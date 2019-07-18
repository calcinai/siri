<?php

namespace Calcinai\Siri\VehicleMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing ResponseFeaturesAType
 */
class ResponseFeaturesAType
{

    /**
     * Whether result suppots line events. Default is true.
     *
     * @property bool $hasLocation
     */
    private $hasLocation = null;

    /**
     * Gets as hasLocation
     *
     * Whether result suppots line events. Default is true.
     *
     * @return bool
     */
    public function getHasLocation()
    {
        return $this->hasLocation;
    }

    /**
     * Sets a new hasLocation
     *
     * Whether result suppots line events. Default is true.
     *
     * @param bool $hasLocation
     * @return self
     */
    public function setHasLocation($hasLocation)
    {
        $this->hasLocation = $hasLocation;
        return $this;
    }


}

