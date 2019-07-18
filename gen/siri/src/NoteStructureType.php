<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing NoteStructureType
 *
 * DataType for a note
 * XSD Type: NoteStructure
 */
class NoteStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * @property string $situationSimpleRef
     */
    private $situationSimpleRef = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationFullRef $situationFullRef
     */
    private $situationFullRef = null;

    /**
     * Text annotation that applies to this call.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note
     */
    private $note = null;

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as situationSimpleRef
     *
     * @return string
     */
    public function getSituationSimpleRef()
    {
        return $this->situationSimpleRef;
    }

    /**
     * Sets a new situationSimpleRef
     *
     * @param string $situationSimpleRef
     * @return self
     */
    public function setSituationSimpleRef($situationSimpleRef)
    {
        $this->situationSimpleRef = $situationSimpleRef;
        return $this;
    }

    /**
     * Gets as situationFullRef
     *
     * @return \Calcinai\Siri\Objects\SituationFullRef
     */
    public function getSituationFullRef()
    {
        return $this->situationFullRef;
    }

    /**
     * Sets a new situationFullRef
     *
     * @param \Calcinai\Siri\Objects\SituationFullRef $situationFullRef
     * @return self
     */
    public function setSituationFullRef(\Calcinai\Siri\Objects\SituationFullRef $situationFullRef)
    {
        $this->situationFullRef = $situationFullRef;
        return $this;
    }

    /**
     * Gets as note
     *
     * Text annotation that applies to this call.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Text annotation that applies to this call.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note
     * @return self
     */
    public function setNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note)
    {
        $this->note = $note;
        return $this;
    }


}

