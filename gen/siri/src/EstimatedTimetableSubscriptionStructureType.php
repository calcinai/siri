<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedTimetableSubscriptionStructureType
 *
 * Subscription Request for Estimated Timetable Service.
 * XSD Type: EstimatedTimetableSubscriptionStructure
 */
class EstimatedTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest
     */
    private $estimatedTimetableRequest = null;

    /**
     * Whether the producer should return the complete set of data, or only provide updates to the previously returned data i.e. changes to the expected deviation (delay or early time). Default is true. If true only changes at the first stop will be returned and the client must interpolate the 
     * If false each subscription response will contain the full information as specified in this request.
     *
     * @property bool $incrementalUpdates
     */
    private $incrementalUpdates = null;

    /**
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a timetable is changed by 30 seconds - an update will only be sent when the timetable is changed by at least least 2 mins
     *
     * @property \DateInterval $changeBeforeUpdates
     */
    private $changeBeforeUpdates = null;

    /**
     * Gets as estimatedTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetableRequest
     */
    public function getEstimatedTimetableRequest()
    {
        return $this->estimatedTimetableRequest;
    }

    /**
     * Sets a new estimatedTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest
     * @return self
     */
    public function setEstimatedTimetableRequest(\Calcinai\Siri\Objects\EstimatedTimetableRequest $estimatedTimetableRequest)
    {
        $this->estimatedTimetableRequest = $estimatedTimetableRequest;
        return $this;
    }

    /**
     * Gets as incrementalUpdates
     *
     * Whether the producer should return the complete set of data, or only provide updates to the previously returned data i.e. changes to the expected deviation (delay or early time). Default is true. If true only changes at the first stop will be returned and the client must interpolate the 
     * If false each subscription response will contain the full information as specified in this request.
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
     * Whether the producer should return the complete set of data, or only provide updates to the previously returned data i.e. changes to the expected deviation (delay or early time). Default is true. If true only changes at the first stop will be returned and the client must interpolate the 
     * If false each subscription response will contain the full information as specified in this request.
     *
     * @param bool $incrementalUpdates
     * @return self
     */
    public function setIncrementalUpdates($incrementalUpdates)
    {
        $this->incrementalUpdates = $incrementalUpdates;
        return $this;
    }

    /**
     * Gets as changeBeforeUpdates
     *
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a timetable is changed by 30 seconds - an update will only be sent when the timetable is changed by at least least 2 mins
     *
     * @return \DateInterval
     */
    public function getChangeBeforeUpdates()
    {
        return $this->changeBeforeUpdates;
    }

    /**
     * Sets a new changeBeforeUpdates
     *
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a timetable is changed by 30 seconds - an update will only be sent when the timetable is changed by at least least 2 mins
     *
     * @param \DateInterval $changeBeforeUpdates
     * @return self
     */
    public function setChangeBeforeUpdates(\DateInterval $changeBeforeUpdates)
    {
        $this->changeBeforeUpdates = $changeBeforeUpdates;
        return $this;
    }


}

