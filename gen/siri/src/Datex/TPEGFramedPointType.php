<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGFramedPointType
 *
 * A point on the road network which is framed between two other points on the same road.
 * XSD Type: TPEGFramedPoint
 */
class TPEGFramedPointType extends TPEGPointLocationType
{

    /**
     * The type of TPEG location.
     *
     * @property string $tpegLocationType
     */
    private $tpegLocationType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGNonJunctionPointType $framedPoint
     */
    private $framedPoint = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGPointType $to
     */
    private $to = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGPointType $from
     */
    private $from = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegframedPointExtension
     */
    private $tpegframedPointExtension = null;

    /**
     * Gets as tpegLocationType
     *
     * The type of TPEG location.
     *
     * @return string
     */
    public function getTpegLocationType()
    {
        return $this->tpegLocationType;
    }

    /**
     * Sets a new tpegLocationType
     *
     * The type of TPEG location.
     *
     * @param string $tpegLocationType
     * @return self
     */
    public function setTpegLocationType($tpegLocationType)
    {
        $this->tpegLocationType = $tpegLocationType;
        return $this;
    }

    /**
     * Gets as framedPoint
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGNonJunctionPointType
     */
    public function getFramedPoint()
    {
        return $this->framedPoint;
    }

    /**
     * Sets a new framedPoint
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGNonJunctionPointType $framedPoint
     * @return self
     */
    public function setFramedPoint(\Calcinai\Siri\Objects\Datex\TPEGNonJunctionPointType $framedPoint)
    {
        $this->framedPoint = $framedPoint;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGPointType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGPointType $to
     * @return self
     */
    public function setTo(\Calcinai\Siri\Objects\Datex\TPEGPointType $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGPointType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGPointType $from
     * @return self
     */
    public function setFrom(\Calcinai\Siri\Objects\Datex\TPEGPointType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as tpegframedPointExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegframedPointExtension()
    {
        return $this->tpegframedPointExtension;
    }

    /**
     * Sets a new tpegframedPointExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegframedPointExtension
     * @return self
     */
    public function setTpegframedPointExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegframedPointExtension)
    {
        $this->tpegframedPointExtension = $tpegframedPointExtension;
        return $this;
    }


}

