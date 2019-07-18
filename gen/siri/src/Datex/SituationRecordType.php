<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SituationRecordType
 *
 * An identifiable instance of a single record/element within a situation.
 * XSD Type: SituationRecord
 */
class SituationRecordType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * A unique alphanumeric reference (either an external reference or GUID) of the SituationRecord object (the first version of the record) that was created by the original supplier.
     *
     * @property string $situationRecordCreationReference
     */
    private $situationRecordCreationReference = null;

    /**
     * The date/time that the SituationRecord object (the first version of the record) was created by the original supplier.
     *
     * @property \DateTime $situationRecordCreationTime
     */
    private $situationRecordCreationTime = null;

    /**
     * The date/time that the information represented by the current version of the SituationRecord was observed by the original (potentially external) source of the information.
     *
     * @property \DateTime $situationRecordObservationTime
     */
    private $situationRecordObservationTime = null;

    /**
     * Each record within a situation may iterate through a series of versions during its life time. The situation record version uniquely identifies the version of a particular record within a situation. It is generated and used by systems external to DATEX 2.
     *
     * @property int $situationRecordVersion
     */
    private $situationRecordVersion = null;

    /**
     * The date/time that this current version of the SituationRecord was written into the database of the supplier which is involved in the data exchange.
     *
     * @property \DateTime $situationRecordVersionTime
     */
    private $situationRecordVersionTime = null;

    /**
     * The date/time that the current version of the Situation Record was written into the database of the original supplier in the supply chain.
     *
     * @property \DateTime $situationRecordFirstSupplierVersionTime
     */
    private $situationRecordFirstSupplierVersionTime = null;

    /**
     * Defines the use to which the information contained in the situation record can be put. This overrides any usage defined for the situation as a whole in the header information.
     *
     * @property string $informationUsageOverride
     */
    private $informationUsageOverride = null;

    /**
     * An assessment of the degree of likelihood that the reported event will occur.
     *
     * @property string $probabilityOfOccurrence
     */
    private $probabilityOfOccurrence = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation
     */
    private $sourceInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ValidityType $validity
     */
    private $validity = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ImpactType $impact
     */
    private $impact = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\CauseType $cause
     */
    private $cause = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AdviceType[] $advice
     */
    private $advice = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\CommentType[] $generalPublicComment
     */
    private $generalPublicComment = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\CommentType[] $nonGeneralPublicComment
     */
    private $nonGeneralPublicComment = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\GroupOfLocationsType $groupOfLocations
     */
    private $groupOfLocations = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ManagementType $management
     */
    private $management = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $situationRecordExtension
     */
    private $situationRecordExtension = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as situationRecordCreationReference
     *
     * A unique alphanumeric reference (either an external reference or GUID) of the SituationRecord object (the first version of the record) that was created by the original supplier.
     *
     * @return string
     */
    public function getSituationRecordCreationReference()
    {
        return $this->situationRecordCreationReference;
    }

    /**
     * Sets a new situationRecordCreationReference
     *
     * A unique alphanumeric reference (either an external reference or GUID) of the SituationRecord object (the first version of the record) that was created by the original supplier.
     *
     * @param string $situationRecordCreationReference
     * @return self
     */
    public function setSituationRecordCreationReference($situationRecordCreationReference)
    {
        $this->situationRecordCreationReference = $situationRecordCreationReference;
        return $this;
    }

    /**
     * Gets as situationRecordCreationTime
     *
     * The date/time that the SituationRecord object (the first version of the record) was created by the original supplier.
     *
     * @return \DateTime
     */
    public function getSituationRecordCreationTime()
    {
        return $this->situationRecordCreationTime;
    }

    /**
     * Sets a new situationRecordCreationTime
     *
     * The date/time that the SituationRecord object (the first version of the record) was created by the original supplier.
     *
     * @param \DateTime $situationRecordCreationTime
     * @return self
     */
    public function setSituationRecordCreationTime(\DateTime $situationRecordCreationTime)
    {
        $this->situationRecordCreationTime = $situationRecordCreationTime;
        return $this;
    }

    /**
     * Gets as situationRecordObservationTime
     *
     * The date/time that the information represented by the current version of the SituationRecord was observed by the original (potentially external) source of the information.
     *
     * @return \DateTime
     */
    public function getSituationRecordObservationTime()
    {
        return $this->situationRecordObservationTime;
    }

    /**
     * Sets a new situationRecordObservationTime
     *
     * The date/time that the information represented by the current version of the SituationRecord was observed by the original (potentially external) source of the information.
     *
     * @param \DateTime $situationRecordObservationTime
     * @return self
     */
    public function setSituationRecordObservationTime(\DateTime $situationRecordObservationTime)
    {
        $this->situationRecordObservationTime = $situationRecordObservationTime;
        return $this;
    }

    /**
     * Gets as situationRecordVersion
     *
     * Each record within a situation may iterate through a series of versions during its life time. The situation record version uniquely identifies the version of a particular record within a situation. It is generated and used by systems external to DATEX 2.
     *
     * @return int
     */
    public function getSituationRecordVersion()
    {
        return $this->situationRecordVersion;
    }

    /**
     * Sets a new situationRecordVersion
     *
     * Each record within a situation may iterate through a series of versions during its life time. The situation record version uniquely identifies the version of a particular record within a situation. It is generated and used by systems external to DATEX 2.
     *
     * @param int $situationRecordVersion
     * @return self
     */
    public function setSituationRecordVersion($situationRecordVersion)
    {
        $this->situationRecordVersion = $situationRecordVersion;
        return $this;
    }

    /**
     * Gets as situationRecordVersionTime
     *
     * The date/time that this current version of the SituationRecord was written into the database of the supplier which is involved in the data exchange.
     *
     * @return \DateTime
     */
    public function getSituationRecordVersionTime()
    {
        return $this->situationRecordVersionTime;
    }

    /**
     * Sets a new situationRecordVersionTime
     *
     * The date/time that this current version of the SituationRecord was written into the database of the supplier which is involved in the data exchange.
     *
     * @param \DateTime $situationRecordVersionTime
     * @return self
     */
    public function setSituationRecordVersionTime(\DateTime $situationRecordVersionTime)
    {
        $this->situationRecordVersionTime = $situationRecordVersionTime;
        return $this;
    }

    /**
     * Gets as situationRecordFirstSupplierVersionTime
     *
     * The date/time that the current version of the Situation Record was written into the database of the original supplier in the supply chain.
     *
     * @return \DateTime
     */
    public function getSituationRecordFirstSupplierVersionTime()
    {
        return $this->situationRecordFirstSupplierVersionTime;
    }

    /**
     * Sets a new situationRecordFirstSupplierVersionTime
     *
     * The date/time that the current version of the Situation Record was written into the database of the original supplier in the supply chain.
     *
     * @param \DateTime $situationRecordFirstSupplierVersionTime
     * @return self
     */
    public function setSituationRecordFirstSupplierVersionTime(\DateTime $situationRecordFirstSupplierVersionTime)
    {
        $this->situationRecordFirstSupplierVersionTime = $situationRecordFirstSupplierVersionTime;
        return $this;
    }

    /**
     * Gets as informationUsageOverride
     *
     * Defines the use to which the information contained in the situation record can be put. This overrides any usage defined for the situation as a whole in the header information.
     *
     * @return string
     */
    public function getInformationUsageOverride()
    {
        return $this->informationUsageOverride;
    }

    /**
     * Sets a new informationUsageOverride
     *
     * Defines the use to which the information contained in the situation record can be put. This overrides any usage defined for the situation as a whole in the header information.
     *
     * @param string $informationUsageOverride
     * @return self
     */
    public function setInformationUsageOverride($informationUsageOverride)
    {
        $this->informationUsageOverride = $informationUsageOverride;
        return $this;
    }

    /**
     * Gets as probabilityOfOccurrence
     *
     * An assessment of the degree of likelihood that the reported event will occur.
     *
     * @return string
     */
    public function getProbabilityOfOccurrence()
    {
        return $this->probabilityOfOccurrence;
    }

    /**
     * Sets a new probabilityOfOccurrence
     *
     * An assessment of the degree of likelihood that the reported event will occur.
     *
     * @param string $probabilityOfOccurrence
     * @return self
     */
    public function setProbabilityOfOccurrence($probabilityOfOccurrence)
    {
        $this->probabilityOfOccurrence = $probabilityOfOccurrence;
        return $this;
    }

    /**
     * Gets as sourceInformation
     *
     * @return \Calcinai\Siri\Objects\Datex\SourceInformationType
     */
    public function getSourceInformation()
    {
        return $this->sourceInformation;
    }

    /**
     * Sets a new sourceInformation
     *
     * @param \Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation
     * @return self
     */
    public function setSourceInformation(\Calcinai\Siri\Objects\Datex\SourceInformationType $sourceInformation)
    {
        $this->sourceInformation = $sourceInformation;
        return $this;
    }

    /**
     * Gets as validity
     *
     * @return \Calcinai\Siri\Objects\Datex\ValidityType
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Sets a new validity
     *
     * @param \Calcinai\Siri\Objects\Datex\ValidityType $validity
     * @return self
     */
    public function setValidity(\Calcinai\Siri\Objects\Datex\ValidityType $validity)
    {
        $this->validity = $validity;
        return $this;
    }

    /**
     * Gets as impact
     *
     * @return \Calcinai\Siri\Objects\Datex\ImpactType
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Sets a new impact
     *
     * @param \Calcinai\Siri\Objects\Datex\ImpactType $impact
     * @return self
     */
    public function setImpact(\Calcinai\Siri\Objects\Datex\ImpactType $impact)
    {
        $this->impact = $impact;
        return $this;
    }

    /**
     * Gets as cause
     *
     * @return \Calcinai\Siri\Objects\Datex\CauseType
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Sets a new cause
     *
     * @param \Calcinai\Siri\Objects\Datex\CauseType $cause
     * @return self
     */
    public function setCause(\Calcinai\Siri\Objects\Datex\CauseType $cause)
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * Adds as advice
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\AdviceType $advice
     */
    public function addToAdvice(\Calcinai\Siri\Objects\Datex\AdviceType $advice)
    {
        $this->advice[] = $advice;
        return $this;
    }

    /**
     * isset advice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdvice($index)
    {
        return isset($this->advice[$index]);
    }

    /**
     * unset advice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdvice($index)
    {
        unset($this->advice[$index]);
    }

    /**
     * Gets as advice
     *
     * @return \Calcinai\Siri\Objects\Datex\AdviceType[]
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Sets a new advice
     *
     * @param \Calcinai\Siri\Objects\Datex\AdviceType[] $advice
     * @return self
     */
    public function setAdvice(array $advice)
    {
        $this->advice = $advice;
        return $this;
    }

    /**
     * Adds as generalPublicComment
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\CommentType $generalPublicComment
     */
    public function addToGeneralPublicComment(\Calcinai\Siri\Objects\Datex\CommentType $generalPublicComment)
    {
        $this->generalPublicComment[] = $generalPublicComment;
        return $this;
    }

    /**
     * isset generalPublicComment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralPublicComment($index)
    {
        return isset($this->generalPublicComment[$index]);
    }

    /**
     * unset generalPublicComment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralPublicComment($index)
    {
        unset($this->generalPublicComment[$index]);
    }

    /**
     * Gets as generalPublicComment
     *
     * @return \Calcinai\Siri\Objects\Datex\CommentType[]
     */
    public function getGeneralPublicComment()
    {
        return $this->generalPublicComment;
    }

    /**
     * Sets a new generalPublicComment
     *
     * @param \Calcinai\Siri\Objects\Datex\CommentType[] $generalPublicComment
     * @return self
     */
    public function setGeneralPublicComment(array $generalPublicComment)
    {
        $this->generalPublicComment = $generalPublicComment;
        return $this;
    }

    /**
     * Adds as nonGeneralPublicComment
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\CommentType $nonGeneralPublicComment
     */
    public function addToNonGeneralPublicComment(\Calcinai\Siri\Objects\Datex\CommentType $nonGeneralPublicComment)
    {
        $this->nonGeneralPublicComment[] = $nonGeneralPublicComment;
        return $this;
    }

    /**
     * isset nonGeneralPublicComment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNonGeneralPublicComment($index)
    {
        return isset($this->nonGeneralPublicComment[$index]);
    }

    /**
     * unset nonGeneralPublicComment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNonGeneralPublicComment($index)
    {
        unset($this->nonGeneralPublicComment[$index]);
    }

    /**
     * Gets as nonGeneralPublicComment
     *
     * @return \Calcinai\Siri\Objects\Datex\CommentType[]
     */
    public function getNonGeneralPublicComment()
    {
        return $this->nonGeneralPublicComment;
    }

    /**
     * Sets a new nonGeneralPublicComment
     *
     * @param \Calcinai\Siri\Objects\Datex\CommentType[] $nonGeneralPublicComment
     * @return self
     */
    public function setNonGeneralPublicComment(array $nonGeneralPublicComment)
    {
        $this->nonGeneralPublicComment = $nonGeneralPublicComment;
        return $this;
    }

    /**
     * Gets as groupOfLocations
     *
     * @return \Calcinai\Siri\Objects\Datex\GroupOfLocationsType
     */
    public function getGroupOfLocations()
    {
        return $this->groupOfLocations;
    }

    /**
     * Sets a new groupOfLocations
     *
     * @param \Calcinai\Siri\Objects\Datex\GroupOfLocationsType $groupOfLocations
     * @return self
     */
    public function setGroupOfLocations(\Calcinai\Siri\Objects\Datex\GroupOfLocationsType $groupOfLocations)
    {
        $this->groupOfLocations = $groupOfLocations;
        return $this;
    }

    /**
     * Gets as management
     *
     * @return \Calcinai\Siri\Objects\Datex\ManagementType
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Sets a new management
     *
     * @param \Calcinai\Siri\Objects\Datex\ManagementType $management
     * @return self
     */
    public function setManagement(\Calcinai\Siri\Objects\Datex\ManagementType $management)
    {
        $this->management = $management;
        return $this;
    }

    /**
     * Gets as situationRecordExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSituationRecordExtension()
    {
        return $this->situationRecordExtension;
    }

    /**
     * Sets a new situationRecordExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $situationRecordExtension
     * @return self
     */
    public function setSituationRecordExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $situationRecordExtension)
    {
        $this->situationRecordExtension = $situationRecordExtension;
        return $this;
    }


}

