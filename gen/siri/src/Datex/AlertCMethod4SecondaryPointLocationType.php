<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCMethod4SecondaryPointLocationType
 *
 * The point (called Secondary point) which is at the upstream end of a linear road section. The point is specified by a reference to a point in a pre-defined Alert C location table plus a non-negative offset distance.
 * XSD Type: AlertCMethod4SecondaryPointLocation
 */
class AlertCMethod4SecondaryPointLocationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCLocationType $alertCLocation
     */
    private $alertCLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\OffsetDistanceType $offsetDistance
     */
    private $offsetDistance = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4SecondaryPointLocationExtension
     */
    private $alertCMethod4SecondaryPointLocationExtension = null;

    /**
     * Gets as alertCLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCLocationType
     */
    public function getAlertCLocation()
    {
        return $this->alertCLocation;
    }

    /**
     * Sets a new alertCLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCLocationType $alertCLocation
     * @return self
     */
    public function setAlertCLocation(\Calcinai\Siri\Objects\Datex\AlertCLocationType $alertCLocation)
    {
        $this->alertCLocation = $alertCLocation;
        return $this;
    }

    /**
     * Gets as offsetDistance
     *
     * @return \Calcinai\Siri\Objects\Datex\OffsetDistanceType
     */
    public function getOffsetDistance()
    {
        return $this->offsetDistance;
    }

    /**
     * Sets a new offsetDistance
     *
     * @param \Calcinai\Siri\Objects\Datex\OffsetDistanceType $offsetDistance
     * @return self
     */
    public function setOffsetDistance(\Calcinai\Siri\Objects\Datex\OffsetDistanceType $offsetDistance)
    {
        $this->offsetDistance = $offsetDistance;
        return $this;
    }

    /**
     * Gets as alertCMethod4SecondaryPointLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCMethod4SecondaryPointLocationExtension()
    {
        return $this->alertCMethod4SecondaryPointLocationExtension;
    }

    /**
     * Sets a new alertCMethod4SecondaryPointLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4SecondaryPointLocationExtension
     * @return self
     */
    public function setAlertCMethod4SecondaryPointLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4SecondaryPointLocationExtension)
    {
        $this->alertCMethod4SecondaryPointLocationExtension = $alertCMethod4SecondaryPointLocationExtension;
        return $this;
    }


}

