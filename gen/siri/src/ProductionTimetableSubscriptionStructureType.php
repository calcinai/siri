<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProductionTimetableSubscriptionStructureType
 *
 * Subscription Request for Production Timetable Service.
 * XSD Type: ProductionTimetableSubscriptionStructure
 */
class ProductionTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest
     */
    private $productionTimetableRequest = null;

    /**
     * Gets as productionTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableRequest
     */
    public function getProductionTimetableRequest()
    {
        return $this->productionTimetableRequest;
    }

    /**
     * Sets a new productionTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest
     * @return self
     */
    public function setProductionTimetableRequest(\Calcinai\Siri\Objects\ProductionTimetableRequest $productionTimetableRequest)
    {
        $this->productionTimetableRequest = $productionTimetableRequest;
        return $this;
    }


}

