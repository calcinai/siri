<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProductionTimetableDeliveriesStructureType
 *
 * Type for deliveries of production timetable service. Used in WSDL.
 * XSD Type: ProductionTimetableDeliveriesStructure
 */
class ProductionTimetableDeliveriesStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery
     */
    private $productionTimetableDelivery = null;

    /**
     * Gets as productionTimetableDelivery
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableDelivery
     */
    public function getProductionTimetableDelivery()
    {
        return $this->productionTimetableDelivery;
    }

    /**
     * Sets a new productionTimetableDelivery
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery
     * @return self
     */
    public function setProductionTimetableDelivery(\Calcinai\Siri\Objects\ProductionTimetableDelivery $productionTimetableDelivery)
    {
        $this->productionTimetableDelivery = $productionTimetableDelivery;
        return $this;
    }


}

