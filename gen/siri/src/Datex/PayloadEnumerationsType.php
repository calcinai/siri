<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PayloadEnumerationsType
 *
 * A collection of lists of enumeration values used throughout the DATEX II model.
 * XSD Type: PayloadEnumerations
 */
class PayloadEnumerationsType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\LocationEnumerationsType $locationEnumerations
     */
    private $locationEnumerations = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $payloadEnumerationsExtension
     */
    private $payloadEnumerationsExtension = null;

    /**
     * Gets as locationEnumerations
     *
     * @return \Calcinai\Siri\Objects\Datex\LocationEnumerationsType
     */
    public function getLocationEnumerations()
    {
        return $this->locationEnumerations;
    }

    /**
     * Sets a new locationEnumerations
     *
     * @param \Calcinai\Siri\Objects\Datex\LocationEnumerationsType $locationEnumerations
     * @return self
     */
    public function setLocationEnumerations(\Calcinai\Siri\Objects\Datex\LocationEnumerationsType $locationEnumerations)
    {
        $this->locationEnumerations = $locationEnumerations;
        return $this;
    }

    /**
     * Gets as payloadEnumerationsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPayloadEnumerationsExtension()
    {
        return $this->payloadEnumerationsExtension;
    }

    /**
     * Sets a new payloadEnumerationsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $payloadEnumerationsExtension
     * @return self
     */
    public function setPayloadEnumerationsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $payloadEnumerationsExtension)
    {
        $this->payloadEnumerationsExtension = $payloadEnumerationsExtension;
        return $this;
    }


}

