<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PredefinedLocationSetType
 *
 * An identifiable instance of a single set of predefined locations.
 * XSD Type: PredefinedLocationSet
 */
class PredefinedLocationSetType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * A name assigned to a set of predefined locations.
     *
     * @property \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType\PredefinedLocationSetNameAType\ValueAType[] $predefinedLocationSetName
     */
    private $predefinedLocationSetName = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PredefinedLocationType[] $predefinedLocation
     */
    private $predefinedLocation = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationSetExtension
     */
    private $predefinedLocationSetExtension = null;

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
     * A name assigned to a set of predefined locations.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType\PredefinedLocationSetNameAType\ValueAType $value
     */
    public function addToPredefinedLocationSetName(\Calcinai\Siri\Objects\Datex\PredefinedLocationSetType\PredefinedLocationSetNameAType\ValueAType $value)
    {
        $this->predefinedLocationSetName[] = $value;
        return $this;
    }

    /**
     * isset predefinedLocationSetName
     *
     * A name assigned to a set of predefined locations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPredefinedLocationSetName($index)
    {
        return isset($this->predefinedLocationSetName[$index]);
    }

    /**
     * unset predefinedLocationSetName
     *
     * A name assigned to a set of predefined locations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPredefinedLocationSetName($index)
    {
        unset($this->predefinedLocationSetName[$index]);
    }

    /**
     * Gets as predefinedLocationSetName
     *
     * A name assigned to a set of predefined locations.
     *
     * @return \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType\PredefinedLocationSetNameAType\ValueAType[]
     */
    public function getPredefinedLocationSetName()
    {
        return $this->predefinedLocationSetName;
    }

    /**
     * Sets a new predefinedLocationSetName
     *
     * A name assigned to a set of predefined locations.
     *
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType\PredefinedLocationSetNameAType\ValueAType[] $predefinedLocationSetName
     * @return self
     */
    public function setPredefinedLocationSetName(array $predefinedLocationSetName)
    {
        $this->predefinedLocationSetName = $predefinedLocationSetName;
        return $this;
    }

    /**
     * Adds as predefinedLocation
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationType $predefinedLocation
     */
    public function addToPredefinedLocation(\Calcinai\Siri\Objects\Datex\PredefinedLocationType $predefinedLocation)
    {
        $this->predefinedLocation[] = $predefinedLocation;
        return $this;
    }

    /**
     * isset predefinedLocation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPredefinedLocation($index)
    {
        return isset($this->predefinedLocation[$index]);
    }

    /**
     * unset predefinedLocation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPredefinedLocation($index)
    {
        unset($this->predefinedLocation[$index]);
    }

    /**
     * Gets as predefinedLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\PredefinedLocationType[]
     */
    public function getPredefinedLocation()
    {
        return $this->predefinedLocation;
    }

    /**
     * Sets a new predefinedLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationType[] $predefinedLocation
     * @return self
     */
    public function setPredefinedLocation(array $predefinedLocation)
    {
        $this->predefinedLocation = $predefinedLocation;
        return $this;
    }

    /**
     * Gets as predefinedLocationSetExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPredefinedLocationSetExtension()
    {
        return $this->predefinedLocationSetExtension;
    }

    /**
     * Sets a new predefinedLocationSetExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationSetExtension
     * @return self
     */
    public function setPredefinedLocationSetExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationSetExtension)
    {
        $this->predefinedLocationSetExtension = $predefinedLocationSetExtension;
        return $this;
    }


}

