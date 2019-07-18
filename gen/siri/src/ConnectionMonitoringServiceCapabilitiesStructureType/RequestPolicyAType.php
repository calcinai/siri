<?php

namespace Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilitiesStructureType;

use Calcinai\Siri\Objects\CapabilityRequestPolicyStructureType;

/**
 * Class representing RequestPolicyAType
 */
class RequestPolicyAType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whetehr only foreign journeys are included.
     *
     * @property bool $foreignJourneysOnly
     */
    private $foreignJourneysOnly = null;

    /**
     * Gets as foreignJourneysOnly
     *
     * Whetehr only foreign journeys are included.
     *
     * @return bool
     */
    public function getForeignJourneysOnly()
    {
        return $this->foreignJourneysOnly;
    }

    /**
     * Sets a new foreignJourneysOnly
     *
     * Whetehr only foreign journeys are included.
     *
     * @param bool $foreignJourneysOnly
     * @return self
     */
    public function setForeignJourneysOnly($foreignJourneysOnly)
    {
        $this->foreignJourneysOnly = $foreignJourneysOnly;
        return $this;
    }


}

