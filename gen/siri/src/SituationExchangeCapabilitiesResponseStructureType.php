<?php

namespace Calcinai\Siri;

/**
 * Class representing SituationExchangeCapabilitiesResponseStructureType
 *
 * Data type for Delivery forSituation Exchange Service
 * XSD Type: SituationExchangeCapabilitiesResponseStructure
 */
class SituationExchangeCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     */
    private $situationExchangeServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\SituationExchangePermissions $situationExchangePermissions
     */
    private $situationExchangePermissions = null;

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
     * Gets as situationExchangeServiceCapabilities
     *
     * @return \Calcinai\Siri\SituationExchangeServiceCapabilities
     */
    public function getSituationExchangeServiceCapabilities()
    {
        return $this->situationExchangeServiceCapabilities;
    }

    /**
     * Sets a new situationExchangeServiceCapabilities
     *
     * @param \Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     * @return self
     */
    public function setSituationExchangeServiceCapabilities(\Calcinai\Siri\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities)
    {
        $this->situationExchangeServiceCapabilities = $situationExchangeServiceCapabilities;
        return $this;
    }

    /**
     * Gets as situationExchangePermissions
     *
     * @return \Calcinai\Siri\SituationExchangePermissions
     */
    public function getSituationExchangePermissions()
    {
        return $this->situationExchangePermissions;
    }

    /**
     * Sets a new situationExchangePermissions
     *
     * @param \Calcinai\Siri\SituationExchangePermissions $situationExchangePermissions
     * @return self
     */
    public function setSituationExchangePermissions(\Calcinai\Siri\SituationExchangePermissions $situationExchangePermissions)
    {
        $this->situationExchangePermissions = $situationExchangePermissions;
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

