<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedStopPointStructureType
 *
 * Type for a Affected stop.
 * XSD Type: AffectedStopPointStructure
 */
class AffectedStopPointStructureType
{

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * Alternative private code of stop
     *
     * @property string $privateRef
     */
    private $privateRef = null;

    /**
     * @property \Calcinai\Siri\StopPointName $stopPointName
     */
    private $stopPointName = null;

    /**
     * Type of stop type. Normally implicit in vehicle mode. TPEG table pti 17_4
     *
     * @property string $stopPointType
     */
    private $stopPointType = null;

    /**
     * Spatial coordinates of Stop point. Derivable from StopRef
     *
     * @property \Calcinai\Siri\LocationStructureType $location
     */
    private $location = null;

    /**
     * Modes affected within station/stop. If not specified, assume all modes of that station.
     *
     * @property \Calcinai\Siri\AffectedModesStructureType $affectedModes
     */
    private $affectedModes = null;

    /**
     * Identifier of Locality of stop (In UK NPtg Locality Code). Derivable from StopRef
     *
     * @property string $placeRef
     */
    private $placeRef = null;

    /**
     * Name of locality in which stop is found. Derivable from LocalityRef.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $placeName
     */
    private $placeName = null;

    /**
     * @property \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     */
    private $accessibilityAssessment = null;

    /**
     * Connections links from stop
     *
     * @property \Calcinai\Siri\AffectedConnectionLinkStructureType[] $connectionLinks
     */
    private $connectionLinks = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as privateRef
     *
     * Alternative private code of stop
     *
     * @return string
     */
    public function getPrivateRef()
    {
        return $this->privateRef;
    }

    /**
     * Sets a new privateRef
     *
     * Alternative private code of stop
     *
     * @param string $privateRef
     * @return self
     */
    public function setPrivateRef($privateRef)
    {
        $this->privateRef = $privateRef;
        return $this;
    }

    /**
     * Gets as stopPointName
     *
     * @return \Calcinai\Siri\StopPointName
     */
    public function getStopPointName()
    {
        return $this->stopPointName;
    }

    /**
     * Sets a new stopPointName
     *
     * @param \Calcinai\Siri\StopPointName $stopPointName
     * @return self
     */
    public function setStopPointName(\Calcinai\Siri\StopPointName $stopPointName)
    {
        $this->stopPointName = $stopPointName;
        return $this;
    }

    /**
     * Gets as stopPointType
     *
     * Type of stop type. Normally implicit in vehicle mode. TPEG table pti 17_4
     *
     * @return string
     */
    public function getStopPointType()
    {
        return $this->stopPointType;
    }

    /**
     * Sets a new stopPointType
     *
     * Type of stop type. Normally implicit in vehicle mode. TPEG table pti 17_4
     *
     * @param string $stopPointType
     * @return self
     */
    public function setStopPointType($stopPointType)
    {
        $this->stopPointType = $stopPointType;
        return $this;
    }

    /**
     * Gets as location
     *
     * Spatial coordinates of Stop point. Derivable from StopRef
     *
     * @return \Calcinai\Siri\LocationStructureType
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
     * @param \Calcinai\Siri\LocationStructureType $location
     * @return self
     */
    public function setLocation(\Calcinai\Siri\LocationStructureType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as affectedModes
     *
     * Modes affected within station/stop. If not specified, assume all modes of that station.
     *
     * @return \Calcinai\Siri\AffectedModesStructureType
     */
    public function getAffectedModes()
    {
        return $this->affectedModes;
    }

    /**
     * Sets a new affectedModes
     *
     * Modes affected within station/stop. If not specified, assume all modes of that station.
     *
     * @param \Calcinai\Siri\AffectedModesStructureType $affectedModes
     * @return self
     */
    public function setAffectedModes(\Calcinai\Siri\AffectedModesStructureType $affectedModes)
    {
        $this->affectedModes = $affectedModes;
        return $this;
    }

    /**
     * Gets as placeRef
     *
     * Identifier of Locality of stop (In UK NPtg Locality Code). Derivable from StopRef
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
     * Identifier of Locality of stop (In UK NPtg Locality Code). Derivable from StopRef
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
     * Name of locality in which stop is found. Derivable from LocalityRef.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Sets a new placeName
     *
     * Name of locality in which stop is found. Derivable from LocalityRef.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $placeName
     * @return self
     */
    public function setPlaceName(\Calcinai\Siri\NaturalLanguageStringStructureType $placeName)
    {
        $this->placeName = $placeName;
        return $this;
    }

    /**
     * Gets as accessibilityAssessment
     *
     * @return \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType
     */
    public function getAccessibilityAssessment()
    {
        return $this->accessibilityAssessment;
    }

    /**
     * Sets a new accessibilityAssessment
     *
     * @param \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     * @return self
     */
    public function setAccessibilityAssessment(\Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment)
    {
        $this->accessibilityAssessment = $accessibilityAssessment;
        return $this;
    }

    /**
     * Adds as affectedConnectionLink
     *
     * Connections links from stop
     *
     * @return self
     * @param \Calcinai\Siri\AffectedConnectionLinkStructureType $affectedConnectionLink
     */
    public function addToConnectionLinks(\Calcinai\Siri\AffectedConnectionLinkStructureType $affectedConnectionLink)
    {
        $this->connectionLinks[] = $affectedConnectionLink;
        return $this;
    }

    /**
     * isset connectionLinks
     *
     * Connections links from stop
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLinks($index)
    {
        return isset($this->connectionLinks[$index]);
    }

    /**
     * unset connectionLinks
     *
     * Connections links from stop
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLinks($index)
    {
        unset($this->connectionLinks[$index]);
    }

    /**
     * Gets as connectionLinks
     *
     * Connections links from stop
     *
     * @return \Calcinai\Siri\AffectedConnectionLinkStructureType[]
     */
    public function getConnectionLinks()
    {
        return $this->connectionLinks;
    }

    /**
     * Sets a new connectionLinks
     *
     * Connections links from stop
     *
     * @param \Calcinai\Siri\AffectedConnectionLinkStructureType[] $connectionLinks
     * @return self
     */
    public function setConnectionLinks(array $connectionLinks)
    {
        $this->connectionLinks = $connectionLinks;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

