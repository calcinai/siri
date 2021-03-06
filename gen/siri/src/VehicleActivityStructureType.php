<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleActivityStructureType
 *
 * Data type for a Vehicle Activity.
 * XSD Type: VehicleActivityStructure
 */
class VehicleActivityStructureType extends AbstractIdentifiedItemStructureType
{

    /**
     * Time until which data is valid.
     *
     * @property \DateTime $validUntilTime
     */
    private $validUntilTime = null;

    /**
     * Reference to monitoring group used to which vehicle belongs
     *
     * @property string $vehicleMonitoringRef
     */
    private $vehicleMonitoringRef = null;

    /**
     * Provides information about the progress of the vehicle along its current link.
     *
     * @property \Calcinai\Siri\Objects\ProgressBetweenStopsStructureType $progressBetweenStops
     */
    private $progressBetweenStops = null;

    /**
     * Monitored vehicle journey that vehicle is following.
     *
     * @property \Calcinai\Siri\Objects\VehicleActivityStructureType\MonitoredVehicleJourneyAType $monitoredVehicleJourney
     */
    private $monitoredVehicleJourney = null;

    /**
     * Text associated with Delivery.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $vehicleActivityNote
     */
    private $vehicleActivityNote = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as validUntilTime
     *
     * Time until which data is valid.
     *
     * @return \DateTime
     */
    public function getValidUntilTime()
    {
        return $this->validUntilTime;
    }

    /**
     * Sets a new validUntilTime
     *
     * Time until which data is valid.
     *
     * @param \DateTime $validUntilTime
     * @return self
     */
    public function setValidUntilTime(\DateTime $validUntilTime)
    {
        $this->validUntilTime = $validUntilTime;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringRef
     *
     * Reference to monitoring group used to which vehicle belongs
     *
     * @return string
     */
    public function getVehicleMonitoringRef()
    {
        return $this->vehicleMonitoringRef;
    }

    /**
     * Sets a new vehicleMonitoringRef
     *
     * Reference to monitoring group used to which vehicle belongs
     *
     * @param string $vehicleMonitoringRef
     * @return self
     */
    public function setVehicleMonitoringRef($vehicleMonitoringRef)
    {
        $this->vehicleMonitoringRef = $vehicleMonitoringRef;
        return $this;
    }

    /**
     * Gets as progressBetweenStops
     *
     * Provides information about the progress of the vehicle along its current link.
     *
     * @return \Calcinai\Siri\Objects\ProgressBetweenStopsStructureType
     */
    public function getProgressBetweenStops()
    {
        return $this->progressBetweenStops;
    }

    /**
     * Sets a new progressBetweenStops
     *
     * Provides information about the progress of the vehicle along its current link.
     *
     * @param \Calcinai\Siri\Objects\ProgressBetweenStopsStructureType $progressBetweenStops
     * @return self
     */
    public function setProgressBetweenStops(\Calcinai\Siri\Objects\ProgressBetweenStopsStructureType $progressBetweenStops)
    {
        $this->progressBetweenStops = $progressBetweenStops;
        return $this;
    }

    /**
     * Gets as monitoredVehicleJourney
     *
     * Monitored vehicle journey that vehicle is following.
     *
     * @return \Calcinai\Siri\Objects\VehicleActivityStructureType\MonitoredVehicleJourneyAType
     */
    public function getMonitoredVehicleJourney()
    {
        return $this->monitoredVehicleJourney;
    }

    /**
     * Sets a new monitoredVehicleJourney
     *
     * Monitored vehicle journey that vehicle is following.
     *
     * @param \Calcinai\Siri\Objects\VehicleActivityStructureType\MonitoredVehicleJourneyAType $monitoredVehicleJourney
     * @return self
     */
    public function setMonitoredVehicleJourney(\Calcinai\Siri\Objects\VehicleActivityStructureType\MonitoredVehicleJourneyAType $monitoredVehicleJourney)
    {
        $this->monitoredVehicleJourney = $monitoredVehicleJourney;
        return $this;
    }

    /**
     * Adds as vehicleActivityNote
     *
     * Text associated with Delivery.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleActivityNote
     */
    public function addToVehicleActivityNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleActivityNote)
    {
        $this->vehicleActivityNote[] = $vehicleActivityNote;
        return $this;
    }

    /**
     * isset vehicleActivityNote
     *
     * Text associated with Delivery.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleActivityNote($index)
    {
        return isset($this->vehicleActivityNote[$index]);
    }

    /**
     * unset vehicleActivityNote
     *
     * Text associated with Delivery.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleActivityNote($index)
    {
        unset($this->vehicleActivityNote[$index]);
    }

    /**
     * Gets as vehicleActivityNote
     *
     * Text associated with Delivery.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[]
     */
    public function getVehicleActivityNote()
    {
        return $this->vehicleActivityNote;
    }

    /**
     * Sets a new vehicleActivityNote
     *
     * Text associated with Delivery.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $vehicleActivityNote
     * @return self
     */
    public function setVehicleActivityNote(array $vehicleActivityNote)
    {
        $this->vehicleActivityNote = $vehicleActivityNote;
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

