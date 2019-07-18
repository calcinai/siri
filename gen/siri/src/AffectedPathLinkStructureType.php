<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedPathLinkStructureType
 *
 * Information about a connection link from a given stop.
 * XSD Type: AffectedPathLinkStructure
 */
class AffectedPathLinkStructureType
{

    /**
     * Identifier of link
     *
     * @property string[] $linkRef
     */
    private $linkRef = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $linkName
     */
    private $linkName = null;

    /**
     * Nature of link
     *
     * @property string $accessibilityFeature
     */
    private $accessibilityFeature = null;

    /**
     * Description of a direction.
     *
     * @property string[] $linkDirection
     */
    private $linkDirection = [
        
    ];

    /**
     * GIs projection of Section. NB Line here means Geometry Polyline, not Transmodel Transport Line
     *
     * @property \Calcinai\Siri\Objects\IFOpt\LinkProjectionStructureType $linkProjection
     */
    private $linkProjection = null;

    /**
     * Offset from start or end of section to use when projecting.
     *
     * @property \Calcinai\Siri\Objects\OffsetStructureType $offset
     */
    private $offset = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as linkRef
     *
     * Identifier of link
     *
     * @return self
     * @param string $linkRef
     */
    public function addToLinkRef($linkRef)
    {
        $this->linkRef[] = $linkRef;
        return $this;
    }

    /**
     * isset linkRef
     *
     * Identifier of link
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkRef($index)
    {
        return isset($this->linkRef[$index]);
    }

    /**
     * unset linkRef
     *
     * Identifier of link
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkRef($index)
    {
        unset($this->linkRef[$index]);
    }

    /**
     * Gets as linkRef
     *
     * Identifier of link
     *
     * @return string[]
     */
    public function getLinkRef()
    {
        return $this->linkRef;
    }

    /**
     * Sets a new linkRef
     *
     * Identifier of link
     *
     * @param string[] $linkRef
     * @return self
     */
    public function setLinkRef(array $linkRef)
    {
        $this->linkRef = $linkRef;
        return $this;
    }

    /**
     * Gets as linkName
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getLinkName()
    {
        return $this->linkName;
    }

    /**
     * Sets a new linkName
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $linkName
     * @return self
     */
    public function setLinkName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }

    /**
     * Gets as accessibilityFeature
     *
     * Nature of link
     *
     * @return string
     */
    public function getAccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    /**
     * Sets a new accessibilityFeature
     *
     * Nature of link
     *
     * @param string $accessibilityFeature
     * @return self
     */
    public function setAccessibilityFeature($accessibilityFeature)
    {
        $this->accessibilityFeature = $accessibilityFeature;
        return $this;
    }

    /**
     * Adds as linkDirection
     *
     * Description of a direction.
     *
     * @return self
     * @param string $linkDirection
     */
    public function addToLinkDirection($linkDirection)
    {
        $this->linkDirection[] = $linkDirection;
        return $this;
    }

    /**
     * isset linkDirection
     *
     * Description of a direction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkDirection($index)
    {
        return isset($this->linkDirection[$index]);
    }

    /**
     * unset linkDirection
     *
     * Description of a direction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkDirection($index)
    {
        unset($this->linkDirection[$index]);
    }

    /**
     * Gets as linkDirection
     *
     * Description of a direction.
     *
     * @return string[]
     */
    public function getLinkDirection()
    {
        return $this->linkDirection;
    }

    /**
     * Sets a new linkDirection
     *
     * Description of a direction.
     *
     * @param string[] $linkDirection
     * @return self
     */
    public function setLinkDirection(array $linkDirection)
    {
        $this->linkDirection = $linkDirection;
        return $this;
    }

    /**
     * Gets as linkProjection
     *
     * GIs projection of Section. NB Line here means Geometry Polyline, not Transmodel Transport Line
     *
     * @return \Calcinai\Siri\Objects\IFOpt\LinkProjectionStructureType
     */
    public function getLinkProjection()
    {
        return $this->linkProjection;
    }

    /**
     * Sets a new linkProjection
     *
     * GIs projection of Section. NB Line here means Geometry Polyline, not Transmodel Transport Line
     *
     * @param \Calcinai\Siri\Objects\IFOpt\LinkProjectionStructureType $linkProjection
     * @return self
     */
    public function setLinkProjection(\Calcinai\Siri\Objects\IFOpt\LinkProjectionStructureType $linkProjection)
    {
        $this->linkProjection = $linkProjection;
        return $this;
    }

    /**
     * Gets as offset
     *
     * Offset from start or end of section to use when projecting.
     *
     * @return \Calcinai\Siri\Objects\OffsetStructureType
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * Offset from start or end of section to use when projecting.
     *
     * @param \Calcinai\Siri\Objects\OffsetStructureType $offset
     * @return self
     */
    public function setOffset(\Calcinai\Siri\Objects\OffsetStructureType $offset)
    {
        $this->offset = $offset;
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

