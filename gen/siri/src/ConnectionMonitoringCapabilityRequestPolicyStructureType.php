<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionMonitoringCapabilityRequestPolicyStructureType
 *
 * Type for Connection Monitoring Capability Request Policy
 * XSD Type: ConnectionMonitoringCapabilityRequestPolicyStructure
 */
class ConnectionMonitoringCapabilityRequestPolicyStructureType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whether results returns foreign journeys only
     *
     * @property bool $foreignJourneysOnly
     */
    private $foreignJourneysOnly = null;

    /**
     * Gets as foreignJourneysOnly
     *
     * Whether results returns foreign journeys only
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
     * Whether results returns foreign journeys only
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

