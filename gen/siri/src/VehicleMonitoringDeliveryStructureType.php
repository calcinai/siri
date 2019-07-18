<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringDeliveryStructureType
 *
 * Data type for Delivery for Vehicle Monitoring Service. Provides information about one or more vehicles; each has its own vehicle activity element.
 * XSD Type: VehicleMonitoringDeliveryStructure
 */
class VehicleMonitoringDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Describes the progress of a vehicle along its route.
     *
     * @property \Calcinai\Siri\Objects\VehicleActivityStructureType $vehicleActivity
     */
    private $vehicleActivity = null;

    /**
     * Reference to an previously communicated vehicle activity which should now be removed from the system.
     *
     * @property \Calcinai\Siri\Objects\VehicleActivityCancellationStructureType $vehicleActivityCancellation
     */
    private $vehicleActivityCancellation = null;

    /**
     * Annotation to accompany of Vehicle Activities.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleActivityNote
     */
    private $vehicleActivityNote = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of response. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as vehicleActivity
     *
     * Describes the progress of a vehicle along its route.
     *
     * @return \Calcinai\Siri\Objects\VehicleActivityStructureType
     */
    public function getVehicleActivity()
    {
        return $this->vehicleActivity;
    }

    /**
     * Sets a new vehicleActivity
     *
     * Describes the progress of a vehicle along its route.
     *
     * @param \Calcinai\Siri\Objects\VehicleActivityStructureType $vehicleActivity
     * @return self
     */
    public function setVehicleActivity(\Calcinai\Siri\Objects\VehicleActivityStructureType $vehicleActivity)
    {
        $this->vehicleActivity = $vehicleActivity;
        return $this;
    }

    /**
     * Gets as vehicleActivityCancellation
     *
     * Reference to an previously communicated vehicle activity which should now be removed from the system.
     *
     * @return \Calcinai\Siri\Objects\VehicleActivityCancellationStructureType
     */
    public function getVehicleActivityCancellation()
    {
        return $this->vehicleActivityCancellation;
    }

    /**
     * Sets a new vehicleActivityCancellation
     *
     * Reference to an previously communicated vehicle activity which should now be removed from the system.
     *
     * @param \Calcinai\Siri\Objects\VehicleActivityCancellationStructureType $vehicleActivityCancellation
     * @return self
     */
    public function setVehicleActivityCancellation(\Calcinai\Siri\Objects\VehicleActivityCancellationStructureType $vehicleActivityCancellation)
    {
        $this->vehicleActivityCancellation = $vehicleActivityCancellation;
        return $this;
    }

    /**
     * Gets as vehicleActivityNote
     *
     * Annotation to accompany of Vehicle Activities.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getVehicleActivityNote()
    {
        return $this->vehicleActivityNote;
    }

    /**
     * Sets a new vehicleActivityNote
     *
     * Annotation to accompany of Vehicle Activities.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleActivityNote
     * @return self
     */
    public function setVehicleActivityNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $vehicleActivityNote)
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

