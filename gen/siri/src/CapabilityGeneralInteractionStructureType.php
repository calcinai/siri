<?php

namespace Calcinai\Siri;

/**
 * Class representing CapabilityGeneralInteractionStructureType
 *
 * Type for Common Request Policy capabilities.
 * XSD Type: CapabilityGeneralInteractionStructure
 */
class CapabilityGeneralInteractionStructureType
{

    /**
     * Interaction capabilities
     *
     * @property \Calcinai\Siri\CapabilityGeneralInteractionStructureType\InteractionAType $interaction
     */
    private $interaction = null;

    /**
     * Delivery capabilities
     *
     * @property \Calcinai\Siri\CapabilityGeneralInteractionStructureType\DeliveryAType $delivery
     */
    private $delivery = null;

    /**
     * Whether the service supports multiple part despatch with MoreData flag. Default is true.
     *
     * @property bool $multipartDespatch
     */
    private $multipartDespatch = null;

    /**
     * Whether the service supports multiple Subscriber Filters. Defaukts is false
     *
     * @property bool $multipleSubscriberFilter
     */
    private $multipleSubscriberFilter = null;

    /**
     * Whether the service supports Delivery confirm.
     *
     * @property bool $hasConfirmDelivery
     */
    private $hasConfirmDelivery = null;

    /**
     * Whether teh service has a heartbeat message. Default is false.
     *
     * @property bool $hasHeartbeat
     */
    private $hasHeartbeat = null;

    /**
     * Whether VisitNumber can be used as a strict order number within journey pattern Default is false.
     *
     * @property bool $visitNumberisOrder
     */
    private $visitNumberisOrder = null;

    /**
     * Gets as interaction
     *
     * Interaction capabilities
     *
     * @return \Calcinai\Siri\CapabilityGeneralInteractionStructureType\InteractionAType
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Sets a new interaction
     *
     * Interaction capabilities
     *
     * @param \Calcinai\Siri\CapabilityGeneralInteractionStructureType\InteractionAType $interaction
     * @return self
     */
    public function setInteraction(\Calcinai\Siri\CapabilityGeneralInteractionStructureType\InteractionAType $interaction)
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * Delivery capabilities
     *
     * @return \Calcinai\Siri\CapabilityGeneralInteractionStructureType\DeliveryAType
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * Delivery capabilities
     *
     * @param \Calcinai\Siri\CapabilityGeneralInteractionStructureType\DeliveryAType $delivery
     * @return self
     */
    public function setDelivery(\Calcinai\Siri\CapabilityGeneralInteractionStructureType\DeliveryAType $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as multipartDespatch
     *
     * Whether the service supports multiple part despatch with MoreData flag. Default is true.
     *
     * @return bool
     */
    public function getMultipartDespatch()
    {
        return $this->multipartDespatch;
    }

    /**
     * Sets a new multipartDespatch
     *
     * Whether the service supports multiple part despatch with MoreData flag. Default is true.
     *
     * @param bool $multipartDespatch
     * @return self
     */
    public function setMultipartDespatch($multipartDespatch)
    {
        $this->multipartDespatch = $multipartDespatch;
        return $this;
    }

    /**
     * Gets as multipleSubscriberFilter
     *
     * Whether the service supports multiple Subscriber Filters. Defaukts is false
     *
     * @return bool
     */
    public function getMultipleSubscriberFilter()
    {
        return $this->multipleSubscriberFilter;
    }

    /**
     * Sets a new multipleSubscriberFilter
     *
     * Whether the service supports multiple Subscriber Filters. Defaukts is false
     *
     * @param bool $multipleSubscriberFilter
     * @return self
     */
    public function setMultipleSubscriberFilter($multipleSubscriberFilter)
    {
        $this->multipleSubscriberFilter = $multipleSubscriberFilter;
        return $this;
    }

    /**
     * Gets as hasConfirmDelivery
     *
     * Whether the service supports Delivery confirm.
     *
     * @return bool
     */
    public function getHasConfirmDelivery()
    {
        return $this->hasConfirmDelivery;
    }

    /**
     * Sets a new hasConfirmDelivery
     *
     * Whether the service supports Delivery confirm.
     *
     * @param bool $hasConfirmDelivery
     * @return self
     */
    public function setHasConfirmDelivery($hasConfirmDelivery)
    {
        $this->hasConfirmDelivery = $hasConfirmDelivery;
        return $this;
    }

    /**
     * Gets as hasHeartbeat
     *
     * Whether teh service has a heartbeat message. Default is false.
     *
     * @return bool
     */
    public function getHasHeartbeat()
    {
        return $this->hasHeartbeat;
    }

    /**
     * Sets a new hasHeartbeat
     *
     * Whether teh service has a heartbeat message. Default is false.
     *
     * @param bool $hasHeartbeat
     * @return self
     */
    public function setHasHeartbeat($hasHeartbeat)
    {
        $this->hasHeartbeat = $hasHeartbeat;
        return $this;
    }

    /**
     * Gets as visitNumberisOrder
     *
     * Whether VisitNumber can be used as a strict order number within journey pattern Default is false.
     *
     * @return bool
     */
    public function getVisitNumberisOrder()
    {
        return $this->visitNumberisOrder;
    }

    /**
     * Sets a new visitNumberisOrder
     *
     * Whether VisitNumber can be used as a strict order number within journey pattern Default is false.
     *
     * @param bool $visitNumberisOrder
     * @return self
     */
    public function setVisitNumberisOrder($visitNumberisOrder)
    {
        $this->visitNumberisOrder = $visitNumberisOrder;
        return $this;
    }


}

