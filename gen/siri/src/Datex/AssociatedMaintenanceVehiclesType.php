<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AssociatedMaintenanceVehiclesType
 *
 * Details of the maintenance vehicles involved in the roadworks activity.#NOTES#
 * XSD Type: AssociatedMaintenanceVehicles
 */
class AssociatedMaintenanceVehiclesType
{

    /**
     * The number of maintenance vehicles associated with the roadworks activities at the specified location.
     *
     * @property int $numberOfMaintenanceVehicles
     */
    private $numberOfMaintenanceVehicles = null;

    /**
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @property string[] $maintenanceVehicleActions
     */
    private $maintenanceVehicleActions = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $associatedMaintenanceVehiclesExtension
     */
    private $associatedMaintenanceVehiclesExtension = null;

    /**
     * Gets as numberOfMaintenanceVehicles
     *
     * The number of maintenance vehicles associated with the roadworks activities at the specified location.
     *
     * @return int
     */
    public function getNumberOfMaintenanceVehicles()
    {
        return $this->numberOfMaintenanceVehicles;
    }

    /**
     * Sets a new numberOfMaintenanceVehicles
     *
     * The number of maintenance vehicles associated with the roadworks activities at the specified location.
     *
     * @param int $numberOfMaintenanceVehicles
     * @return self
     */
    public function setNumberOfMaintenanceVehicles($numberOfMaintenanceVehicles)
    {
        $this->numberOfMaintenanceVehicles = $numberOfMaintenanceVehicles;
        return $this;
    }

    /**
     * Adds as maintenanceVehicleActions
     *
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @return self
     * @param string $maintenanceVehicleActions
     */
    public function addToMaintenanceVehicleActions($maintenanceVehicleActions)
    {
        $this->maintenanceVehicleActions[] = $maintenanceVehicleActions;
        return $this;
    }

    /**
     * isset maintenanceVehicleActions
     *
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaintenanceVehicleActions($index)
    {
        return isset($this->maintenanceVehicleActions[$index]);
    }

    /**
     * unset maintenanceVehicleActions
     *
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaintenanceVehicleActions($index)
    {
        unset($this->maintenanceVehicleActions[$index]);
    }

    /**
     * Gets as maintenanceVehicleActions
     *
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @return string[]
     */
    public function getMaintenanceVehicleActions()
    {
        return $this->maintenanceVehicleActions;
    }

    /**
     * Sets a new maintenanceVehicleActions
     *
     * The actions of the maintenance vehicles associated with the roadworks activities.
     *
     * @param string $maintenanceVehicleActions
     * @return self
     */
    public function setMaintenanceVehicleActions(array $maintenanceVehicleActions)
    {
        $this->maintenanceVehicleActions = $maintenanceVehicleActions;
        return $this;
    }

    /**
     * Gets as associatedMaintenanceVehiclesExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAssociatedMaintenanceVehiclesExtension()
    {
        return $this->associatedMaintenanceVehiclesExtension;
    }

    /**
     * Sets a new associatedMaintenanceVehiclesExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $associatedMaintenanceVehiclesExtension
     * @return self
     */
    public function setAssociatedMaintenanceVehiclesExtension(\Calcinai\Siri\Datex\ExtensionType $associatedMaintenanceVehiclesExtension)
    {
        $this->associatedMaintenanceVehiclesExtension = $associatedMaintenanceVehiclesExtension;
        return $this;
    }


}

