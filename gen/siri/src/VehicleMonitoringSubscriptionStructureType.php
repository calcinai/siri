<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringSubscriptionStructureType
 *
 * Data type for Subscription Request for Vehicle Monitoring Service.
 * XSD Type: VehicleMonitoringSubscriptionStructure
 */
class VehicleMonitoringSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest
     */
    private $vehicleMonitoringRequest = null;

    /**
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @property bool $incrementalUpdates
     */
    private $incrementalUpdates = null;

    /**
     * The amount of change to the vehicle expected arrival time at next stop that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed).
     *
     * @property \DateInterval $changeBeforeUpdates
     */
    private $changeBeforeUpdates = null;

    /**
     * Time interval in seconds in which new data is to be transmitted. If unspecified, default to system configuration.
     *
     * @property \DateInterval $updateInterval
     */
    private $updateInterval = null;

    /**
     * Gets as vehicleMonitoringRequest
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringRequest
     */
    public function getVehicleMonitoringRequest()
    {
        return $this->vehicleMonitoringRequest;
    }

    /**
     * Sets a new vehicleMonitoringRequest
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest
     * @return self
     */
    public function setVehicleMonitoringRequest(\Calcinai\Siri\Objects\VehicleMonitoringRequest $vehicleMonitoringRequest)
    {
        $this->vehicleMonitoringRequest = $vehicleMonitoringRequest;
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

    /**
     * Gets as changeBeforeUpdates
     *
     * The amount of change to the vehicle expected arrival time at next stop that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed).
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
     * The amount of change to the vehicle expected arrival time at next stop that can happen before an update is sent (i.e. if ChangeBeforeUpdate is set to 2 mins, the subscriber will not be told that a bus is 30 seconds delayed - an update will only be sent when the bus is at least 2 mins delayed).
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
     * Gets as updateInterval
     *
     * Time interval in seconds in which new data is to be transmitted. If unspecified, default to system configuration.
     *
     * @return \DateInterval
     */
    public function getUpdateInterval()
    {
        return $this->updateInterval;
    }

    /**
     * Sets a new updateInterval
     *
     * Time interval in seconds in which new data is to be transmitted. If unspecified, default to system configuration.
     *
     * @param \DateInterval $updateInterval
     * @return self
     */
    public function setUpdateInterval(\DateInterval $updateInterval)
    {
        $this->updateInterval = $updateInterval;
        return $this;
    }


}

