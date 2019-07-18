<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractSubscriptionStructureType
 *
 * Type for SIRI Service subscriptions
 * XSD Type: AbstractSubscriptionStructure
 */
class AbstractSubscriptionStructureType
{

    /**
     * Participant Identifier of Subscriber. Normally this will be given by context, i.e. be the same as on the Subscription Request.
     *
     * @property string $subscriberRef
     */
    private $subscriberRef = null;

    /**
     * Identifier to be given to Subscription.
     *
     * @property string $subscriptionIdentifier
     */
    private $subscriptionIdentifier = null;

    /**
     * Requested end time for subscription.
     *
     * @property \DateTime $initialTerminationTime
     */
    private $initialTerminationTime = null;

    /**
     * Gets as subscriberRef
     *
     * Participant Identifier of Subscriber. Normally this will be given by context, i.e. be the same as on the Subscription Request.
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
     * Participant Identifier of Subscriber. Normally this will be given by context, i.e. be the same as on the Subscription Request.
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
     * Gets as subscriptionIdentifier
     *
     * Identifier to be given to Subscription.
     *
     * @return string
     */
    public function getSubscriptionIdentifier()
    {
        return $this->subscriptionIdentifier;
    }

    /**
     * Sets a new subscriptionIdentifier
     *
     * Identifier to be given to Subscription.
     *
     * @param string $subscriptionIdentifier
     * @return self
     */
    public function setSubscriptionIdentifier($subscriptionIdentifier)
    {
        $this->subscriptionIdentifier = $subscriptionIdentifier;
        return $this;
    }

    /**
     * Gets as initialTerminationTime
     *
     * Requested end time for subscription.
     *
     * @return \DateTime
     */
    public function getInitialTerminationTime()
    {
        return $this->initialTerminationTime;
    }

    /**
     * Sets a new initialTerminationTime
     *
     * Requested end time for subscription.
     *
     * @param \DateTime $initialTerminationTime
     * @return self
     */
    public function setInitialTerminationTime(\DateTime $initialTerminationTime)
    {
        $this->initialTerminationTime = $initialTerminationTime;
        return $this;
    }


}

