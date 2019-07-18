<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing GroupOfLocationsByReferenceType
 *
 * A group of locations defined by reference to a predefined set of locations.
 * XSD Type: GroupOfLocationsByReference
 */
class GroupOfLocationsByReferenceType extends GroupOfLocationsType
{

    /**
     * A reference to a predefined location set.
     *
     * @property string $predefinedLocationSetReference
     */
    private $predefinedLocationSetReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $groupOfLocationsByReferenceExtension
     */
    private $groupOfLocationsByReferenceExtension = null;

    /**
     * Gets as predefinedLocationSetReference
     *
     * A reference to a predefined location set.
     *
     * @return string
     */
    public function getPredefinedLocationSetReference()
    {
        return $this->predefinedLocationSetReference;
    }

    /**
     * Sets a new predefinedLocationSetReference
     *
     * A reference to a predefined location set.
     *
     * @param string $predefinedLocationSetReference
     * @return self
     */
    public function setPredefinedLocationSetReference($predefinedLocationSetReference)
    {
        $this->predefinedLocationSetReference = $predefinedLocationSetReference;
        return $this;
    }

    /**
     * Gets as groupOfLocationsByReferenceExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getGroupOfLocationsByReferenceExtension()
    {
        return $this->groupOfLocationsByReferenceExtension;
    }

    /**
     * Sets a new groupOfLocationsByReferenceExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $groupOfLocationsByReferenceExtension
     * @return self
     */
    public function setGroupOfLocationsByReferenceExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $groupOfLocationsByReferenceExtension)
    {
        $this->groupOfLocationsByReferenceExtension = $groupOfLocationsByReferenceExtension;
        return $this;
    }


}

