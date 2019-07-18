<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedLineStructureType
 *
 * Type for information about the lines affected by an Situation
 * XSD Type: AffectedLineStructure
 */
class AffectedLineStructureType
{

    /**
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @property \Calcinai\Siri\AffectedOperatorStructureType[] $affectedOperator
     */
    private $affectedOperator = [
        
    ];

    /**
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Destinations to which the line runs
     *
     * @property \Calcinai\Siri\AffectedStopPointStructureType[] $destinations
     */
    private $destinations = [
        
    ];

    /**
     * Directions affected.
     *
     * @property \Calcinai\Siri\DirectionStructureType[] $direction
     */
    private $direction = [
        
    ];

    /**
     * Routes affected if line has multiple routes
     *
     * @property \Calcinai\Siri\AffectedRouteStructureType[] $routes
     */
    private $routes = null;

    /**
     * Line sections affected
     *
     * @property \Calcinai\Siri\AffectedSectionStructureType[] $sections
     */
    private $sections = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedOperatorStructureType $affectedOperator
     */
    public function addToAffectedOperator(\Calcinai\Siri\AffectedOperatorStructureType $affectedOperator)
    {
        $this->affectedOperator[] = $affectedOperator;
        return $this;
    }

    /**
     * isset affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedOperator($index)
    {
        return isset($this->affectedOperator[$index]);
    }

    /**
     * unset affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedOperator($index)
    {
        unset($this->affectedOperator[$index]);
    }

    /**
     * Gets as affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @return \Calcinai\Siri\AffectedOperatorStructureType[]
     */
    public function getAffectedOperator()
    {
        return $this->affectedOperator;
    }

    /**
     * Sets a new affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @param \Calcinai\Siri\AffectedOperatorStructureType[] $affectedOperator
     * @return self
     */
    public function setAffectedOperator(array $affectedOperator)
    {
        $this->affectedOperator = $affectedOperator;
        return $this;
    }

    /**
     * Gets as lineRef
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
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Adds as destinations
     *
     * Destinations to which the line runs
     *
     * @return self
     * @param \Calcinai\Siri\AffectedStopPointStructureType $destinations
     */
    public function addToDestinations(\Calcinai\Siri\AffectedStopPointStructureType $destinations)
    {
        $this->destinations[] = $destinations;
        return $this;
    }

    /**
     * isset destinations
     *
     * Destinations to which the line runs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinations($index)
    {
        return isset($this->destinations[$index]);
    }

    /**
     * unset destinations
     *
     * Destinations to which the line runs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinations($index)
    {
        unset($this->destinations[$index]);
    }

    /**
     * Gets as destinations
     *
     * Destinations to which the line runs
     *
     * @return \Calcinai\Siri\AffectedStopPointStructureType[]
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Sets a new destinations
     *
     * Destinations to which the line runs
     *
     * @param \Calcinai\Siri\AffectedStopPointStructureType[] $destinations
     * @return self
     */
    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;
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
     * Adds as affectedRoute
     *
     * Routes affected if line has multiple routes
     *
     * @return self
     * @param \Calcinai\Siri\AffectedRouteStructureType $affectedRoute
     */
    public function addToRoutes(\Calcinai\Siri\AffectedRouteStructureType $affectedRoute)
    {
        $this->routes[] = $affectedRoute;
        return $this;
    }

    /**
     * isset routes
     *
     * Routes affected if line has multiple routes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoutes($index)
    {
        return isset($this->routes[$index]);
    }

    /**
     * unset routes
     *
     * Routes affected if line has multiple routes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoutes($index)
    {
        unset($this->routes[$index]);
    }

    /**
     * Gets as routes
     *
     * Routes affected if line has multiple routes
     *
     * @return \Calcinai\Siri\AffectedRouteStructureType[]
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Sets a new routes
     *
     * Routes affected if line has multiple routes
     *
     * @param \Calcinai\Siri\AffectedRouteStructureType[] $routes
     * @return self
     */
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
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

