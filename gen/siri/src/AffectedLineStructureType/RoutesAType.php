<?php

namespace Calcinai\Siri\AffectedLineStructureType;

/**
 * Class representing RoutesAType
 */
class RoutesAType
{

    /**
     * Route
     *
     * @property \Calcinai\Siri\AffectedRouteStructureType[] $affectedRoute
     */
    private $affectedRoute = [
        
    ];

    /**
     * Adds as affectedRoute
     *
     * Route
     *
     * @return self
     * @param \Calcinai\Siri\AffectedRouteStructureType $affectedRoute
     */
    public function addToAffectedRoute(\Calcinai\Siri\AffectedRouteStructureType $affectedRoute)
    {
        $this->affectedRoute[] = $affectedRoute;
        return $this;
    }

    /**
     * isset affectedRoute
     *
     * Route
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedRoute($index)
    {
        return isset($this->affectedRoute[$index]);
    }

    /**
     * unset affectedRoute
     *
     * Route
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedRoute($index)
    {
        unset($this->affectedRoute[$index]);
    }

    /**
     * Gets as affectedRoute
     *
     * Route
     *
     * @return \Calcinai\Siri\AffectedRouteStructureType[]
     */
    public function getAffectedRoute()
    {
        return $this->affectedRoute;
    }

    /**
     * Sets a new affectedRoute
     *
     * Route
     *
     * @param \Calcinai\Siri\AffectedRouteStructureType[] $affectedRoute
     * @return self
     */
    public function setAffectedRoute(array $affectedRoute)
    {
        $this->affectedRoute = $affectedRoute;
        return $this;
    }


}

