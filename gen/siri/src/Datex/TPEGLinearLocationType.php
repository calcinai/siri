<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGLinearLocationType
 *
 * A linear section along a road defined between two points on the road by a TPEG-Loc structure.
 * XSD Type: TPEGLinearLocation
 */
class TPEGLinearLocationType
{

    /**
     * The direction of traffic flow on the linear section of the road.
     *
     * @property string $tpegDirection
     */
    private $tpegDirection = null;

    /**
     * The type of TPEG location.
     *
     * @property string $tpegLocationType
     */
    private $tpegLocationType = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGPointType $to
     */
    private $to = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGPointType $from
     */
    private $from = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpeglinearLocationExtension
     */
    private $tpeglinearLocationExtension = null;

    /**
     * Gets as tpegDirection
     *
     * The direction of traffic flow on the linear section of the road.
     *
     * @return string
     */
    public function getTpegDirection()
    {
        return $this->tpegDirection;
    }

    /**
     * Sets a new tpegDirection
     *
     * The direction of traffic flow on the linear section of the road.
     *
     * @param string $tpegDirection
     * @return self
     */
    public function setTpegDirection($tpegDirection)
    {
        $this->tpegDirection = $tpegDirection;
        return $this;
    }

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
     * Gets as to
     *
     * @return \Calcinai\Siri\Datex\TPEGPointType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \Calcinai\Siri\Datex\TPEGPointType $to
     * @return self
     */
    public function setTo(\Calcinai\Siri\Datex\TPEGPointType $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \Calcinai\Siri\Datex\TPEGPointType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \Calcinai\Siri\Datex\TPEGPointType $from
     * @return self
     */
    public function setFrom(\Calcinai\Siri\Datex\TPEGPointType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as tpeglinearLocationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpeglinearLocationExtension()
    {
        return $this->tpeglinearLocationExtension;
    }

    /**
     * Sets a new tpeglinearLocationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpeglinearLocationExtension
     * @return self
     */
    public function setTpeglinearLocationExtension(\Calcinai\Siri\Datex\ExtensionType $tpeglinearLocationExtension)
    {
        $this->tpeglinearLocationExtension = $tpeglinearLocationExtension;
        return $this;
    }


}

