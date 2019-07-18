<?php

namespace Calcinai\Siri\TerminateSubscriptionResponseStructureType;

/**
 * Class representing TerminationResponseStatusAType
 */
class TerminationResponseStatusAType
{

    /**
     * @property \DateTime $responseTimestamp
     */
    private $responseTimestamp = null;

    /**
     * Arbitrary unique reference to the request which gave rise to this message.
     *
     * @property string $requestMessageRef
     */
    private $requestMessageRef = null;

    /**
     * Unique identifier of Subscriber - reference to a Participant.
     *
     * @property string $subscriberRef
     */
    private $subscriberRef = null;

    /**
     * Unique identifier of Subscription filter to which this subscription is assigned. If there is onlya single filter, then can be omitted.
     *
     * @property string $subscriptionFilterRef
     */
    private $subscriptionFilterRef = null;

    /**
     * Identifier of service subscription: unique within Service and Subscriber.
     *
     * @property string $subscriptionRef
     */
    private $subscriptionRef = null;

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition.
     *
     * @property \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType\ErrorConditionAType $errorCondition
     */
    private $errorCondition = null;

    /**
     * Gets as responseTimestamp
     *
     * @return \DateTime
     */
    public function getResponseTimestamp()
    {
        return $this->responseTimestamp;
    }

    /**
     * Sets a new responseTimestamp
     *
     * @param \DateTime $responseTimestamp
     * @return self
     */
    public function setResponseTimestamp(\DateTime $responseTimestamp)
    {
        $this->responseTimestamp = $responseTimestamp;
        return $this;
    }

    /**
     * Gets as requestMessageRef
     *
     * Arbitrary unique reference to the request which gave rise to this message.
     *
     * @return string
     */
    public function getRequestMessageRef()
    {
        return $this->requestMessageRef;
    }

    /**
     * Sets a new requestMessageRef
     *
     * Arbitrary unique reference to the request which gave rise to this message.
     *
     * @param string $requestMessageRef
     * @return self
     */
    public function setRequestMessageRef($requestMessageRef)
    {
        $this->requestMessageRef = $requestMessageRef;
        return $this;
    }

    /**
     * Gets as subscriberRef
     *
     * Unique identifier of Subscriber - reference to a Participant.
     *
     * @return string
     */
    public function getSubscriberRef()
    {
        return $this->subscriberRef;
    }

    /**
     * Sets a new subscriberRef
     *
     * Unique identifier of Subscriber - reference to a Participant.
     *
     * @param string $subscriberRef
     * @return self
     */
    public function setSubscriberRef($subscriberRef)
    {
        $this->subscriberRef = $subscriberRef;
        return $this;
    }

    /**
     * Gets as subscriptionFilterRef
     *
     * Unique identifier of Subscription filter to which this subscription is assigned. If there is onlya single filter, then can be omitted.
     *
     * @return string
     */
    public function getSubscriptionFilterRef()
    {
        return $this->subscriptionFilterRef;
    }

    /**
     * Sets a new subscriptionFilterRef
     *
     * Unique identifier of Subscription filter to which this subscription is assigned. If there is onlya single filter, then can be omitted.
     *
     * @param string $subscriptionFilterRef
     * @return self
     */
    public function setSubscriptionFilterRef($subscriptionFilterRef)
    {
        $this->subscriptionFilterRef = $subscriptionFilterRef;
        return $this;
    }

    /**
     * Gets as subscriptionRef
     *
     * Identifier of service subscription: unique within Service and Subscriber.
     *
     * @return string
     */
    public function getSubscriptionRef()
    {
        return $this->subscriptionRef;
    }

    /**
     * Sets a new subscriptionRef
     *
     * Identifier of service subscription: unique within Service and Subscriber.
     *
     * @param string $subscriptionRef
     * @return self
     */
    public function setSubscriptionRef($subscriptionRef)
    {
        $this->subscriptionRef = $subscriptionRef;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param bool $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as errorCondition
     *
     * Description of any error or warning condition.
     *
     * @return \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType\ErrorConditionAType
     */
    public function getErrorCondition()
    {
        return $this->errorCondition;
    }

    /**
     * Sets a new errorCondition
     *
     * Description of any error or warning condition.
     *
     * @param \Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\TerminateSubscriptionResponseStructureType\TerminationResponseStatusAType\ErrorConditionAType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }


}

