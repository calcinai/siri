<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing WarningsType
 *
 * Supplementary warning advice.
 * XSD Type: Warnings
 */
class WarningsType extends AdviceType
{

    /**
     * Additional information of a warning nature that can be provided to travellers.
     *
     * @property string $warningAdvice
     */
    private $warningAdvice = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $warningsExtension
     */
    private $warningsExtension = null;

    /**
     * Gets as warningAdvice
     *
     * Additional information of a warning nature that can be provided to travellers.
     *
     * @return string
     */
    public function getWarningAdvice()
    {
        return $this->warningAdvice;
    }

    /**
     * Sets a new warningAdvice
     *
     * Additional information of a warning nature that can be provided to travellers.
     *
     * @param string $warningAdvice
     * @return self
     */
    public function setWarningAdvice($warningAdvice)
    {
        $this->warningAdvice = $warningAdvice;
        return $this;
    }

    /**
     * Gets as warningsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getWarningsExtension()
    {
        return $this->warningsExtension;
    }

    /**
     * Sets a new warningsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $warningsExtension
     * @return self
     */
    public function setWarningsExtension(\Calcinai\Siri\Datex\ExtensionType $warningsExtension)
    {
        $this->warningsExtension = $warningsExtension;
        return $this;
    }


}

