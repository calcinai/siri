<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCMethod2SecondaryPointLocationType
 *
 * The point (called Secondary point) which is at the upstream end of a linear road section. The point is specified by a reference to a point in a pre-defined Alert C location table.
 * XSD Type: AlertCMethod2SecondaryPointLocation
 */
class AlertCMethod2SecondaryPointLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCLocationType $alertCLocation
     */
    private $alertCLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCMethod2SecondaryPointLocationExtension
     */
    private $alertCMethod2SecondaryPointLocationExtension = null;

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
     * Gets as alertCMethod2SecondaryPointLocationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCMethod2SecondaryPointLocationExtension()
    {
        return $this->alertCMethod2SecondaryPointLocationExtension;
    }

    /**
     * Sets a new alertCMethod2SecondaryPointLocationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCMethod2SecondaryPointLocationExtension
     * @return self
     */
    public function setAlertCMethod2SecondaryPointLocationExtension(\Calcinai\Siri\Datex\ExtensionType $alertCMethod2SecondaryPointLocationExtension)
    {
        $this->alertCMethod2SecondaryPointLocationExtension = $alertCMethod2SecondaryPointLocationExtension;
        return $this;
    }


}

