<?php

namespace Calcinai\Siri\Objects\AffectedRouteStructureType;

/**
 * Class representing RouteLinksAType
 */
class RouteLinksAType
{

    /**
     * @property string[] $routeLinkRef
     */
    private $routeLinkRef = [
        
    ];

    /**
     * Adds as routeLinkRef
     *
     * @return self
     * @param string $routeLinkRef
     */
    public function addToRouteLinkRef($routeLinkRef)
    {
        $this->routeLinkRef[] = $routeLinkRef;
        return $this;
    }

    /**
     * isset routeLinkRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteLinkRef($index)
    {
        return isset($this->routeLinkRef[$index]);
    }

    /**
     * unset routeLinkRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteLinkRef($index)
    {
        unset($this->routeLinkRef[$index]);
    }

    /**
     * Gets as routeLinkRef
     *
     * @return string[]
     */
    public function getRouteLinkRef()
    {
        return $this->routeLinkRef;
    }

    /**
     * Sets a new routeLinkRef
     *
     * @param string $routeLinkRef
     * @return self
     */
    public function setRouteLinkRef(array $routeLinkRef)
    {
        $this->routeLinkRef = $routeLinkRef;
        return $this;
    }


}

