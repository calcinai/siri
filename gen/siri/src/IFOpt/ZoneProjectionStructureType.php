<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing ZoneProjectionStructureType
 *
 * Type for Projection as a geospatial zone.
 * XSD Type: ZoneProjectionStructure
 */
class ZoneProjectionStructureType extends AbstractProjectionType
{

    /**
     * Boundary line of Zone as an ordered set of points
     *
     * @property \Calcinai\Siri\Objects\IFOpt\PointProjection[] $boundary
     */
    private $boundary = null;

    /**
     * Adds as pointProjection
     *
     * Boundary line of Zone as an ordered set of points
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection
     */
    public function addToBoundary(\Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection)
    {
        $this->boundary[] = $pointProjection;
        return $this;
    }

    /**
     * isset boundary
     *
     * Boundary line of Zone as an ordered set of points
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBoundary($index)
    {
        return isset($this->boundary[$index]);
    }

    /**
     * unset boundary
     *
     * Boundary line of Zone as an ordered set of points
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBoundary($index)
    {
        unset($this->boundary[$index]);
    }

    /**
     * Gets as boundary
     *
     * Boundary line of Zone as an ordered set of points
     *
     * @return \Calcinai\Siri\Objects\IFOpt\PointProjection[]
     */
    public function getBoundary()
    {
        return $this->boundary;
    }

    /**
     * Sets a new boundary
     *
     * Boundary line of Zone as an ordered set of points
     *
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection[] $boundary
     * @return self
     */
    public function setBoundary(array $boundary)
    {
        $this->boundary = $boundary;
        return $this;
    }


}

