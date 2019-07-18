<?php

namespace Calcinai\Siri;

/**
 * Class representing RemedyStructureType
 *
 * Description of the remedy to the change of a facility status (mainly when it becomes partially or totally anavailable)
 * XSD Type: RemedyStructure
 */
class RemedyStructureType
{

    /**
     * Type of the remedy (repair/replacement/remove)
     *
     * @property string $remedyType
     */
    private $remedyType = null;

    /**
     * Description of the set up remedy in natural language
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $description
     */
    private $description = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as remedyType
     *
     * Type of the remedy (repair/replacement/remove)
     *
     * @return string
     */
    public function getRemedyType()
    {
        return $this->remedyType;
    }

    /**
     * Sets a new remedyType
     *
     * Type of the remedy (repair/replacement/remove)
     *
     * @param string $remedyType
     * @return self
     */
    public function setRemedyType($remedyType)
    {
        $this->remedyType = $remedyType;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the set up remedy in natural language
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the set up remedy in natural language
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $description
     * @return self
     */
    public function setDescription(\Calcinai\Siri\NaturalLanguageStringStructureType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

