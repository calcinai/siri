<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing OnwardCallStructureType
 *
 * Type Onwards calls at stop.
 * XSD Type: OnwardCallStructure
 */
class OnwardCallStructureType extends AbstractMonitoredCallStructureType
{

    /**
     * @property bool $vehicleAtStop
     */
    private $vehicleAtStop = null;

    /**
     * @property bool $timingPoint
     */
    private $timingPoint = null;

    /**
     * @property \DateTime $aimedArrivalTime
     */
    private $aimedArrivalTime = null;

    /**
     * @property \DateTime $expectedArrivalTime
     */
    private $expectedArrivalTime = null;

    /**
     * @property string $arrivalStatus
     */
    private $arrivalStatus = null;

    /**
     * @property \Calcinai\Siri\Objects\ArrivalPlatformName $arrivalPlatformName
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
     * @property \DateTime $expectedDepartureTime
     */
    private $expectedDepartureTime = null;

    /**
     * @property string $departureStatus
     */
    private $departureStatus = null;

    /**
     * @property \Calcinai\Siri\Objects\DeparturePlatformName $departurePlatformName
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
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

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
     * Gets as timingPoint
     *
     * @return bool
     */
    public function getTimingPoint()
    {
        return $this->timingPoint;
    }

    /**
     * Sets a new timingPoint
     *
     * @param bool $timingPoint
     * @return self
     */
    public function setTimingPoint($timingPoint)
    {
        $this->timingPoint = $timingPoint;
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
     * @return \Calcinai\Siri\Objects\ArrivalPlatformName
     */
    public function getArrivalPlatformName()
    {
        return $this->arrivalPlatformName;
    }

    /**
     * Sets a new arrivalPlatformName
     *
     * @param \Calcinai\Siri\Objects\ArrivalPlatformName $arrivalPlatformName
     * @return self
     */
    public function setArrivalPlatformName(\Calcinai\Siri\Objects\ArrivalPlatformName $arrivalPlatformName)
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
     * @return \Calcinai\Siri\Objects\DeparturePlatformName
     */
    public function getDeparturePlatformName()
    {
        return $this->departurePlatformName;
    }

    /**
     * Sets a new departurePlatformName
     *
     * @param \Calcinai\Siri\Objects\DeparturePlatformName $departurePlatformName
     * @return self
     */
    public function setDeparturePlatformName(\Calcinai\Siri\Objects\DeparturePlatformName $departurePlatformName)
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

