<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedRouteStructureType
 *
 * Type for information about the routes affected by a Situation
 * XSD Type: AffectedRouteStructure
 */
class AffectedRouteStructureType
{

    /**
     * Identifier of Route
     *
     * @property string $routeRef
     */
    private $routeRef = null;

    /**
     * Directions affected.
     *
     * @property \Calcinai\Siri\DirectionStructureType[] $direction
     */
    private $direction = [
        
    ];

    /**
     * Line sections affected
     *
     * @property \Calcinai\Siri\AffectedSectionStructureType[] $sections
     */
    private $sections = null;

    /**
     * Line sections affected
     *
     * @property string[] $routeLinks
     */
    private $routeLinks = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as routeRef
     *
     * Identifier of Route
     *
     * @return string
     */
    public function getRouteRef()
    {
        return $this->routeRef;
    }

    /**
     * Sets a new routeRef
     *
     * Identifier of Route
     *
     * @param string $routeRef
     * @return self
     */
    public function setRouteRef($routeRef)
    {
        $this->routeRef = $routeRef;
        return $this;
    }

    /**
     * Adds as direction
     *
     * Directions affected.
     *
     * @return self
     * @param \Calcinai\Siri\DirectionStructureType $direction
     */
    public function addToDirection(\Calcinai\Siri\DirectionStructureType $direction)
    {
        $this->direction[] = $direction;
        return $this;
    }

    /**
     * isset direction
     *
     * Directions affected.
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
     * Directions affected.
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
     * Directions affected.
     *
     * @return \Calcinai\Siri\DirectionStructureType[]
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * Directions affected.
     *
     * @param \Calcinai\Siri\DirectionStructureType[] $direction
     * @return self
     */
    public function setDirection(array $direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Adds as affectedSection
     *
     * Line sections affected
     *
     * @return self
     * @param \Calcinai\Siri\AffectedSectionStructureType $affectedSection
     */
    public function addToSections(\Calcinai\Siri\AffectedSectionStructureType $affectedSection)
    {
        $this->sections[] = $affectedSection;
        return $this;
    }

    /**
     * isset sections
     *
     * Line sections affected
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSections($index)
    {
        return isset($this->sections[$index]);
    }

    /**
     * unset sections
     *
     * Line sections affected
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSections($index)
    {
        unset($this->sections[$index]);
    }

    /**
     * Gets as sections
     *
     * Line sections affected
     *
     * @return \Calcinai\Siri\AffectedSectionStructureType[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets a new sections
     *
     * Line sections affected
     *
     * @param \Calcinai\Siri\AffectedSectionStructureType[] $sections
     * @return self
     */
    public function setSections(array $sections)
    {
        $this->sections = $sections;
        return $this;
    }

    /**
     * Adds as routeLinkRef
     *
     * Line sections affected
     *
     * @return self
     * @param string $routeLinkRef
     */
    public function addToRouteLinks($routeLinkRef)
    {
        $this->routeLinks[] = $routeLinkRef;
        return $this;
    }

    /**
     * isset routeLinks
     *
     * Line sections affected
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteLinks($index)
    {
        return isset($this->routeLinks[$index]);
    }

    /**
     * unset routeLinks
     *
     * Line sections affected
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteLinks($index)
    {
        unset($this->routeLinks[$index]);
    }

    /**
     * Gets as routeLinks
     *
     * Line sections affected
     *
     * @return string[]
     */
    public function getRouteLinks()
    {
        return $this->routeLinks;
    }

    /**
     * Sets a new routeLinks
     *
     * Line sections affected
     *
     * @param string $routeLinks
     * @return self
     */
    public function setRouteLinks(array $routeLinks)
    {
        $this->routeLinks = $routeLinks;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

