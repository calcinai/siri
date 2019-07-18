<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopLineNoticeStructureType
 *
 * Data type for Visit of a vehicle to a stop. May provide information about the arrival, the departure or both.
 * XSD Type: StopLineNoticeStructure
 */
class StopLineNoticeStructureType extends AbstractIdentifiedItemStructureType
{

    /**
     * Identifier of stop monitoring point to which line event applies.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Line Reference.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Identifies the line direction, typically outward or return.
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Special text associated with line.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $lineNote
     */
    private $lineNote = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\SituationRef[] $situationRef
     */
    private $situationRef = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as monitoringRef
     *
     * Identifier of stop monitoring point to which line event applies.
     *
     * @return string
     */
    public function getMonitoringRef()
    {
        return $this->monitoringRef;
    }

    /**
     * Sets a new monitoringRef
     *
     * Identifier of stop monitoring point to which line event applies.
     *
     * @param string $monitoringRef
     * @return self
     */
    public function setMonitoringRef($monitoringRef)
    {
        $this->monitoringRef = $monitoringRef;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Line Reference.
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Line Reference.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as directionRef
     *
     * Identifies the line direction, typically outward or return.
     *
     * @return string
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Identifies the line direction, typically outward or return.
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef($directionRef)
    {
        $this->directionRef = $directionRef;
        return $this;
    }

    /**
     * Adds as lineNote
     *
     * Special text associated with line.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $lineNote
     */
    public function addToLineNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $lineNote)
    {
        $this->lineNote[] = $lineNote;
        return $this;
    }

    /**
     * isset lineNote
     *
     * Special text associated with line.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineNote($index)
    {
        return isset($this->lineNote[$index]);
    }

    /**
     * unset lineNote
     *
     * Special text associated with line.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineNote($index)
    {
        unset($this->lineNote[$index]);
    }

    /**
     * Gets as lineNote
     *
     * Special text associated with line.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[]
     */
    public function getLineNote()
    {
        return $this->lineNote;
    }

    /**
     * Sets a new lineNote
     *
     * Special text associated with line.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType[] $lineNote
     * @return self
     */
    public function setLineNote(array $lineNote)
    {
        $this->lineNote = $lineNote;
        return $this;
    }

    /**
     * Adds as situationRef
     *
     * @return self
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    public function addToSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef[] = $situationRef;
        return $this;
    }

    /**
     * isset situationRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationRef($index)
    {
        return isset($this->situationRef[$index]);
    }

    /**
     * unset situationRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationRef($index)
    {
        unset($this->situationRef[$index]);
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef[]
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef[] $situationRef
     * @return self
     */
    public function setSituationRef(array $situationRef)
    {
        $this->situationRef = $situationRef;
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

