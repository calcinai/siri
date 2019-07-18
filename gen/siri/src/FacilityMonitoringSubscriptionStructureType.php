<?php

namespace Calcinai\Siri;

/**
 * Class representing FacilityMonitoringSubscriptionStructureType
 *
 * Data type for Subscription Request for Vehicle Monitoring Service.
 * XSD Type: FacilityMonitoringSubscriptionStructure
 */
class FacilityMonitoringSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\FacilityMonitoringRequest $facilityMonitoringRequest
     */
    private $facilityMonitoringRequest = null;

    /**
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @property bool $incrementalUpdates
     */
    private $incrementalUpdates = null;

    /**
     * Gets as facilityMonitoringRequest
     *
     * @return \Calcinai\Siri\FacilityMonitoringRequest
     */
    public function getFacilityMonitoringRequest()
    {
        return $this->facilityMonitoringRequest;
    }

    /**
     * Sets a new facilityMonitoringRequest
     *
     * @param \Calcinai\Siri\FacilityMonitoringRequest $facilityMonitoringRequest
     * @return self
     */
    public function setFacilityMonitoringRequest(\Calcinai\Siri\FacilityMonitoringRequest $facilityMonitoringRequest)
    {
        $this->facilityMonitoringRequest = $facilityMonitoringRequest;
        return $this;
    }

    /**
     * Gets as incrementalUpdates
     *
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @return bool
     */
    public function getIncrementalUpdates()
    {
        return $this->incrementalUpdates;
    }

    /**
     * Sets a new incrementalUpdates
     *
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @param bool $incrementalUpdates
     * @return self
     */
    public function setIncrementalUpdates($incrementalUpdates)
    {
        $this->incrementalUpdates = $incrementalUpdates;
        return $this;
    }


}

