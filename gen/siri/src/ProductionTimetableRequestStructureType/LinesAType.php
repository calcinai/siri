<?php

namespace Calcinai\Siri\Objects\ProductionTimetableRequestStructureType;

/**
 * Class representing LinesAType
 */
class LinesAType
{

    /**
     * Iinclude only vehicles along the given line.
     *
     * @property \Calcinai\Siri\Objects\LineDirectionStructureType[] $lineDirection
     */
    private $lineDirection = [
        
    ];

    /**
     * Adds as lineDirection
     *
     * Iinclude only vehicles along the given line.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\LineDirectionStructureType $lineDirection
     */
    public function addToLineDirection(\Calcinai\Siri\Objects\LineDirectionStructureType $lineDirection)
    {
        $this->lineDirection[] = $lineDirection;
        return $this;
    }

    /**
     * isset lineDirection
     *
     * Iinclude only vehicles along the given line.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineDirection($index)
    {
        return isset($this->lineDirection[$index]);
    }

    /**
     * unset lineDirection
     *
     * Iinclude only vehicles along the given line.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineDirection($index)
    {
        unset($this->lineDirection[$index]);
    }

    /**
     * Gets as lineDirection
     *
     * Iinclude only vehicles along the given line.
     *
     * @return \Calcinai\Siri\Objects\LineDirectionStructureType[]
     */
    public function getLineDirection()
    {
        return $this->lineDirection;
    }

    /**
     * Sets a new lineDirection
     *
     * Iinclude only vehicles along the given line.
     *
     * @param \Calcinai\Siri\Objects\LineDirectionStructureType[] $lineDirection
     * @return self
     */
    public function setLineDirection(array $lineDirection)
    {
        $this->lineDirection = $lineDirection;
        return $this;
    }


}

