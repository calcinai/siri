<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing MaintenanceWorksType
 *
 * Roadworks involving the maintenance or installation of infrastructure.#NOTES#
 * XSD Type: MaintenanceWorks
 */
class MaintenanceWorksType extends RoadworksType
{

    /**
     * The type of road maintenance or installation work at the specified location.
     *
     * @property string[] $roadMaintenanceType
     */
    private $roadMaintenanceType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $maintenanceWorksExtension
     */
    private $maintenanceWorksExtension = null;

    /**
     * Adds as roadMaintenanceType
     *
     * The type of road maintenance or installation work at the specified location.
     *
     * @return self
     * @param string $roadMaintenanceType
     */
    public function addToRoadMaintenanceType($roadMaintenanceType)
    {
        $this->roadMaintenanceType[] = $roadMaintenanceType;
        return $this;
    }

    /**
     * isset roadMaintenanceType
     *
     * The type of road maintenance or installation work at the specified location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoadMaintenanceType($index)
    {
        return isset($this->roadMaintenanceType[$index]);
    }

    /**
     * unset roadMaintenanceType
     *
     * The type of road maintenance or installation work at the specified location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoadMaintenanceType($index)
    {
        unset($this->roadMaintenanceType[$index]);
    }

    /**
     * Gets as roadMaintenanceType
     *
     * The type of road maintenance or installation work at the specified location.
     *
     * @return string[]
     */
    public function getRoadMaintenanceType()
    {
        return $this->roadMaintenanceType;
    }

    /**
     * Sets a new roadMaintenanceType
     *
     * The type of road maintenance or installation work at the specified location.
     *
     * @param string $roadMaintenanceType
     * @return self
     */
    public function setRoadMaintenanceType(array $roadMaintenanceType)
    {
        $this->roadMaintenanceType = $roadMaintenanceType;
        return $this;
    }

    /**
     * Gets as maintenanceWorksExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getMaintenanceWorksExtension()
    {
        return $this->maintenanceWorksExtension;
    }

    /**
     * Sets a new maintenanceWorksExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $maintenanceWorksExtension
     * @return self
     */
    public function setMaintenanceWorksExtension(\Calcinai\Siri\Datex\ExtensionType $maintenanceWorksExtension)
    {
        $this->maintenanceWorksExtension = $maintenanceWorksExtension;
        return $this;
    }


}

