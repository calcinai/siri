<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationSharedRefStructureType
 *
 * Type for Reference to a Situation or an update to a situation. Participant ref is optional and may be supplied from context
 * XSD Type: SituationSharedRefStructure
 */
class SituationSharedRefStructureType
{

    /**
     * Unique identifier of a Country of a Participant who created Situation. Provides namespace for Participant If absent proided from context.
     *
     * @property string $countryRef
     */
    private $countryRef = null;

    /**
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
     *
     * @property string $participantRef
     */
    private $participantRef = null;

    /**
     * Unique identifier of Situation within a Participant. Excludes any version number.
     *
     * @property string $situationNumber
     */
    private $situationNumber = null;

    /**
     * Unique identifier of a Country of a Participant who created Update Situation element . Provides namespace for VersionParticipant If absent same as
     *
     * @property string $updateCountryRef
     */
    private $updateCountryRef = null;

    /**
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
     *
     * @property string $updateParticipantRef
     */
    private $updateParticipantRef = null;

    /**
     * Unique identifier of update version within a Situation Number Omit if reference to the base Situation.
     *
     * @property int $version
     */
    private $version = null;

    /**
     * Gets as countryRef
     *
     * Unique identifier of a Country of a Participant who created Situation. Provides namespace for Participant If absent proided from context.
     *
     * @return string
     */
    public function getCountryRef()
    {
        return $this->countryRef;
    }

    /**
     * Sets a new countryRef
     *
     * Unique identifier of a Country of a Participant who created Situation. Provides namespace for Participant If absent proided from context.
     *
     * @param string $countryRef
     * @return self
     */
    public function setCountryRef($countryRef)
    {
        $this->countryRef = $countryRef;
        return $this;
    }

    /**
     * Gets as participantRef
     *
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
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
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
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
     * Gets as situationNumber
     *
     * Unique identifier of Situation within a Participant. Excludes any version number.
     *
     * @return string
     */
    public function getSituationNumber()
    {
        return $this->situationNumber;
    }

    /**
     * Sets a new situationNumber
     *
     * Unique identifier of Situation within a Participant. Excludes any version number.
     *
     * @param string $situationNumber
     * @return self
     */
    public function setSituationNumber($situationNumber)
    {
        $this->situationNumber = $situationNumber;
        return $this;
    }

    /**
     * Gets as updateCountryRef
     *
     * Unique identifier of a Country of a Participant who created Update Situation element . Provides namespace for VersionParticipant If absent same as
     *
     * @return string
     */
    public function getUpdateCountryRef()
    {
        return $this->updateCountryRef;
    }

    /**
     * Sets a new updateCountryRef
     *
     * Unique identifier of a Country of a Participant who created Update Situation element . Provides namespace for VersionParticipant If absent same as
     *
     * @param string $updateCountryRef
     * @return self
     */
    public function setUpdateCountryRef($updateCountryRef)
    {
        $this->updateCountryRef = $updateCountryRef;
        return $this;
    }

    /**
     * Gets as updateParticipantRef
     *
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
     *
     * @return string
     */
    public function getUpdateParticipantRef()
    {
        return $this->updateParticipantRef;
    }

    /**
     * Sets a new updateParticipantRef
     *
     * Unique identifier of a Participant. Provides namespace for Situation. If absent provdied from context.
     *
     * @param string $updateParticipantRef
     * @return self
     */
    public function setUpdateParticipantRef($updateParticipantRef)
    {
        $this->updateParticipantRef = $updateParticipantRef;
        return $this;
    }

    /**
     * Gets as version
     *
     * Unique identifier of update version within a Situation Number Omit if reference to the base Situation.
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Unique identifier of update version within a Situation Number Omit if reference to the base Situation.
     *
     * @param int $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

