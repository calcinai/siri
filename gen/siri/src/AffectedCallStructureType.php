<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedCallStructureType
 *
 * Type for information about a call affected by an Situation
 * XSD Type: AffectedCallStructure
 */
class AffectedCallStructureType extends AffectedStopPointStructureType
{

    /**
     * Order of visit within journey
     *
     * @property int $order
     */
    private $order = null;

    /**
     * Status of call. TPEG 13_6
     *
     * @property string $callCondition
     */
    private $callCondition = null;

    /**
     * @property bool $vehicleAtStop
     */
    private $vehicleAtStop = null;

    /**
     * Exact location that vehicle will take up / or has taken at stop point.
     *
     * @property \Calcinai\Siri\LocationStructureType $vehicleLocationAtStop
     */
    private $vehicleLocationAtStop = null;

    /**
     * @property \DateTime $aimedArrivalTime
     */
    private $aimedArrivalTime = null;

    /**
     * @property \DateTime $actualArrivalTime
     */
    private $actualArrivalTime = null;

    /**
     * @property \DateTime $expectedArrivalTime
     */
    private $expectedArrivalTime = null;

    /**
     * @property string $arrivalStatus
     */
    private $arrivalStatus = null;

    /**
     * @property \Calcinai\Siri\ArrivalPlatformName $arrivalPlatformName
     */
    private $arrivalPlatformName = null;

    /**
     * @property string $arrivalBoardingActivity
     */
    private $arrivalBoardingActivity = null;

    /**
     * @property \DateTime $aimedDepartureTime
     */
    private $aimedDepartureTime = null;

    /**
     * @property \DateTime $actualDepartureTime
     */
    private $actualDepartureTime = null;

    /**
     * @property \DateTime $expectedDepartureTime
     */
    private $expectedDepartureTime = null;

    /**
     * @property string $departureStatus
     */
    private $departureStatus = null;

    /**
     * @property \Calcinai\Siri\DeparturePlatformName $departurePlatformName
     */
    private $departurePlatformName = null;

    /**
     * @property string $departureBoardingActivity
     */
    private $departureBoardingActivity = null;

    /**
     * @property \DateInterval $aimedHeadwayInterval
     */
    private $aimedHeadwayInterval = null;

    /**
     * @property \DateInterval $expectedHeadwayInterval
     */
    private $expectedHeadwayInterval = null;

    /**
     * @property \Calcinai\Siri\AffectedInterchangeStructureType[] $affectedInterchange
     */
    private $affectedInterchange = [
        
    ];

    /**
     * Gets as order
     *
     * Order of visit within journey
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Order of visit within journey
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as callCondition
     *
     * Status of call. TPEG 13_6
     *
     * @return string
     */
    public function getCallCondition()
    {
        return $this->callCondition;
    }

    /**
     * Sets a new callCondition
     *
     * Status of call. TPEG 13_6
     *
     * @param string $callCondition
     * @return self
     */
    public function setCallCondition($callCondition)
    {
        $this->callCondition = $callCondition;
        return $this;
    }

    /**
     * Gets as vehicleAtStop
     *
     * @return bool
     */
    public function getVehicleAtStop()
    {
        return $this->vehicleAtStop;
    }

    /**
     * Sets a new vehicleAtStop
     *
     * @param bool $vehicleAtStop
     * @return self
     */
    public function setVehicleAtStop($vehicleAtStop)
    {
        $this->vehicleAtStop = $vehicleAtStop;
        return $this;
    }

    /**
     * Gets as vehicleLocationAtStop
     *
     * Exact location that vehicle will take up / or has taken at stop point.
     *
     * @return \Calcinai\Siri\LocationStructureType
     */
    public function getVehicleLocationAtStop()
    {
        return $this->vehicleLocationAtStop;
    }

    /**
     * Sets a new vehicleLocationAtStop
     *
     * Exact location that vehicle will take up / or has taken at stop point.
     *
     * @param \Calcinai\Siri\LocationStructureType $vehicleLocationAtStop
     * @return self
     */
    public function setVehicleLocationAtStop(\Calcinai\Siri\LocationStructureType $vehicleLocationAtStop)
    {
        $this->vehicleLocationAtStop = $vehicleLocationAtStop;
        return $this;
    }

