<?php

namespace Calcinai\Siri\IFOpt;

/**
 * Class representing AliasStructureType
 *
 * Alternative Private Code
 * XSD Type: AliasStructure
 */
class AliasStructureType
{

    /**
     * ALternative Identifier
     *
     * @property string $privateCode
     */
    private $privateCode = null;

    /**
     * Type of Identifier
     *
     * @property string $identifierType
     */
    private $identifierType = null;

    /**
     * Gets as privateCode
     *
     * ALternative Identifier
     *
     * @return string
     */
    public function getPrivateCode()
    {
        return $this->privateCode;
    }

    /**
     * Sets a new privateCode
     *
     * ALternative Identifier
     *
     * @param string $privateCode
     * @return self
     */
    public function setPrivateCode($privateCode)
    {
        $this->privateCode = $privateCode;
        return $this;
    }

    /**
     * Gets as identifierType
     *
     * Type of Identifier
     *
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->identifierType;
    }

    /**
     * Sets a new identifierType
     *
     * Type of Identifier
     *
     * @param string $identifierType
     * @return self
     */
    public function setIdentifierType($identifierType)
    {
        $this->identifierType = $identifierType;
        return $this;
    }


}

