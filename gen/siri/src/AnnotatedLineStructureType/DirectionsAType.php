<?php

namespace Calcinai\Siri\Objects\AnnotatedLineStructureType;

/**
 * Class representing DirectionsAType
 */
class DirectionsAType
{

    /**
     * @property \Calcinai\Siri\Objects\Direction[] $direction
     */
    private $direction = [
        
    ];

    /**
     * Adds as direction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Direction $direction
     */
    public function addToDirection(\Calcinai\Siri\Objects\Direction $direction)
    {
        $this->direction[] = $direction;
        return $this;
    }

    /**
     * isset direction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDirection($index)
    {
        return isset($this->direction[$index]);
    }

    /**
     * unset direction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDirection($index)
    {
        unset($this->direction[$index]);
    }

    /**
     * Gets as direction
     *
     * @return \Calcinai\Siri\Objects\Direction[]
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * @param \Calcinai\Siri\Objects\Direction[] $direction
     * @return self
     */
    public function setDirection(array $direction)
    {
        $this->direction = $direction;
        return $this;
    }


}

