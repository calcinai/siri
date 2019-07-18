<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing RoadConditionsType
 *
 * Conditions of the road surface which may affect driving conditions. These may be related to the weather (e.g. ice, snow etc.) or to other conditions (e.g. oil, mud, leaves etc. on the road)
 * XSD Type: RoadConditions
 */
class RoadConditionsType extends ConditionsType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $roadConditionsExtension
     */
    private $roadConditionsExtension = null;

    /**
     * Gets as roadConditionsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getRoadConditionsExtension()
    {
        return $this->roadConditionsExtension;
    }

    /**
     * Sets a new roadConditionsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $roadConditionsExtension
     * @return self
     */
    public function setRoadConditionsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $roadConditionsExtension)
    {
        $this->roadConditionsExtension = $roadConditionsExtension;
        return $this;
    }


}

