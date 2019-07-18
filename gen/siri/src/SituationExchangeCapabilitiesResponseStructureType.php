<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     */
    private $situationExchangeServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangePermissions $situationExchangePermissions
     */
    private $situationExchangePermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * @return \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities
     */
    public function getSituationExchangeServiceCapabilities()
    {
        return $this->situationExchangeServiceCapabilities;
    }

    /**
     * Sets a new situationExchangeServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities
     * @return self
     */
    public function setSituationExchangeServiceCapabilities(\Calcinai\Siri\Objects\SituationExchangeServiceCapabilities $situationExchangeServiceCapabilities)
    {
        $this->situationExchangeServiceCapabilities = $situationExchangeServiceCapabilities;
        return $this;
    }

    /**
     * Gets as situationExchangePermissions
     *
     * @return \Calcinai\Siri\Objects\SituationExchangePermissions
     */
    public function getSituationExchangePermissions()
    {
        return $this->situationExchangePermissions;
    }

    /**
     * Sets a new situationExchangePermissions
     *
     * @param \Calcinai\Siri\Objects\SituationExchangePermissions $situationExchangePermissions
     * @return self
     */
    public function setSituationExchangePermissions(\Calcinai\Siri\Objects\SituationExchangePermissions $situationExchangePermissions)
    {
        $this->situationExchangePermissions = $situationExchangePermissions;
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

