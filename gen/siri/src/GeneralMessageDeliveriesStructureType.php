<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing GeneralMessageDeliveriesStructureType
 *
 * Type for Deliveries. Used in WSDL.
 * XSD Type: GeneralMessageDeliveriesStructure
 */
class GeneralMessageDeliveriesStructureType
{

    /**
     * Delivery for general Message service.
     *
     * @property \Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery
     */
    private $generalMessageDelivery = null;

    /**
     * Gets as generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageDelivery
     */
    public function getGeneralMessageDelivery()
    {
        return $this->generalMessageDelivery;
    }

    /**
     * Sets a new generalMessageDelivery
     *
     * Delivery for general Message service.
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery
     * @return self
     */
    public function setGeneralMessageDelivery(\Calcinai\Siri\Objects\GeneralMessageDelivery $generalMessageDelivery)
    {
        $this->generalMessageDelivery = $generalMessageDelivery;
        return $this;
    }


}

