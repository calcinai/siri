<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing NetworkManagementType
 *
 * Changes to the configuration or usability of the road network whether by legal order or by operational decisions. It includes road and lane closures, weight and dimensional limits, vehicle restrictions, contraflows and rerouting operations.
 * XSD Type: NetworkManagement
 */
class NetworkManagementType extends OperatorActionType
{

    /**
     * The type of network control imposed by an operator.
     *
     * @property string $networkManagementType
     */
    private $networkManagementType = null;

    /**
     * @property \Calcinai\Siri\Datex\VehicleCharacteristicsType[] $forVehicleWithCharacteristicsOf
     */
    private $forVehicleWithCharacteristicsOf = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\RestrictionType $restriction
     */
    private $restriction = null;

    /**
     * @property \Calcinai\Siri\Datex\TrafficControlType $trafficControl
     */
    private $trafficControl = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $networkManagementExtension
     */
    private $networkManagementExtension = null;

    /**
     * Gets as networkManagementType
     *
     * The type of network control imposed by an operator.
     *
     * @return string
     */
    public function getNetworkManagementType()
    {
        return $this->networkManagementType;
    }

    /**
     * Sets a new networkManagementType
     *
     * The type of network control imposed by an operator.
     *
     * @param string $networkManagementType
     * @return self
     */
    public function setNetworkManagementType($networkManagementType)
    {
        $this->networkManagementType = $networkManagementType;
        return $this;
    }

    /**
     * Adds as forVehicleWithCharacteristicsOf
     *
     * @return self
     * @param \Calcinai\Siri\Datex\VehicleCharacteristicsType $forVehicleWithCharacteristicsOf
     */
    public function addToForVehicleWithCharacteristicsOf(\Calcinai\Siri\Datex\VehicleCharacteristicsType $forVehicleWithCharacteristicsOf)
    {
        $this->forVehicleWithCharacteristicsOf[] = $forVehicleWithCharacteristicsOf;
        return $this;
    }

    /**
     * isset forVehicleWithCharacteristicsOf
     *
     * @param int|string $index
     * @return bool
     */
    public function issetForVehicleWithCharacteristicsOf($index)
    {
        return isset($this->forVehicleWithCharacteristicsOf[$index]);
    }

    /**
     * unset forVehicleWithCharacteristicsOf
     *
     * @param int|string $index
     * @return void
     */
    public function unsetForVehicleWithCharacteristicsOf($index)
    {
        unset($this->forVehicleWithCharacteristicsOf[$index]);
    }

    /**
     * Gets as forVehicleWithCharacteristicsOf
     *
     * @return \Calcinai\Siri\Datex\VehicleCharacteristicsType[]
     */
    public function getForVehicleWithCharacteristicsOf()
    {
        return $this->forVehicleWithCharacteristicsOf;
    }

    /**
     * Sets a new forVehicleWithCharacteristicsOf
     *
     * @param \Calcinai\Siri\Datex\VehicleCharacteristicsType[] $forVehicleWithCharacteristicsOf
     * @return self
     */
    public function setForVehicleWithCharacteristicsOf(array $forVehicleWithCharacteristicsOf)
    {
        $this->forVehicleWithCharacteristicsOf = $forVehicleWithCharacteristicsOf;
        return $this;
    }

    /**
     * Gets as restriction
     *
     * @return \Calcinai\Siri\Datex\RestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * @param \Calcinai\Siri\Datex\RestrictionType $restriction
     * @return self
     */
    public function setRestriction(\Calcinai\Siri\Datex\RestrictionType $restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Gets as trafficControl
     *
     * @return \Calcinai\Siri\Datex\TrafficControlType
     */
    public function getTrafficControl()
    {
        return $this->trafficControl;
    }

    /**
     * Sets a new trafficControl
     *
     * @param \Calcinai\Siri\Datex\TrafficControlType $trafficControl
     * @return self
     */
    public function setTrafficControl(\Calcinai\Siri\Datex\TrafficControlType $trafficControl)
    {
        $this->trafficControl = $trafficControl;
        return $this;
    }

    /**
     * Gets as networkManagementExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getNetworkManagementExtension()
    {
        return $this->networkManagementExtension;
    }

    /**
     * Sets a new networkManagementExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $networkManagementExtension
     * @return self
     */
    public function setNetworkManagementExtension(\Calcinai\Siri\Datex\ExtensionType $networkManagementExtension)
    {
        $this->networkManagementExtension = $networkManagementExtension;
        return $this;
    }


}

