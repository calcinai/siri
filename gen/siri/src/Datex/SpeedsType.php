<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SpeedsType
 *
 * Supplementary speed advice.
 * XSD Type: Speeds
 */
class SpeedsType extends AdviceType
{

    /**
     * Additional information relating to speed limits or control that can be provided to travellers.
     *
     * @property string $speedAdvice
     */
    private $speedAdvice = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $speedsExtension
     */
    private $speedsExtension = null;

    /**
     * Gets as speedAdvice
     *
     * Additional information relating to speed limits or control that can be provided to travellers.
     *
     * @return string
     */
    public function getSpeedAdvice()
    {
        return $this->speedAdvice;
    }

    /**
     * Sets a new speedAdvice
     *
     * Additional information relating to speed limits or control that can be provided to travellers.
     *
     * @param string $speedAdvice
     * @return self
     */
    public function setSpeedAdvice($speedAdvice)
    {
        $this->speedAdvice = $speedAdvice;
        return $this;
    }

    /**
     * Gets as speedsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSpeedsExtension()
    {
        return $this->speedsExtension;
    }

    /**
     * Sets a new speedsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $speedsExtension
     * @return self
     */
    public function setSpeedsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $speedsExtension)
    {
        $this->speedsExtension = $speedsExtension;
        return $this;
    }


}

