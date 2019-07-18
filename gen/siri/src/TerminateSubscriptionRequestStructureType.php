<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TerminateSubscriptionRequestStructureType
 *
 * Type for Request to terminate of a subscription or subscriptions
 * XSD Type: TerminateSubscriptionRequestStructure
 */
class TerminateSubscriptionRequestStructureType extends RequestStructureType
{

    /**
     * Participant Identifier of Subscriber. Subscription ref will be unique within this.
     *
     * @property string $subscriberRef
     */
    private $subscriberRef = null;

    /**
     * Terminate all subscriptions for the requestor.
     *
     * @property string $all
     */
    private $all = null;

    /**
     * Terminate the subscription identfiied by the reference.
     *
     * @property string $subscriptionRef
     */
    private $subscriptionRef = null;

    /**
     * Gets as subscriberRef
     *
     * Participant Identifier of Subscriber. Subscription ref will be unique within this.
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
     * Participant Identifier of Subscriber. Subscription ref will be unique within this.
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
     * Gets as all
     *
     * Terminate all subscriptions for the requestor.
     *
     * @return string
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * Sets a new all
     *
     * Terminate all subscriptions for the requestor.
     *
     * @param string $all
     * @return self
     */
    public function setAll($all)
    {
        $this->all = $all;
        return $this;
    }

    /**
     * Gets as subscriptionRef
     *
     * Terminate the subscription identfiied by the reference.
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
     * Terminate the subscription identfiied by the reference.
     *
     * @param string $subscriptionRef
     * @return self
     */
    public function setSubscriptionRef($subscriptionRef)
    {
        $this->subscriptionRef = $subscriptionRef;
        return $this;
    }


}

