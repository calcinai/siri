<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionMonitoringSubscriptionRequestStructureType
 *
 * Subscription Request for Connection Monitoring.
 * XSD Type: ConnectionMonitoringSubscriptionRequestStructure
 */
class ConnectionMonitoringSubscriptionRequestStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\ConnectionMonitoringRequest $connectionMonitoringRequest
     */
    private $connectionMonitoringRequest = null;

    /**
     * The amount of change to the arrival time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
     *
     * @property \DateInterval $changeBeforeUpdates
     */
    private $changeBeforeUpdates = null;

    /**
     * Gets as connectionMonitoringRequest
     *
     * @return \Calcinai\Siri\ConnectionMonitoringRequest
     */
    public function getConnectionMonitoringRequest()
    {
        return $this->connectionMonitoringRequest;
    }

    /**
     * Sets a new connectionMonitoringRequest
     *
     * @param \Calcinai\Siri\ConnectionMonitoringRequest $connectionMonitoringRequest
     * @return self
     */
    public function setConnectionMonitoringRequest(\Calcinai\Siri\ConnectionMonitoringRequest $connectionMonitoringRequest)
    {
        $this->connectionMonitoringRequest = $connectionMonitoringRequest;
        return $this;
    }

    /**
     * Gets as changeBeforeUpdates
     *
     * The amount of change to the arrival time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
     *
     * @return \DateInterval
     */
    public function getChangeBeforeUpdates()
    {
        return $this->changeBeforeUpdates;
    }

    /**
     * Sets a new changeBeforeUpdates
     *
     * The amount of change to the arrival time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
     *
     * @param \DateInterval $changeBeforeUpdates
     * @return self
     */
    public function setChangeBeforeUpdates(\DateInterval $changeBeforeUpdates)
    {
        $this->changeBeforeUpdates = $changeBeforeUpdates;
        return $this;
    }


}

