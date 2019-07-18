<?php

namespace Calcinai\Siri\VehicleMonitoringServiceCapabilitiesStructureType;

use Calcinai\Siri\CapabilityRequestPolicyStructureType;

/**
 * Class representing RequestPolicyAType
 */
class RequestPolicyAType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whther Detail level filtering is supported. Default false
     *
     * @property bool $hasDetailLevel
     */
    private $hasDetailLevel = null;

    /**
     * Detail level. Default Normal.
     *
     * @property string $defaultDetailLevel
     */
    private $defaultDetailLevel = null;

    /**
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @property bool $hasMaximumVehicles
     */
    private $hasMaximumVehicles = null;

    /**
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @property bool $hasNumberOfOnwardsCalls
     */
    private $hasNumberOfOnwardsCalls = null;

    /**
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @property bool $hasNumberOfPreviousCalls
     */
    private $hasNumberOfPreviousCalls = null;

    /**
     * Gets as hasDetailLevel
     *
     * Whther Detail level filtering is supported. Default false
     *
     * @return bool
     */
    public function getHasDetailLevel()
    {
        return $this->hasDetailLevel;
    }

    /**
     * Sets a new hasDetailLevel
     *
     * Whther Detail level filtering is supported. Default false
     *
     * @param bool $hasDetailLevel
     * @return self
     */
    public function setHasDetailLevel($hasDetailLevel)
    {
        $this->hasDetailLevel = $hasDetailLevel;
        return $this;
    }

    /**
     * Gets as defaultDetailLevel
     *
     * Detail level. Default Normal.
     *
     * @return string
     */
    public function getDefaultDetailLevel()
    {
        return $this->defaultDetailLevel;
    }

    /**
     * Sets a new defaultDetailLevel
     *
     * Detail level. Default Normal.
     *
     * @param string $defaultDetailLevel
     * @return self
     */
    public function setDefaultDetailLevel($defaultDetailLevel)
    {
        $this->defaultDetailLevel = $defaultDetailLevel;
        return $this;
    }

    /**
     * Gets as hasMaximumVehicles
     *
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @return bool
     */
    public function getHasMaximumVehicles()
    {
        return $this->hasMaximumVehicles;
    }

    /**
     * Sets a new hasMaximumVehicles
     *
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @param bool $hasMaximumVehicles
     * @return self
     */
    public function setHasMaximumVehicles($hasMaximumVehicles)
    {
        $this->hasMaximumVehicles = $hasMaximumVehicles;
        return $this;
    }

    /**
     * Gets as hasNumberOfOnwardsCalls
     *
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @return bool
     */
    public function getHasNumberOfOnwardsCalls()
    {
        return $this->hasNumberOfOnwardsCalls;
    }

    /**
     * Sets a new hasNumberOfOnwardsCalls
     *
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @param bool $hasNumberOfOnwardsCalls
     * @return self
     */
    public function setHasNumberOfOnwardsCalls($hasNumberOfOnwardsCalls)
    {
        $this->hasNumberOfOnwardsCalls = $hasNumberOfOnwardsCalls;
        return $this;
    }

    /**
     * Gets as hasNumberOfPreviousCalls
     *
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @return bool
     */
    public function getHasNumberOfPreviousCalls()
    {
        return $this->hasNumberOfPreviousCalls;
    }

    /**
     * Sets a new hasNumberOfPreviousCalls
     *
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @param bool $hasNumberOfPreviousCalls
     * @return self
     */
    public function setHasNumberOfPreviousCalls($hasNumberOfPreviousCalls)
    {
        $this->hasNumberOfPreviousCalls = $hasNumberOfPreviousCalls;
        return $this;
    }


}

