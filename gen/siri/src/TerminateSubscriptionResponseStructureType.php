<?php

namespace Calcinai\Siri;

/**
 * Class representing TerminateSubscriptionResponseStructureType
 *
 * Type for Response to a request to terminate a subscription or subscriptions
 * XSD Type: TerminateSubscriptionResponseStructure
 */
class TerminateSubscriptionResponseStructureType extends ResponseEndpointStructureType
{

    /**
     * Status of each subscription termnination response
     *
     * @property \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType $terminationResponseStatus
     */
    private $terminationResponseStatus = null;

    /**
     * Gets as terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @return \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType
     */
    public function getTerminationResponseStatus()
    {
        return $this->terminationResponseStatus;
    }

    /**
     * Sets a new terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @param \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType $terminationResponseStatus
     * @return self
     */
    public function setTerminationResponseStatus(\Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType $terminationResponseStatus)
    {
        $this->terminationResponseStatus = $terminationResponseStatus;
        return $this;
    }


}

