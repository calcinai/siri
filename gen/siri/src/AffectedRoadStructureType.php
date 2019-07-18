<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedRoadStructureType
 *
 * Type for Raod scope for scope of situation or effect.
 * XSD Type: AffectedRoadStructure
 */
class AffectedRoadStructureType
{

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointLinearType $road
     */
    private $road = null;

    /**
     * GIs projection of Section. NB Line here means Geometry Polyline, not Transmodel Transport Line
     *
     * @property \Calcinai\Siri\IFOpt\LinkProjectionStructureType $linkProjection
     */
    private $linkProjection = null;

    /**
     * Offset from start or end of section to use when projecting.
     *
     * @property \Calcinai\Siri\OffsetStructureType $offset
     */
    private $offset = null;

    /**
     * Gets as road
     *
     * @return \Calcinai\Siri\Datex\ReferencePointLinearType
     */
    public function getRoad()
    {
        return $this->road;
    }

    /**
     * Sets a new road
     *
     * @param \Calcinai\Siri\Datex\ReferencePointLinearType $road
     * @return self
     */
    public function setRoad(\Calcinai\Siri\Datex\ReferencePointLinearType $road)
    {
        $this->road = $road;
        return $this;
    }

    /**
     * Gets as linkProjection
     *
     * GIs projection of Section. NB Line here means Geometry Polyline, not Transmodel Transport Line
     *
     * @return \Calcinai\Siri\IFOpt\LinkProjectionStructureType
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
     * @param \Calcinai\Siri\IFOpt\LinkProjectionStructureType $linkProjection
     * @return self
     */
    public function setLinkProjection(\Calcinai\Siri\IFOpt\LinkProjectionStructureType $linkProjection)
    {
        $this->linkProjection = $linkProjection;
        return $this;
    }

    /**
     * Gets as offset
     *
     * Offset from start or end of section to use when projecting.
     *
     * @return \Calcinai\Siri\OffsetStructureType
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
     * @param \Calcinai\Siri\OffsetStructureType $offset
     * @return self
     */
    public function setOffset(\Calcinai\Siri\OffsetStructureType $offset)
    {
        $this->offset = $offset;
        return $this;
    }


}

