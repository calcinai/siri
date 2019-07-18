<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCMethod4LinearType
 *
 * A linear section along a road between two points, Primary and Secondary, which are pre-defined Alert C locations plus offset distance. Direction is FROM the Secondary point TO the Primary point, i.e. the Primary point is downstream of the Secondary point.
 * XSD Type: AlertCMethod4Linear
 */
class AlertCMethod4LinearType extends AlertCLinearType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCDirectionType $alertCDirection
     */
    private $alertCDirection = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation
     */
    private $alertCMethod4PrimaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AlertCMethod4SecondaryPointLocationType $alertCMethod4SecondaryPointLocation
     */
    private $alertCMethod4SecondaryPointLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4LinearExtension
     */
    private $alertCMethod4LinearExtension = null;

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
     * Gets as alertCMethod4PrimaryPointLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCMethod4PrimaryPointLocationType
     */
    public function getAlertCMethod4PrimaryPointLocation()
    {
        return $this->alertCMethod4PrimaryPointLocation;
    }

    /**
     * Sets a new alertCMethod4PrimaryPointLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation
     * @return self
     */
    public function setAlertCMethod4PrimaryPointLocation(\Calcinai\Siri\Objects\Datex\AlertCMethod4PrimaryPointLocationType $alertCMethod4PrimaryPointLocation)
    {
        $this->alertCMethod4PrimaryPointLocation = $alertCMethod4PrimaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod4SecondaryPointLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCMethod4SecondaryPointLocationType
     */
    public function getAlertCMethod4SecondaryPointLocation()
    {
        return $this->alertCMethod4SecondaryPointLocation;
    }

    /**
     * Sets a new alertCMethod4SecondaryPointLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCMethod4SecondaryPointLocationType $alertCMethod4SecondaryPointLocation
     * @return self
     */
    public function setAlertCMethod4SecondaryPointLocation(\Calcinai\Siri\Objects\Datex\AlertCMethod4SecondaryPointLocationType $alertCMethod4SecondaryPointLocation)
    {
        $this->alertCMethod4SecondaryPointLocation = $alertCMethod4SecondaryPointLocation;
        return $this;
    }

    /**
     * Gets as alertCMethod4LinearExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCMethod4LinearExtension()
    {
        return $this->alertCMethod4LinearExtension;
    }

    /**
     * Sets a new alertCMethod4LinearExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4LinearExtension
     * @return self
     */
    public function setAlertCMethod4LinearExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCMethod4LinearExtension)
    {
        $this->alertCMethod4LinearExtension = $alertCMethod4LinearExtension;
        return $this;
    }


}

