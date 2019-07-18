<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCLocationType
 *
 * Identification of a specific point, linear or area location in an Alert C location table.
 * XSD Type: AlertCLocation
 */
class AlertCLocationType
{

    /**
     * Name of Alert C location.
     *
     * @property \Calcinai\Siri\Objects\Datex\AlertCLocationType\AlertCLocationNameAType\ValueAType[] $alertCLocationName
     */
    private $alertCLocationName = null;

    /**
     * Unique code within the an Alert C location table which identifes the specific point, linear or area location.
     *
     * @property int $specificLocation
     */
    private $specificLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLocationExtension
     */
    private $alertCLocationExtension = null;

    /**
     * Adds as value
     *
     * Name of Alert C location.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\AlertCLocationType\AlertCLocationNameAType\ValueAType $value
     */
    public function addToAlertCLocationName(\Calcinai\Siri\Objects\Datex\AlertCLocationType\AlertCLocationNameAType\ValueAType $value)
    {
        $this->alertCLocationName[] = $value;
        return $this;
    }

    /**
     * isset alertCLocationName
     *
     * Name of Alert C location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertCLocationName($index)
    {
        return isset($this->alertCLocationName[$index]);
    }

    /**
     * unset alertCLocationName
     *
     * Name of Alert C location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertCLocationName($index)
    {
        unset($this->alertCLocationName[$index]);
    }

    /**
     * Gets as alertCLocationName
     *
     * Name of Alert C location.
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCLocationType\AlertCLocationNameAType\ValueAType[]
     */
    public function getAlertCLocationName()
    {
        return $this->alertCLocationName;
    }

    /**
     * Sets a new alertCLocationName
     *
     * Name of Alert C location.
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCLocationType\AlertCLocationNameAType\ValueAType[] $alertCLocationName
     * @return self
     */
    public function setAlertCLocationName(array $alertCLocationName)
    {
        $this->alertCLocationName = $alertCLocationName;
        return $this;
    }

    /**
     * Gets as specificLocation
     *
     * Unique code within the an Alert C location table which identifes the specific point, linear or area location.
     *
     * @return int
     */
    public function getSpecificLocation()
    {
        return $this->specificLocation;
    }

    /**
     * Sets a new specificLocation
     *
     * Unique code within the an Alert C location table which identifes the specific point, linear or area location.
     *
     * @param int $specificLocation
     * @return self
     */
    public function setSpecificLocation($specificLocation)
    {
        $this->specificLocation = $specificLocation;
        return $this;
    }

    /**
     * Gets as alertCLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCLocationExtension()
    {
        return $this->alertCLocationExtension;
    }

    /**
     * Sets a new alertCLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLocationExtension
     * @return self
     */
    public function setAlertCLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCLocationExtension)
    {
        $this->alertCLocationExtension = $alertCLocationExtension;
        return $this;
    }


}

