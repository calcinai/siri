<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractSubscriptionRequestStructureType
 *
 * Type for COmmon Subscription Request
 * XSD Type: AbstractSubscriptionRequestStructure
 */
class AbstractSubscriptionRequestStructureType extends RequestStructureType
{

    /**
     * Address to which data is to be sent, if different from Address. This may also be determined from RequestorRef and preconfigured data.
     *
     * @property string $consumerAddress
     */
    private $consumerAddress = null;

    /**
     * Identifier of Subscribtion Filter with which this subscription is to be aggregated for purposes of notification and delivery. If absent, use the default filter. If present, use any existing filter with that identifier, if none found, create a new one. Optional SIRI feature.
     *
     * @property string $subscriptionFilterIdentifier
     */
    private $subscriptionFilterIdentifier = null;

    /**
     * General values that apply to subscription. Usually set by configuration.
     *
     * @property \Calcinai\Siri\SubscriptionContextStructureType $subscriptionContext
     */
    private $subscriptionContext = null;

    /**
     * Gets as consumerAddress
     *
     * Address to which data is to be sent, if different from Address. This may also be determined from RequestorRef and preconfigured data.
     *
     * @return string
     */
    public function getConsumerAddress()
    {
        return $this->consumerAddress;
    }

    /**
     * Sets a new consumerAddress
     *
     * Address to which data is to be sent, if different from Address. This may also be determined from RequestorRef and preconfigured data.
     *
     * @param string $consumerAddress
     * @return self
     */
    public function setConsumerAddress($consumerAddress)
    {
        $this->consumerAddress = $consumerAddress;
        return $this;
    }

    /**
     * Gets as subscriptionFilterIdentifier
     *
     * Identifier of Subscribtion Filter with which this subscription is to be aggregated for purposes of notification and delivery. If absent, use the default filter. If present, use any existing filter with that identifier, if none found, create a new one. Optional SIRI feature.
     *
     * @return string
     */
    public function getSubscriptionFilterIdentifier()
    {
        return $this->subscriptionFilterIdentifier;
    }

    /**
     * Sets a new subscriptionFilterIdentifier
     *
     * Identifier of Subscribtion Filter with which this subscription is to be aggregated for purposes of notification and delivery. If absent, use the default filter. If present, use any existing filter with that identifier, if none found, create a new one. Optional SIRI feature.
     *
     * @param string $subscriptionFilterIdentifier
     * @return self
     */
    public function setSubscriptionFilterIdentifier($subscriptionFilterIdentifier)
    {
        $this->subscriptionFilterIdentifier = $subscriptionFilterIdentifier;
        return $this;
    }

    /**
     * Gets as subscriptionContext
     *
     * General values that apply to subscription. Usually set by configuration.
     *
     * @return \Calcinai\Siri\SubscriptionContextStructureType
     */
    public function getSubscriptionContext()
    {
        return $this->subscriptionContext;
    }

    /**
     * Sets a new subscriptionContext
     *
     * General values that apply to subscription. Usually set by configuration.
     *
     * @param \Calcinai\Siri\SubscriptionContextStructureType $subscriptionContext
     * @return self
     */
    public function setSubscriptionContext(\Calcinai\Siri\SubscriptionContextStructureType $subscriptionContext)
    {
        $this->subscriptionContext = $subscriptionContext;
        return $this;
    }


}

