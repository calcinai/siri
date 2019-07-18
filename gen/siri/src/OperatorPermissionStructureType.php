<?php

namespace Calcinai\Siri;

/**
 * Class representing OperatorPermissionStructureType
 *
 * Type for Operator Permission.
 * XSD Type: OperatorPermissionStructure
 */
class OperatorPermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * Identifier of operator whose data participant is allowed to access.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Gets as operatorRef
     *
     * Identifier of operator whose data participant is allowed to access.
     *
     * @return string
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Identifier of operator whose data participant is allowed to access.
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef($operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }


}

