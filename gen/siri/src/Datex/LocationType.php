<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing LocationType
 *
 * The specification of a location either on a network (as a point or a linear location) or as an area. This may be provided in one or more referencing systems.
 * XSD Type: Location
 */
class LocationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $locationExtension
     */
    private $locationExtension = null;

    /**
     * Gets as locationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getLocationExtension()
    {
        return $this->locationExtension;
    }

    /**
     * Sets a new locationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $locationExtension
     * @return self
     */
    public function setLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $locationExtension)
    {
        $this->locationExtension = $locationExtension;
        return $this;
    }


}

