<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PtSituationElementStructureType
 *
 * Type for individual PT situation.
 * XSD Type: PtSituationElementStructure
 */
class PtSituationElementStructureType extends SituationElementStructureType
{

    /**
     * Whether the situation has been verified.
     *
     * @property string $verification
     */
    private $verification = null;

    /**
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation.
     *
     * @property string $progress
     */
    private $progress = null;

    /**
     * Assessement of likely correctness of data.
     *
     * @property string $qualityIndex
     */
    private $qualityIndex = null;

    /**
     * Whether situation is real or a test.
     *
     * @property string $reality
     */
    private $reality = null;

    /**
     * Likellihoo of a future sutuation happening.
     *
     * @property string $likelihood
     */
    private $likelihood = null;

    /**
     * Publishing status one of a specified set of substates to which an situation can be assigned.
     *
     * @property string $publication
     */
    private $publication = null;

    /**
     * Overall inclusive Period of applicability of situation
     *
     * @property \Calcinai\Siri\Objects\PtSituationElementStructureType\ValidityPeriodAType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @property string[] $repetitions
     */
    private $repetitions = null;

    /**
     * Publication Window for situation if different from validity period.
     *
     * @property \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $publicationWindow
     */
    private $publicationWindow = null;

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
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reasonName
     */
    private $reasonName = null;

    /**
     * @property string $severity
     */
    private $severity = null;

    /**
     * Arbitrary rating of priority 1-High.
     *
     * @property int $priority
     */
    private $priority = null;

    /**
     * Confidentiality of situation.
     *
     * @property string $sensitivity
     */
    private $sensitivity = null;

    /**
     * Intended audience of situation.
     *
     * @property string $audience
     */
    private $audience = null;

    /**
     * Nature of scope, e.g. general, network
     *
     * @property string $scopeType
     */
    private $scopeType = null;

    /**
     * @property string $reportType
     */
    private $reportType = null;

    /**
     * Whether the situation was planned (eg engineering works) or unplanned (eg service alteration). Default is false, i.e. unplanned.
     *
     * @property bool $planned
     */
    private $planned = null;

    /**
     * Arbitrary application specific classifiers.
     *
     * @property string $keywords
     */
    private $keywords = null;

    /**
     * additioanl reasons
     *
     * @property \Calcinai\Siri\Objects\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[] $secondaryReasons
     */
    private $secondaryReasons = null;

    /**
     * Default language.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Summary of situation. If absent should be generated from structure elements / and or by condensing Description.
     *
     * @property \Calcinai\Siri\Objects\DefaultedTextStructureType $summary
     */
    private $summary = null;

    /**
     * Description of situation. Should not repeat any strap line included in Summary.
     *
     * @property \Calcinai\Siri\Objects\DefaultedTextStructureType $description
     */
    private $description = null;

    /**
     * Additional descriptive details about the situation.
     *
     * @property \Calcinai\Siri\Objects\DefaultedTextStructureType $detail
     */
    private $detail = null;

    /**
     * Further advice to passengers.
     *
     * @property \Calcinai\Siri\Objects\DefaultedTextStructureType $advice
     */
    private $advice = null;

    /**
     * Further advice to passengers.
     *
     * @property \Calcinai\Siri\Objects\DefaultedTextStructureType $internal
     */
    private $internal = null;

    /**
     * Any images associated with situation.
     *
     * @property \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[] $images
     */
    private $images = null;

    /**
     * Hyperlinks to other resources associated with situation.
     *
     * @property \Calcinai\Siri\Objects\InfoLinkStructureType[] $infoLinks
     */
    private $infoLinks = null;

    /**
     * Structured model identifiying parts of transport network affected by situation. Operator and Network values will be defaulted to values in general Context unless explicitly overridden.
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType $affects
     */
    private $affects = null;

    /**
     * Structured model describign effect of the situation on PT system.
     *
     * @property \Calcinai\Siri\Objects\PtConsequenceStructureType[] $consequences
     */
    private $consequences = null;

