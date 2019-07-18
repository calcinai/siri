<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing NonRoadEventInformationType
 *
 * Information about an event which is not on the road, but which may influence the behaviour of drivers and hence the characteristics of the traffic flow.
 * XSD Type: NonRoadEventInformation
 */
class NonRoadEventInformationType extends SituationRecordType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $nonRoadEventInformationExtension
     */
    private $nonRoadEventInformationExtension = null;

    /**
     * Gets as nonRoadEventInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getNonRoadEventInformationExtension()
    {
        return $this->nonRoadEventInformationExtension;
    }

    /**
     * Sets a new nonRoadEventInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $nonRoadEventInformationExtension
     * @return self
     */
    public function setNonRoadEventInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $nonRoadEventInformationExtension)
    {
        $this->nonRoadEventInformationExtension = $nonRoadEventInformationExtension;
        return $this;
    }


}

