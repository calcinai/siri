<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGPointLocationType
 *
 * A single point on the road network defined by a TPEG-Loc structure and which has an associated direction of traffic flow.
 * XSD Type: TPEGPointLocation
 */
class TPEGPointLocationType
{

    /**
     * The direction of traffic flow at the point.
     *
     * @property string $tpegDirection
     */
    private $tpegDirection = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointLocationExtension
     */
    private $tpegpointLocationExtension = null;

    /**
     * Gets as tpegDirection
     *
     * The direction of traffic flow at the point.
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
     * The direction of traffic flow at the point.
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
     * Gets as tpegpointLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegpointLocationExtension()
    {
        return $this->tpegpointLocationExtension;
    }

    /**
     * Sets a new tpegpointLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointLocationExtension
     * @return self
     */
    public function setTpegpointLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointLocationExtension)
    {
        $this->tpegpointLocationExtension = $tpegpointLocationExtension;
        return $this;
    }


}

