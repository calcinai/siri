<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractPermissionStructureType
 *
 * Type for Abstract Permission.
 * XSD Type: AbstractPermissionStructure
 */
class AbstractPermissionStructureType
{

    /**
     * Parmissions apply by default to All particpants. May be overidden by other separate permissions for individual.
     *
     * @property string $allParticipants
     */
    private $allParticipants = null;

    /**
     * Permission applies to specified participant.
     *
     * @property string $participantRef
     */
    private $participantRef = null;

    /**
     * Permissions for general capabilities
     *
     * @property \Calcinai\Siri\AbstractPermissionStructureType\GeneralCapabilitiesAType $generalCapabilities
     */
    private $generalCapabilities = null;

    /**
     * Gets as allParticipants
     *
     * Parmissions apply by default to All particpants. May be overidden by other separate permissions for individual.
     *
     * @return string
     */
    public function getAllParticipants()
    {
        return $this->allParticipants;
    }

    /**
     * Sets a new allParticipants
     *
     * Parmissions apply by default to All particpants. May be overidden by other separate permissions for individual.
     *
     * @param string $allParticipants
     * @return self
     */
    public function setAllParticipants($allParticipants)
    {
        $this->allParticipants = $allParticipants;
        return $this;
    }

    /**
     * Gets as participantRef
     *
     * Permission applies to specified participant.
     *
     * @return string
     */
    public function getParticipantRef()
    {
        return $this->participantRef;
    }

    /**
     * Sets a new participantRef
     *
     * Permission applies to specified participant.
     *
     * @param string $participantRef
     * @return self
     */
    public function setParticipantRef($participantRef)
    {
        $this->participantRef = $participantRef;
        return $this;
    }

    /**
     * Gets as generalCapabilities
     *
     * Permissions for general capabilities
     *
     * @return \Calcinai\Siri\AbstractPermissionStructureType\GeneralCapabilitiesAType
     */
    public function getGeneralCapabilities()
    {
        return $this->generalCapabilities;
    }

    /**
     * Sets a new generalCapabilities
     *
     * Permissions for general capabilities
     *
     * @param \Calcinai\Siri\AbstractPermissionStructureType\GeneralCapabilitiesAType $generalCapabilities
     * @return self
     */
    public function setGeneralCapabilities(\Calcinai\Siri\AbstractPermissionStructureType\GeneralCapabilitiesAType $generalCapabilities)
    {
        $this->generalCapabilities = $generalCapabilities;
        return $this;
    }


}

