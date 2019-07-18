<?php

namespace Calcinai\Siri\Objects\ProductionTimetableServiceCapabilitiesStructureType;

/**
 * Class representing SubscriptionPolicyAType
 */
class SubscriptionPolicyAType
{

    /**
     * Whether incremental updates can be specified for updates Default true.
     *
     * @property bool $hasIncrementalUpdates
     */
    private $hasIncrementalUpdates = null;

    /**
     * Gets as hasIncrementalUpdates
     *
     * Whether incremental updates can be specified for updates Default true.
     *
     * @return bool
     */
    public function getHasIncrementalUpdates()
    {
        return $this->hasIncrementalUpdates;
    }

    /**
     * Sets a new hasIncrementalUpdates
     *
     * Whether incremental updates can be specified for updates Default true.
     *
     * @param bool $hasIncrementalUpdates
     * @return self
     */
    public function setHasIncrementalUpdates($hasIncrementalUpdates)
    {
        $this->hasIncrementalUpdates = $hasIncrementalUpdates;
        return $this;
    }


}

