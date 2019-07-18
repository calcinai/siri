<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedSectionStructureType
 *
 * Type for information about the sectons affected by an Situation
 * XSD Type: AffectedSectionStructure
 */
class AffectedSectionStructureType
{

    /**
     * Identifier of of section of line affected
     *
     * @property string $sectionRef
     */
    private $sectionRef = null;

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
     * Gets as sectionRef
     *
     * Identifier of of section of line affected
     *
     * @return string
     */
    public function getSectionRef()
    {
        return $this->sectionRef;
    }

    /**
     * Sets a new sectionRef
     *
     * Identifier of of section of line affected
     *
     * @param string $sectionRef
     * @return self
     */
    public function setSectionRef($sectionRef)
    {
        $this->sectionRef = $sectionRef;
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

