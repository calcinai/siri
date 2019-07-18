<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCMethod2LinearType
 *
 * A linear section along a road between two points, Primary and Secondary, which are pre-defined in an Alert C location table. Direction is FROM the Secondary point TO the Primary point, i.e. the Primary point is downstream of the Secondary point.
 * XSD Type: AlertCMethod2Linear
 */
class AlertCMethod2LinearType extends AlertCLinearType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation
     */
    private $alertCMethod2PrimaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCMethod2SecondaryPointLocationType $alertCMethod2SecondaryPointLocation
     */
    private $alertCMethod2SecondaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod2LinearExtension
     */
    private $alertCMethod2LinearExtension = null;

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
     * Gets as alertCMethod2PrimaryPointLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCMethod2PrimaryPointLocationType
     */
    public function getAlertCMethod2PrimaryPointLocation()
    {
        return $this->alertCMethod2PrimaryPointLocation;
    }

    /**
     * Sets a new alertCMethod2PrimaryPointLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation
     * @return self
     */
    public function setAlertCMethod2PrimaryPointLocation(\Calcinai\Siri\Objects\Datex\AlertCMethod2PrimaryPointLocationType $alertCMethod2PrimaryPointLocation)
    {
        $this->alertCMethod2PrimaryPointLocation = $alertCMethod2PrimaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod2SecondaryPointLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCMethod2SecondaryPointLocationType
     */
    public function getAlertCMethod2SecondaryPointLocation()
    {
        return $this->alertCMethod2SecondaryPointLocation;
    }

    /**
     * Sets a new alertCMethod2SecondaryPointLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCMethod2SecondaryPointLocationType $alertCMethod2SecondaryPointLocation
     * @return self
     */
    public function setAlertCMethod2SecondaryPointLocation(\Calcinai\Siri\Objects\Datex\AlertCMethod2SecondaryPointLocationType $alertCMethod2SecondaryPointLocation)
    {
        $this->alertCMethod2SecondaryPointLocation = $alertCMethod2SecondaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod2LinearExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCMethod2LinearExtension()
    {
        return $this->alertCMethod2LinearExtension;
    }

    /**
     * Sets a new alertCMethod2LinearExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod2LinearExtension
     * @return self
     */
    public function setAlertCMethod2LinearExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod2LinearExtension)
    {
        $this->alertCMethod2LinearExtension = $alertCMethod2LinearExtension;
        return $this;
    }


}

