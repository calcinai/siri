<?php

namespace Calcinai\Siri;

/**
 * Class representing OptionalTrafficElementStructureType
 *
 * An event which is not planned by the traffic operator, which is affecting, or has the potential to affect traffic flow. This SIRI-SX element embeds the Datex2 TrafficElement, making all elements optional because they may alternatvielky be specified by common SIRI-SRX situation elements
 * XSD Type: OptionalTrafficElementStructure
 */
class OptionalTrafficElementStructureType
{

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
     * @property \Calcinai\Siri\Datex\SourceInformationType $sourceInformation
     */
    private $sourceInformation = null;

    /**
     * @property \Calcinai\Siri\Datex\ValidityType $validity
     */
    private $validity = null;

    /**
     * Impact of Road Situation as specified by Datex2.
     *
     * @property \Calcinai\Siri\Datex\ImpactType $impact
     */
    private $impact = null;

    /**
     * Impact of Road Situation as specified by Datex2 model.
     *
     * @property \Calcinai\Siri\Datex\CauseType $cause
     */
    private $cause = null;

    /**
     * Advice of Road Situation as specified by Datex2 model.
     *
     * @property \Calcinai\Siri\Datex\AdviceType $advice
     */
    private $advice = null;

    /**
     * Datex 2 comments for public use
     *
     * @property \Calcinai\Siri\Datex\CommentType $generalPublicComment
     */
    private $generalPublicComment = null;

    /**
     * Ccomments not for public use
     *
     * @property \Calcinai\Siri\Datex\CommentType $nonGeneralPublicComment
     */
    private $nonGeneralPublicComment = null;

    /**
     * Datex 2 model of where event ois taking place on teh road
     *
     * @property \Calcinai\Siri\Datex\GroupOfLocationsType $groupOfLocations
     */
    private $groupOfLocations = null;

    /**
     * @property \Calcinai\Siri\Datex\ManagementType $management
     */
    private $management = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $situationRecordExtension
     */
    private $situationRecordExtension = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficElementExtension
     */
    private $trafficElementExtension = null;

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
     * @return \Calcinai\Siri\Datex\SourceInformationType
     */
    public function getSourceInformation()
    {
        return $this->sourceInformation;
    }

    /**
     * Sets a new sourceInformation
     *
     * @param \Calcinai\Siri\Datex\SourceInformationType $sourceInformation
     * @return self
     */
    public function setSourceInformation(\Calcinai\Siri\Datex\SourceInformationType $sourceInformation)
    {
        $this->sourceInformation = $sourceInformation;
        return $this;
    }

    /**
     * Gets as validity
     *
     * @return \Calcinai\Siri\Datex\ValidityType
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Sets a new validity
     *
     * @param \Calcinai\Siri\Datex\ValidityType $validity
     * @return self
     */
    public function setValidity(\Calcinai\Siri\Datex\ValidityType $validity)
    {
        $this->validity = $validity;
        return $this;
    }

    /**
     * Gets as impact
     *
     * Impact of Road Situation as specified by Datex2.
     *
     * @return \Calcinai\Siri\Datex\ImpactType
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Sets a new impact
     *
     * Impact of Road Situation as specified by Datex2.
     *
     * @param \Calcinai\Siri\Datex\ImpactType $impact
     * @return self
     */
    public function setImpact(\Calcinai\Siri\Datex\ImpactType $impact)
    {
        $this->impact = $impact;
        return $this;
    }

    /**
     * Gets as cause
     *
     * Impact of Road Situation as specified by Datex2 model.
     *
     * @return \Calcinai\Siri\Datex\CauseType
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Sets a new cause
     *
     * Impact of Road Situation as specified by Datex2 model.
     *
     * @param \Calcinai\Siri\Datex\CauseType $cause
     * @return self
     */
    public function setCause(\Calcinai\Siri\Datex\CauseType $cause)
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * Gets as advice
     *
     * Advice of Road Situation as specified by Datex2 model.
     *
     * @return \Calcinai\Siri\Datex\AdviceType
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Sets a new advice
     *
     * Advice of Road Situation as specified by Datex2 model.
     *
     * @param \Calcinai\Siri\Datex\AdviceType $advice
     * @return self
     */
    public function setAdvice(\Calcinai\Siri\Datex\AdviceType $advice)
    {
        $this->advice = $advice;
        return $this;
    }

    /**
     * Gets as generalPublicComment
     *
     * Datex 2 comments for public use
     *
     * @return \Calcinai\Siri\Datex\CommentType
     */
    public function getGeneralPublicComment()
    {
        return $this->generalPublicComment;
    }

    /**
     * Sets a new generalPublicComment
     *
     * Datex 2 comments for public use
     *
     * @param \Calcinai\Siri\Datex\CommentType $generalPublicComment
     * @return self
     */
    public function setGeneralPublicComment(\Calcinai\Siri\Datex\CommentType $generalPublicComment)
    {
        $this->generalPublicComment = $generalPublicComment;
        return $this;
    }

    /**
     * Gets as nonGeneralPublicComment
     *
     * Ccomments not for public use
     *
     * @return \Calcinai\Siri\Datex\CommentType
     */
    public function getNonGeneralPublicComment()
    {
        return $this->nonGeneralPublicComment;
    }

    /**
     * Sets a new nonGeneralPublicComment
     *
     * Ccomments not for public use
     *
     * @param \Calcinai\Siri\Datex\CommentType $nonGeneralPublicComment
     * @return self
     */
    public function setNonGeneralPublicComment(\Calcinai\Siri\Datex\CommentType $nonGeneralPublicComment)
    {
        $this->nonGeneralPublicComment = $nonGeneralPublicComment;
        return $this;
    }

    /**
     * Gets as groupOfLocations
     *
     * Datex 2 model of where event ois taking place on teh road
     *
     * @return \Calcinai\Siri\Datex\GroupOfLocationsType
     */
    public function getGroupOfLocations()
    {
        return $this->groupOfLocations;
    }

    /**
     * Sets a new groupOfLocations
     *
     * Datex 2 model of where event ois taking place on teh road
     *
     * @param \Calcinai\Siri\Datex\GroupOfLocationsType $groupOfLocations
     * @return self
     */
    public function setGroupOfLocations(\Calcinai\Siri\Datex\GroupOfLocationsType $groupOfLocations)
    {
        $this->groupOfLocations = $groupOfLocations;
        return $this;
    }

    /**
     * Gets as management
     *
     * @return \Calcinai\Siri\Datex\ManagementType
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Sets a new management
     *
     * @param \Calcinai\Siri\Datex\ManagementType $management
     * @return self
     */
    public function setManagement(\Calcinai\Siri\Datex\ManagementType $management)
    {
        $this->management = $management;
        return $this;
    }

    /**
     * Gets as situationRecordExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getSituationRecordExtension()
    {
        return $this->situationRecordExtension;
    }

    /**
     * Sets a new situationRecordExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $situationRecordExtension
     * @return self
     */
    public function setSituationRecordExtension(\Calcinai\Siri\Datex\ExtensionType $situationRecordExtension)
    {
        $this->situationRecordExtension = $situationRecordExtension;
        return $this;
    }

    /**
     * Gets as trafficElementExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficElementExtension()
    {
        return $this->trafficElementExtension;
    }

    /**
     * Sets a new trafficElementExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficElementExtension
     * @return self
     */
    public function setTrafficElementExtension(\Calcinai\Siri\Datex\ExtensionType $trafficElementExtension)
    {
        $this->trafficElementExtension = $trafficElementExtension;
        return $this;
    }


}
