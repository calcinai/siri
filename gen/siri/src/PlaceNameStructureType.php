<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PlaceNameStructureType
 *
 * Names of via points, used to help identify the line, for example, Luton to Luton via Sutton. Currently 3 in VDV. Should only be included if the detail level was requested.
 * XSD Type: PlaceNameStructure
 */
class PlaceNameStructureType
{

    /**
     * Identifier of place.
     *
     * @property string $placeRef
     */
    private $placeRef = null;

    /**
     * Names of place used to help identify the line,
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $placeName
     */
    private $placeName = null;

    /**
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType[] $placeShortName
     */
    private $placeShortName = [
        
    ];

    /**
     * Gets as placeRef
     *
     * Identifier of place.
     *
     * @return string
     */
    public function getPlaceRef()
    {
        return $this->placeRef;
    }

    /**
     * Sets a new placeRef
     *
     * Identifier of place.
     *
     * @param string $placeRef
     * @return self
     */
    public function setPlaceRef($placeRef)
    {
        $this->placeRef = $placeRef;
        return $this;
    }

    /**
     * Gets as placeName
     *
     * Names of place used to help identify the line,
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Sets a new placeName
     *
     * Names of place used to help identify the line,
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $placeName
     * @return self
     */
    public function setPlaceName(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $placeName)
    {
        $this->placeName = $placeName;
        return $this;
    }

    /**
     * Adds as placeShortName
     *
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $placeShortName
     */
    public function addToPlaceShortName(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $placeShortName)
    {
        $this->placeShortName[] = $placeShortName;
        return $this;
    }

    /**
     * isset placeShortName
     *
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlaceShortName($index)
    {
        return isset($this->placeShortName[$index]);
    }

    /**
     * unset placeShortName
     *
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlaceShortName($index)
    {
        unset($this->placeShortName[$index]);
    }

    /**
     * Gets as placeShortName
     *
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType[]
     */
    public function getPlaceShortName()
    {
        return $this->placeShortName;
    }

    /**
     * Sets a new placeShortName
     *
     * Short name of point. Should only be included if the detail level was requested.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType[] $placeShortName
     * @return self
     */
    public function setPlaceShortName(array $placeShortName)
    {
        $this->placeShortName = $placeShortName;
        return $this;
    }


}

