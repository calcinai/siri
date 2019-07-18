<?php

namespace Calcinai\Siri;

/**
 * Class representing DatedCallStructureType
 *
 * Data type for Planned Vehicle Journey Stop (Production Timetable Service).
 * XSD Type: DatedCallStructure
 */
class DatedCallStructureType
{

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property int $visitNumber
     */
    private $visitNumber = null;

    /**
     * @property int $order
     */
    private $order = null;

    /**
     * @property \Calcinai\Siri\StopPointName $stopPointName
     */
    private $stopPointName = null;

    /**
     * @property bool $timingPoint
     */
    private $timingPoint = null;

    /**
     * Whether this is a Hail and Ride Stop. Default is false.
     *
     * @property bool $boardingStretch
     */
    private $boardingStretch = null;

    /**
     * Whether Vehicle stops only if requested explicitly by passenger. Default is false.
     *
     * @property bool $requestStop
     */
    private $requestStop = null;

    /**
     * Destination to show for the vehicle at the specific stop (vehicle signage), if different to the Destination Name for the full journey.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay
     */
    private $destinationDisplay = null;

    /**
     * Text annotation that applies to this call.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType[] $callNote
     */
    private $callNote = [
        
    ];

    /**
     * @property \DateTime $aimedArrivalTime
     */
    private $aimedArrivalTime = null;

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
     * Information on any planned connections. If omitted: No connections.
     *
     * @property \Calcinai\Siri\TargetedInterchangeStructureType[] $targetedInterchange
     */
    private $targetedInterchange = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as visitNumber
     *
     * @return int
     */
    public function getVisitNumber()
    {
        return $this->visitNumber;
    }

    /**
     * Sets a new visitNumber
     *
     * @param int $visitNumber
     * @return self
     */
    public function setVisitNumber($visitNumber)
    {
        $this->visitNumber = $visitNumber;
        return $this;
    }

    /**
     * Gets as order
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
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as stopPointName
     *
     * @return \Calcinai\Siri\StopPointName
     */
    public function getStopPointName()
    {
        return $this->stopPointName;
    }

    /**
     * Sets a new stopPointName
     *
     * @param \Calcinai\Siri\StopPointName $stopPointName
     * @return self
     */
    public function setStopPointName(\Calcinai\Siri\StopPointName $stopPointName)
    {
        $this->stopPointName = $stopPointName;
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
     * Gets as boardingStretch
     *
     * Whether this is a Hail and Ride Stop. Default is false.
     *
     * @return bool
     */
    public function getBoardingStretch()
    {
        return $this->boardingStretch;
    }

    /**
     * Sets a new boardingStretch
     *
     * Whether this is a Hail and Ride Stop. Default is false.
     *
     * @param bool $boardingStretch
     * @return self
     */
    public function setBoardingStretch($boardingStretch)
    {
        $this->boardingStretch = $boardingStretch;
        return $this;
    }

    /**
     * Gets as requestStop
     *
     * Whether Vehicle stops only if requested explicitly by passenger. Default is false.
     *
     * @return bool
     */
    public function getRequestStop()
    {
        return $this->requestStop;
    }

    /**
     * Sets a new requestStop
     *
     * Whether Vehicle stops only if requested explicitly by passenger. Default is false.
     *
     * @param bool $requestStop
     * @return self
     */
    public function setRequestStop($requestStop)
    {
        $this->requestStop = $requestStop;
        return $this;
    }

    /**
     * Gets as destinationDisplay
     *
     * Destination to show for the vehicle at the specific stop (vehicle signage), if different to the Destination Name for the full journey.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDestinationDisplay()
    {
        return $this->destinationDisplay;
    }

    /**
     * Sets a new destinationDisplay
     *
     * Destination to show for the vehicle at the specific stop (vehicle signage), if different to the Destination Name for the full journey.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay
     * @return self
     */
    public function setDestinationDisplay(\Calcinai\Siri\NaturalLanguageStringStructureType $destinationDisplay)
    {
        $this->destinationDisplay = $destinationDisplay;
        return $this;
    }

    /**
     * Adds as callNote
     *
     * Text annotation that applies to this call.
     *
     * @return self
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $callNote
     */
    public function addToCallNote(\Calcinai\Siri\NaturalLanguageStringStructureType $callNote)
    {
        $this->callNote[] = $callNote;
        return $this;
    }

    /**
     * isset callNote
     *
     * Text annotation that applies to this call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCallNote($index)
    {
        return isset($this->callNote[$index]);
    }

    /**
     * unset callNote
     *
     * Text annotation that applies to this call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCallNote($index)
    {
        unset($this->callNote[$index]);
    }

    /**
     * Gets as callNote
     *
     * Text annotation that applies to this call.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType[]
     */
    public function getCallNote()
    {
        return $this->callNote;
    }

    /**
     * Sets a new callNote
     *
     * Text annotation that applies to this call.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType[] $callNote
     * @return self
     */
    public function setCallNote(array $callNote)
    {
        $this->callNote = $callNote;
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
     * Adds as targetedInterchange
     *
     * Information on any planned connections. If omitted: No connections.
     *
     * @return self
     * @param \Calcinai\Siri\TargetedInterchangeStructureType $targetedInterchange
     */
    public function addToTargetedInterchange(\Calcinai\Siri\TargetedInterchangeStructureType $targetedInterchange)
    {
        $this->targetedInterchange[] = $targetedInterchange;
        return $this;
    }

    /**
     * isset targetedInterchange
     *
     * Information on any planned connections. If omitted: No connections.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetedInterchange($index)
    {
        return isset($this->targetedInterchange[$index]);
    }

    /**
     * unset targetedInterchange
     *
     * Information on any planned connections. If omitted: No connections.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetedInterchange($index)
    {
        unset($this->targetedInterchange[$index]);
    }

    /**
     * Gets as targetedInterchange
     *
     * Information on any planned connections. If omitted: No connections.
     *
     * @return \Calcinai\Siri\TargetedInterchangeStructureType[]
     */
    public function getTargetedInterchange()
    {
        return $this->targetedInterchange;
    }

    /**
     * Sets a new targetedInterchange
     *
     * Information on any planned connections. If omitted: No connections.
     *
     * @param \Calcinai\Siri\TargetedInterchangeStructureType[] $targetedInterchange
     * @return self
     */
    public function setTargetedInterchange(array $targetedInterchange)
    {
        $this->targetedInterchange = $targetedInterchange;
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

