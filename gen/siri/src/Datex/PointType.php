<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PointType
 *
 * A single geospatial point.
 * XSD Type: Point
 */
class PointType extends NetworkLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\TPEGPointLocationType $tpegpointLocation
     */
    private $tpegpointLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\AlertCPointType $alertCPoint
     */
    private $alertCPoint = null;

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointType $referencePoint
     */
    private $referencePoint = null;

    /**
     * @property \Calcinai\Siri\Datex\PointByCoordinatesType $pointByCoordinates
     */
    private $pointByCoordinates = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $pointExtension
     */
    private $pointExtension = null;

    /**
     * Gets as tpegpointLocation
     *
     * @return \Calcinai\Siri\Datex\TPEGPointLocationType
     */
    public function getTpegpointLocation()
    {
        return $this->tpegpointLocation;
    }

    /**
     * Sets a new tpegpointLocation
     *
     * @param \Calcinai\Siri\Datex\TPEGPointLocationType $tpegpointLocation
     * @return self
     */
    public function setTpegpointLocation(\Calcinai\Siri\Datex\TPEGPointLocationType $tpegpointLocation)
    {
        $this->tpegpointLocation = $tpegpointLocation;
        return $this;
    }

    /**
     * Gets as alertCPoint
     *
     * @return \Calcinai\Siri\Datex\AlertCPointType
     */
    public function getAlertCPoint()
    {
        return $this->alertCPoint;
    }

    /**
     * Sets a new alertCPoint
     *
     * @param \Calcinai\Siri\Datex\AlertCPointType $alertCPoint
     * @return self
     */
    public function setAlertCPoint(\Calcinai\Siri\Datex\AlertCPointType $alertCPoint)
    {
        $this->alertCPoint = $alertCPoint;
        return $this;
    }

    /**
     * Gets as referencePoint
     *
     * @return \Calcinai\Siri\Datex\ReferencePointType
     */
    public function getReferencePoint()
    {
        return $this->referencePoint;
    }

    /**
     * Sets a new referencePoint
     *
     * @param \Calcinai\Siri\Datex\ReferencePointType $referencePoint
     * @return self
     */
    public function setReferencePoint(\Calcinai\Siri\Datex\ReferencePointType $referencePoint)
    {
        $this->referencePoint = $referencePoint;
        return $this;
    }

    /**
     * Gets as pointByCoordinates
     *
     * @return \Calcinai\Siri\Datex\PointByCoordinatesType
     */
    public function getPointByCoordinates()
    {
        return $this->pointByCoordinates;
    }

    /**
     * Sets a new pointByCoordinates
     *
     * @param \Calcinai\Siri\Datex\PointByCoordinatesType $pointByCoordinates
     * @return self
     */
    public function setPointByCoordinates(\Calcinai\Siri\Datex\PointByCoordinatesType $pointByCoordinates)
    {
        $this->pointByCoordinates = $pointByCoordinates;
        return $this;
    }

    /**
     * Gets as pointExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPointExtension()
    {
        return $this->pointExtension;
    }

    /**
     * Sets a new pointExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $pointExtension
     * @return self
     */
    public function setPointExtension(\Calcinai\Siri\Datex\ExtensionType $pointExtension)
    {
        $this->pointExtension = $pointExtension;
        return $this;
    }


}

