<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractTopicPermissionStructureType
 *
 * Type for Abstract Permission Topic.
 * XSD Type: AbstractTopicPermissionStructure
 */
class AbstractTopicPermissionStructureType
{

    /**
     * Whether the participant may access this topic. Default is true.
     *
     * @property bool $allow
     */
    private $allow = null;

    /**
     * Gets as allow
     *
     * Whether the participant may access this topic. Default is true.
     *
     * @return bool
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Sets a new allow
     *
     * Whether the participant may access this topic. Default is true.
     *
     * @param bool $allow
     * @return self
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
        return $this;
    }


}

