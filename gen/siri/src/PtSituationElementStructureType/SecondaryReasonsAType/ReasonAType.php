<?php

namespace Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType;

/**
 * Class representing ReasonAType
 */
class ReasonAType
{

    /**
     * @property string $unknownReason
     */
    private $unknownReason = null;

    /**
     * @property string $miscellaneousReason
     */
    private $miscellaneousReason = null;

    /**
     * Personnel reason.
     *
     * @property string $personnelReason
     */
    private $personnelReason = null;

    /**
     * @property string $equipmentReason
     */
    private $equipmentReason = null;

    /**
     * Environment reason.
     *
     * @property string $environmentReason
     */
    private $environmentReason = null;

    /**
     * @property string $undefinedReason
     */
    private $undefinedReason = null;

    /**
     * Classifier of Pub;ic Event
     *
     * @property string $publicEventReason
     */
    private $publicEventReason = null;

    /**
     * Text explanation of situation reason. Not normally needed.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $reasonName
     */
    private $reasonName = null;

    /**
     * Gets as unknownReason
     *
     * @return string
     */
    public function getUnknownReason()
    {
        return $this->unknownReason;
    }

    /**
     * Sets a new unknownReason
     *
     * @param string $unknownReason
     * @return self
     */
    public function setUnknownReason($unknownReason)
    {
        $this->unknownReason = $unknownReason;
        return $this;
    }

    /**
     * Gets as miscellaneousReason
     *
     * @return string
     */
    public function getMiscellaneousReason()
    {
        return $this->miscellaneousReason;
    }

    /**
     * Sets a new miscellaneousReason
     *
     * @param string $miscellaneousReason
     * @return self
     */
    public function setMiscellaneousReason($miscellaneousReason)
    {
        $this->miscellaneousReason = $miscellaneousReason;
        return $this;
    }

    /**
     * Gets as personnelReason
     *
     * Personnel reason.
     *
     * @return string
     */
    public function getPersonnelReason()
    {
        return $this->personnelReason;
    }

    /**
     * Sets a new personnelReason
     *
     * Personnel reason.
     *
     * @param string $personnelReason
     * @return self
     */
    public function setPersonnelReason($personnelReason)
    {
        $this->personnelReason = $personnelReason;
        return $this;
    }

    /**
     * Gets as equipmentReason
     *
     * @return string
     */
    public function getEquipmentReason()
    {
        return $this->equipmentReason;
    }

    /**
     * Sets a new equipmentReason
     *
     * @param string $equipmentReason
     * @return self
     */
    public function setEquipmentReason($equipmentReason)
    {
        $this->equipmentReason = $equipmentReason;
        return $this;
    }

    /**
     * Gets as environmentReason
     *
     * Environment reason.
     *
     * @return string
     */
    public function getEnvironmentReason()
    {
        return $this->environmentReason;
    }

    /**
     * Sets a new environmentReason
     *
     * Environment reason.
     *
     * @param string $environmentReason
     * @return self
     */
    public function setEnvironmentReason($environmentReason)
    {
        $this->environmentReason = $environmentReason;
        return $this;
    }

    /**
     * Gets as undefinedReason
     *
     * @return string
     */
    public function getUndefinedReason()
    {
        return $this->undefinedReason;
    }

    /**
     * Sets a new undefinedReason
     *
     * @param string $undefinedReason
     * @return self
     */
    public function setUndefinedReason($undefinedReason)
    {
        $this->undefinedReason = $undefinedReason;
        return $this;
    }

    /**
     * Gets as publicEventReason
     *
     * Classifier of Pub;ic Event
     *
     * @return string
     */
    public function getPublicEventReason()
    {
        return $this->publicEventReason;
    }

    /**
     * Sets a new publicEventReason
     *
     * Classifier of Pub;ic Event
     *
     * @param string $publicEventReason
     * @return self
     */
    public function setPublicEventReason($publicEventReason)
    {
        $this->publicEventReason = $publicEventReason;
        return $this;
    }

    /**
     * Gets as reasonName
     *
     * Text explanation of situation reason. Not normally needed.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getReasonName()
    {
        return $this->reasonName;
    }

    /**
     * Sets a new reasonName
     *
     * Text explanation of situation reason. Not normally needed.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $reasonName
     * @return self
     */
    public function setReasonName(\Calcinai\Siri\NaturalLanguageStringStructureType $reasonName)
    {
        $this->reasonName = $reasonName;
        return $this;
    }


}

