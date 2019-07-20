<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationExchangeDeliveriesStructureType
 *
 * Type for Deliveries forSituation Exchange services Used in WSDL.
 * XSD Type: SituationExchangeDeliveriesStructure
 */
class SituationExchangeDeliveriesStructureType
{

    /**
     * Delviery for Vehicle Activity Service
     *
     * @property \Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery
     */
    private $situationExchangeDelivery = null;

    /**
     * Gets as situationExchangeDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeDelivery
     */
    public function getSituationExchangeDelivery()
    {
        return $this->situationExchangeDelivery;
    }

    /**
     * Sets a new situationExchangeDelivery
     *
     * Delviery for Vehicle Activity Service
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery
     * @return self
     */
    public function setSituationExchangeDelivery(\Calcinai\Siri\Objects\SituationExchangeDelivery $situationExchangeDelivery)
    {
        $this->situationExchangeDelivery = $situationExchangeDelivery;
        return $this;
    }


}

