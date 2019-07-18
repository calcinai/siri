<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\VehicleActivityStructureType $vehicleActivity
     */
    private $vehicleActivity = null;

    /**
     * Reference to an previously communicated vehicle activity which should now be removed from the system.
     *
     * @property \Calcinai\Siri\VehicleActivityCancellationStructureType $vehicleActivityCancellation
     */
    private $vehicleActivityCancellation = null;

    /**
     * Annotation to accompany of Vehicle Activities.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $vehicleActivityNote
     */
    private $vehicleActivityNote = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * @return \Calcinai\Siri\VehicleActivityStructureType
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
     * @param \Calcinai\Siri\VehicleActivityStructureType $vehicleActivity
     * @return self
     */
    public function setVehicleActivity(\Calcinai\Siri\VehicleActivityStructureType $vehicleActivity)
    {
        $this->vehicleActivity = $vehicleActivity;
        return $this;
    }

    /**
     * Gets as vehicleActivityCancellation
     *
     * Reference to an previously communicated vehicle activity which should now be removed from the system.
     *
     * @return \Calcinai\Siri\VehicleActivityCancellationStructureType
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
     * @param \Calcinai\Siri\VehicleActivityCancellationStructureType $vehicleActivityCancellation
     * @return self
     */
    public function setVehicleActivityCancellation(\Calcinai\Siri\VehicleActivityCancellationStructureType $vehicleActivityCancellation)
    {
        $this->vehicleActivityCancellation = $vehicleActivityCancellation;
        return $this;
    }

    /**
     * Gets as vehicleActivityNote
     *
     * Annotation to accompany of Vehicle Activities.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $vehicleActivityNote
     * @return self
     */
    public function setVehicleActivityNote(\Calcinai\Siri\NaturalLanguageStringStructureType $vehicleActivityNote)
    {
        $this->vehicleActivityNote = $vehicleActivityNote;
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

