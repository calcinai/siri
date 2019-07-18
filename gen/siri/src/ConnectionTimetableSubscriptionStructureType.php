<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionTimetableSubscriptionStructureType
 *
 * Type for Subscription Request for Connection Protection.
 * XSD Type: ConnectionTimetableSubscriptionStructure
 */
class ConnectionTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest
     */
    private $connectionTimetableRequest = null;

    /**
     * Gets as connectionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableRequest
     */
    public function getConnectionTimetableRequest()
    {
        return $this->connectionTimetableRequest;
    }

    /**
     * Sets a new connectionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest
     * @return self
     */
    public function setConnectionTimetableRequest(\Calcinai\Siri\Objects\ConnectionTimetableRequest $connectionTimetableRequest)
    {
        $this->connectionTimetableRequest = $connectionTimetableRequest;
        return $this;
    }


}

