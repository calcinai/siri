<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AbnormalTrafficType
 *
 * A traffic condition which is not normal.
 * XSD Type: AbnormalTraffic
 */
class AbnormalTrafficType extends TrafficElementType
{

    /**
     * A characterisation of the nature of abnormal traffic flow, i.e. specifically relating to the nature of the traffic movement.
     *
     * @property string $abnormalTrafficType
     */
    private $abnormalTrafficType = null;

    /**
     * The number of vehicles waiting in a queue.
     *
     * @property int $numberOfVehiclesWaiting
     */
    private $numberOfVehiclesWaiting = null;

    /**
     * The length of a queue or the average length of queues in separate lanes due to a situation.
     *
     * @property int $queueLength
     */
    private $queueLength = null;

    /**
     * Assessement of the traffic flow conditions relative to normally expected conditions at this date/time.
     *
     * @property string $relativeTrafficFlow
     */
    private $relativeTrafficFlow = null;

    /**
     * A characterisation of the trend in the traffic conditions at the specified location and direction.
     *
     * @property string $trafficTrendType
     */
    private $trafficTrendType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $abnormalTrafficExtension
     */
    private $abnormalTrafficExtension = null;

    /**
     * Gets as abnormalTrafficType
     *
     * A characterisation of the nature of abnormal traffic flow, i.e. specifically relating to the nature of the traffic movement.
     *
     * @return string
     */
    public function getAbnormalTrafficType()
    {
        return $this->abnormalTrafficType;
    }

    /**
     * Sets a new abnormalTrafficType
     *
     * A characterisation of the nature of abnormal traffic flow, i.e. specifically relating to the nature of the traffic movement.
     *
     * @param string $abnormalTrafficType
     * @return self
     */
    public function setAbnormalTrafficType($abnormalTrafficType)
    {
        $this->abnormalTrafficType = $abnormalTrafficType;
        return $this;
    }

    /**
     * Gets as numberOfVehiclesWaiting
     *
     * The number of vehicles waiting in a queue.
     *
     * @return int
     */
    public function getNumberOfVehiclesWaiting()
    {
        return $this->numberOfVehiclesWaiting;
    }

    /**
     * Sets a new numberOfVehiclesWaiting
     *
     * The number of vehicles waiting in a queue.
     *
     * @param int $numberOfVehiclesWaiting
     * @return self
     */
    public function setNumberOfVehiclesWaiting($numberOfVehiclesWaiting)
    {
        $this->numberOfVehiclesWaiting = $numberOfVehiclesWaiting;
        return $this;
    }

    /**
     * Gets as queueLength
     *
     * The length of a queue or the average length of queues in separate lanes due to a situation.
     *
     * @return int
     */
    public function getQueueLength()
    {
        return $this->queueLength;
    }

    /**
     * Sets a new queueLength
     *
     * The length of a queue or the average length of queues in separate lanes due to a situation.
     *
     * @param int $queueLength
     * @return self
     */
    public function setQueueLength($queueLength)
    {
        $this->queueLength = $queueLength;
        return $this;
    }

    /**
     * Gets as relativeTrafficFlow
     *
     * Assessement of the traffic flow conditions relative to normally expected conditions at this date/time.
     *
     * @return string
     */
    public function getRelativeTrafficFlow()
    {
        return $this->relativeTrafficFlow;
    }

    /**
     * Sets a new relativeTrafficFlow
     *
     * Assessement of the traffic flow conditions relative to normally expected conditions at this date/time.
     *
     * @param string $relativeTrafficFlow
     * @return self
     */
    public function setRelativeTrafficFlow($relativeTrafficFlow)
    {
        $this->relativeTrafficFlow = $relativeTrafficFlow;
        return $this;
    }

    /**
     * Gets as trafficTrendType
     *
     * A characterisation of the trend in the traffic conditions at the specified location and direction.
     *
     * @return string
     */
    public function getTrafficTrendType()
    {
        return $this->trafficTrendType;
    }

    /**
     * Sets a new trafficTrendType
     *
     * A characterisation of the trend in the traffic conditions at the specified location and direction.
     *
     * @param string $trafficTrendType
     * @return self
     */
    public function setTrafficTrendType($trafficTrendType)
    {
        $this->trafficTrendType = $trafficTrendType;
        return $this;
    }

    /**
     * Gets as abnormalTrafficExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAbnormalTrafficExtension()
    {
        return $this->abnormalTrafficExtension;
    }

    /**
     * Sets a new abnormalTrafficExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $abnormalTrafficExtension
     * @return self
     */
    public function setAbnormalTrafficExtension(\Calcinai\Siri\Datex\ExtensionType $abnormalTrafficExtension)
    {
        $this->abnormalTrafficExtension = $abnormalTrafficExtension;
        return $this;
    }


}