    /**
     * Gets as aimedArrivalTime
     *
     * @return \DateTime
     */
    public function getAimedArrivalTime()
    {
        return $this->aimedArrivalTime;
    }

    /**
     * Sets a new aimedArrivalTime
     *
     * @param \DateTime $aimedArrivalTime
     * @return self
     */
    public function setAimedArrivalTime(\DateTime $aimedArrivalTime)
    {
        $this->aimedArrivalTime = $aimedArrivalTime;
        return $this;
    }

    /**
     * Gets as actualArrivalTime
     *
     * @return \DateTime
     */
    public function getActualArrivalTime()
    {
        return $this->actualArrivalTime;
    }

    /**
     * Sets a new actualArrivalTime
     *
     * @param \DateTime $actualArrivalTime
     * @return self
     */
    public function setActualArrivalTime(\DateTime $actualArrivalTime)
    {
        $this->actualArrivalTime = $actualArrivalTime;
        return $this;
    }

    /**
     * Gets as expectedArrivalTime
     *
     * @return \DateTime
     */
    public function getExpectedArrivalTime()
    {
        return $this->expectedArrivalTime;
    }

    /**
     * Sets a new expectedArrivalTime
     *
     * @param \DateTime $expectedArrivalTime
     * @return self
     */
    public function setExpectedArrivalTime(\DateTime $expectedArrivalTime)
    {
        $this->expectedArrivalTime = $expectedArrivalTime;
        return $this;
    }

    /**
     * Gets as arrivalStatus
     *
     * @return string
     */
    public function getArrivalStatus()
    {
        return $this->arrivalStatus;
    }

    /**
     * Sets a new arrivalStatus
     *
     * @param string $arrivalStatus
     * @return self
     */
    public function setArrivalStatus($arrivalStatus)
    {
        $this->arrivalStatus = $arrivalStatus;
        return $this;
    }

    /**
     * Gets as arrivalPlatformName
     *
     * @return \Calcinai\Siri\ArrivalPlatformName
     */
    public function getArrivalPlatformName()
    {
        return $this->arrivalPlatformName;
    }

    /**
     * Sets a new arrivalPlatformName
     *
     * @param \Calcinai\Siri\ArrivalPlatformName $arrivalPlatformName
     * @return self
     */
    public function setArrivalPlatformName(\Calcinai\Siri\ArrivalPlatformName $arrivalPlatformName)
    {
        $this->arrivalPlatformName = $arrivalPlatformName;
        return $this;
    }

    /**
     * Gets as arrivalBoardingActivity
     *
     * @return string
     */
    public function getArrivalBoardingActivity()
    {
        return $this->arrivalBoardingActivity;
    }

    /**
     * Sets a new arrivalBoardingActivity
     *
     * @param string $arrivalBoardingActivity
     * @return self
     */
    public function setArrivalBoardingActivity($arrivalBoardingActivity)
    {
        $this->arrivalBoardingActivity = $arrivalBoardingActivity;
        return $this;
    }

    /**
     * Gets as aimedDepartureTime
     *
     * @return \DateTime
     */
    public function getAimedDepartureTime()
    {
        return $this->aimedDepartureTime;
    }

    /**
     * Sets a new aimedDepartureTime
     *
     * @param \DateTime $aimedDepartureTime
     * @return self
     */
    public function setAimedDepartureTime(\DateTime $aimedDepartureTime)
    {
        $this->aimedDepartureTime = $aimedDepartureTime;
        return $this;
    }

    /**
     * Gets as actualDepartureTime
     *
     * @return \DateTime
     */
    public function getActualDepartureTime()
    {
        return $this->actualDepartureTime;
    }

    /**
     * Sets a new actualDepartureTime
     *
     * @param \DateTime $actualDepartureTime
     * @return self
     */
    public function setActualDepartureTime(\DateTime $actualDepartureTime)
    {
        $this->actualDepartureTime = $actualDepartureTime;
        return $this;
    }

