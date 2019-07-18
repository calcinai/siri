<?php

namespace Calcinai\Siri;

/**
 * Class representing CapabilityAccessControlStructureType
 *
 * Type for Common Access control capabilities.
 * XSD Type: CapabilityAccessControlStructure
 */
class CapabilityAccessControlStructureType
{

    /**
     * Whether access control of requests is supported. Default is false.
     *
     * @property bool $requestChecking
     */
    private $requestChecking = null;

    /**
     * Gets as requestChecking
     *
     * Whether access control of requests is supported. Default is false.
     *
     * @return bool
     */
    public function getRequestChecking()
    {
        return $this->requestChecking;
    }

    /**
     * Sets a new requestChecking
     *
     * Whether access control of requests is supported. Default is false.
     *
     * @param bool $requestChecking
     * @return self
     */
    public function setRequestChecking($requestChecking)
    {
        $this->requestChecking = $requestChecking;
        return $this;
    }


}

