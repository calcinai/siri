<?php

namespace Calcinai\Siri;

/**
 * Class representing CapabilityRequestPolicyStructureType
 *
 * Type for Common Request Policy capabilities.
 * XSD Type: CapabilityRequestPolicyStructure
 */
class CapabilityRequestPolicyStructureType
{

    /**
     * National languages supported by service.
     *
     * @property string[] $nationalLanguage
     */
    private $nationalLanguage = [
        
    ];

    /**
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @property string $gmlCoordinateFormat
     */
    private $gmlCoordinateFormat = null;

    /**
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @property string $wgsDecimalDegrees
     */
    private $wgsDecimalDegrees = null;

    /**
     * Adds as nationalLanguage
     *
     * National languages supported by service.
     *
     * @return self
     * @param string $nationalLanguage
     */
    public function addToNationalLanguage($nationalLanguage)
    {
        $this->nationalLanguage[] = $nationalLanguage;
        return $this;
    }

    /**
     * isset nationalLanguage
     *
     * National languages supported by service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNationalLanguage($index)
    {
        return isset($this->nationalLanguage[$index]);
    }

    /**
     * unset nationalLanguage
     *
     * National languages supported by service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNationalLanguage($index)
    {
        unset($this->nationalLanguage[$index]);
    }

    /**
     * Gets as nationalLanguage
     *
     * National languages supported by service.
     *
     * @return string[]
     */
    public function getNationalLanguage()
    {
        return $this->nationalLanguage;
    }

    /**
     * Sets a new nationalLanguage
     *
     * National languages supported by service.
     *
     * @param string[] $nationalLanguage
     * @return self
     */
    public function setNationalLanguage(array $nationalLanguage)
    {
        $this->nationalLanguage = $nationalLanguage;
        return $this;
    }

    /**
     * Gets as gmlCoordinateFormat
     *
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @return string
     */
    public function getGmlCoordinateFormat()
    {
        return $this->gmlCoordinateFormat;
    }

    /**
     * Sets a new gmlCoordinateFormat
     *
     * Name of GML Coordinate format used for Geospatial points in responses.
     *
     * @param string $gmlCoordinateFormat
     * @return self
     */
    public function setGmlCoordinateFormat($gmlCoordinateFormat)
    {
        $this->gmlCoordinateFormat = $gmlCoordinateFormat;
        return $this;
    }

    /**
     * Gets as wgsDecimalDegrees
     *
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @return string
     */
    public function getWgsDecimalDegrees()
    {
        return $this->wgsDecimalDegrees;
    }

    /**
     * Sets a new wgsDecimalDegrees
     *
     * Geospatial coordinates are given as Wgs 84 Latiude and longitude, decimial degrees of arc.
     *
     * @param string $wgsDecimalDegrees
     * @return self
     */
    public function setWgsDecimalDegrees($wgsDecimalDegrees)
    {
        $this->wgsDecimalDegrees = $wgsDecimalDegrees;
        return $this;
    }


}

