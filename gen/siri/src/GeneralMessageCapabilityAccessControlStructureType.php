<?php

namespace Calcinai\Siri;

/**
 * Class representing GeneralMessageCapabilityAccessControlStructureType
 *
 * Type for access control.
 * XSD Type: GeneralMessageCapabilityAccessControlStructure
 */
class GeneralMessageCapabilityAccessControlStructureType extends CapabilityAccessControlStructureType
{

    /**
     * If access control is supported, whether access control by Line is supported. Default is true.
     *
     * @property bool $checkInfoChannelRef
     */
    private $checkInfoChannelRef = null;

    /**
     * Gets as checkInfoChannelRef
     *
     * If access control is supported, whether access control by Line is supported. Default is true.
     *
     * @return bool
     */
    public function getCheckInfoChannelRef()
    {
        return $this->checkInfoChannelRef;
    }

    /**
     * Sets a new checkInfoChannelRef
     *
     * If access control is supported, whether access control by Line is supported. Default is true.
     *
     * @param bool $checkInfoChannelRef
     * @return self
     */
    public function setCheckInfoChannelRef($checkInfoChannelRef)
    {
        $this->checkInfoChannelRef = $checkInfoChannelRef;
        return $this;
    }


}

