<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedPlaceStructureType
 *
 * Type for annotated references to a place.
 * XSD Type: AffectedPlaceStructure
 */
class AffectedPlaceStructureType
{

    /**
     * Identifier of Topographic Locality In UK NPtg Locality Code.
     *
     * @property string $placeRef
     */
    private $placeRef = null;

    /**
     * Alternative Identfiier code of Place
     *
     * @property string $privateCode
     */
    private $privateCode = null;

    /**
     * Name o topographicf locality in which stop is found. Derivable from LocalityRef.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName
     */
    private $placeName = null;

    /**
     * Spatial coordinates of Stop point. Derivable from StopRef
     *
     * @property \Calcinai\Siri\Objects\LocationStructureType $location
     */
    private $location = null;

    /**
     * Category of place
     *
     * @property string $placeCategory
     */
    private $placeCategory = null;

    /**
     * identifier of equipment at location.
     *
     * @property string[] $equipmentRef
     */
    private $equipmentRef = [
        
    ];

    /**
     * Achanges to accessibility for place
     *
     * @property \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     */
    private $accessibilityAssessment = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as placeRef
     *
     * Identifier of Topographic Locality In UK NPtg Locality Code.
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
     * Identifier of Topographic Locality In UK NPtg Locality Code.
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
     * Gets as privateCode
     *
     * Alternative Identfiier code of Place
     *
     * @return string
     */
    public function getPrivateCode()
    {
        return $this->privateCode;
    }

    /**
     * Sets a new privateCode
     *
     * Alternative Identfiier code of Place
     *
     * @param string $privateCode
     * @return self
     */
    public function setPrivateCode($privateCode)
    {
        $this->privateCode = $privateCode;
        return $this;
    }

    /**
     * Gets as placeName
     *
     * Name o topographicf locality in which stop is found. Derivable from LocalityRef.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Sets a new placeName
     *
     * Name o topographicf locality in which stop is found. Derivable from LocalityRef.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName
     * @return self
     */
    public function setPlaceName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName)
    {
        $this->placeName = $placeName;
        return $this;
    }

    /**
     * Gets as location
     *
     * Spatial coordinates of Stop point. Derivable from StopRef
     *
     * @return \Calcinai\Siri\Objects\LocationStructureType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Spatial coordinates of Stop point. Derivable from StopRef
     *
     * @param \Calcinai\Siri\Objects\LocationStructureType $location
     * @return self
     */
    public function setLocation(\Calcinai\Siri\Objects\LocationStructureType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as placeCategory
     *
     * Category of place
     *
     * @return string
     */
    public function getPlaceCategory()
    {
        return $this->placeCategory;
    }

    /**
     * Sets a new placeCategory
     *
     * Category of place
     *
     * @param string $placeCategory
     * @return self
     */
    public function setPlaceCategory($placeCategory)
    {
        $this->placeCategory = $placeCategory;
        return $this;
    }

    /**
     * Adds as equipmentRef
     *
     * identifier of equipment at location.
     *
     * @return self
     * @param string $equipmentRef
     */
    public function addToEquipmentRef($equipmentRef)
    {
        $this->equipmentRef[] = $equipmentRef;
        return $this;
    }

    /**
     * isset equipmentRef
     *
     * identifier of equipment at location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipmentRef($index)
    {
        return isset($this->equipmentRef[$index]);
    }

    /**
     * unset equipmentRef
     *
     * identifier of equipment at location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipmentRef($index)
    {
        unset($this->equipmentRef[$index]);
    }

    /**
     * Gets as equipmentRef
     *
     * identifier of equipment at location.
     *
     * @return string[]
     */
    public function getEquipmentRef()
    {
        return $this->equipmentRef;
    }

    /**
     * Sets a new equipmentRef
     *
     * identifier of equipment at location.
     *
     * @param string[] $equipmentRef
     * @return self
     */
    public function setEquipmentRef(array $equipmentRef)
    {
        $this->equipmentRef = $equipmentRef;
        return $this;
    }

    /**
     * Gets as accessibilityAssessment
     *
     * Achanges to accessibility for place
     *
     * @return \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType
     */
    public function getAccessibilityAssessment()
    {
        return $this->accessibilityAssessment;
    }

    /**
     * Sets a new accessibilityAssessment
     *
     * Achanges to accessibility for place
     *
     * @param \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     * @return self
     */
    public function setAccessibilityAssessment(\Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment)
    {
        $this->accessibilityAssessment = $accessibilityAssessment;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

