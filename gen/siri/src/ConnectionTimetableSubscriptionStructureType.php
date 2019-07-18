<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionTimetableSubscriptionStructureType
 *
 * Type for Subscription Request for Connection Protection.
 * XSD Type: ConnectionTimetableSubscriptionStructure
 */
class ConnectionTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\ConnectionTimetableRequest $connectionTimetableRequest
     */
    private $connectionTimetableRequest = null;

    /**
     * Gets as connectionTimetableRequest
     *
     * @return \Calcinai\Siri\ConnectionTimetableRequest
     */
    public function getConnectionTimetableRequest()
    {
        return $this->connectionTimetableRequest;
    }

    /**
     * Sets a new connectionTimetableRequest
     *
     * @param \Calcinai\Siri\ConnectionTimetableRequest $connectionTimetableRequest
     * @return self
     */
    public function setConnectionTimetableRequest(\Calcinai\Siri\ConnectionTimetableRequest $connectionTimetableRequest)
    {
        $this->connectionTimetableRequest = $connectionTimetableRequest;
        return $this;
    }


}

