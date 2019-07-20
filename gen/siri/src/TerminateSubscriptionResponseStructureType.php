<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType[] $terminationResponseStatus
     */
    private $terminationResponseStatus = [
        
    ];

    /**
     * Adds as terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType $terminationResponseStatus
     */
    public function addToTerminationResponseStatus(\Calcinai\Siri\Objects\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType $terminationResponseStatus)
    {
        $this->terminationResponseStatus[] = $terminationResponseStatus;
        return $this;
    }

    /**
     * isset terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerminationResponseStatus($index)
    {
        return isset($this->terminationResponseStatus[$index]);
    }

    /**
     * unset terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerminationResponseStatus($index)
    {
        unset($this->terminationResponseStatus[$index]);
    }

    /**
     * Gets as terminationResponseStatus
     *
     * Status of each subscription termnination response
     *
     * @return \Calcinai\Siri\Objects\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType[]
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
     * @param \Calcinai\Siri\Objects\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType[] $terminationResponseStatus
     * @return self
     */
    public function setTerminationResponseStatus(array $terminationResponseStatus)
    {
        $this->terminationResponseStatus = $terminationResponseStatus;
        return $this;
    }


}

