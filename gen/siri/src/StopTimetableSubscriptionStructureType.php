<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopTimetableSubscriptionStructureType
 *
 * Subscription Request for Stop Timetables
 * XSD Type: StopTimetableSubscriptionStructure
 */
class StopTimetableSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest
     */
    private $stopTimetableRequest = null;

    /**
     * Whether the producer should return the complete set of current data, or only provide updates to the last data retruned, i.e. additions, modifications and deletions.
     * If false each subscription response will contain the full information as specified in this request.
     *
     * @property bool $incrementalUpdates
     */
    private $incrementalUpdates = null;

    /**
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
     *
     * @property \DateInterval $changeBeforeUpdates
     */
    private $changeBeforeUpdates = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as stopTimetableRequest
     *
     * @return \Calcinai\Siri\Objects\StopTimetableRequest
     */
    public function getStopTimetableRequest()
    {
        return $this->stopTimetableRequest;
    }

    /**
     * Sets a new stopTimetableRequest
     *
     * @param \Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest
     * @return self
     */
    public function setStopTimetableRequest(\Calcinai\Siri\Objects\StopTimetableRequest $stopTimetableRequest)
    {
        $this->stopTimetableRequest = $stopTimetableRequest;
        return $this;
    }

    /**
     * Gets as incrementalUpdates
     *
     * Whether the producer should return the complete set of current data, or only provide updates to the last data retruned, i.e. additions, modifications and deletions.
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
     * Whether the producer should return the complete set of current data, or only provide updates to the last data retruned, i.e. additions, modifications and deletions.
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
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
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
     * The amount of change to the arrival or departure time that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed). Default is zero - all changes will be sent regardless.
     *
     * @param \DateInterval $changeBeforeUpdates
     * @return self
     */
    public function setChangeBeforeUpdates(\DateInterval $changeBeforeUpdates)
    {
        $this->changeBeforeUpdates = $changeBeforeUpdates;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

