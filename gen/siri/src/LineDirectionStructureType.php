<?php

namespace Calcinai\Siri;

/**
 * Class representing LineDirectionStructureType
 *
 * Type for Line and direction
 * XSD Type: LineDirectionStructure
 */
class LineDirectionStructureType
{

    /**
     * Line Reference.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Direction Reference.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Gets as lineRef
     *
     * Line Reference.
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Line Reference.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as directionRef
     *
     * Direction Reference.
     *
     * @return string
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Direction Reference.
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef($directionRef)
    {
        $this->directionRef = $directionRef;
        return $this;
    }


}

