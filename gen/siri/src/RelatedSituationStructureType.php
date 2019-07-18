<?php

namespace Calcinai\Siri;

/**
 * Class representing RelatedSituationStructureType
 *
 * Type for a reference.
 * XSD Type: RelatedSituationStructure
 */
class RelatedSituationStructureType
{

    /**
     * Time of creation of 'related to' assocation.
     *
     * @property \DateTime $creationTime
     */
    private $creationTime = null;

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
     * A single string that identifiers the referenced Situation.
     *
     * @property string $externalReference
     */
    private $externalReference = null;

    /**
     * Relationship of refercence to the referncing Situation e
     *
     * @property string $relatedAs
     */
    private $relatedAs = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as creationTime
     *
     * Time of creation of 'related to' assocation.
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Sets a new creationTime
     *
     * Time of creation of 'related to' assocation.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

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

    /**
     * Gets as externalReference
     *
     * A single string that identifiers the referenced Situation.
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * A single string that identifiers the referenced Situation.
     *
     * @param string $externalReference
     * @return self
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * Gets as relatedAs
     *
     * Relationship of refercence to the referncing Situation e
     *
     * @return string
     */
    public function getRelatedAs()
    {
        return $this->relatedAs;
    }

    /**
     * Sets a new relatedAs
     *
     * Relationship of refercence to the referncing Situation e
     *
     * @param string $relatedAs
     * @return self
     */
    public function setRelatedAs($relatedAs)
    {
        $this->relatedAs = $relatedAs;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

