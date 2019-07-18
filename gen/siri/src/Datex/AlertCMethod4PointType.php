<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCMethod4PointType
 *
 * A single point on the road network defined by reference to a point in a pre-defined Alert C location table plus an offset distance and which has an associated direction of traffic flow.
 * XSD Type: AlertCMethod4Point
 */
class AlertCMethod4PointType extends AlertCPointType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation
     */
    private $alertCMethod4PrimaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCMethod4PointExtension
     */
    private $alertCMethod4PointExtension = null;

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
     * Gets as alertCMethod4PrimaryPointLocation
     *
     * @return \Calcinai\Siri\Datex\AlertCMethod4PrimaryPointLocationType
     */
    public function getAlertCMethod4PrimaryPointLocation()
    {
        return $this->alertCMethod4PrimaryPointLocation;
    }

    /**
     * Sets a new alertCMethod4PrimaryPointLocation
     *
     * @param \Calcinai\Siri\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation
     * @return self
     */
    public function setAlertCMethod4PrimaryPointLocation(\Calcinai\Siri\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation)
    {
        $this->alertCMethod4PrimaryPointLocation = $alertCMethod4PrimaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod4PointExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCMethod4PointExtension()
    {
        return $this->alertCMethod4PointExtension;
    }

    /**
     * Sets a new alertCMethod4PointExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCMethod4PointExtension
     * @return self
     */
    public function setAlertCMethod4PointExtension(\Calcinai\Siri\Datex\ExtensionType $alertCMethod4PointExtension)
    {
        $this->alertCMethod4PointExtension = $alertCMethod4PointExtension;
        return $this;
    }


}

