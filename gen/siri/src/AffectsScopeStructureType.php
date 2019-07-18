<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectsScopeStructureType
 *
 * Type for Location model for scope of situation or effect.
 * XSD Type: AffectsScopeStructure
 */
class AffectsScopeStructureType
{

    /**
     * Affected overall Geographic scope. Enumeration.
     *
     * @property string $areaOfInterest
     */
    private $areaOfInterest = null;

    /**
     * Affected operators, If absent, taken from context. If present, any operators stated completely replace those from context.
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType\OperatorsAType $operators
     */
    private $operators = null;

    /**
     * Networks affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[] $networks
     */
    private $networks = null;

    /**
     * Stop points affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $stopPoints
     */
    private $stopPoints = null;

    /**
     * Places other than Stop points affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPlaceStructureType[] $stopPlaces
     */
    private $stopPlaces = null;

    /**
     * Places other than Stop points affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedPlaceStructureType[] $places
     */
    private $places = null;

    /**
     * Specific journeys affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType\VehicleJourneysAType $vehicleJourneys
     */
    private $vehicleJourneys = null;

    /**
     * Roads affected by
     *
     * @property \Calcinai\Siri\Objects\AffectedRoadsStructureType $roads
     */
    private $roads = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as areaOfInterest
     *
     * Affected overall Geographic scope. Enumeration.
     *
     * @return string
     */
    public function getAreaOfInterest()
    {
        return $this->areaOfInterest;
    }

    /**
     * Sets a new areaOfInterest
     *
     * Affected overall Geographic scope. Enumeration.
     *
     * @param string $areaOfInterest
     * @return self
     */
    public function setAreaOfInterest($areaOfInterest)
    {
        $this->areaOfInterest = $areaOfInterest;
        return $this;
    }

    /**
     * Gets as operators
     *
     * Affected operators, If absent, taken from context. If present, any operators stated completely replace those from context.
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType\OperatorsAType
     */
    public function getOperators()
    {
        return $this->operators;
    }

    /**
     * Sets a new operators
     *
     * Affected operators, If absent, taken from context. If present, any operators stated completely replace those from context.
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\OperatorsAType $operators
     * @return self
     */
    public function setOperators(\Calcinai\Siri\Objects\AffectsScopeStructureType\OperatorsAType $operators)
    {
        $this->operators = $operators;
        return $this;
    }

    /**
     * Adds as affectedNetwork
     *
     * Networks affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType $affectedNetwork
     */
    public function addToNetworks(\Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType $affectedNetwork)
    {
        $this->networks[] = $affectedNetwork;
        return $this;
    }

    /**
     * isset networks
     *
     * Networks affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetworks($index)
    {
        return isset($this->networks[$index]);
    }

    /**
     * unset networks
     *
     * Networks affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetworks($index)
    {
        unset($this->networks[$index]);
    }

    /**
     * Gets as networks
     *
     * Networks affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Sets a new networks
     *
     * Networks affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[] $networks
     * @return self
     */
    public function setNetworks(array $networks)
    {
        $this->networks = $networks;
        return $this;
    }

    /**
     * Adds as affectedStopPoint
     *
     * Stop points affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType $affectedStopPoint
     */
    public function addToStopPoints(\Calcinai\Siri\Objects\AffectedStopPointStructureType $affectedStopPoint)
    {
        $this->stopPoints[] = $affectedStopPoint;
        return $this;
    }

    /**
     * isset stopPoints
     *
     * Stop points affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopPoints($index)
    {
        return isset($this->stopPoints[$index]);
    }

    /**
     * unset stopPoints
     *
     * Stop points affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopPoints($index)
    {
        unset($this->stopPoints[$index]);
    }

    /**
     * Gets as stopPoints
     *
     * Stop points affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPointStructureType[]
     */
    public function getStopPoints()
    {
        return $this->stopPoints;
    }

    /**
     * Sets a new stopPoints
     *
     * Stop points affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $stopPoints
     * @return self
     */
    public function setStopPoints(array $stopPoints)
    {
        $this->stopPoints = $stopPoints;
        return $this;
    }

    /**
     * Adds as affectedStopPlace
     *
     * Places other than Stop points affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPlaceStructureType $affectedStopPlace
     */
    public function addToStopPlaces(\Calcinai\Siri\Objects\AffectedStopPlaceStructureType $affectedStopPlace)
    {
        $this->stopPlaces[] = $affectedStopPlace;
        return $this;
    }

    /**
     * isset stopPlaces
     *
     * Places other than Stop points affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopPlaces($index)
    {
        return isset($this->stopPlaces[$index]);
    }

    /**
     * unset stopPlaces
     *
     * Places other than Stop points affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopPlaces($index)
    {
        unset($this->stopPlaces[$index]);
    }

    /**
     * Gets as stopPlaces
     *
     * Places other than Stop points affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPlaceStructureType[]
     */
    public function getStopPlaces()
    {
        return $this->stopPlaces;
    }

    /**
     * Sets a new stopPlaces
     *
     * Places other than Stop points affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPlaceStructureType[] $stopPlaces
     * @return self
     */
    public function setStopPlaces(array $stopPlaces)
    {
        $this->stopPlaces = $stopPlaces;
        return $this;
    }

    /**
     * Adds as affectedPlace
     *
     * Places other than Stop points affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedPlaceStructureType $affectedPlace
     */
    public function addToPlaces(\Calcinai\Siri\Objects\AffectedPlaceStructureType $affectedPlace)
    {
        $this->places[] = $affectedPlace;
        return $this;
    }

    /**
     * isset places
     *
     * Places other than Stop points affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlaces($index)
    {
        return isset($this->places[$index]);
    }

    /**
     * unset places
     *
     * Places other than Stop points affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlaces($index)
    {
        unset($this->places[$index]);
    }

    /**
     * Gets as places
     *
     * Places other than Stop points affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedPlaceStructureType[]
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Sets a new places
     *
     * Places other than Stop points affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedPlaceStructureType[] $places
     * @return self
     */
    public function setPlaces(array $places)
    {
        $this->places = $places;
        return $this;
    }

    /**
     * Gets as vehicleJourneys
     *
     * Specific journeys affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType\VehicleJourneysAType
     */
    public function getVehicleJourneys()
    {
        return $this->vehicleJourneys;
    }

    /**
     * Sets a new vehicleJourneys
     *
     * Specific journeys affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\VehicleJourneysAType $vehicleJourneys
     * @return self
     */
    public function setVehicleJourneys(\Calcinai\Siri\Objects\AffectsScopeStructureType\VehicleJourneysAType $vehicleJourneys)
    {
        $this->vehicleJourneys = $vehicleJourneys;
        return $this;
    }

    /**
     * Gets as roads
     *
     * Roads affected by
     *
     * @return \Calcinai\Siri\Objects\AffectedRoadsStructureType
     */
    public function getRoads()
    {
        return $this->roads;
    }

    /**
     * Sets a new roads
     *
     * Roads affected by
     *
     * @param \Calcinai\Siri\Objects\AffectedRoadsStructureType $roads
     * @return self
     */
    public function setRoads(\Calcinai\Siri\Objects\AffectedRoadsStructureType $roads)
    {
        $this->roads = $roads;
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

