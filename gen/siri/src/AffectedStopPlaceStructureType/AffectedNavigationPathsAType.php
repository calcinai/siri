<?php

namespace Calcinai\Siri\AffectedStopPlaceStructureType;

/**
 * Class representing AffectedNavigationPathsAType
 */
class AffectedNavigationPathsAType
{

    /**
     * @property string[] $navigationPathRef
     */
    private $navigationPathRef = [
        
    ];

    /**
     * Adds as navigationPathRef
     *
     * @return self
     * @param string $navigationPathRef
     */
    public function addToNavigationPathRef($navigationPathRef)
    {
        $this->navigationPathRef[] = $navigationPathRef;
        return $this;
    }

    /**
     * isset navigationPathRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNavigationPathRef($index)
    {
        return isset($this->navigationPathRef[$index]);
    }

    /**
     * unset navigationPathRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNavigationPathRef($index)
    {
        unset($this->navigationPathRef[$index]);
    }

    /**
     * Gets as navigationPathRef
     *
     * @return string[]
     */
    public function getNavigationPathRef()
    {
        return $this->navigationPathRef;
    }

    /**
     * Sets a new navigationPathRef
     *
     * @param string $navigationPathRef
     * @return self
     */
    public function setNavigationPathRef(array $navigationPathRef)
    {
        $this->navigationPathRef = $navigationPathRef;
        return $this;
    }


}

