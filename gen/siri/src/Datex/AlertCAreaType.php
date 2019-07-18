<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCAreaType
 *
 * An area defined by reference to a predefined Alert C location table.
 * XSD Type: AlertCArea
 */
class AlertCAreaType
{

    /**
     * EBU country code.
     *
     * @property string $alertCLocationCountryCode
     */
    private $alertCLocationCountryCode = null;

    /**
     * Number allocated to an Alert C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
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
     * @property \Calcinai\Siri\Datex\AlertCLocationType $areaLocation
     */
    private $areaLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCAreaExtension
     */
    private $alertCAreaExtension = null;

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
     * Number allocated to an Alert C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
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
     * Number allocated to an Alert C table in a country. Ref. prENV12313-3 for the allocation of a location table number.
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
     * Gets as areaLocation
     *
     * @return \Calcinai\Siri\Datex\AlertCLocationType
     */
    public function getAreaLocation()
    {
        return $this->areaLocation;
    }

    /**
     * Sets a new areaLocation
     *
     * @param \Calcinai\Siri\Datex\AlertCLocationType $areaLocation
     * @return self
     */
    public function setAreaLocation(\Calcinai\Siri\Datex\AlertCLocationType $areaLocation)
    {
        $this->areaLocation = $areaLocation;
        return $this;
    }

    /**
     * Gets as alertCAreaExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCAreaExtension()
    {
        return $this->alertCAreaExtension;
    }

    /**
     * Sets a new alertCAreaExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCAreaExtension
     * @return self
     */
    public function setAlertCAreaExtension(\Calcinai\Siri\Datex\ExtensionType $alertCAreaExtension)
    {
        $this->alertCAreaExtension = $alertCAreaExtension;
        return $this;
    }


}

