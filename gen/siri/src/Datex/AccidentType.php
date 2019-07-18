<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AccidentType
 *
 * Accidents are events in which one or more vehicles lose control and do not recover. They include collisions between vehicle(s) or other road user(s), between vehicle(s) and any obstacle(s), or they result from a vehicle running off the road.
 * XSD Type: Accident
 */
class AccidentType extends TrafficElementType
{

    /**
     * A descriptor indicating the most significant factor causing an accident.
     *
     * @property string $accidentCause
     */
    private $accidentCause = null;

    /**
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @property string[] $accidentType
     */
    private $accidentType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleType[] $vehicleInvolved
     */
    private $vehicleInvolved = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehiclesInvolvedType[] $overviewOfVehiclesInvolved
     */
    private $overviewOfVehiclesInvolved = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\PeopleInvolvedType[] $overviewOfPeopleInvolved
     */
    private $overviewOfPeopleInvolved = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $accidentExtension
     */
    private $accidentExtension = null;

    /**
     * Gets as accidentCause
     *
     * A descriptor indicating the most significant factor causing an accident.
     *
     * @return string
     */
    public function getAccidentCause()
    {
        return $this->accidentCause;
    }

    /**
     * Sets a new accidentCause
     *
     * A descriptor indicating the most significant factor causing an accident.
     *
     * @param string $accidentCause
     * @return self
     */
    public function setAccidentCause($accidentCause)
    {
        $this->accidentCause = $accidentCause;
        return $this;
    }

    /**
     * Adds as accidentType
     *
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @return self
     * @param string $accidentType
     */
    public function addToAccidentType($accidentType)
    {
        $this->accidentType[] = $accidentType;
        return $this;
    }

    /**
     * isset accidentType
     *
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccidentType($index)
    {
        return isset($this->accidentType[$index]);
    }

    /**
     * unset accidentType
     *
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccidentType($index)
    {
        unset($this->accidentType[$index]);
    }

    /**
     * Gets as accidentType
     *
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @return string[]
     */
    public function getAccidentType()
    {
        return $this->accidentType;
    }

    /**
     * Sets a new accidentType
     *
     * A characterization of the nature of the accident. May be used as part of the core information during a broadcast of a situation containing an accident.
     *
     * @param string $accidentType
     * @return self
     */
    public function setAccidentType(array $accidentType)
    {
        $this->accidentType = $accidentType;
        return $this;
    }

    /**
     * Adds as vehicleInvolved
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\VehicleType $vehicleInvolved
     */
    public function addToVehicleInvolved(\Calcinai\Siri\Objects\Datex\VehicleType $vehicleInvolved)
    {
        $this->vehicleInvolved[] = $vehicleInvolved;
        return $this;
    }

    /**
     * isset vehicleInvolved
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleInvolved($index)
    {
        return isset($this->vehicleInvolved[$index]);
    }

    /**
     * unset vehicleInvolved
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleInvolved($index)
    {
        unset($this->vehicleInvolved[$index]);
    }

    /**
     * Gets as vehicleInvolved
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleType[]
     */
    public function getVehicleInvolved()
    {
        return $this->vehicleInvolved;
    }

    /**
     * Sets a new vehicleInvolved
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleType[] $vehicleInvolved
     * @return self
     */
    public function setVehicleInvolved(array $vehicleInvolved)
    {
        $this->vehicleInvolved = $vehicleInvolved;
        return $this;
    }

    /**
     * Adds as overviewOfVehiclesInvolved
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\VehiclesInvolvedType $overviewOfVehiclesInvolved
     */
    public function addToOverviewOfVehiclesInvolved(\Calcinai\Siri\Objects\Datex\VehiclesInvolvedType $overviewOfVehiclesInvolved)
    {
        $this->overviewOfVehiclesInvolved[] = $overviewOfVehiclesInvolved;
        return $this;
    }

    /**
     * isset overviewOfVehiclesInvolved
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOverviewOfVehiclesInvolved($index)
    {
        return isset($this->overviewOfVehiclesInvolved[$index]);
    }

    /**
     * unset overviewOfVehiclesInvolved
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOverviewOfVehiclesInvolved($index)
    {
        unset($this->overviewOfVehiclesInvolved[$index]);
    }

    /**
     * Gets as overviewOfVehiclesInvolved
     *
     * @return \Calcinai\Siri\Objects\Datex\VehiclesInvolvedType[]
     */
    public function getOverviewOfVehiclesInvolved()
    {
        return $this->overviewOfVehiclesInvolved;
    }

    /**
     * Sets a new overviewOfVehiclesInvolved
     *
     * @param \Calcinai\Siri\Objects\Datex\VehiclesInvolvedType[] $overviewOfVehiclesInvolved
     * @return self
     */
    public function setOverviewOfVehiclesInvolved(array $overviewOfVehiclesInvolved)
    {
        $this->overviewOfVehiclesInvolved = $overviewOfVehiclesInvolved;
        return $this;
    }

    /**
     * Adds as overviewOfPeopleInvolved
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PeopleInvolvedType $overviewOfPeopleInvolved
     */
    public function addToOverviewOfPeopleInvolved(\Calcinai\Siri\Objects\Datex\PeopleInvolvedType $overviewOfPeopleInvolved)
    {
        $this->overviewOfPeopleInvolved[] = $overviewOfPeopleInvolved;
        return $this;
    }

    /**
     * isset overviewOfPeopleInvolved
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOverviewOfPeopleInvolved($index)
    {
        return isset($this->overviewOfPeopleInvolved[$index]);
    }

    /**
     * unset overviewOfPeopleInvolved
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOverviewOfPeopleInvolved($index)
    {
        unset($this->overviewOfPeopleInvolved[$index]);
    }

    /**
     * Gets as overviewOfPeopleInvolved
     *
     * @return \Calcinai\Siri\Objects\Datex\PeopleInvolvedType[]
     */
    public function getOverviewOfPeopleInvolved()
    {
        return $this->overviewOfPeopleInvolved;
    }

    /**
     * Sets a new overviewOfPeopleInvolved
     *
     * @param \Calcinai\Siri\Objects\Datex\PeopleInvolvedType[] $overviewOfPeopleInvolved
     * @return self
     */
    public function setOverviewOfPeopleInvolved(array $overviewOfPeopleInvolved)
    {
        $this->overviewOfPeopleInvolved = $overviewOfPeopleInvolved;
        return $this;
    }

    /**
     * Gets as accidentExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAccidentExtension()
    {
        return $this->accidentExtension;
    }

    /**
     * Sets a new accidentExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $accidentExtension
     * @return self
     */
    public function setAccidentExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $accidentExtension)
    {
        $this->accidentExtension = $accidentExtension;
        return $this;
    }


}