    /**
     * Gets as expectedDepartureTime
     *
     * @return \DateTime
     */
    public function getExpectedDepartureTime()
    {
        return $this->expectedDepartureTime;
    }

    /**
     * Sets a new expectedDepartureTime
     *
     * @param \DateTime $expectedDepartureTime
     * @return self
     */
    public function setExpectedDepartureTime(\DateTime $expectedDepartureTime)
    {
        $this->expectedDepartureTime = $expectedDepartureTime;
        return $this;
    }

    /**
     * Gets as departureStatus
     *
     * @return string
     */
    public function getDepartureStatus()
    {
        return $this->departureStatus;
    }

    /**
     * Sets a new departureStatus
     *
     * @param string $departureStatus
     * @return self
     */
    public function setDepartureStatus($departureStatus)
    {
        $this->departureStatus = $departureStatus;
        return $this;
    }

    /**
     * Gets as departurePlatformName
     *
     * @return \Calcinai\Siri\DeparturePlatformName
     */
    public function getDeparturePlatformName()
    {
        return $this->departurePlatformName;
    }

    /**
     * Sets a new departurePlatformName
     *
     * @param \Calcinai\Siri\DeparturePlatformName $departurePlatformName
     * @return self
     */
    public function setDeparturePlatformName(\Calcinai\Siri\DeparturePlatformName $departurePlatformName)
    {
        $this->departurePlatformName = $departurePlatformName;
        return $this;
    }

    /**
     * Gets as departureBoardingActivity
     *
     * @return string
     */
    public function getDepartureBoardingActivity()
    {
        return $this->departureBoardingActivity;
    }

    /**
     * Sets a new departureBoardingActivity
     *
     * @param string $departureBoardingActivity
     * @return self
     */
    public function setDepartureBoardingActivity($departureBoardingActivity)
    {
        $this->departureBoardingActivity = $departureBoardingActivity;
        return $this;
    }

    /**
     * Gets as aimedHeadwayInterval
     *
     * @return \DateInterval
     */
    public function getAimedHeadwayInterval()
    {
        return $this->aimedHeadwayInterval;
    }

    /**
     * Sets a new aimedHeadwayInterval
     *
     * @param \DateInterval $aimedHeadwayInterval
     * @return self
     */
    public function setAimedHeadwayInterval(\DateInterval $aimedHeadwayInterval)
    {
        $this->aimedHeadwayInterval = $aimedHeadwayInterval;
        return $this;
    }

    /**
     * Gets as expectedHeadwayInterval
     *
     * @return \DateInterval
     */
    public function getExpectedHeadwayInterval()
    {
        return $this->expectedHeadwayInterval;
    }

    /**
     * Sets a new expectedHeadwayInterval
     *
     * @param \DateInterval $expectedHeadwayInterval
     * @return self
     */
    public function setExpectedHeadwayInterval(\DateInterval $expectedHeadwayInterval)
    {
        $this->expectedHeadwayInterval = $expectedHeadwayInterval;
        return $this;
    }

    /**
     * Adds as affectedInterchange
     *
     * @return self
     * @param \Calcinai\Siri\AffectedInterchangeStructureType $affectedInterchange
     */
    public function addToAffectedInterchange(\Calcinai\Siri\AffectedInterchangeStructureType $affectedInterchange)
    {
        $this->affectedInterchange[] = $affectedInterchange;
        return $this;
    }

    /**
     * isset affectedInterchange
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedInterchange($index)
    {
        return isset($this->affectedInterchange[$index]);
    }

    /**
     * unset affectedInterchange
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedInterchange($index)
    {
        unset($this->affectedInterchange[$index]);
    }

    /**
     * Gets as affectedInterchange
     *
     * @return \Calcinai\Siri\AffectedInterchangeStructureType[]
     */
    public function getAffectedInterchange()
    {
        return $this->affectedInterchange;
    }

    /**
     * Sets a new affectedInterchange
     *
     * @param \Calcinai\Siri\AffectedInterchangeStructureType[] $affectedInterchange
     * @return self
     */
    public function setAffectedInterchange(array $affectedInterchange)
    {
        $this->affectedInterchange = $affectedInterchange;
        return $this;
    }


}

