<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MobilityType
 *
 * Indicating whether an activity or a roadwork is mobile (e.g.. a march or parade) or static (e.g. a crowd, or sign-post maintenance).
 * XSD Type: Mobility
 */
class MobilityType
{

    /**
     * Indicating whether an activity or a roadwork is mobile (e.g.. a march or parade) or static (e.g. a crowd, or sign-post maintenance).
     *
     * @property string $mobilityType
     */
    private $mobilityType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $mobilityExtension
     */
    private $mobilityExtension = null;

    /**
     * Gets as mobilityType
     *
     * Indicating whether an activity or a roadwork is mobile (e.g.. a march or parade) or static (e.g. a crowd, or sign-post maintenance).
     *
     * @return string
     */
    public function getMobilityType()
    {
        return $this->mobilityType;
    }

    /**
     * Sets a new mobilityType
     *
     * Indicating whether an activity or a roadwork is mobile (e.g.. a march or parade) or static (e.g. a crowd, or sign-post maintenance).
     *
     * @param string $mobilityType
     * @return self
     */
    public function setMobilityType($mobilityType)
    {
        $this->mobilityType = $mobilityType;
        return $this;
    }

    /**
     * Gets as mobilityExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMobilityExtension()
    {
        return $this->mobilityExtension;
    }

    /**
     * Sets a new mobilityExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $mobilityExtension
     * @return self
     */
    public function setMobilityExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $mobilityExtension)
    {
        $this->mobilityExtension = $mobilityExtension;
        return $this;
    }


}

