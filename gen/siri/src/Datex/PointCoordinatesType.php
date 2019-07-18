<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PointCoordinatesType
 *
 * A pair of coordinates defining the geodetic position of a single point using the European Terrestrial Reference System 1989 (ETRS89).
 * XSD Type: PointCoordinates
 */
class PointCoordinatesType
{

    /**
     * Latitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * Longitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $pointCoordinatesExtension
     */
    private $pointCoordinatesExtension = null;

    /**
     * Gets as latitude
     *
     * Latitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * Latitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * Longitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * Longitude in decimal degrees using the European Terrestrial Reference System 1989 (ETRS89).
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as pointCoordinatesExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPointCoordinatesExtension()
    {
        return $this->pointCoordinatesExtension;
    }

    /**
     * Sets a new pointCoordinatesExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $pointCoordinatesExtension
     * @return self
     */
    public function setPointCoordinatesExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $pointCoordinatesExtension)
    {
        $this->pointCoordinatesExtension = $pointCoordinatesExtension;
        return $this;
    }


}

