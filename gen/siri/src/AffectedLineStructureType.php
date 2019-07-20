<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     */
    private $affectedOperator = [
        
    ];

    /**
     * @property string[] $lineRef
     */
    private $lineRef = [
        
    ];

    /**
     * Destinations to which the line runs
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $destinations
     */
    private $destinations = [
        
    ];

    /**
     * Directions affected.
     *
     * @property \Calcinai\Siri\Objects\DirectionStructureType[] $direction
     */
    private $direction = [
        
    ];

    /**
     * Routes affected if line has multiple routes
     *
     * @property \Calcinai\Siri\Objects\AffectedRouteStructureType[] $routes
     */
    private $routes = null;

    /**
     * Line sections affected
     *
     * @property \Calcinai\Siri\Objects\AffectedSectionStructureType[] $sections
     */
    private $sections = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value sspecified for (i) Affected Network (ii) General Context.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator
     */
    public function addToAffectedOperator(\Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator)
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
     * @return \Calcinai\Siri\Objects\AffectedOperatorStructureType[]
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
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     * @return self
     */
    public function setAffectedOperator(array $affectedOperator)
    {
        $this->affectedOperator = $affectedOperator;
        return $this;
    }

    /**
     * Adds as lineRef
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
     * @return string[]
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
    public function setLineRef(array $lineRef)
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
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType $destinations
     */
    public function addToDestinations(\Calcinai\Siri\Objects\AffectedStopPointStructureType $destinations)
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
     * @return \Calcinai\Siri\Objects\AffectedStopPointStructureType[]
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
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $destinations
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
     * @param \Calcinai\Siri\Objects\DirectionStructureType $direction
     */
    public function addToDirection(\Calcinai\Siri\Objects\DirectionStructureType $direction)
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
     * @return \Calcinai\Siri\Objects\DirectionStructureType[]
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
     * @param \Calcinai\Siri\Objects\DirectionStructureType[] $direction
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
     * @param \Calcinai\Siri\Objects\AffectedRouteStructureType $affectedRoute
     */
    public function addToRoutes(\Calcinai\Siri\Objects\AffectedRouteStructureType $affectedRoute)
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
     * @return \Calcinai\Siri\Objects\AffectedRouteStructureType[]
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
     * @param \Calcinai\Siri\Objects\AffectedRouteStructureType[] $routes
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
     * @param \Calcinai\Siri\Objects\AffectedSectionStructureType $affectedSection
     */
    public function addToSections(\Calcinai\Siri\Objects\AffectedSectionStructureType $affectedSection)
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
     * @return \Calcinai\Siri\Objects\AffectedSectionStructureType[]
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
     * @param \Calcinai\Siri\Objects\AffectedSectionStructureType[] $sections
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
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

