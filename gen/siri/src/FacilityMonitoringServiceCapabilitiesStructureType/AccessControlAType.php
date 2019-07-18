<?php

namespace Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType;

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


}

