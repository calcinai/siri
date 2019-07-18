<?php

namespace Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing ResponseFeaturesAType
 */
class ResponseFeaturesAType
{

    /**
     * Whether result suppots remedy information Default is false
     *
     * @property bool $hasRemedy
     */
    private $hasRemedy = null;

    /**
     * Whether result suppots facility location information Default is true
     *
     * @property bool $hasFacilityLocation
     */
    private $hasFacilityLocation = null;

    /**
     * Gets as hasRemedy
     *
     * Whether result suppots remedy information Default is false
     *
     * @return bool
     */
    public function getHasRemedy()
    {
        return $this->hasRemedy;
    }

    /**
     * Sets a new hasRemedy
     *
     * Whether result suppots remedy information Default is false
     *
     * @param bool $hasRemedy
     * @return self
     */
    public function setHasRemedy($hasRemedy)
    {
        $this->hasRemedy = $hasRemedy;
        return $this;
    }

    /**
     * Gets as hasFacilityLocation
     *
     * Whether result suppots facility location information Default is true
     *
     * @return bool
     */
    public function getHasFacilityLocation()
    {
        return $this->hasFacilityLocation;
    }

    /**
     * Sets a new hasFacilityLocation
     *
     * Whether result suppots facility location information Default is true
     *
     * @param bool $hasFacilityLocation
     * @return self
     */
    public function setHasFacilityLocation($hasFacilityLocation)
    {
        $this->hasFacilityLocation = $hasFacilityLocation;
        return $this;
    }


}

