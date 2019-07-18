<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PredefinedLocationType
 *
 * An identifiable instance of a single predefined location.
 * XSD Type: PredefinedLocation
 */
class PredefinedLocationType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @property \Calcinai\Siri\Objects\Datex\PredefinedLocationType\PredefinedLocationNameAType\ValueAType[] $predefinedLocationName
     */
    private $predefinedLocationName = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\LocationType $predefinedLocation
     */
    private $predefinedLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationExtension
     */
    private $predefinedLocationExtension = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as value
     *
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationType\PredefinedLocationNameAType\ValueAType $value
     */
    public function addToPredefinedLocationName(\Calcinai\Siri\Objects\Datex\PredefinedLocationType\PredefinedLocationNameAType\ValueAType $value)
    {
        $this->predefinedLocationName[] = $value;
        return $this;
    }

    /**
     * isset predefinedLocationName
     *
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPredefinedLocationName($index)
    {
        return isset($this->predefinedLocationName[$index]);
    }

    /**
     * unset predefinedLocationName
     *
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPredefinedLocationName($index)
    {
        unset($this->predefinedLocationName[$index]);
    }

    /**
     * Gets as predefinedLocationName
     *
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @return \Calcinai\Siri\Objects\Datex\PredefinedLocationType\PredefinedLocationNameAType\ValueAType[]
     */
    public function getPredefinedLocationName()
    {
        return $this->predefinedLocationName;
    }

    /**
     * Sets a new predefinedLocationName
     *
     * A name of assigned to a predefined location (e.g. extracted out of the network operator's gazetteer).
     *
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationType\PredefinedLocationNameAType\ValueAType[] $predefinedLocationName
     * @return self
     */
    public function setPredefinedLocationName(array $predefinedLocationName)
    {
        $this->predefinedLocationName = $predefinedLocationName;
        return $this;
    }

    /**
     * Gets as predefinedLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\LocationType
     */
    public function getPredefinedLocation()
    {
        return $this->predefinedLocation;
    }

    /**
     * Sets a new predefinedLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\LocationType $predefinedLocation
     * @return self
     */
    public function setPredefinedLocation(\Calcinai\Siri\Objects\Datex\LocationType $predefinedLocation)
    {
        $this->predefinedLocation = $predefinedLocation;
        return $this;
    }

    /**
     * Gets as predefinedLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPredefinedLocationExtension()
    {
        return $this->predefinedLocationExtension;
    }

    /**
     * Sets a new predefinedLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationExtension
     * @return self
     */
    public function setPredefinedLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationExtension)
    {
        $this->predefinedLocationExtension = $predefinedLocationExtension;
        return $this;
    }


}

