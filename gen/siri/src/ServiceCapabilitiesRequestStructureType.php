<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceCapabilitiesRequestStructureType
 *
 * Type for ServcieCapabilities request.
 * XSD Type: ServiceCapabilitiesRequestStructure
 */
class ServiceCapabilitiesRequestStructureType extends AbstractServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Whether to include the requestors permissions in the response. Only applies if Access control capability supported. Default is false.
     *
     * @property bool $participantPermissions
     */
    private $participantPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of request. Fixed
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
     * Version number of request. Fixed
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
     * Gets as participantPermissions
     *
     * Whether to include the requestors permissions in the response. Only applies if Access control capability supported. Default is false.
     *
     * @return bool
     */
    public function getParticipantPermissions()
    {
        return $this->participantPermissions;
    }

    /**
     * Sets a new participantPermissions
     *
     * Whether to include the requestors permissions in the response. Only applies if Access control capability supported. Default is false.
     *
     * @param bool $participantPermissions
     * @return self
     */
    public function setParticipantPermissions($participantPermissions)
    {
        $this->participantPermissions = $participantPermissions;
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

