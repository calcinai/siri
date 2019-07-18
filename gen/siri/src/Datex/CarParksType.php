<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing CarParksType
 *
 * Provides information on the status of one or more car parks.
 * XSD Type: CarParks
 */
class CarParksType extends NonRoadEventInformationType
{

    /**
     * The configuration/layout of a car park.
     *
     * @property string $carParkConfiguration
     */
    private $carParkConfiguration = null;

    /**
     * The identity of one or a group of car parks.
     *
     * @property string $carParkIdentity
     */
    private $carParkIdentity = null;

    /**
     * The percentage value of car parking spaces occupied.
     *
     * @property float $carParkOccupancy
     */
    private $carParkOccupancy = null;

    /**
     * Indicates the status of one or more specified car parks.
     *
     * @property string $carParkStatus
     */
    private $carParkStatus = null;

    /**
     * The rate at which vehicles are exiting the car park.
     *
     * @property int $exitRate
     */
    private $exitRate = null;

    /**
     * The rate at which vehicles are entering the car park.
     *
     * @property int $fillRate
     */
    private $fillRate = null;

    /**
     * Indicates the number of vacant parking spaces available in a specified parking area.
     *
     * @property int $numberOfVacantParkingSpaces
     */
    private $numberOfVacantParkingSpaces = null;

    /**
     * Number of currently occupied spaces.
     *
     * @property int $occupiedSpaces
     */
    private $occupiedSpaces = null;

    /**
     * The current queuing time for entering the car park.
     *
     * @property \DateTime $queueingTime
     */
    private $queueingTime = null;

    /**
     * Total number of car parking spaces.
     *
     * @property int $totalCapacity
     */
    private $totalCapacity = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $carParksExtension
     */
    private $carParksExtension = null;

    /**
     * Gets as carParkConfiguration
     *
     * The configuration/layout of a car park.
     *
     * @return string
     */
    public function getCarParkConfiguration()
    {
        return $this->carParkConfiguration;
    }

    /**
     * Sets a new carParkConfiguration
     *
     * The configuration/layout of a car park.
     *
     * @param string $carParkConfiguration
     * @return self
     */
    public function setCarParkConfiguration($carParkConfiguration)
    {
        $this->carParkConfiguration = $carParkConfiguration;
        return $this;
    }

    /**
     * Gets as carParkIdentity
     *
     * The identity of one or a group of car parks.
     *
     * @return string
     */
    public function getCarParkIdentity()
    {
        return $this->carParkIdentity;
    }

    /**
     * Sets a new carParkIdentity
     *
     * The identity of one or a group of car parks.
     *
     * @param string $carParkIdentity
     * @return self
     */
    public function setCarParkIdentity($carParkIdentity)
    {
        $this->carParkIdentity = $carParkIdentity;
        return $this;
    }

    /**
     * Gets as carParkOccupancy
     *
     * The percentage value of car parking spaces occupied.
     *
     * @return float
     */
    public function getCarParkOccupancy()
    {
        return $this->carParkOccupancy;
    }

    /**
     * Sets a new carParkOccupancy
     *
     * The percentage value of car parking spaces occupied.
     *
     * @param float $carParkOccupancy
     * @return self
     */
    public function setCarParkOccupancy($carParkOccupancy)
    {
        $this->carParkOccupancy = $carParkOccupancy;
        return $this;
    }

    /**
     * Gets as carParkStatus
     *
     * Indicates the status of one or more specified car parks.
     *
     * @return string
     */
    public function getCarParkStatus()
    {
        return $this->carParkStatus;
    }

    /**
     * Sets a new carParkStatus
     *
     * Indicates the status of one or more specified car parks.
     *
     * @param string $carParkStatus
     * @return self
     */
    public function setCarParkStatus($carParkStatus)
    {
        $this->carParkStatus = $carParkStatus;
        return $this;
    }

    /**
     * Gets as exitRate
     *
     * The rate at which vehicles are exiting the car park.
     *
     * @return int
     */
    public function getExitRate()
    {
        return $this->exitRate;
    }

    /**
     * Sets a new exitRate
     *
     * The rate at which vehicles are exiting the car park.
     *
     * @param int $exitRate
     * @return self
     */
    public function setExitRate($exitRate)
    {
        $this->exitRate = $exitRate;
        return $this;
    }

    /**
     * Gets as fillRate
     *
     * The rate at which vehicles are entering the car park.
     *
     * @return int
     */
    public function getFillRate()
    {
        return $this->fillRate;
    }

    /**
     * Sets a new fillRate
     *
     * The rate at which vehicles are entering the car park.
     *
     * @param int $fillRate
     * @return self
     */
    public function setFillRate($fillRate)
    {
        $this->fillRate = $fillRate;
        return $this;
    }

    /**
     * Gets as numberOfVacantParkingSpaces
     *
     * Indicates the number of vacant parking spaces available in a specified parking area.
     *
     * @return int
     */
    public function getNumberOfVacantParkingSpaces()
    {
        return $this->numberOfVacantParkingSpaces;
    }

    /**
     * Sets a new numberOfVacantParkingSpaces
     *
     * Indicates the number of vacant parking spaces available in a specified parking area.
     *
     * @param int $numberOfVacantParkingSpaces
     * @return self
     */
    public function setNumberOfVacantParkingSpaces($numberOfVacantParkingSpaces)
    {
        $this->numberOfVacantParkingSpaces = $numberOfVacantParkingSpaces;
        return $this;
    }

    /**
     * Gets as occupiedSpaces
     *
     * Number of currently occupied spaces.
     *
     * @return int
     */
    public function getOccupiedSpaces()
    {
        return $this->occupiedSpaces;
    }

    /**
     * Sets a new occupiedSpaces
     *
     * Number of currently occupied spaces.
     *
     * @param int $occupiedSpaces
     * @return self
     */
    public function setOccupiedSpaces($occupiedSpaces)
    {
        $this->occupiedSpaces = $occupiedSpaces;
        return $this;
    }

    /**
     * Gets as queueingTime
     *
     * The current queuing time for entering the car park.
     *
     * @return \DateTime
     */
    public function getQueueingTime()
    {
        return $this->queueingTime;
    }

    /**
     * Sets a new queueingTime
     *
     * The current queuing time for entering the car park.
     *
     * @param \DateTime $queueingTime
     * @return self
     */
    public function setQueueingTime(\DateTime $queueingTime)
    {
        $this->queueingTime = $queueingTime;
        return $this;
    }

    /**
     * Gets as totalCapacity
     *
     * Total number of car parking spaces.
     *
     * @return int
     */
    public function getTotalCapacity()
    {
        return $this->totalCapacity;
    }

    /**
     * Sets a new totalCapacity
     *
     * Total number of car parking spaces.
     *
     * @param int $totalCapacity
     * @return self
     */
    public function setTotalCapacity($totalCapacity)
    {
        $this->totalCapacity = $totalCapacity;
        return $this;
    }

    /**
     * Gets as carParksExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getCarParksExtension()
    {
        return $this->carParksExtension;
    }

    /**
     * Sets a new carParksExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $carParksExtension
     * @return self
     */
    public function setCarParksExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $carParksExtension)
    {
        $this->carParksExtension = $carParksExtension;
        return $this;
    }


}

