<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGSimplePointType
 *
 * A point on the road network which is not bounded by any other points on the road network.
 * XSD Type: TPEGSimplePoint
 */
class TPEGSimplePointType extends TPEGPointLocationType
{

    /**
     * The type of TPEG location.
     *
     * @property string $tpegLocationType
     */
    private $tpegLocationType = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGPointType $point
     */
    private $point = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegsimplePointExtension
     */
    private $tpegsimplePointExtension = null;

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
     * Gets as point
     *
     * @return \Calcinai\Siri\Datex\TPEGPointType
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Sets a new point
     *
     * @param \Calcinai\Siri\Datex\TPEGPointType $point
     * @return self
     */
    public function setPoint(\Calcinai\Siri\Datex\TPEGPointType $point)
    {
        $this->point = $point;
        return $this;
    }

    /**
     * Gets as tpegsimplePointExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegsimplePointExtension()
    {
        return $this->tpegsimplePointExtension;
    }

    /**
     * Sets a new tpegsimplePointExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegsimplePointExtension
     * @return self
     */
    public function setTpegsimplePointExtension(\Calcinai\Siri\Datex\ExtensionType $tpegsimplePointExtension)
    {
        $this->tpegsimplePointExtension = $tpegsimplePointExtension;
        return $this;
    }


}

