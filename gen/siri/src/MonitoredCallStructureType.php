<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing MonitoredCallStructureType
 *
 * Type for Current Call at stop.
 * XSD Type: MonitoredCallStructure
 */
class MonitoredCallStructureType extends AbstractMonitoredCallStructureType
{

    /**
     * @property bool $vehicleAtStop
     */
    private $vehicleAtStop = null;

    /**
     * Exact location that vehicle will take up / or has taken at stop point.
     *
     * @property \Calcinai\Siri\Objects\LocationStructureType $vehicleLocationAtStop
     */
    private $vehicleLocationAtStop = null;

    /**
     * Whether vehicle will reverse at stop. Default is false.
     *
     * @property bool $reversesAtStop
     */
    private $reversesAtStop = null;

    /**
     * For Rail, whether this is a platform traversal at speed, typically triggering an announcement to stand back from platform. If so Boarding Activity of arrival and deparure should be passthrough.
     *
     * @property bool $platformTraversal
     */
    private $platformTraversal = null;

    /**
     * Status of signal clearance for train. This may affect the prioritiisition and emphasis given to arrival or departure on displays - e.g. cleared trains appear first, flashing in green.
     *
     * @property string $signalStatus
     */
    private $signalStatus = null;

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
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationDisplay
     */
    private $destinationDisplay = null;

    /**
     * Text annotation that applies to this call.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $callNote
     */
    private $callNote = [
        
    ];

    /**
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @property \Calcinai\Siri\Objects\FacilityConditionElement[] $facilityConditionElement
     */
    private $facilityConditionElement = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement
     */
    private $facilityChangeElement = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef[] $situationRef
     */
    private $situationRef = [
        
    ];

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
     * Gets as vehicleLocationAtStop
     *
     * Exact location that vehicle will take up / or has taken at stop point.
     *
     * @return \Calcinai\Siri\Objects\LocationStructureType
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
     * @param \Calcinai\Siri\Objects\LocationStructureType $vehicleLocationAtStop
     * @return self
     */
    public function setVehicleLocationAtStop(\Calcinai\Siri\Objects\LocationStructureType $vehicleLocationAtStop)
    {
        $this->vehicleLocationAtStop = $vehicleLocationAtStop;
        return $this;
    }

    /**
     * Gets as reversesAtStop
     *
     * Whether vehicle will reverse at stop. Default is false.
     *
     * @return bool
     */
    public function getReversesAtStop()
    {
        return $this->reversesAtStop;
    }

    /**
     * Sets a new reversesAtStop
     *
     * Whether vehicle will reverse at stop. Default is false.
     *
     * @param bool $reversesAtStop
     * @return self
     */
    public function setReversesAtStop($reversesAtStop)
    {
        $this->reversesAtStop = $reversesAtStop;
        return $this;
    }

    /**
     * Gets as platformTraversal
     *
     * For Rail, whether this is a platform traversal at speed, typically triggering an announcement to stand back from platform. If so Boarding Activity of arrival and deparure should be passthrough.
     *
     * @return bool
     */
    public function getPlatformTraversal()
    {
        return $this->platformTraversal;
    }

    /**
     * Sets a new platformTraversal
     *
     * For Rail, whether this is a platform traversal at speed, typically triggering an announcement to stand back from platform. If so Boarding Activity of arrival and deparure should be passthrough.
     *
     * @param bool $platformTraversal
     * @return self
     */
    public function setPlatformTraversal($platformTraversal)
    {
        $this->platformTraversal = $platformTraversal;
        return $this;
    }

    /**
     * Gets as signalStatus
     *
     * Status of signal clearance for train. This may affect the prioritiisition and emphasis given to arrival or departure on displays - e.g. cleared trains appear first, flashing in green.
     *
     * @return string
     */
    public function getSignalStatus()
    {
        return $this->signalStatus;
    }

    /**
     * Sets a new signalStatus
     *
     * Status of signal clearance for train. This may affect the prioritiisition and emphasis given to arrival or departure on displays - e.g. cleared trains appear first, flashing in green.
     *
     * @param string $signalStatus
     * @return self
     */
    public function setSignalStatus($signalStatus)
    {
        $this->signalStatus = $signalStatus;
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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationDisplay
     * @return self
     */
    public function setDestinationDisplay(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $destinationDisplay)
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $callNote
     */
    public function addToCallNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $callNote)
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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[]
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $callNote
     * @return self
     */
    public function setCallNote(array $callNote)
    {
        $this->callNote = $callNote;
        return $this;
    }

    /**
     * Adds as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement
     */
    public function addToFacilityConditionElement(\Calcinai\Siri\Objects\FacilityConditionElement $facilityConditionElement)
    {
        $this->facilityConditionElement[] = $facilityConditionElement;
        return $this;
    }

    /**
     * isset facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityConditionElement($index)
    {
        return isset($this->facilityConditionElement[$index]);
    }

    /**
     * unset facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityConditionElement($index)
    {
        unset($this->facilityConditionElement[$index]);
    }

    /**
     * Gets as facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @return \Calcinai\Siri\Objects\FacilityConditionElement[]
     */
    public function getFacilityConditionElement()
    {
        return $this->facilityConditionElement;
    }

    /**
     * Sets a new facilityConditionElement
     *
     * Information about a change of Equipment availabiltiy at stop that may affect access or use.
     *
     * @param \Calcinai\Siri\Objects\FacilityConditionElement[] $facilityConditionElement
     * @return self
     */
    public function setFacilityConditionElement(array $facilityConditionElement)
    {
        $this->facilityConditionElement = $facilityConditionElement;
        return $this;
    }

    /**
     * Gets as facilityChangeElement
     *
     * @return \Calcinai\Siri\Objects\FacilityChangeElement
     */
    public function getFacilityChangeElement()
    {
        return $this->facilityChangeElement;
    }

    /**
     * Sets a new facilityChangeElement
     *
     * @param \Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement
     * @return self
     */
    public function setFacilityChangeElement(\Calcinai\Siri\Objects\FacilityChangeElement $facilityChangeElement)
    {
        $this->facilityChangeElement = $facilityChangeElement;
        return $this;
    }

    /**
     * Adds as situationRef
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    public function addToSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef[] = $situationRef;
        return $this;
    }

    /**
     * isset situationRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationRef($index)
    {
        return isset($this->situationRef[$index]);
    }

    /**
     * unset situationRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationRef($index)
    {
        unset($this->situationRef[$index]);
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef[]
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef[] $situationRef
     * @return self
     */
    public function setSituationRef(array $situationRef)
    {
        $this->situationRef = $situationRef;
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