    /**
     * Structured model describing distribution actions to handle situation. Any actions stated completely replace those from Context. If no actions are stated, any actions from general Context are used.
     *
     * @property \Calcinai\Siri\Objects\ActionsStructureType $publishingActions
     */
    private $publishingActions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as verification
     *
     * Whether the situation has been verified.
     *
     * @return string
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * Whether the situation has been verified.
     *
     * @param string $verification
     * @return self
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }

    /**
     * Gets as progress
     *
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation.
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Sets a new progress
     *
     * ProgressStatus. One of a specified set of overall processing states assigned to situation. For example, 'Draft' for not yet published; 'Published' for live situations; 'Closed' indicates a completed situation.
     *
     * @param string $progress
     * @return self
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * Gets as qualityIndex
     *
     * Assessement of likely correctness of data.
     *
     * @return string
     */
    public function getQualityIndex()
    {
        return $this->qualityIndex;
    }

    /**
     * Sets a new qualityIndex
     *
     * Assessement of likely correctness of data.
     *
     * @param string $qualityIndex
     * @return self
     */
    public function setQualityIndex($qualityIndex)
    {
        $this->qualityIndex = $qualityIndex;
        return $this;
    }

    /**
     * Gets as reality
     *
     * Whether situation is real or a test.
     *
     * @return string
     */
    public function getReality()
    {
        return $this->reality;
    }

    /**
     * Sets a new reality
     *
     * Whether situation is real or a test.
     *
     * @param string $reality
     * @return self
     */
    public function setReality($reality)
    {
        $this->reality = $reality;
        return $this;
    }

    /**
     * Gets as likelihood
     *
     * Likellihoo of a future sutuation happening.
     *
     * @return string
     */
    public function getLikelihood()
    {
        return $this->likelihood;
    }

    /**
     * Sets a new likelihood
     *
     * Likellihoo of a future sutuation happening.
     *
     * @param string $likelihood
     * @return self
     */
    public function setLikelihood($likelihood)
    {
        $this->likelihood = $likelihood;
        return $this;
    }

    /**
     * Gets as publication
     *
     * Publishing status one of a specified set of substates to which an situation can be assigned.
     *
     * @return string
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Sets a new publication
     *
     * Publishing status one of a specified set of substates to which an situation can be assigned.
     *
     * @param string $publication
     * @return self
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * Overall inclusive Period of applicability of situation
     *
     * @return \Calcinai\Siri\Objects\PtSituationElementStructureType\ValidityPeriodAType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * Overall inclusive Period of applicability of situation
     *
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\ValidityPeriodAType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Calcinai\Siri\Objects\PtSituationElementStructureType\ValidityPeriodAType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as dayType
     *
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @return self
     * @param string $dayType
     */
    public function addToRepetitions($dayType)
    {
        $this->repetitions[] = $dayType;
        return $this;
    }

    /**
     * isset repetitions
     *
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepetitions($index)
    {
        return isset($this->repetitions[$index]);
    }

    /**
     * unset repetitions
     *
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepetitions($index)
    {
        unset($this->repetitions[$index]);
    }

    /**
     * Gets as repetitions
     *
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @return string[]
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * Sets a new repetitions
     *
     * situation applies only on the repeated day types within the overall validity period(s). For example Sunday.
     *
     * @param string $repetitions
     * @return self
     */
    public function setRepetitions(array $repetitions)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    /**
     * Gets as publicationWindow
     *
     * Publication Window for situation if different from validity period.
     *
     * @return \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType
     */
    public function getPublicationWindow()
    {
        return $this->publicationWindow;
    }

    /**
     * Sets a new publicationWindow
     *
     * Publication Window for situation if different from validity period.
     *
     * @param \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $publicationWindow
     * @return self
     */
    public function setPublicationWindow(\Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $publicationWindow)
    {
        $this->publicationWindow = $publicationWindow;
        return $this;
    }

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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reasonName
     * @return self
     */
    public function setReasonName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reasonName)
    {
        $this->reasonName = $reasonName;
        return $this;
    }

    /**
     * Gets as severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Arbitrary rating of priority 1-High.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Arbitrary rating of priority 1-High.
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as sensitivity
     *
     * Confidentiality of situation.
     *
     * @return string
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * Sets a new sensitivity
     *
     * Confidentiality of situation.
     *
     * @param string $sensitivity
     * @return self
     */
    public function setSensitivity($sensitivity)
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    /**
     * Gets as audience
     *
     * Intended audience of situation.
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Sets a new audience
     *
     * Intended audience of situation.
     *
     * @param string $audience
     * @return self
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * Gets as scopeType
     *
     * Nature of scope, e.g. general, network
     *
     * @return string
     */
    public function getScopeType()
    {
        return $this->scopeType;
    }

    /**
     * Sets a new scopeType
     *
     * Nature of scope, e.g. general, network
     *
     * @param string $scopeType
     * @return self
     */
    public function setScopeType($scopeType)
    {
        $this->scopeType = $scopeType;
        return $this;
    }

    /**
     * Gets as reportType
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Sets a new reportType
     *
     * @param string $reportType
     * @return self
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
        return $this;
    }

    /**
     * Gets as planned
     *
     * Whether the situation was planned (eg engineering works) or unplanned (eg service alteration). Default is false, i.e. unplanned.
     *
     * @return bool
     */
    public function getPlanned()
    {
        return $this->planned;
    }

    /**
     * Sets a new planned
     *
     * Whether the situation was planned (eg engineering works) or unplanned (eg service alteration). Default is false, i.e. unplanned.
     *
     * @param bool $planned
     * @return self
     */
    public function setPlanned($planned)
    {
        $this->planned = $planned;
        return $this;
    }

    /**
     * Gets as keywords
     *
     * Arbitrary application specific classifiers.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * Arbitrary application specific classifiers.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Adds as reason
     *
     * additioanl reasons
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType $reason
     */
    public function addToSecondaryReasons(\Calcinai\Siri\Objects\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType $reason)
    {
        $this->secondaryReasons[] = $reason;
        return $this;
    }

    /**
     * isset secondaryReasons
     *
     * additioanl reasons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryReasons($index)
    {
        return isset($this->secondaryReasons[$index]);
    }

    /**
     * unset secondaryReasons
     *
     * additioanl reasons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryReasons($index)
    {
        unset($this->secondaryReasons[$index]);
    }

    /**
     * Gets as secondaryReasons
     *
     * additioanl reasons
     *
     * @return \Calcinai\Siri\Objects\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[]
     */
    public function getSecondaryReasons()
    {
        return $this->secondaryReasons;
    }

    /**
     * Sets a new secondaryReasons
     *
     * additioanl reasons
     *
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[] $secondaryReasons
     * @return self
     */
    public function setSecondaryReasons(array $secondaryReasons)
    {
        $this->secondaryReasons = $secondaryReasons;
        return $this;
    }

    /**
     * Gets as language
     *
     * Default language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Default language.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as summary
     *
     * Summary of situation. If absent should be generated from structure elements / and or by condensing Description.
     *
     * @return \Calcinai\Siri\Objects\DefaultedTextStructureType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary of situation. If absent should be generated from structure elements / and or by condensing Description.
     *
     * @param \Calcinai\Siri\Objects\DefaultedTextStructureType $summary
     * @return self
     */
    public function setSummary(\Calcinai\Siri\Objects\DefaultedTextStructureType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of situation. Should not repeat any strap line included in Summary.
     *
     * @return \Calcinai\Siri\Objects\DefaultedTextStructureType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of situation. Should not repeat any strap line included in Summary.
     *
     * @param \Calcinai\Siri\Objects\DefaultedTextStructureType $description
     * @return self
     */
    public function setDescription(\Calcinai\Siri\Objects\DefaultedTextStructureType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Additional descriptive details about the situation.
     *
     * @return \Calcinai\Siri\Objects\DefaultedTextStructureType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Additional descriptive details about the situation.
     *
     * @param \Calcinai\Siri\Objects\DefaultedTextStructureType $detail
     * @return self
     */
    public function setDetail(\Calcinai\Siri\Objects\DefaultedTextStructureType $detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as advice
     *
     * Further advice to passengers.
     *
     * @return \Calcinai\Siri\Objects\DefaultedTextStructureType
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Sets a new advice
     *
     * Further advice to passengers.
     *
     * @param \Calcinai\Siri\Objects\DefaultedTextStructureType $advice
     * @return self
     */
    public function setAdvice(\Calcinai\Siri\Objects\DefaultedTextStructureType $advice)
    {
        $this->advice = $advice;
        return $this;
    }

    /**
     * Gets as internal
     *
     * Further advice to passengers.
     *
     * @return \Calcinai\Siri\Objects\DefaultedTextStructureType
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * Sets a new internal
     *
     * Further advice to passengers.
     *
     * @param \Calcinai\Siri\Objects\DefaultedTextStructureType $internal
     * @return self
     */
    public function setInternal(\Calcinai\Siri\Objects\DefaultedTextStructureType $internal)
    {
        $this->internal = $internal;
        return $this;
    }

    /**
     * Adds as image
     *
     * Any images associated with situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType $image
     */
    public function addToImages(\Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType $image)
    {
        $this->images[] = $image;
        return $this;
    }

    /**
     * isset images
     *
     * Any images associated with situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImages($index)
    {
        return isset($this->images[$index]);
    }

    /**
     * unset images
     *
     * Any images associated with situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImages($index)
    {
        unset($this->images[$index]);
    }

    /**
     * Gets as images
     *
     * Any images associated with situation.
     *
     * @return \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * Any images associated with situation.
     *
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[] $images
     * @return self
     */
    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Adds as infoLink
     *
     * Hyperlinks to other resources associated with situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\InfoLinkStructureType $infoLink
     */
    public function addToInfoLinks(\Calcinai\Siri\Objects\InfoLinkStructureType $infoLink)
    {
        $this->infoLinks[] = $infoLink;
        return $this;
    }

    /**
     * isset infoLinks
     *
     * Hyperlinks to other resources associated with situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoLinks($index)
    {
        return isset($this->infoLinks[$index]);
    }

    /**
     * unset infoLinks
     *
     * Hyperlinks to other resources associated with situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoLinks($index)
    {
        unset($this->infoLinks[$index]);
    }

    /**
     * Gets as infoLinks
     *
     * Hyperlinks to other resources associated with situation.
     *
     * @return \Calcinai\Siri\Objects\InfoLinkStructureType[]
     */
    public function getInfoLinks()
    {
        return $this->infoLinks;
    }

    /**
     * Sets a new infoLinks
     *
     * Hyperlinks to other resources associated with situation.
     *
     * @param \Calcinai\Siri\Objects\InfoLinkStructureType[] $infoLinks
     * @return self
     */
    public function setInfoLinks(array $infoLinks)
    {
        $this->infoLinks = $infoLinks;
        return $this;
    }

    /**
     * Gets as affects
     *
     * Structured model identifiying parts of transport network affected by situation. Operator and Network values will be defaulted to values in general Context unless explicitly overridden.
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType
     */
    public function getAffects()
    {
        return $this->affects;
    }

    /**
     * Sets a new affects
     *
     * Structured model identifiying parts of transport network affected by situation. Operator and Network values will be defaulted to values in general Context unless explicitly overridden.
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType $affects
     * @return self
     */
    public function setAffects(\Calcinai\Siri\Objects\AffectsScopeStructureType $affects)
    {
        $this->affects = $affects;
        return $this;
    }

    /**
     * Adds as consequence
     *
     * Structured model describign effect of the situation on PT system.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PtConsequenceStructureType $consequence
     */
    public function addToConsequences(\Calcinai\Siri\Objects\PtConsequenceStructureType $consequence)
    {
        $this->consequences[] = $consequence;
        return $this;
    }

    /**
     * isset consequences
     *
     * Structured model describign effect of the situation on PT system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsequences($index)
    {
        return isset($this->consequences[$index]);
    }

    /**
     * unset consequences
     *
     * Structured model describign effect of the situation on PT system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsequences($index)
    {
        unset($this->consequences[$index]);
    }

    /**
     * Gets as consequences
     *
     * Structured model describign effect of the situation on PT system.
     *
     * @return \Calcinai\Siri\Objects\PtConsequenceStructureType[]
     */
    public function getConsequences()
    {
        return $this->consequences;
    }

    /**
     * Sets a new consequences
     *
     * Structured model describign effect of the situation on PT system.
     *
     * @param \Calcinai\Siri\Objects\PtConsequenceStructureType[] $consequences
     * @return self
     */
    public function setConsequences(array $consequences)
    {
        $this->consequences = $consequences;
        return $this;
    }

    /**
     * Gets as publishingActions
     *
     * Structured model describing distribution actions to handle situation. Any actions stated completely replace those from Context. If no actions are stated, any actions from general Context are used.
     *
     * @return \Calcinai\Siri\Objects\ActionsStructureType
     */
    public function getPublishingActions()
    {
        return $this->publishingActions;
    }

    /**
     * Sets a new publishingActions
     *
     * Structured model describing distribution actions to handle situation. Any actions stated completely replace those from Context. If no actions are stated, any actions from general Context are used.
     *
     * @param \Calcinai\Siri\Objects\ActionsStructureType $publishingActions
     * @return self
     */
    public function setPublishingActions(\Calcinai\Siri\Objects\ActionsStructureType $publishingActions)
    {
        $this->publishingActions = $publishingActions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

