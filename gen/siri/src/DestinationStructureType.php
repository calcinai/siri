<?php

namespace Calcinai\Siri;

/**
 * Class representing DestinationStructureType
 *
 * Type for Information about a Destination.
 * XSD Type: DestinationStructure
 */
class DestinationStructureType
{

    /**
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $destinationName
     */
    private $destinationName = null;

    /**
     * Gets as destinationRef
     *
     * @return string
     */
    public function getDestinationRef()
    {
        return $this->destinationRef;
    }

    /**
     * Sets a new destinationRef
     *
     * @param string $destinationRef
     * @return self
     */
    public function setDestinationRef($destinationRef)
    {
        $this->destinationRef = $destinationRef;
        return $this;
    }

    /**
     * Gets as destinationName
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * Sets a new destinationName
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $destinationName
     * @return self
     */
    public function setDestinationName(\Calcinai\Siri\NaturalLanguageStringStructureType $destinationName)
    {
        $this->destinationName = $destinationName;
        return $this;
    }


}

