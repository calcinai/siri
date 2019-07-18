<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TimetabledStopVisitStructureType
 *
 * Data type for Timetabled Visit of a vehicle to a stop. May provide information about the arrival, the departure or both.
 * XSD Type: TimetabledStopVisitStructure
 */
class TimetabledStopVisitStructureType extends AbstractIdentifiedItemStructureType
{

    /**
     * Identifier of stop monitoring point that Stop Visit applies.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Timetabled vehicle journey
     *
     * @property \Calcinai\Siri\Objects\TargetedVehicleJourneyStructureType $targetedVehicleJourney
     */
    private $targetedVehicleJourney = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as monitoringRef
     *
     * Identifier of stop monitoring point that Stop Visit applies.
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
     * Identifier of stop monitoring point that Stop Visit applies.
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
     * Gets as targetedVehicleJourney
     *
     * Timetabled vehicle journey
     *
     * @return \Calcinai\Siri\Objects\TargetedVehicleJourneyStructureType
     */
    public function getTargetedVehicleJourney()
    {
        return $this->targetedVehicleJourney;
    }

    /**
     * Sets a new targetedVehicleJourney
     *
     * Timetabled vehicle journey
     *
     * @param \Calcinai\Siri\Objects\TargetedVehicleJourneyStructureType $targetedVehicleJourney
     * @return self
     */
    public function setTargetedVehicleJourney(\Calcinai\Siri\Objects\TargetedVehicleJourneyStructureType $targetedVehicleJourney)
    {
        $this->targetedVehicleJourney = $targetedVehicleJourney;
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

