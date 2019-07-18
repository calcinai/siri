<?php

namespace Calcinai\Siri;

/**
 * Class representing ProductionTimetableSubscriptionStructureType
 *
 * Subscription Request for Production Timetable Service.
 * XSD Type: ProductionTimetableSubscriptionStructure
 */
class ProductionTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\ProductionTimetableRequest $productionTimetableRequest
     */
    private $productionTimetableRequest = null;

    /**
     * Gets as productionTimetableRequest
     *
     * @return \Calcinai\Siri\ProductionTimetableRequest
     */
    public function getProductionTimetableRequest()
    {
        return $this->productionTimetableRequest;
    }

    /**
     * Sets a new productionTimetableRequest
     *
     * @param \Calcinai\Siri\ProductionTimetableRequest $productionTimetableRequest
     * @return self
     */
    public function setProductionTimetableRequest(\Calcinai\Siri\ProductionTimetableRequest $productionTimetableRequest)
    {
        $this->productionTimetableRequest = $productionTimetableRequest;
        return $this;
    }


}

