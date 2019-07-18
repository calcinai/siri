<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PointDestinationType
 *
 * The specification of the destination of a defined route or itinerary which is a point.
 * XSD Type: PointDestination
 */
class PointDestinationType extends DestinationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\PointType $point
     */
    private $point = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $pointDestinationExtension
     */
    private $pointDestinationExtension = null;

    /**
     * Gets as point
     *
     * @return \Calcinai\Siri\Objects\Datex\PointType
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Sets a new point
     *
     * @param \Calcinai\Siri\Objects\Datex\PointType $point
     * @return self
     */
    public function setPoint(\Calcinai\Siri\Objects\Datex\PointType $point)
    {
        $this->point = $point;
        return $this;
    }

    /**
     * Gets as pointDestinationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPointDestinationExtension()
    {
        return $this->pointDestinationExtension;
    }

    /**
     * Sets a new pointDestinationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $pointDestinationExtension
     * @return self
     */
    public function setPointDestinationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $pointDestinationExtension)
    {
        $this->pointDestinationExtension = $pointDestinationExtension;
        return $this;
    }


}

