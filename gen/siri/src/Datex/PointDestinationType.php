<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PointDestinationType
 *
 * The specification of the destination of a defined route or itinerary which is a point.
 * XSD Type: PointDestination
 */
class PointDestinationType extends DestinationType
{

    /**
     * @property \Calcinai\Siri\Datex\PointType $point
     */
    private $point = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $pointDestinationExtension
     */
    private $pointDestinationExtension = null;

    /**
     * Gets as point
     *
     * @return \Calcinai\Siri\Datex\PointType
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Sets a new point
     *
     * @param \Calcinai\Siri\Datex\PointType $point
     * @return self
     */
    public function setPoint(\Calcinai\Siri\Datex\PointType $point)
    {
        $this->point = $point;
        return $this;
    }

    /**
     * Gets as pointDestinationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPointDestinationExtension()
    {
        return $this->pointDestinationExtension;
    }

    /**
     * Sets a new pointDestinationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $pointDestinationExtension
     * @return self
     */
    public function setPointDestinationExtension(\Calcinai\Siri\Datex\ExtensionType $pointDestinationExtension)
    {
        $this->pointDestinationExtension = $pointDestinationExtension;
        return $this;
    }


}

