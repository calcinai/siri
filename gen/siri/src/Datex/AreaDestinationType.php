<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AreaDestinationType
 *
 * The specification of the destination of a defined route or itinerary which is an area.
 * XSD Type: AreaDestination
 */
class AreaDestinationType extends DestinationType
{

    /**
     * @property \Calcinai\Siri\Datex\AreaType $area
     */
    private $area = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $areaDestinationExtension
     */
    private $areaDestinationExtension = null;

    /**
     * Gets as area
     *
     * @return \Calcinai\Siri\Datex\AreaType
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * @param \Calcinai\Siri\Datex\AreaType $area
     * @return self
     */
    public function setArea(\Calcinai\Siri\Datex\AreaType $area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * Gets as areaDestinationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAreaDestinationExtension()
    {
        return $this->areaDestinationExtension;
    }

    /**
     * Sets a new areaDestinationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $areaDestinationExtension
     * @return self
     */
    public function setAreaDestinationExtension(\Calcinai\Siri\Datex\ExtensionType $areaDestinationExtension)
    {
        $this->areaDestinationExtension = $areaDestinationExtension;
        return $this;
    }


}

