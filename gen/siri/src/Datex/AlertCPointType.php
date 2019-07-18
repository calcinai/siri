<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCPointType
 *
 * A single point on the road network defined by reference to a pre-defined Alert C location table and which has an associated direction of traffic flow.
 * XSD Type: AlertCPoint
 */
class AlertCPointType
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
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCPointExtension
     */
    private $alertCPointExtension = null;

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
     * Gets as alertCPointExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCPointExtension()
    {
        return $this->alertCPointExtension;
    }

    /**
     * Sets a new alertCPointExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCPointExtension
     * @return self
     */
    public function setAlertCPointExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCPointExtension)
    {
        $this->alertCPointExtension = $alertCPointExtension;
        return $this;
    }


}

