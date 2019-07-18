<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionCapabilityAccessControlStructureType
 *
 * Abstract type ffor capability access control
 * XSD Type: ConnectionCapabilityAccessControlStructure
 */
class ConnectionCapabilityAccessControlStructureType extends CapabilityAccessControlStructureType
{

    /**
     * @property bool $checkOperatorRef
     */
    private $checkOperatorRef = null;

    /**
     * @property bool $checkLineRef
     */
    private $checkLineRef = null;

    /**
     * If access control is supported, whether access control by connection link is supported. Default is true.
     *
     * @property bool $checkConnectionLinkRef
     */
    private $checkConnectionLinkRef = null;

    /**
     * Gets as checkOperatorRef
     *
     * @return bool
     */
    public function getCheckOperatorRef()
    {
        return $this->checkOperatorRef;
    }

    /**
     * Sets a new checkOperatorRef
     *
     * @param bool $checkOperatorRef
     * @return self
     */
    public function setCheckOperatorRef($checkOperatorRef)
    {
        $this->checkOperatorRef = $checkOperatorRef;
        return $this;
    }

    /**
     * Gets as checkLineRef
     *
     * @return bool
     */
    public function getCheckLineRef()
    {
        return $this->checkLineRef;
    }

    /**
     * Sets a new checkLineRef
     *
     * @param bool $checkLineRef
     * @return self
     */
    public function setCheckLineRef($checkLineRef)
    {
        $this->checkLineRef = $checkLineRef;
        return $this;
    }

    /**
     * Gets as checkConnectionLinkRef
     *
     * If access control is supported, whether access control by connection link is supported. Default is true.
     *
     * @return bool
     */
    public function getCheckConnectionLinkRef()
    {
        return $this->checkConnectionLinkRef;
    }

    /**
     * Sets a new checkConnectionLinkRef
     *
     * If access control is supported, whether access control by connection link is supported. Default is true.
     *
     * @param bool $checkConnectionLinkRef
     * @return self
     */
    public function setCheckConnectionLinkRef($checkConnectionLinkRef)
    {
        $this->checkConnectionLinkRef = $checkConnectionLinkRef;
        return $this;
    }


}

