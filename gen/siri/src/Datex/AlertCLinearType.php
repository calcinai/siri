<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCLinearType
 *
 * A linear section along a road defined between two points on the road by reference to a pre-defined Alert C location table.
 * XSD Type: AlertCLinear
 */
class AlertCLinearType
{

    /**
     * EBU country code.
     *
     * @property string $alertCLocationCountryCode
     */
    private $alertCLocationCountryCode = null;

    /**
     * Number allocated to an ALERT C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
     *
     * @property string $alertCLocationTableNumber
     */
    private $alertCLocationTableNumber = null;

    /**
     * Version number associated to an ALERT C table reference.
     *
     * @property string $alertCLocationTableVersion
     */
    private $alertCLocationTableVersion = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearExtension
     */
    private $alertCLinearExtension = null;

    /**
     * Gets as alertCLocationCountryCode
     *
     * EBU country code.
     *
     * @return string
     */
    public function getAlertCLocationCountryCode()
    {
        return $this->alertCLocationCountryCode;
    }

    /**
     * Sets a new alertCLocationCountryCode
     *
     * EBU country code.
     *
     * @param string $alertCLocationCountryCode
     * @return self
     */
    public function setAlertCLocationCountryCode($alertCLocationCountryCode)
    {
        $this->alertCLocationCountryCode = $alertCLocationCountryCode;
        return $this;
    }

    /**
     * Gets as alertCLocationTableNumber
     *
     * Number allocated to an ALERT C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
     *
     * @return string
     */
    public function getAlertCLocationTableNumber()
    {
        return $this->alertCLocationTableNumber;
    }

    /**
     * Sets a new alertCLocationTableNumber
     *
     * Number allocated to an ALERT C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
     *
     * @param string $alertCLocationTableNumber
     * @return self
     */
    public function setAlertCLocationTableNumber($alertCLocationTableNumber)
    {
        $this->alertCLocationTableNumber = $alertCLocationTableNumber;
        return $this;
    }

    /**
     * Gets as alertCLocationTableVersion
     *
     * Version number associated to an ALERT C table reference.
     *
     * @return string
     */
    public function getAlertCLocationTableVersion()
    {
        return $this->alertCLocationTableVersion;
    }

    /**
     * Sets a new alertCLocationTableVersion
     *
     * Version number associated to an ALERT C table reference.
     *
     * @param string $alertCLocationTableVersion
     * @return self
     */
    public function setAlertCLocationTableVersion($alertCLocationTableVersion)
    {
        $this->alertCLocationTableVersion = $alertCLocationTableVersion;
        return $this;
    }

    /**
     * Gets as alertCLinearExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCLinearExtension()
    {
        return $this->alertCLinearExtension;
    }

    /**
     * Sets a new alertCLinearExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearExtension
     * @return self
     */
    public function setAlertCLinearExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearExtension)
    {
        $this->alertCLinearExtension = $alertCLinearExtension;
        return $this;
    }


}

