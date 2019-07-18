<?php

namespace Calcinai\Siri\Objects\AnnotatedStopPointStructureType;

/**
 * Class representing LinesAType
 */
class LinesAType
{

    /**
     * Lines that call at stop.
     *
     * @property string[] $lineRef
     */
    private $lineRef = [
        
    ];

    /**
     * Adds as lineRef
     *
     * Lines that call at stop.
     *
     * @return self
     * @param string $lineRef
     */
    public function addToLineRef($lineRef)
    {
        $this->lineRef[] = $lineRef;
        return $this;
    }

    /**
     * isset lineRef
     *
     * Lines that call at stop.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineRef($index)
    {
        return isset($this->lineRef[$index]);
    }

    /**
     * unset lineRef
     *
     * Lines that call at stop.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineRef($index)
    {
        unset($this->lineRef[$index]);
    }

    /**
     * Gets as lineRef
     *
     * Lines that call at stop.
     *
     * @return string[]
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Lines that call at stop.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef(array $lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }


}

