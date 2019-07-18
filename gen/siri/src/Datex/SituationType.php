<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SituationType
 *
 * An identifiable instance of a traffic/travel situation comprising one or more traffic/travel circumstances which are linked by one or more causal relationships. Each traffic/travel circumstance is represented by a Situation Record.
 * XSD Type: Situation
 */
class SituationType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * The overall assessment of the impact (in terms of severity) that the situation as a whole is having, or will have, on the traffic flow as perceived by the supplier.
     *
     * @property string $overallImpact
     */
    private $overallImpact = null;

    /**
     * A reference to a related situation via its unique identifier.
     *
     * @property string[] $relatedSituation
     */
    private $relatedSituation = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SituationRecordType[] $situationRecord
     */
    private $situationRecord = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $situationExtension
     */
    private $situationExtension = null;

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
     * Gets as overallImpact
     *
     * The overall assessment of the impact (in terms of severity) that the situation as a whole is having, or will have, on the traffic flow as perceived by the supplier.
     *
     * @return string
     */
    public function getOverallImpact()
    {
        return $this->overallImpact;
    }

    /**
     * Sets a new overallImpact
     *
     * The overall assessment of the impact (in terms of severity) that the situation as a whole is having, or will have, on the traffic flow as perceived by the supplier.
     *
     * @param string $overallImpact
     * @return self
     */
    public function setOverallImpact($overallImpact)
    {
        $this->overallImpact = $overallImpact;
        return $this;
    }

    /**
     * Adds as relatedSituation
     *
     * A reference to a related situation via its unique identifier.
     *
     * @return self
     * @param string $relatedSituation
     */
    public function addToRelatedSituation($relatedSituation)
    {
        $this->relatedSituation[] = $relatedSituation;
        return $this;
    }

    /**
     * isset relatedSituation
     *
     * A reference to a related situation via its unique identifier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedSituation($index)
    {
        return isset($this->relatedSituation[$index]);
    }

    /**
     * unset relatedSituation
     *
     * A reference to a related situation via its unique identifier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedSituation($index)
    {
        unset($this->relatedSituation[$index]);
    }

    /**
     * Gets as relatedSituation
     *
     * A reference to a related situation via its unique identifier.
     *
     * @return string[]
     */
    public function getRelatedSituation()
    {
        return $this->relatedSituation;
    }

    /**
     * Sets a new relatedSituation
     *
     * A reference to a related situation via its unique identifier.
     *
     * @param string $relatedSituation
     * @return self
     */
    public function setRelatedSituation(array $relatedSituation)
    {
        $this->relatedSituation = $relatedSituation;
        return $this;
    }

    /**
     * Gets as headerInformation
     *
     * @return \Calcinai\Siri\Objects\Datex\HeaderInformationType
     */
    public function getHeaderInformation()
    {
        return $this->headerInformation;
    }

    /**
     * Sets a new headerInformation
     *
     * @param \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     * @return self
     */
    public function setHeaderInformation(\Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation)
    {
        $this->headerInformation = $headerInformation;
        return $this;
    }

    /**
     * Adds as situationRecord
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\SituationRecordType $situationRecord
     */
    public function addToSituationRecord(\Calcinai\Siri\Objects\Datex\SituationRecordType $situationRecord)
    {
        $this->situationRecord[] = $situationRecord;
        return $this;
    }

    /**
     * isset situationRecord
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationRecord($index)
    {
        return isset($this->situationRecord[$index]);
    }

    /**
     * unset situationRecord
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationRecord($index)
    {
        unset($this->situationRecord[$index]);
    }

    /**
     * Gets as situationRecord
     *
     * @return \Calcinai\Siri\Objects\Datex\SituationRecordType[]
     */
    public function getSituationRecord()
    {
        return $this->situationRecord;
    }

    /**
     * Sets a new situationRecord
     *
     * @param \Calcinai\Siri\Objects\Datex\SituationRecordType[] $situationRecord
     * @return self
     */
    public function setSituationRecord(array $situationRecord)
    {
        $this->situationRecord = $situationRecord;
        return $this;
    }

    /**
     * Gets as situationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSituationExtension()
    {
        return $this->situationExtension;
    }

    /**
     * Sets a new situationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $situationExtension
     * @return self
     */
    public function setSituationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $situationExtension)
    {
        $this->situationExtension = $situationExtension;
        return $this;
    }


}

