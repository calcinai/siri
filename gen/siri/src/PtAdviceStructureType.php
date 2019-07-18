<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PtAdviceStructureType
 *
 * Type for advice
 * XSD Type: PtAdviceStructure
 */
class PtAdviceStructureType
{

    /**
     * Identifier of standard Further advice message to passengers.
     *
     * @property string $adviceRef
     */
    private $adviceRef = null;

    /**
     * Further Textual advice to passengers.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $details
     */
    private $details = null;

    /**
     * Gets as adviceRef
     *
     * Identifier of standard Further advice message to passengers.
     *
     * @return string
     */
    public function getAdviceRef()
    {
        return $this->adviceRef;
    }

    /**
     * Sets a new adviceRef
     *
     * Identifier of standard Further advice message to passengers.
     *
     * @param string $adviceRef
     * @return self
     */
    public function setAdviceRef($adviceRef)
    {
        $this->adviceRef = $adviceRef;
        return $this;
    }

    /**
     * Gets as details
     *
     * Further Textual advice to passengers.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Further Textual advice to passengers.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $details
     * @return self
     */
    public function setDetails(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $details)
    {
        $this->details = $details;
        return $this;
    }


}

