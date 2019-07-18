<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SubscriptionContextStructureType
 *
 * Type for Subscription context - Configuration parameters which may be evrriden
 * XSD Type: SubscriptionContextStructure
 */
class SubscriptionContextStructureType
{

    /**
     * Interval for heartbeat.
     *
     * @property \DateInterval $heartbeatInterval
     */
    private $heartbeatInterval = null;

    /**
     * Gets as heartbeatInterval
     *
     * Interval for heartbeat.
     *
     * @return \DateInterval
     */
    public function getHeartbeatInterval()
    {
        return $this->heartbeatInterval;
    }

    /**
     * Sets a new heartbeatInterval
     *
     * Interval for heartbeat.
     *
     * @param \DateInterval $heartbeatInterval
     * @return self
     */
    public function setHeartbeatInterval(\DateInterval $heartbeatInterval)
    {
        $this->heartbeatInterval = $heartbeatInterval;
        return $this;
    }


}

