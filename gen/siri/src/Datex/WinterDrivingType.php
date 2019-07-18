<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing WinterDrivingType
 *
 * Supplementary winter driving advice.
 * XSD Type: WinterDriving
 */
class WinterDrivingType extends AdviceType
{

    /**
     * Additional information providing winter driving advice that can be provided to travellers.
     *
     * @property string $winterDrivingAdvice
     */
    private $winterDrivingAdvice = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $winterDrivingExtension
     */
    private $winterDrivingExtension = null;

    /**
     * Gets as winterDrivingAdvice
     *
     * Additional information providing winter driving advice that can be provided to travellers.
     *
     * @return string
     */
    public function getWinterDrivingAdvice()
    {
        return $this->winterDrivingAdvice;
    }

    /**
     * Sets a new winterDrivingAdvice
     *
     * Additional information providing winter driving advice that can be provided to travellers.
     *
     * @param string $winterDrivingAdvice
     * @return self
     */
    public function setWinterDrivingAdvice($winterDrivingAdvice)
    {
        $this->winterDrivingAdvice = $winterDrivingAdvice;
        return $this;
    }

    /**
     * Gets as winterDrivingExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getWinterDrivingExtension()
    {
        return $this->winterDrivingExtension;
    }

    /**
     * Sets a new winterDrivingExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $winterDrivingExtension
     * @return self
     */
    public function setWinterDrivingExtension(\Calcinai\Siri\Datex\ExtensionType $winterDrivingExtension)
    {
        $this->winterDrivingExtension = $winterDrivingExtension;
        return $this;
    }


}

