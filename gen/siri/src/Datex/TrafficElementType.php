<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficElementType
 *
 * An event which is not planned by the traffic operator, which is affecting, or has the potential to affect traffic flow.
 * XSD Type: TrafficElement
 */
class TrafficElementType extends SituationRecordType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficElementExtension
     */
    private $trafficElementExtension = null;

    /**
     * Gets as trafficElementExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficElementExtension()
    {
        return $this->trafficElementExtension;
    }

    /**
     * Sets a new trafficElementExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficElementExtension
     * @return self
     */
    public function setTrafficElementExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficElementExtension)
    {
        $this->trafficElementExtension = $trafficElementExtension;
        return $this;
    }


}

