<?php

namespace Calcinai\Siri\CapabilityGeneralInteractionStructureType;

/**
 * Class representing DeliveryAType
 */
class DeliveryAType
{

    /**
     * Whether the servcie supports Direct delivery
     *
     * @property bool $directDelivery
     */
    private $directDelivery = null;

    /**
     * Whether the servcie supports Fetched delivery (VDV Style)
     *
     * @property bool $fetchedDelivery
     */
    private $fetchedDelivery = null;

    /**
     * Gets as directDelivery
     *
     * Whether the servcie supports Direct delivery
     *
     * @return bool
     */
    public function getDirectDelivery()
    {
        return $this->directDelivery;
    }

    /**
     * Sets a new directDelivery
     *
     * Whether the servcie supports Direct delivery
     *
     * @param bool $directDelivery
     * @return self
     */
    public function setDirectDelivery($directDelivery)
    {
        $this->directDelivery = $directDelivery;
        return $this;
    }

    /**
     * Gets as fetchedDelivery
     *
     * Whether the servcie supports Fetched delivery (VDV Style)
     *
     * @return bool
     */
    public function getFetchedDelivery()
    {
        return $this->fetchedDelivery;
    }

    /**
     * Sets a new fetchedDelivery
     *
     * Whether the servcie supports Fetched delivery (VDV Style)
     *
     * @param bool $fetchedDelivery
     * @return self
     */
    public function setFetchedDelivery($fetchedDelivery)
    {
        $this->fetchedDelivery = $fetchedDelivery;
        return $this;
    }


}

