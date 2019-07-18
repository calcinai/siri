<?php

namespace Calcinai\Siri\Objects\IFOpt\LinkProjectionStructureType;

/**
 * Class representing LineAType
 */
class LineAType
{

    /**
     * @property \Calcinai\Siri\Objects\IFOpt\PointProjection[] $pointProjection
     */
    private $pointProjection = [
        
    ];

    /**
     * Adds as pointProjection
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection
     */
    public function addToPointProjection(\Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection)
    {
        $this->pointProjection[] = $pointProjection;
        return $this;
    }

    /**
     * isset pointProjection
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPointProjection($index)
    {
        return isset($this->pointProjection[$index]);
    }

    /**
     * unset pointProjection
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPointProjection($index)
    {
        unset($this->pointProjection[$index]);
    }

    /**
     * Gets as pointProjection
     *
     * @return \Calcinai\Siri\Objects\IFOpt\PointProjection[]
     */
    public function getPointProjection()
    {
        return $this->pointProjection;
    }

    /**
     * Sets a new pointProjection
     *
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection[] $pointProjection
     * @return self
     */
    public function setPointProjection(array $pointProjection)
    {
        $this->pointProjection = $pointProjection;
        return $this;
    }


}

