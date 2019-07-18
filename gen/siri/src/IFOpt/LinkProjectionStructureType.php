<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing LinkProjectionStructureType
 *
 * Type for Projection as a geospatial polyline.
 * XSD Type: LinkProjectionStructure
 */
class LinkProjectionStructureType extends AbstractProjectionType
{

    /**
     * Ordered sequence of points. There must always be a start and end point
     *
     * @property \Calcinai\Siri\Objects\IFOpt\PointProjection[] $line
     */
    private $line = null;

    /**
     * Adds as pointProjection
     *
     * Ordered sequence of points. There must always be a start and end point
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection
     */
    public function addToLine(\Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection)
    {
        $this->line[] = $pointProjection;
        return $this;
    }

    /**
     * isset line
     *
     * Ordered sequence of points. There must always be a start and end point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLine($index)
    {
        return isset($this->line[$index]);
    }

    /**
     * unset line
     *
     * Ordered sequence of points. There must always be a start and end point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLine($index)
    {
        unset($this->line[$index]);
    }

    /**
     * Gets as line
     *
     * Ordered sequence of points. There must always be a start and end point
     *
     * @return \Calcinai\Siri\Objects\IFOpt\PointProjection[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * Ordered sequence of points. There must always be a start and end point
     *
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection[] $line
     * @return self
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }


}

