<?php

namespace Calcinai\Siri\Objects;

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
     * @property string[] $infoChannelRef
     */
    private $infoChannelRef = [
        
    ];

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

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
     * Adds as infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @return self
     * @param string $infoChannelRef
     */
    public function addToInfoChannelRef($infoChannelRef)
    {
        $this->infoChannelRef[] = $infoChannelRef;
        return $this;
    }

    /**
     * isset infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoChannelRef($index)
    {
        return isset($this->infoChannelRef[$index]);
    }

    /**
     * unset infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoChannelRef($index)
    {
        unset($this->infoChannelRef[$index]);
    }

    /**
     * Gets as infoChannelRef
     *
     * Identifier of channel for which messages are to be returned
     *
     * @return string[]
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
    public function setInfoChannelRef(array $infoChannelRef)
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

