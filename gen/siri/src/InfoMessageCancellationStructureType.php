<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing InfoMessageCancellationStructureType
 *
 * Type for Revocation of a previous message.
 * XSD Type: InfoMessageCancellationStructure
 */
class InfoMessageCancellationStructureType extends AbstractReferencingItemStructureType
{

    /**
     * Identifier of message. Unique within servcie and Producer participant
     *
     * @property string $infoMessageIdentifier
     */
    private $infoMessageIdentifier = null;

    /**
     * Info Channel to which message belongs.
     *
     * @property string $infoChannelRef
     */
    private $infoChannelRef = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as infoMessageIdentifier
     *
     * Identifier of message. Unique within servcie and Producer participant
     *
     * @return string
     */
    public function getInfoMessageIdentifier()
    {
        return $this->infoMessageIdentifier;
    }

    /**
     * Sets a new infoMessageIdentifier
     *
     * Identifier of message. Unique within servcie and Producer participant
     *
     * @param string $infoMessageIdentifier
     * @return self
     */
    public function setInfoMessageIdentifier($infoMessageIdentifier)
    {
        $this->infoMessageIdentifier = $infoMessageIdentifier;
        return $this;
    }

    /**
     * Gets as infoChannelRef
     *
     * Info Channel to which message belongs.
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
     * Info Channel to which message belongs.
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

