<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PointByCoordinatesType
 *
 * A single point defined only by a coordinate set with an optional bearing direction.
 * XSD Type: PointByCoordinates
 */
class PointByCoordinatesType
{

    /**
     * A bearing at the point measured in degrees (0 - 359).
     *
     * @property int $bearing
     */
    private $bearing = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PointCoordinatesType $pointCoordinates
     */
    private $pointCoordinates = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $pointByCoordinatesExtension
     */
    private $pointByCoordinatesExtension = null;

    /**
     * Gets as bearing
     *
     * A bearing at the point measured in degrees (0 - 359).
     *
     * @return int
     */
    public function getBearing()
    {
        return $this->bearing;
    }

    /**
     * Sets a new bearing
     *
     * A bearing at the point measured in degrees (0 - 359).
     *
     * @param int $bearing
     * @return self
     */
    public function setBearing($bearing)
    {
        $this->bearing = $bearing;
        return $this;
    }

    /**
     * Gets as pointCoordinates
     *
     * @return \Calcinai\Siri\Objects\Datex\PointCoordinatesType
     */
    public function getPointCoordinates()
    {
        return $this->pointCoordinates;
    }

    /**
     * Sets a new pointCoordinates
     *
     * @param \Calcinai\Siri\Objects\Datex\PointCoordinatesType $pointCoordinates
     * @return self
     */
    public function setPointCoordinates(\Calcinai\Siri\Objects\Datex\PointCoordinatesType $pointCoordinates)
    {
        $this->pointCoordinates = $pointCoordinates;
        return $this;
    }

    /**
     * Gets as pointByCoordinatesExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPointByCoordinatesExtension()
    {
        return $this->pointByCoordinatesExtension;
    }

    /**
     * Sets a new pointByCoordinatesExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $pointByCoordinatesExtension
     * @return self
     */
    public function setPointByCoordinatesExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $pointByCoordinatesExtension)
    {
        $this->pointByCoordinatesExtension = $pointByCoordinatesExtension;
        return $this;
    }


}

