<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionServicePermissionStructureType
 *
 * Type for Monitoring Service Permission
 * XSD Type: ConnectionServicePermissionStructure
 */
class ConnectionServicePermissionStructureType extends AbstractPermissionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions
     */
    private $operatorPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\LinePermissions $linePermissions
     */
    private $linePermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionLinkPermissions $connectionLinkPermissions
     */
    private $connectionLinkPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as operatorPermissions
     *
     * @return \Calcinai\Siri\Objects\OperatorPermissions
     */
    public function getOperatorPermissions()
    {
        return $this->operatorPermissions;
    }

    /**
     * Sets a new operatorPermissions
     *
     * @param \Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions
     * @return self
     */
    public function setOperatorPermissions(\Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions)
    {
        $this->operatorPermissions = $operatorPermissions;
        return $this;
    }

    /**
     * Gets as linePermissions
     *
     * @return \Calcinai\Siri\Objects\LinePermissions
     */
    public function getLinePermissions()
    {
        return $this->linePermissions;
    }

    /**
     * Sets a new linePermissions
     *
     * @param \Calcinai\Siri\Objects\LinePermissions $linePermissions
     * @return self
     */
    public function setLinePermissions(\Calcinai\Siri\Objects\LinePermissions $linePermissions)
    {
        $this->linePermissions = $linePermissions;
        return $this;
    }

    /**
     * Gets as connectionLinkPermissions
     *
     * @return \Calcinai\Siri\Objects\ConnectionLinkPermissions
     */
    public function getConnectionLinkPermissions()
    {
        return $this->connectionLinkPermissions;
    }

    /**
     * Sets a new connectionLinkPermissions
     *
     * @param \Calcinai\Siri\Objects\ConnectionLinkPermissions $connectionLinkPermissions
     * @return self
     */
    public function setConnectionLinkPermissions(\Calcinai\Siri\Objects\ConnectionLinkPermissions $connectionLinkPermissions)
    {
        $this->connectionLinkPermissions = $connectionLinkPermissions;
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

