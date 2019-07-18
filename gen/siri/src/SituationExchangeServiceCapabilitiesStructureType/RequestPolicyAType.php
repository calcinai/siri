<?php

namespace Calcinai\Siri\SituationExchangeServiceCapabilitiesStructureType;

use Calcinai\Siri\CapabilityRequestPolicyStructureType;

/**
 * Class representing RequestPolicyAType
 */
class RequestPolicyAType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whether a maximum number of Facitlity Status to include can be specified. Default is false.
     *
     * @property bool $hasMaximumFacilityStatus
     */
    private $hasMaximumFacilityStatus = null;

    /**
     * Gets as hasMaximumFacilityStatus
     *
     * Whether a maximum number of Facitlity Status to include can be specified. Default is false.
     *
     * @return bool
     */
    public function getHasMaximumFacilityStatus()
    {
        return $this->hasMaximumFacilityStatus;
    }

    /**
     * Sets a new hasMaximumFacilityStatus
     *
     * Whether a maximum number of Facitlity Status to include can be specified. Default is false.
     *
     * @param bool $hasMaximumFacilityStatus
     * @return self
     */
    public function setHasMaximumFacilityStatus($hasMaximumFacilityStatus)
    {
        $this->hasMaximumFacilityStatus = $hasMaximumFacilityStatus;
        return $this;
    }


}

