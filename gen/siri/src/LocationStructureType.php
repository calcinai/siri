<?php

namespace Calcinai\Siri;

/**
 * Class representing LocationStructureType
 *
 * Type for gepspatial Position of a point. May be expressed in concrete WGS 84 Coordinates or any gml compatible point coordinates format.
 * XSD Type: LocationStructure
 */
class LocationStructureType
{

    /**
     * Identifier of point.
     *
     * @property string $id
     */
    private $id = null;

    /**
     * identifier of data reference system for geocodes if point is specified as gml compatible Coordinates. A gml value. If not specified taken from system configuration.
     *
     * @property string $srsName
     */
    private $srsName = null;

    /**
     * Longitude from Greenwich Meridian. -180 (East) to +180 (West). Decimal degrees. eg 2.356
     *
     * @property float $longitude
     */
    private $longitude = null;

    /**
     * Latitude from equator. -90 (South) to +90 (North). Decimal degrees. eg 56.356
     *
     * @property float $latitude
     */
    private $latitude = null;

    /**
     * Coordinates of points in a GML compatibe format, as indicated by srsName attribute.
     *
     * @property string $coordinates
     */
    private $coordinates = null;

    /**
     * Precision for point measurement. In meters.
     *
     * @property int $precision
     */
    private $precision = null;

    /**
     * Gets as id
     *
     * Identifier of point.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Identifier of point.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as srsName
     *
     * identifier of data reference system for geocodes if point is specified as gml compatible Coordinates. A gml value. If not specified taken from system configuration.
     *
     * @return string
     */
    public function getSrsName()
    {
        return $this->srsName;
    }

    /**
     * Sets a new srsName
     *
     * identifier of data reference system for geocodes if point is specified as gml compatible Coordinates. A gml value. If not specified taken from system configuration.
     *
     * @param string $srsName
     * @return self
     */
    public function setSrsName($srsName)
    {
        $this->srsName = $srsName;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * Longitude from Greenwich Meridian. -180 (East) to +180 (West). Decimal degrees. eg 2.356
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
     * Longitude from Greenwich Meridian. -180 (East) to +180 (West). Decimal degrees. eg 2.356
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
     * Gets as latitude
     *
     * Latitude from equator. -90 (South) to +90 (North). Decimal degrees. eg 56.356
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
     * Latitude from equator. -90 (South) to +90 (North). Decimal degrees. eg 56.356
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
     * Gets as coordinates
     *
     * Coordinates of points in a GML compatibe format, as indicated by srsName attribute.
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Sets a new coordinates
     *
     * Coordinates of points in a GML compatibe format, as indicated by srsName attribute.
     *
     * @param string $coordinates
     * @return self
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * Gets as precision
     *
     * Precision for point measurement. In meters.
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision
     *
     * Precision for point measurement. In meters.
     *
     * @param int $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }


}

