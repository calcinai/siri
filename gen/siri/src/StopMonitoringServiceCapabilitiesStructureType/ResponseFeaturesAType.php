<?php

namespace Calcinai\Siri\Objects\StopMonitoringServiceCapabilitiesStructureType;

/**
 * Class representing ResponseFeaturesAType
 */
class ResponseFeaturesAType
{

    /**
     * Whether result suppots line events. Default is true.
     *
     * @property bool $hasLineNotices
     */
    private $hasLineNotices = null;

    /**
     * Gets as hasLineNotices
     *
     * Whether result suppots line events. Default is true.
     *
     * @return bool
     */
    public function getHasLineNotices()
    {
        return $this->hasLineNotices;
    }

    /**
     * Sets a new hasLineNotices
     *
     * Whether result suppots line events. Default is true.
     *
     * @param bool $hasLineNotices
     * @return self
     */
    public function setHasLineNotices($hasLineNotices)
    {
        $this->hasLineNotices = $hasLineNotices;
        return $this;
    }


}

