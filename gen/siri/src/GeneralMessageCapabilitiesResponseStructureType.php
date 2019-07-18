<?php

namespace Calcinai\Siri;

/**
 * Class representing GeneralMessageCapabilitiesResponseStructureType
 *
 * Data type for Delivery for General MessageService
 * XSD Type: GeneralMessageCapabilitiesResponseStructure
 */
class GeneralMessageCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\GeneralMessageServiceCapabilities $generalMessageServiceCapabilities
     */
    private $generalMessageServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\GeneralMessagePermissions $generalMessagePermissions
     */
    private $generalMessagePermissions = null;

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
     * Gets as generalMessageServiceCapabilities
     *
     * @return \Calcinai\Siri\GeneralMessageServiceCapabilities
     */
    public function getGeneralMessageServiceCapabilities()
    {
        return $this->generalMessageServiceCapabilities;
    }

    /**
     * Sets a new generalMessageServiceCapabilities
     *
     * @param \Calcinai\Siri\GeneralMessageServiceCapabilities $generalMessageServiceCapabilities
     * @return self
     */
    public function setGeneralMessageServiceCapabilities(\Calcinai\Siri\GeneralMessageServiceCapabilities $generalMessageServiceCapabilities)
    {
        $this->generalMessageServiceCapabilities = $generalMessageServiceCapabilities;
        return $this;
    }

    /**
     * Gets as generalMessagePermissions
     *
     * @return \Calcinai\Siri\GeneralMessagePermissions
     */
    public function getGeneralMessagePermissions()
    {
        return $this->generalMessagePermissions;
    }

    /**
     * Sets a new generalMessagePermissions
     *
     * @param \Calcinai\Siri\GeneralMessagePermissions $generalMessagePermissions
     * @return self
     */
    public function setGeneralMessagePermissions(\Calcinai\Siri\GeneralMessagePermissions $generalMessagePermissions)
    {
        $this->generalMessagePermissions = $generalMessagePermissions;
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

