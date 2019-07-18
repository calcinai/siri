<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AnnotatedDestinationStructureType
 *
 * Type for Destination and name type.
 * XSD Type: AnnotatedDestinationStructure
 */
class AnnotatedDestinationStructureType
{

    /**
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * Name of destination place.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName
     */
    private $placeName = null;

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
     * Gets as placeName
     *
     * Name of destination place.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Sets a new placeName
     *
     * Name of destination place.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName
     * @return self
     */
    public function setPlaceName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $placeName)
    {
        $this->placeName = $placeName;
        return $this;
    }


}

