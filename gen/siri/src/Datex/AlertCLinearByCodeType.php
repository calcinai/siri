<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCLinearByCodeType
 *
 * A linear section along a road defined by reference to a linear section in a pre-defined Alert C location table.
 * XSD Type: AlertCLinearByCode
 */
class AlertCLinearByCodeType extends AlertCLinearType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCLocationType $locationCodeForLinearLocation
     */
    private $locationCodeForLinearLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearByCodeExtension
     */
    private $alertCLinearByCodeExtension = null;

    /**
     * Gets as alertCDirection
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCDirectionType
     */
    public function getAlertCDirection()
    {
        return $this->alertCDirection;
    }

    /**
     * Sets a new alertCDirection
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCDirectionType $alertCDirection
     * @return self
     */
    public function setAlertCDirection(\Calcinai\Siri\Objects\Datex\AlertCDirectionType $alertCDirection)
    {
        $this->alertCDirection = $alertCDirection;
        return $this;
    }

    /**
     * Gets as locationCodeForLinearLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCLocationType
     */
    public function getLocationCodeForLinearLocation()
    {
        return $this->locationCodeForLinearLocation;
    }

    /**
     * Sets a new locationCodeForLinearLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCLocationType $locationCodeForLinearLocation
     * @return self
     */
    public function setLocationCodeForLinearLocation(\Calcinai\Siri\Objects\Datex\AlertCLocationType $locationCodeForLinearLocation)
    {
        $this->locationCodeForLinearLocation = $locationCodeForLinearLocation;
        return $this;
    }

    /**
     * Gets as alertCLinearByCodeExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCLinearByCodeExtension()
    {
        return $this->alertCLinearByCodeExtension;
    }

    /**
     * Sets a new alertCLinearByCodeExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearByCodeExtension
     * @return self
     */
    public function setAlertCLinearByCodeExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCLinearByCodeExtension)
    {
        $this->alertCLinearByCodeExtension = $alertCLinearByCodeExtension;
        return $this;
    }


}

