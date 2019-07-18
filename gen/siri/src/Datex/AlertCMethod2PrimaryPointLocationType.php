<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCMethod2PrimaryPointLocationType
 *
 * The point (called Primary point) which is either a single point or at the downstream end of a linear road section. The point is specified by a reference to a point in a pre-defined Alert C location table.
 * XSD Type: AlertCMethod2PrimaryPointLocation
 */
class AlertCMethod2PrimaryPointLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCLocationType $alertCLocation
     */
    private $alertCLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCMethod2PrimaryPointLocationExtension
     */
    private $alertCMethod2PrimaryPointLocationExtension = null;

    /**
     * Gets as alertCLocation
     *
     * @return \Calcinai\Siri\Datex\AlertCLocationType
     */
    public function getAlertCLocation()
    {
        return $this->alertCLocation;
    }

    /**
     * Sets a new alertCLocation
     *
     * @param \Calcinai\Siri\Datex\AlertCLocationType $alertCLocation
     * @return self
     */
    public function setAlertCLocation(\Calcinai\Siri\Datex\AlertCLocationType $alertCLocation)
    {
        $this->alertCLocation = $alertCLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod2PrimaryPointLocationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCMethod2PrimaryPointLocationExtension()
    {
        return $this->alertCMethod2PrimaryPointLocationExtension;
    }

    /**
     * Sets a new alertCMethod2PrimaryPointLocationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCMethod2PrimaryPointLocationExtension
     * @return self
     */
    public function setAlertCMethod2PrimaryPointLocationExtension(\Calcinai\Siri\Datex\ExtensionType $alertCMethod2PrimaryPointLocationExtension)
    {
        $this->alertCMethod2PrimaryPointLocationExtension = $alertCMethod2PrimaryPointLocationExtension;
        return $this;
    }


}

