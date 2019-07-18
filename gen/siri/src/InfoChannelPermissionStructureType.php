<?php

namespace Calcinai\Siri;

/**
 * Class representing InfoChannelPermissionStructureType
 *
 * Type for Info Channel Permission.
 * XSD Type: InfoChannelPermissionStructure
 */
class InfoChannelPermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * Identifier of Info channel to which permission applies.
     *
     * @property string $infoChannelRef
     */
    private $infoChannelRef = null;

    /**
     * Gets as infoChannelRef
     *
     * Identifier of Info channel to which permission applies.
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
     * Identifier of Info channel to which permission applies.
     *
     * @param string $infoChannelRef
     * @return self
     */
    public function setInfoChannelRef($infoChannelRef)
    {
        $this->infoChannelRef = $infoChannelRef;
        return $this;
    }


}

