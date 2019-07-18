<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SubscriptionType
 *
 * This item contains all information relating to a customer subscription.
 * XSD Type: Subscription
 */
class SubscriptionType
{

    /**
     * Indicates that this subscription has to be deleted.
     *
     * @property bool $deleteSubscription
     */
    private $deleteSubscription = null;

    /**
     * Value of the interval of data delivery in the "periodic" delivery mode.
     *
     * @property float $deliveryInterval
     */
    private $deliveryInterval = null;

    /**
     * The mode of operation of the exchange.
     *
     * @property string $operatingMode
     */
    private $operatingMode = null;

    /**
     * Gives the date/time at which the subscription becomes active.
     *
     * @property \DateTime $subscriptionStartTime
     */
    private $subscriptionStartTime = null;

    /**
     * The current state of the the client's subscription.
     *
     * @property string $subscriptionState
     */
    private $subscriptionState = null;

    /**
     * Gives the date/time at which the subscription expires.
     *
     * @property \DateTime $subscriptionStopTime
     */
    private $subscriptionStopTime = null;

    /**
     * The type of updates of situations requested by the client.
     *
     * @property string $updateMethod
     */
    private $updateMethod = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TargetType[] $target
     */
    private $target = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\FilterReferenceType $filterReference
     */
    private $filterReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\CatalogueReferenceType $catalogueReference
     */
    private $catalogueReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $subscriptionExtension
     */
    private $subscriptionExtension = null;

    /**
     * Gets as deleteSubscription
     *
     * Indicates that this subscription has to be deleted.
     *
     * @return bool
     */
    public function getDeleteSubscription()
    {
        return $this->deleteSubscription;
    }

    /**
     * Sets a new deleteSubscription
     *
     * Indicates that this subscription has to be deleted.
     *
     * @param bool $deleteSubscription
     * @return self
     */
    public function setDeleteSubscription($deleteSubscription)
    {
        $this->deleteSubscription = $deleteSubscription;
        return $this;
    }

    /**
     * Gets as deliveryInterval
     *
     * Value of the interval of data delivery in the "periodic" delivery mode.
     *
     * @return float
     */
    public function getDeliveryInterval()
    {
        return $this->deliveryInterval;
    }

    /**
     * Sets a new deliveryInterval
     *
     * Value of the interval of data delivery in the "periodic" delivery mode.
     *
     * @param float $deliveryInterval
     * @return self
     */
    public function setDeliveryInterval($deliveryInterval)
    {
        $this->deliveryInterval = $deliveryInterval;
        return $this;
    }

    /**
     * Gets as operatingMode
     *
     * The mode of operation of the exchange.
     *
     * @return string
     */
    public function getOperatingMode()
    {
        return $this->operatingMode;
    }

    /**
     * Sets a new operatingMode
     *
     * The mode of operation of the exchange.
     *
     * @param string $operatingMode
     * @return self
     */
    public function setOperatingMode($operatingMode)
    {
        $this->operatingMode = $operatingMode;
        return $this;
    }

    /**
     * Gets as subscriptionStartTime
     *
     * Gives the date/time at which the subscription becomes active.
     *
     * @return \DateTime
     */
    public function getSubscriptionStartTime()
    {
        return $this->subscriptionStartTime;
    }

    /**
     * Sets a new subscriptionStartTime
     *
     * Gives the date/time at which the subscription becomes active.
     *
     * @param \DateTime $subscriptionStartTime
     * @return self
     */
    public function setSubscriptionStartTime(\DateTime $subscriptionStartTime)
    {
        $this->subscriptionStartTime = $subscriptionStartTime;
        return $this;
    }

    /**
     * Gets as subscriptionState
     *
     * The current state of the the client's subscription.
     *
     * @return string
     */
    public function getSubscriptionState()
    {
        return $this->subscriptionState;
    }

    /**
     * Sets a new subscriptionState
     *
     * The current state of the the client's subscription.
     *
     * @param string $subscriptionState
     * @return self
     */
    public function setSubscriptionState($subscriptionState)
    {
        $this->subscriptionState = $subscriptionState;
        return $this;
    }

    /**
     * Gets as subscriptionStopTime
     *
     * Gives the date/time at which the subscription expires.
     *
     * @return \DateTime
     */
    public function getSubscriptionStopTime()
    {
        return $this->subscriptionStopTime;
    }

    /**
     * Sets a new subscriptionStopTime
     *
     * Gives the date/time at which the subscription expires.
     *
     * @param \DateTime $subscriptionStopTime
     * @return self
     */
    public function setSubscriptionStopTime(\DateTime $subscriptionStopTime)
    {
        $this->subscriptionStopTime = $subscriptionStopTime;
        return $this;
    }

    /**
     * Gets as updateMethod
     *
     * The type of updates of situations requested by the client.
     *
     * @return string
     */
    public function getUpdateMethod()
    {
        return $this->updateMethod;
    }

    /**
     * Sets a new updateMethod
     *
     * The type of updates of situations requested by the client.
     *
     * @param string $updateMethod
     * @return self
     */
    public function setUpdateMethod($updateMethod)
    {
        $this->updateMethod = $updateMethod;
        return $this;
    }

    /**
     * Adds as target
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\TargetType $target
     */
    public function addToTarget(\Calcinai\Siri\Objects\Datex\TargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * @return \Calcinai\Siri\Objects\Datex\TargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param \Calcinai\Siri\Objects\Datex\TargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as filterReference
     *
     * @return \Calcinai\Siri\Objects\Datex\FilterReferenceType
     */
    public function getFilterReference()
    {
        return $this->filterReference;
    }

    /**
     * Sets a new filterReference
     *
     * @param \Calcinai\Siri\Objects\Datex\FilterReferenceType $filterReference
     * @return self
     */
    public function setFilterReference(\Calcinai\Siri\Objects\Datex\FilterReferenceType $filterReference)
    {
        $this->filterReference = $filterReference;
        return $this;
    }

    /**
     * Gets as catalogueReference
     *
     * @return \Calcinai\Siri\Objects\Datex\CatalogueReferenceType
     */
    public function getCatalogueReference()
    {
        return $this->catalogueReference;
    }

    /**
     * Sets a new catalogueReference
     *
     * @param \Calcinai\Siri\Objects\Datex\CatalogueReferenceType $catalogueReference
     * @return self
     */
    public function setCatalogueReference(\Calcinai\Siri\Objects\Datex\CatalogueReferenceType $catalogueReference)
    {
        $this->catalogueReference = $catalogueReference;
        return $this;
    }

    /**
     * Gets as subscriptionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSubscriptionExtension()
    {
        return $this->subscriptionExtension;
    }

    /**
     * Sets a new subscriptionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $subscriptionExtension
     * @return self
     */
    public function setSubscriptionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $subscriptionExtension)
    {
        $this->subscriptionExtension = $subscriptionExtension;
        return $this;
    }


}

