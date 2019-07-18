<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TravelTimeValueType
 *
 * Derived/computed travel time information relating to a specific group of locations.
 * XSD Type: TravelTimeValue
 */
class TravelTimeValueType extends BasicDataValueType
{

    /**
     * Travel time between the defined locations in the specified direction.
     *
     * @property float $travelTime
     */
    private $travelTime = null;

    /**
     * The current trend in the travel time between the defined locations in the specified direction..
     *
     * @property string $travelTimeTrendType
     */
    private $travelTimeTrendType = null;

    /**
     * Indication of the way in which the travel time is derived.
     *
     * @property string $travelTimeType
     */
    private $travelTimeType = null;

    /**
     * The free flow speed expected under ideal conditions, corresponding to the freeFlowTravelTime.
     *
     * @property float $freeFlowSpeed
     */
    private $freeFlowSpeed = null;

    /**
     * The travel time which would be expected under ideal free flow conditions.
     *
     * @property float $freeFlowTravelTime
     */
    private $freeFlowTravelTime = null;

    /**
     * The travel time which is expected for the given period (e.g. date/time, holiday status etc.) and any known quasi-static conditions (e.g. long term roadworks). This value is derived from historical analysis.
     *
     * @property float $normallyExpectedTravelTime
     */
    private $normallyExpectedTravelTime = null;

    /**
     * The types of vehicle to which the travel time relates.
     *
     * @property string[] $vehicleType
     */
    private $vehicleType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $travelTimeValueExtension
     */
    private $travelTimeValueExtension = null;

    /**
     * Gets as travelTime
     *
     * Travel time between the defined locations in the specified direction.
     *
     * @return float
     */
    public function getTravelTime()
    {
        return $this->travelTime;
    }

    /**
     * Sets a new travelTime
     *
     * Travel time between the defined locations in the specified direction.
     *
     * @param float $travelTime
     * @return self
     */
    public function setTravelTime($travelTime)
    {
        $this->travelTime = $travelTime;
        return $this;
    }

    /**
     * Gets as travelTimeTrendType
     *
     * The current trend in the travel time between the defined locations in the specified direction..
     *
     * @return string
     */
    public function getTravelTimeTrendType()
    {
        return $this->travelTimeTrendType;
    }

    /**
     * Sets a new travelTimeTrendType
     *
     * The current trend in the travel time between the defined locations in the specified direction..
     *
     * @param string $travelTimeTrendType
     * @return self
     */
    public function setTravelTimeTrendType($travelTimeTrendType)
    {
        $this->travelTimeTrendType = $travelTimeTrendType;
        return $this;
    }

    /**
     * Gets as travelTimeType
     *
     * Indication of the way in which the travel time is derived.
     *
     * @return string
     */
    public function getTravelTimeType()
    {
        return $this->travelTimeType;
    }

    /**
     * Sets a new travelTimeType
     *
     * Indication of the way in which the travel time is derived.
     *
     * @param string $travelTimeType
     * @return self
     */
    public function setTravelTimeType($travelTimeType)
    {
        $this->travelTimeType = $travelTimeType;
        return $this;
    }

    /**
     * Gets as freeFlowSpeed
     *
     * The free flow speed expected under ideal conditions, corresponding to the freeFlowTravelTime.
     *
     * @return float
     */
    public function getFreeFlowSpeed()
    {
        return $this->freeFlowSpeed;
    }

    /**
     * Sets a new freeFlowSpeed
     *
     * The free flow speed expected under ideal conditions, corresponding to the freeFlowTravelTime.
     *
     * @param float $freeFlowSpeed
     * @return self
     */
    public function setFreeFlowSpeed($freeFlowSpeed)
    {
        $this->freeFlowSpeed = $freeFlowSpeed;
        return $this;
    }

    /**
     * Gets as freeFlowTravelTime
     *
     * The travel time which would be expected under ideal free flow conditions.
     *
     * @return float
     */
    public function getFreeFlowTravelTime()
    {
        return $this->freeFlowTravelTime;
    }

    /**
     * Sets a new freeFlowTravelTime
     *
     * The travel time which would be expected under ideal free flow conditions.
     *
     * @param float $freeFlowTravelTime
     * @return self
     */
    public function setFreeFlowTravelTime($freeFlowTravelTime)
    {
        $this->freeFlowTravelTime = $freeFlowTravelTime;
        return $this;
    }

    /**
     * Gets as normallyExpectedTravelTime
     *
     * The travel time which is expected for the given period (e.g. date/time, holiday status etc.) and any known quasi-static conditions (e.g. long term roadworks). This value is derived from historical analysis.
     *
     * @return float
     */
    public function getNormallyExpectedTravelTime()
    {
        return $this->normallyExpectedTravelTime;
    }

    /**
     * Sets a new normallyExpectedTravelTime
     *
     * The travel time which is expected for the given period (e.g. date/time, holiday status etc.) and any known quasi-static conditions (e.g. long term roadworks). This value is derived from historical analysis.
     *
     * @param float $normallyExpectedTravelTime
     * @return self
     */
    public function setNormallyExpectedTravelTime($normallyExpectedTravelTime)
    {
        $this->normallyExpectedTravelTime = $normallyExpectedTravelTime;
        return $this;
    }

    /**
     * Adds as vehicleType
     *
     * The types of vehicle to which the travel time relates.
     *
     * @return self
     * @param string $vehicleType
     */
    public function addToVehicleType($vehicleType)
    {
        $this->vehicleType[] = $vehicleType;
        return $this;
    }

    /**
     * isset vehicleType
     *
     * The types of vehicle to which the travel time relates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleType($index)
    {
        return isset($this->vehicleType[$index]);
    }

    /**
     * unset vehicleType
     *
     * The types of vehicle to which the travel time relates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleType($index)
    {
        unset($this->vehicleType[$index]);
    }

    /**
     * Gets as vehicleType
     *
     * The types of vehicle to which the travel time relates.
     *
     * @return string[]
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * The types of vehicle to which the travel time relates.
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType(array $vehicleType)
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    /**
     * Gets as travelTimeValueExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTravelTimeValueExtension()
    {
        return $this->travelTimeValueExtension;
    }

    /**
     * Sets a new travelTimeValueExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $travelTimeValueExtension
     * @return self
     */
    public function setTravelTimeValueExtension(\Calcinai\Siri\Datex\ExtensionType $travelTimeValueExtension)
    {
        $this->travelTimeValueExtension = $travelTimeValueExtension;
        return $this;
    }


}

