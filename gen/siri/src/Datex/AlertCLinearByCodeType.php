<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCLinearByCodeType
 *
 * A linear section along a road defined by reference to a linear section in a pre-defined Alert C location table.
 * XSD Type: AlertCLinearByCode
 */
class AlertCLinearByCodeType extends AlertCLinearType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Datex\AlertCLocationType $locationCodeForLinearLocation
     */
    private $locationCodeForLinearLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCLinearByCodeExtension
     */
    private $alertCLinearByCodeExtension = null;

    /**
     * Gets as alertCDirection
     *
     * @return \Calcinai\Siri\Datex\AlertCDirectionType
     */
    public function getAlertCDirection()
    {
        return $this->alertCDirection;
    }

    /**
     * Sets a new alertCDirection
     *
     * @param \Calcinai\Siri\Datex\AlertCDirectionType $alertCDirection
     * @return self
     */
    public function setAlertCDirection(\Calcinai\Siri\Datex\AlertCDirectionType $alertCDirection)
    {
        $this->alertCDirection = $alertCDirection;
        return $this;
    }

    /**
     * Gets as locationCodeForLinearLocation
     *
     * @return \Calcinai\Siri\Datex\AlertCLocationType
     */
    public function getLocationCodeForLinearLocation()
    {
        return $this->locationCodeForLinearLocation;
    }

    /**
     * Sets a new locationCodeForLinearLocation
     *
     * @param \Calcinai\Siri\Datex\AlertCLocationType $locationCodeForLinearLocation
     * @return self
     */
    public function setLocationCodeForLinearLocation(\Calcinai\Siri\Datex\AlertCLocationType $locationCodeForLinearLocation)
    {
        $this->locationCodeForLinearLocation = $locationCodeForLinearLocation;
        return $this;
    }

    /**
     * Gets as alertCLinearByCodeExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCLinearByCodeExtension()
    {
        return $this->alertCLinearByCodeExtension;
    }

    /**
     * Sets a new alertCLinearByCodeExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCLinearByCodeExtension
     * @return self
     */
    public function setAlertCLinearByCodeExtension(\Calcinai\Siri\Datex\ExtensionType $alertCLinearByCodeExtension)
    {
        $this->alertCLinearByCodeExtension = $alertCLinearByCodeExtension;
        return $this;
    }


}

