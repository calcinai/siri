<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing DiversionType
 *
 * Supplementary diversion advice.
 * XSD Type: Diversion
 */
class DiversionType extends AdviceType
{

    /**
     * Advice indicating whether travellers are recommended to find and follow an alternative route around a traffic/travel situation.
     *
     * @property string $diversionAdvice
     */
    private $diversionAdvice = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $diversionExtension
     */
    private $diversionExtension = null;

    /**
     * Gets as diversionAdvice
     *
     * Advice indicating whether travellers are recommended to find and follow an alternative route around a traffic/travel situation.
     *
     * @return string
     */
    public function getDiversionAdvice()
    {
        return $this->diversionAdvice;
    }

    /**
     * Sets a new diversionAdvice
     *
     * Advice indicating whether travellers are recommended to find and follow an alternative route around a traffic/travel situation.
     *
     * @param string $diversionAdvice
     * @return self
     */
    public function setDiversionAdvice($diversionAdvice)
    {
        $this->diversionAdvice = $diversionAdvice;
        return $this;
    }

    /**
     * Gets as diversionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getDiversionExtension()
    {
        return $this->diversionExtension;
    }

    /**
     * Sets a new diversionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $diversionExtension
     * @return self
     */
    public function setDiversionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $diversionExtension)
    {
        $this->diversionExtension = $diversionExtension;
        return $this;
    }


}

