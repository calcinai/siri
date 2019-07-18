<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedOperatorStructureType
 *
 * Type for Annotated reference to affected Operator.
 * XSD Type: AffectedOperatorStructure
 */
class AffectedOperatorStructureType
{

    /**
     * Identifier of Operator.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Public Name of Operator. Can be derived from OperatorRef.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $operatorName
     */
    private $operatorName = null;

    /**
     * Short Name for Operator. Can be derived from OperatorRef
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $operatorShortName
     */
    private $operatorShortName = null;

    /**
     * Operational unit responsible for managing services.
     *
     * @property string[] $operationalUnitRef
     */
    private $operationalUnitRef = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as operatorRef
     *
     * Identifier of Operator.
     *
     * @return string
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Identifier of Operator.
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef($operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }

    /**
     * Gets as operatorName
     *
     * Public Name of Operator. Can be derived from OperatorRef.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * Sets a new operatorName
     *
     * Public Name of Operator. Can be derived from OperatorRef.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $operatorName
     * @return self
     */
    public function setOperatorName(\Calcinai\Siri\NaturalLanguageStringStructureType $operatorName)
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * Gets as operatorShortName
     *
     * Short Name for Operator. Can be derived from OperatorRef
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getOperatorShortName()
    {
        return $this->operatorShortName;
    }

    /**
     * Sets a new operatorShortName
     *
     * Short Name for Operator. Can be derived from OperatorRef
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $operatorShortName
     * @return self
     */
    public function setOperatorShortName(\Calcinai\Siri\NaturalLanguageStringStructureType $operatorShortName)
    {
        $this->operatorShortName = $operatorShortName;
        return $this;
    }

    /**
     * Adds as operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @return self
     * @param string $operationalUnitRef
     */
    public function addToOperationalUnitRef($operationalUnitRef)
    {
        $this->operationalUnitRef[] = $operationalUnitRef;
        return $this;
    }

    /**
     * isset operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationalUnitRef($index)
    {
        return isset($this->operationalUnitRef[$index]);
    }

    /**
     * unset operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationalUnitRef($index)
    {
        unset($this->operationalUnitRef[$index]);
    }

    /**
     * Gets as operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @return string[]
     */
    public function getOperationalUnitRef()
    {
        return $this->operationalUnitRef;
    }

    /**
     * Sets a new operationalUnitRef
     *
     * Operational unit responsible for managing services.
     *
     * @param string $operationalUnitRef
     * @return self
     */
    public function setOperationalUnitRef(array $operationalUnitRef)
    {
        $this->operationalUnitRef = $operationalUnitRef;
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

