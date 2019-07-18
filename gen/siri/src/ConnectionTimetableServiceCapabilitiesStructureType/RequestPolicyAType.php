<?php

namespace Calcinai\Siri\Objects\ConnectionTimetableServiceCapabilitiesStructureType;

use Calcinai\Siri\Objects\CapabilityRequestPolicyStructureType;

/**
 * Class representing RequestPolicyAType
 */
class RequestPolicyAType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whether service returns only foreign journeys. Default is false.
     *
     * @property bool $foreignJourneysOnly
     */
    private $foreignJourneysOnly = null;

    /**
     * Gets as foreignJourneysOnly
     *
     * Whether service returns only foreign journeys. Default is false.
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
     * Whether service returns only foreign journeys. Default is false.
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

