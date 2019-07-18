<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TrafficControlType
 *
 * Specification of traffic management controls which affect the road network that have been instigated by the network/road operator. These controls may require either optional or mandatory compliance.
 * XSD Type: TrafficControl
 */
class TrafficControlType
{

    /**
     * Defines whether the traffic control carries an optional or mandatory compliance requirement.
     *
     * @property string $trafficControlOptions
     */
    private $trafficControlOptions = null;

    /**
     * Defines the type of traffic control instigated by the network/road operator.
     *
     * @property string $trafficControlType
     */
    private $trafficControlType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficControlExtension
     */
    private $trafficControlExtension = null;

    /**
     * Gets as trafficControlOptions
     *
     * Defines whether the traffic control carries an optional or mandatory compliance requirement.
     *
     * @return string
     */
    public function getTrafficControlOptions()
    {
        return $this->trafficControlOptions;
    }

    /**
     * Sets a new trafficControlOptions
     *
     * Defines whether the traffic control carries an optional or mandatory compliance requirement.
     *
     * @param string $trafficControlOptions
     * @return self
     */
    public function setTrafficControlOptions($trafficControlOptions)
    {
        $this->trafficControlOptions = $trafficControlOptions;
        return $this;
    }

    /**
     * Gets as trafficControlType
     *
     * Defines the type of traffic control instigated by the network/road operator.
     *
     * @return string
     */
    public function getTrafficControlType()
    {
        return $this->trafficControlType;
    }

    /**
     * Sets a new trafficControlType
     *
     * Defines the type of traffic control instigated by the network/road operator.
     *
     * @param string $trafficControlType
     * @return self
     */
    public function setTrafficControlType($trafficControlType)
    {
        $this->trafficControlType = $trafficControlType;
        return $this;
    }

    /**
     * Gets as trafficControlExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficControlExtension()
    {
        return $this->trafficControlExtension;
    }

    /**
     * Sets a new trafficControlExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficControlExtension
     * @return self
     */
    public function setTrafficControlExtension(\Calcinai\Siri\Datex\ExtensionType $trafficControlExtension)
    {
        $this->trafficControlExtension = $trafficControlExtension;
        return $this;
    }


}

