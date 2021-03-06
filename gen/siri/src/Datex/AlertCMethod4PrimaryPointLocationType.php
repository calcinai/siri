<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCMethod4PrimaryPointLocationType
 *
 * The point (called Primary point) which is either a single point or at the downstream end of a linear road section. The point is specified by a reference to a point in a pre-defined Alert C location table plus a non-negative offset distance.
 * XSD Type: AlertCMethod4PrimaryPointLocation
 */
class AlertCMethod4PrimaryPointLocationType
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
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4PrimaryPointLocationExtension
     */
    private $alertCMethod4PrimaryPointLocationExtension = null;

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
     * Gets as alertCMethod4PrimaryPointLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCMethod4PrimaryPointLocationExtension()
    {
        return $this->alertCMethod4PrimaryPointLocationExtension;
    }

    /**
     * Sets a new alertCMethod4PrimaryPointLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4PrimaryPointLocationExtension
     * @return self
     */
    public function setAlertCMethod4PrimaryPointLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4PrimaryPointLocationExtension)
    {
        $this->alertCMethod4PrimaryPointLocationExtension = $alertCMethod4PrimaryPointLocationExtension;
        return $this;
    }


}

