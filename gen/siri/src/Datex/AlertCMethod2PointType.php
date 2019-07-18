<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AlertCMethod2PointType
 *
 * A single point on the road network defined by reference to a point in a pre-defined Alert C location table and which has an associated direction of traffic flow.
 * XSD Type: AlertCMethod2Point
 */
class AlertCMethod2PointType extends AlertCPointType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation
     */
    private $alertCMethod2PrimaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $alertCMethod2PointExtension
     */
    private $alertCMethod2PointExtension = null;

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
     * Gets as alertCMethod2PrimaryPointLocation
     *
     * @return \Calcinai\Siri\Datex\AlertCMethod2PrimaryPointLocationType
     */
    public function getAlertCMethod2PrimaryPointLocation()
    {
        return $this->alertCMethod2PrimaryPointLocation;
    }

    /**
     * Sets a new alertCMethod2PrimaryPointLocation
     *
     * @param \Calcinai\Siri\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation
     * @return self
     */
    public function setAlertCMethod2PrimaryPointLocation(\Calcinai\Siri\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation)
    {
        $this->alertCMethod2PrimaryPointLocation = $alertCMethod2PrimaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod2PointExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAlertCMethod2PointExtension()
    {
        return $this->alertCMethod2PointExtension;
    }

    /**
     * Sets a new alertCMethod2PointExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $alertCMethod2PointExtension
     * @return self
     */
    public function setAlertCMethod2PointExtension(\Calcinai\Siri\Datex\ExtensionType $alertCMethod2PointExtension)
    {
        $this->alertCMethod2PointExtension = $alertCMethod2PointExtension;
        return $this;
    }


}

