<?php

namespace Calcinai\Siri;

/**
 * Class representing SimpleActionStructureType
 *
 * Type for list of situations.
 * XSD Type: SimpleActionStructure
 */
class SimpleActionStructureType
{

    /**
     * Processing Status of action at time of situation publication.
     *
     * @property string $actionStatus
     */
    private $actionStatus = null;

    /**
     * Gets as actionStatus
     *
     * Processing Status of action at time of situation publication.
     *
     * @return string
     */
    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    /**
     * Sets a new actionStatus
     *
     * Processing Status of action at time of situation publication.
     *
     * @param string $actionStatus
     * @return self
     */
    public function setActionStatus($actionStatus)
    {
        $this->actionStatus = $actionStatus;
        return $this;
    }


}

