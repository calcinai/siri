<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing NonRoadEventInformationType
 *
 * Information about an event which is not on the road, but which may influence the behaviour of drivers and hence the characteristics of the traffic flow.
 * XSD Type: NonRoadEventInformation
 */
class NonRoadEventInformationType extends SituationRecordType
{

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $nonRoadEventInformationExtension
     */
    private $nonRoadEventInformationExtension = null;

    /**
     * Gets as nonRoadEventInformationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getNonRoadEventInformationExtension()
    {
        return $this->nonRoadEventInformationExtension;
    }

    /**
     * Sets a new nonRoadEventInformationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $nonRoadEventInformationExtension
     * @return self
     */
    public function setNonRoadEventInformationExtension(\Calcinai\Siri\Datex\ExtensionType $nonRoadEventInformationExtension)
    {
        $this->nonRoadEventInformationExtension = $nonRoadEventInformationExtension;
        return $this;
    }


}

