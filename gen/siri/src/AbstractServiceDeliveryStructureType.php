<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractServiceDeliveryStructureType
 *
 * Type for Common elementd for a SIRI service delivery of the Form xxxDelivery.
 * XSD Type: AbstractServiceDeliveryStructure
 */
class AbstractServiceDeliveryStructureType extends ResponseStructureType
{

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
     * @property \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition
     */
    private $errorCondition = null;

    /**
     * End of data horizon of the data producer.
     *
     * @property \DateTime $validUntil
     */
    private $validUntil = null;

    /**
     * Minimum interval at which updates can be sent.
     *
     * @property \DateInterval $shortestPossibleCycle
     */
    private $shortestPossibleCycle = null;

    /**
     * Default Language for text elements.
     *
     * @property string $defaultLanguage
     */
    private $defaultLanguage = null;

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
     * @return \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType
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
     * @param \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }

    /**
     * Gets as validUntil
     *
     * End of data horizon of the data producer.
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Sets a new validUntil
     *
     * End of data horizon of the data producer.
     *
     * @param \DateTime $validUntil
     * @return self
     */
    public function setValidUntil(\DateTime $validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * Gets as shortestPossibleCycle
     *
     * Minimum interval at which updates can be sent.
     *
     * @return \DateInterval
     */
    public function getShortestPossibleCycle()
    {
        return $this->shortestPossibleCycle;
    }

    /**
     * Sets a new shortestPossibleCycle
     *
     * Minimum interval at which updates can be sent.
     *
     * @param \DateInterval $shortestPossibleCycle
     * @return self
     */
    public function setShortestPossibleCycle(\DateInterval $shortestPossibleCycle)
    {
        $this->shortestPossibleCycle = $shortestPossibleCycle;
        return $this;
    }

    /**
     * Gets as defaultLanguage
     *
     * Default Language for text elements.
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets a new defaultLanguage
     *
     * Default Language for text elements.
     *
     * @param string $defaultLanguage
     * @return self
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }


}

