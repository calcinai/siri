<?php

namespace Calcinai\Siri;

/**
 * Class representing GeneralMessageRequestStructureType
 *
 * Service Request for General Messages.
 * XSD Type: GeneralMessageRequestStructure
 */
class GeneralMessageRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Identifier of channel for which messages are to be returned
     *
     * @property string $infoChannelRef
     */
    private $infoChannelRef = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * Gets as infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @return string
     */
    public function getInfoChannelRef()
    {
        return $this->infoChannelRef;
    }

    /**
     * Sets a new infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @param string $infoChannelRef
     * @return self
     */
    public function setInfoChannelRef($infoChannelRef)
    {
        $this->infoChannelRef = $infoChannelRef;
        return $this;
    }

    /**
     * Gets as language
     *
     * Preferred language in which to return text values.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Preferred language in which to return text values.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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

