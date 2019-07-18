<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing MonitoringCapabilityAccessControlStructureType
 *
 * Type for Monitoring Service Capability access control
 * XSD Type: MonitoringCapabilityAccessControlStructure
 */
class MonitoringCapabilityAccessControlStructureType extends CapabilityAccessControlStructureType
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
     * @property bool $checkMonitoringRef
     */
    private $checkMonitoringRef = null;

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
     * Gets as checkMonitoringRef
     *
     * @return bool
     */
    public function getCheckMonitoringRef()
    {
        return $this->checkMonitoringRef;
    }

    /**
     * Sets a new checkMonitoringRef
     *
     * @param bool $checkMonitoringRef
     * @return self
     */
    public function setCheckMonitoringRef($checkMonitoringRef)
    {
        $this->checkMonitoringRef = $checkMonitoringRef;
        return $this;
    }


}

