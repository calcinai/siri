<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing SupplementaryPositionalDescriptionType
 *
 * A collection of supplementary positional information which improves the precision of the location.
 * XSD Type: SupplementaryPositionalDescription
 */
class SupplementaryPositionalDescriptionType
{

    /**
     * Indicates the section of carriageway to which the location relates.
     *
     * @property string[] $carriageway
     */
    private $carriageway = [
        
    ];

    /**
     * Indicates whether the pedestrian footpath is the subject or part of the subject of the location. (True = footpath is subject)
     *
     * @property bool $footpath
     */
    private $footpath = null;

    /**
     * Indicates the specific lane to which the location relates.
     *
     * @property string[] $lanes
     */
    private $lanes = [
        
    ];

    /**
     * This indicates the length of road measured in metres affected by the associated traffic element.
     *
     * @property float $lengthAffected
     */
    private $lengthAffected = null;

    /**
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @property string[] $locationDescriptor
     */
    private $locationDescriptor = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $supplementaryPositionalDescriptionExtension
     */
    private $supplementaryPositionalDescriptionExtension = null;

    /**
     * Adds as carriageway
     *
     * Indicates the section of carriageway to which the location relates.
     *
     * @return self
     * @param string $carriageway
     */
    public function addToCarriageway($carriageway)
    {
        $this->carriageway[] = $carriageway;
        return $this;
    }

    /**
     * isset carriageway
     *
     * Indicates the section of carriageway to which the location relates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarriageway($index)
    {
        return isset($this->carriageway[$index]);
    }

    /**
     * unset carriageway
     *
     * Indicates the section of carriageway to which the location relates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarriageway($index)
    {
        unset($this->carriageway[$index]);
    }

    /**
     * Gets as carriageway
     *
     * Indicates the section of carriageway to which the location relates.
     *
     * @return string[]
     */
    public function getCarriageway()
    {
        return $this->carriageway;
    }

    /**
     * Sets a new carriageway
     *
     * Indicates the section of carriageway to which the location relates.
     *
     * @param string $carriageway
     * @return self
     */
    public function setCarriageway(array $carriageway)
    {
        $this->carriageway = $carriageway;
        return $this;
    }

    /**
     * Gets as footpath
     *
     * Indicates whether the pedestrian footpath is the subject or part of the subject of the location. (True = footpath is subject)
     *
     * @return bool
     */
    public function getFootpath()
    {
        return $this->footpath;
    }

    /**
     * Sets a new footpath
     *
     * Indicates whether the pedestrian footpath is the subject or part of the subject of the location. (True = footpath is subject)
     *
     * @param bool $footpath
     * @return self
     */
    public function setFootpath($footpath)
    {
        $this->footpath = $footpath;
        return $this;
    }

    /**
     * Adds as lanes
     *
     * Indicates the specific lane to which the location relates.
     *
     * @return self
     * @param string $lanes
     */
    public function addToLanes($lanes)
    {
        $this->lanes[] = $lanes;
        return $this;
    }

    /**
     * isset lanes
     *
     * Indicates the specific lane to which the location relates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanes($index)
    {
        return isset($this->lanes[$index]);
    }

    /**
     * unset lanes
     *
     * Indicates the specific lane to which the location relates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanes($index)
    {
        unset($this->lanes[$index]);
    }

    /**
     * Gets as lanes
     *
     * Indicates the specific lane to which the location relates.
     *
     * @return string[]
     */
    public function getLanes()
    {
        return $this->lanes;
    }

    /**
     * Sets a new lanes
     *
     * Indicates the specific lane to which the location relates.
     *
     * @param string $lanes
     * @return self
     */
    public function setLanes(array $lanes)
    {
        $this->lanes = $lanes;
        return $this;
    }

    /**
     * Gets as lengthAffected
     *
     * This indicates the length of road measured in metres affected by the associated traffic element.
     *
     * @return float
     */
    public function getLengthAffected()
    {
        return $this->lengthAffected;
    }

    /**
     * Sets a new lengthAffected
     *
     * This indicates the length of road measured in metres affected by the associated traffic element.
     *
     * @param float $lengthAffected
     * @return self
     */
    public function setLengthAffected($lengthAffected)
    {
        $this->lengthAffected = $lengthAffected;
        return $this;
    }

    /**
     * Adds as locationDescriptor
     *
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @return self
     * @param string $locationDescriptor
     */
    public function addToLocationDescriptor($locationDescriptor)
    {
        $this->locationDescriptor[] = $locationDescriptor;
        return $this;
    }

    /**
     * isset locationDescriptor
     *
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationDescriptor($index)
    {
        return isset($this->locationDescriptor[$index]);
    }

    /**
     * unset locationDescriptor
     *
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationDescriptor($index)
    {
        unset($this->locationDescriptor[$index]);
    }

    /**
     * Gets as locationDescriptor
     *
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @return string[]
     */
    public function getLocationDescriptor()
    {
        return $this->locationDescriptor;
    }

    /**
     * Sets a new locationDescriptor
     *
     * Specifies a descriptor which helps to identify the specific location.
     *
     * @param string $locationDescriptor
     * @return self
     */
    public function setLocationDescriptor(array $locationDescriptor)
    {
        $this->locationDescriptor = $locationDescriptor;
        return $this;
    }

    /**
     * Gets as supplementaryPositionalDescriptionExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getSupplementaryPositionalDescriptionExtension()
    {
        return $this->supplementaryPositionalDescriptionExtension;
    }

    /**
     * Sets a new supplementaryPositionalDescriptionExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $supplementaryPositionalDescriptionExtension
     * @return self
     */
    public function setSupplementaryPositionalDescriptionExtension(\Calcinai\Siri\Datex\ExtensionType $supplementaryPositionalDescriptionExtension)
    {
        $this->supplementaryPositionalDescriptionExtension = $supplementaryPositionalDescriptionExtension;
        return $this;
    }


}

