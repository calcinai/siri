<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TrafficStatusValueType
 *
 * The status of traffic conditions on a specific section or at a specific point on the road network.
 * XSD Type: TrafficStatusValue
 */
class TrafficStatusValueType extends BasicDataValueType
{

    /**
     * Status of traffic conditions on the identified section of road in the specified direction.
     *
     * @property string $trafficStatus
     */
    private $trafficStatus = null;

    /**
     * A characterisation of the trend in the traffic conditions at the specified location and direction.
     *
     * @property string $trafficTrendType
     */
    private $trafficTrendType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficStatusValueExtension
     */
    private $trafficStatusValueExtension = null;

    /**
     * Gets as trafficStatus
     *
     * Status of traffic conditions on the identified section of road in the specified direction.
     *
     * @return string
     */
    public function getTrafficStatus()
    {
        return $this->trafficStatus;
    }

    /**
     * Sets a new trafficStatus
     *
     * Status of traffic conditions on the identified section of road in the specified direction.
     *
     * @param string $trafficStatus
     * @return self
     */
    public function setTrafficStatus($trafficStatus)
    {
        $this->trafficStatus = $trafficStatus;
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
     * Gets as trafficStatusValueExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficStatusValueExtension()
    {
        return $this->trafficStatusValueExtension;
    }

    /**
     * Sets a new trafficStatusValueExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficStatusValueExtension
     * @return self
     */
    public function setTrafficStatusValueExtension(\Calcinai\Siri\Datex\ExtensionType $trafficStatusValueExtension)
    {
        $this->trafficStatusValueExtension = $trafficStatusValueExtension;
        return $this;
    }


}

