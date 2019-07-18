<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionTimetableCapabilityRequestPolicyStructureType
 *
 * Type for capabaility request.
 * XSD Type: ConnectionTimetableCapabilityRequestPolicyStructure
 */
class ConnectionTimetableCapabilityRequestPolicyStructureType extends CapabilityRequestPolicyStructureType
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

