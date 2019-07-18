<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing MonitoredStopVisitStructureType
 *
 * Type for Visit of a vehicle to a stop monitoring point. May provide information about the arrival, the departure or both.
 * XSD Type: MonitoredStopVisitStructure
 */
class MonitoredStopVisitStructureType extends AbstractIdentifiedItemStructureType
{

    /**
     * Identifier of stop monitoring point that Stop Visit applies to
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Identifier associated with Stop Visit for use in direct wireless communication between bus and stop display. Cleardown codes are short arbitrary identifiers suitable for radio transmission.
     *
     * @property string $clearDownRef
     */
    private $clearDownRef = null;

    /**
     * Provides real-time information about the vehicle journey along which a vehicle is running.
     *
     * @property \Calcinai\Siri\Objects\MonitoredVehicleJourneyStructureType $monitoredVehicleJourney
     */
    private $monitoredVehicleJourney = null;

    /**
     * Text associated with Stop Visit.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $stopVisitNote
     */
    private $stopVisitNote = [
        
    ];

    /**
     * @property string $stopFacility
     */
    private $stopFacility = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as monitoringRef
     *
     * Identifier of stop monitoring point that Stop Visit applies to
     *
     * @return string
     */
    public function getMonitoringRef()
    {
        return $this->monitoringRef;
    }

    /**
     * Sets a new monitoringRef
     *
     * Identifier of stop monitoring point that Stop Visit applies to
     *
     * @param string $monitoringRef
     * @return self
     */
    public function setMonitoringRef($monitoringRef)
    {
        $this->monitoringRef = $monitoringRef;
        return $this;
    }

    /**
     * Gets as clearDownRef
     *
     * Identifier associated with Stop Visit for use in direct wireless communication between bus and stop display. Cleardown codes are short arbitrary identifiers suitable for radio transmission.
     *
     * @return string
     */
    public function getClearDownRef()
    {
        return $this->clearDownRef;
    }

    /**
     * Sets a new clearDownRef
     *
     * Identifier associated with Stop Visit for use in direct wireless communication between bus and stop display. Cleardown codes are short arbitrary identifiers suitable for radio transmission.
     *
     * @param string $clearDownRef
     * @return self
     */
    public function setClearDownRef($clearDownRef)
    {
        $this->clearDownRef = $clearDownRef;
        return $this;
    }

    /**
     * Gets as monitoredVehicleJourney
     *
     * Provides real-time information about the vehicle journey along which a vehicle is running.
     *
     * @return \Calcinai\Siri\Objects\MonitoredVehicleJourneyStructureType
     */
    public function getMonitoredVehicleJourney()
    {
        return $this->monitoredVehicleJourney;
    }

    /**
     * Sets a new monitoredVehicleJourney
     *
     * Provides real-time information about the vehicle journey along which a vehicle is running.
     *
     * @param \Calcinai\Siri\Objects\MonitoredVehicleJourneyStructureType $monitoredVehicleJourney
     * @return self
     */
    public function setMonitoredVehicleJourney(\Calcinai\Siri\Objects\MonitoredVehicleJourneyStructureType $monitoredVehicleJourney)
    {
        $this->monitoredVehicleJourney = $monitoredVehicleJourney;
        return $this;
    }

    /**
     * Adds as stopVisitNote
     *
     * Text associated with Stop Visit.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $stopVisitNote
     */
    public function addToStopVisitNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $stopVisitNote)
    {
        $this->stopVisitNote[] = $stopVisitNote;
        return $this;
    }

    /**
     * isset stopVisitNote
     *
     * Text associated with Stop Visit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopVisitNote($index)
    {
        return isset($this->stopVisitNote[$index]);
    }

    /**
     * unset stopVisitNote
     *
     * Text associated with Stop Visit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopVisitNote($index)
    {
        unset($this->stopVisitNote[$index]);
    }

    /**
     * Gets as stopVisitNote
     *
     * Text associated with Stop Visit.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[]
     */
    public function getStopVisitNote()
    {
        return $this->stopVisitNote;
    }

    /**
     * Sets a new stopVisitNote
     *
     * Text associated with Stop Visit.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $stopVisitNote
     * @return self
     */
    public function setStopVisitNote(array $stopVisitNote)
    {
        $this->stopVisitNote = $stopVisitNote;
        return $this;
    }

    /**
     * Gets as stopFacility
     *
     * @return string
     */
    public function getStopFacility()
    {
        return $this->stopFacility;
    }

    /**
     * Sets a new stopFacility
     *
     * @param string $stopFacility
     * @return self
     */
    public function setStopFacility($stopFacility)
    {
        $this->stopFacility = $stopFacility;
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

