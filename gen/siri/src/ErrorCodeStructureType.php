<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ErrorCodeStructureType
 *
 * Type for Error Code
 * XSD Type: ErrorCodeStructure
 */
class ErrorCodeStructureType
{

    /**
     * Addtional Description of error. This allows a descripotion to be supplied when the Error code is used in a specific WSDL fault, rather than within a general error condition
     *
     * @property string $errorText
     */
    private $errorText = null;

    /**
     * Gets as errorText
     *
     * Addtional Description of error. This allows a descripotion to be supplied when the Error code is used in a specific WSDL fault, rather than within a general error condition
     *
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }

    /**
     * Sets a new errorText
     *
     * Addtional Description of error. This allows a descripotion to be supplied when the Error code is used in a specific WSDL fault, rather than within a general error condition
     *
     * @param string $errorText
     * @return self
     */
    public function setErrorText($errorText)
    {
        $this->errorText = $errorText;
        return $this;
    }


}

