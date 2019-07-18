<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing LocationByReferenceType
 *
 * A location defined by reference to a predefined location.
 * XSD Type: LocationByReference
 */
class LocationByReferenceType extends LocationType
{

    /**
     * A reference to a predefined location.
     *
     * @property string $predefinedLocationReference
     */
    private $predefinedLocationReference = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $locationByReferenceExtension
     */
    private $locationByReferenceExtension = null;

    /**
     * Gets as predefinedLocationReference
     *
     * A reference to a predefined location.
     *
     * @return string
     */
    public function getPredefinedLocationReference()
    {
        return $this->predefinedLocationReference;
    }

    /**
     * Sets a new predefinedLocationReference
     *
     * A reference to a predefined location.
     *
     * @param string $predefinedLocationReference
     * @return self
     */
    public function setPredefinedLocationReference($predefinedLocationReference)
    {
        $this->predefinedLocationReference = $predefinedLocationReference;
        return $this;
    }

    /**
     * Gets as locationByReferenceExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getLocationByReferenceExtension()
    {
        return $this->locationByReferenceExtension;
    }

    /**
     * Sets a new locationByReferenceExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $locationByReferenceExtension
     * @return self
     */
    public function setLocationByReferenceExtension(\Calcinai\Siri\Datex\ExtensionType $locationByReferenceExtension)
    {
        $this->locationByReferenceExtension = $locationByReferenceExtension;
        return $this;
    }


}

