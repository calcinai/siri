<?php

namespace Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilitiesStructureType;

use Calcinai\Siri\Objects\CapabilityAccessControlStructureType;

/**
 * Class representing AccessControlAType
 */
class AccessControlAType extends CapabilityAccessControlStructureType
{

    /**
     * @property bool $checkOperatorRef
     */
    private $checkOperatorRef = null;

    /**
     * @property bool $checkLineRef
     */
    private $checkLineRef = null;

    /**
     * If access control is supported, whether access control by monitoring point is supported. Default is true.
     *
     * @property bool $checkVehicleMonitoringRef
     */
    private $checkVehicleMonitoringRef = null;

    /**
     * Gets as checkOperatorRef
     *
     * @return bool
     */
    public function getCheckOperatorRef()
    {
        return $this->checkOperatorRef;
    }

    /**
     * Sets a new checkOperatorRef
     *
     * @param bool $checkOperatorRef
     * @return self
     */
    public function setCheckOperatorRef($checkOperatorRef)
    {
        $this->checkOperatorRef = $checkOperatorRef;
        return $this;
    }

    /**
     * Gets as checkLineRef
     *
     * @return bool
     */
    public function getCheckLineRef()
    {
        return $this->checkLineRef;
    }

    /**
     * Sets a new checkLineRef
     *
     * @param bool $checkLineRef
     * @return self
     */
    public function setCheckLineRef($checkLineRef)
    {
        $this->checkLineRef = $checkLineRef;
        return $this;
    }

    /**
     * Gets as checkVehicleMonitoringRef
     *
     * If access control is supported, whether access control by monitoring point is supported. Default is true.
     *
     * @return bool
     */
    public function getCheckVehicleMonitoringRef()
    {
        return $this->checkVehicleMonitoringRef;
    }

    /**
     * Sets a new checkVehicleMonitoringRef
     *
     * If access control is supported, whether access control by monitoring point is supported. Default is true.
     *
     * @param bool $checkVehicleMonitoringRef
     * @return self
     */
    public function setCheckVehicleMonitoringRef($checkVehicleMonitoringRef)
    {
        $this->checkVehicleMonitoringRef = $checkVehicleMonitoringRef;
        return $this;
    }


}

