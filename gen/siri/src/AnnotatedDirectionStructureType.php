<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AnnotatedDirectionStructureType
 *
 * Type for Direction and name description.
 * XSD Type: AnnotatedDirectionStructure
 */
class AnnotatedDirectionStructureType
{

    /**
     * @property string $annotatedDirectionRef
     */
    private $annotatedDirectionRef = null;

    /**
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName
     */
    private $directionName = null;

    /**
     * Gets as annotatedDirectionRef
     *
     * @return string
     */
    public function getAnnotatedDirectionRef()
    {
        return $this->annotatedDirectionRef;
    }

    /**
     * Sets a new annotatedDirectionRef
     *
     * @param string $annotatedDirectionRef
     * @return self
     */
    public function setAnnotatedDirectionRef($annotatedDirectionRef)
    {
        $this->annotatedDirectionRef = $annotatedDirectionRef;
        return $this;
    }

    /**
     * Gets as directionName
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getDirectionName()
    {
        return $this->directionName;
    }

    /**
     * Sets a new directionName
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName
     * @return self
     */
    public function setDirectionName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $directionName)
    {
        $this->directionName = $directionName;
        return $this;
    }


}

