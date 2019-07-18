<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionLinkPermissionStructureType
 *
 * Type for Connection Service Permission.
 * XSD Type: ConnectionLinkPermissionStructure
 */
class ConnectionLinkPermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * Identifier of Connection Link for which permission is made.
     *
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * Gets as connectionLinkRef
     *
     * Identifier of Connection Link for which permission is made.
     *
     * @return string
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * Identifier of Connection Link for which permission is made.
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }


}

