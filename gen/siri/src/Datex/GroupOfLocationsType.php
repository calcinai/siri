<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing GroupOfLocationsType
 *
 * A group of one or more physically separate locations. Locations maybe related, as in an itinerary or route, or maybe unrelated. It is not for identifying the same physical location using different referencing systems.
 * XSD Type: GroupOfLocations
 */
class GroupOfLocationsType
{

    /**
     * @property \Calcinai\Siri\Datex\LocationType[] $locationContainedInGroup
     */
    private $locationContainedInGroup = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\DestinationType[] $routeDestination
     */
    private $routeDestination = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $groupOfLocationsExtension
     */
    private $groupOfLocationsExtension = null;

    /**
     * Adds as locationContainedInGroup
     *
     * @return self
     * @param \Calcinai\Siri\Datex\LocationType $locationContainedInGroup
     */
    public function addToLocationContainedInGroup(\Calcinai\Siri\Datex\LocationType $locationContainedInGroup)
    {
        $this->locationContainedInGroup[] = $locationContainedInGroup;
        return $this;
    }

    /**
     * isset locationContainedInGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationContainedInGroup($index)
    {
        return isset($this->locationContainedInGroup[$index]);
    }

    /**
     * unset locationContainedInGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationContainedInGroup($index)
    {
        unset($this->locationContainedInGroup[$index]);
    }

    /**
     * Gets as locationContainedInGroup
     *
     * @return \Calcinai\Siri\Datex\LocationType[]
     */
    public function getLocationContainedInGroup()
    {
        return $this->locationContainedInGroup;
    }

    /**
     * Sets a new locationContainedInGroup
     *
     * @param \Calcinai\Siri\Datex\LocationType[] $locationContainedInGroup
     * @return self
     */
    public function setLocationContainedInGroup(array $locationContainedInGroup)
    {
        $this->locationContainedInGroup = $locationContainedInGroup;
        return $this;
    }

    /**
     * Adds as routeDestination
     *
     * @return self
     * @param \Calcinai\Siri\Datex\DestinationType $routeDestination
     */
    public function addToRouteDestination(\Calcinai\Siri\Datex\DestinationType $routeDestination)
    {
        $this->routeDestination[] = $routeDestination;
        return $this;
    }

    /**
     * isset routeDestination
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteDestination($index)
    {
        return isset($this->routeDestination[$index]);
    }

    /**
     * unset routeDestination
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteDestination($index)
    {
        unset($this->routeDestination[$index]);
    }

    /**
     * Gets as routeDestination
     *
     * @return \Calcinai\Siri\Datex\DestinationType[]
     */
    public function getRouteDestination()
    {
        return $this->routeDestination;
    }

    /**
     * Sets a new routeDestination
     *
     * @param \Calcinai\Siri\Datex\DestinationType[] $routeDestination
     * @return self
     */
    public function setRouteDestination(array $routeDestination)
    {
        $this->routeDestination = $routeDestination;
        return $this;
    }

    /**
     * Gets as groupOfLocationsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getGroupOfLocationsExtension()
    {
        return $this->groupOfLocationsExtension;
    }

    /**
     * Sets a new groupOfLocationsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $groupOfLocationsExtension
     * @return self
     */
    public function setGroupOfLocationsExtension(\Calcinai\Siri\Datex\ExtensionType $groupOfLocationsExtension)
    {
        $this->groupOfLocationsExtension = $groupOfLocationsExtension;
        return $this;
    }


}

