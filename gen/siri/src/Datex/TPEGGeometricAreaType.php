<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGGeometricAreaType
 *
 * A geometric area defined by a centre point and a radius.
 * XSD Type: TPEGGeometricArea
 */
class TPEGGeometricAreaType extends TPEGAreaLocationType
{

    /**
     * The radius of the geometric area identified.
     *
     * @property int $radius
     */
    private $radius = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PointCoordinatesType $centrePoint
     */
    private $centrePoint = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGAreaDescriptorType $name
     */
    private $name = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpeggeometricAreaExtension
     */
    private $tpeggeometricAreaExtension = null;

    /**
     * Gets as radius
     *
     * The radius of the geometric area identified.
     *
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Sets a new radius
     *
     * The radius of the geometric area identified.
     *
     * @param int $radius
     * @return self
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Gets as centrePoint
     *
     * @return \Calcinai\Siri\Objects\Datex\PointCoordinatesType
     */
    public function getCentrePoint()
    {
        return $this->centrePoint;
    }

    /**
     * Sets a new centrePoint
     *
     * @param \Calcinai\Siri\Objects\Datex\PointCoordinatesType $centrePoint
     * @return self
     */
    public function setCentrePoint(\Calcinai\Siri\Objects\Datex\PointCoordinatesType $centrePoint)
    {
        $this->centrePoint = $centrePoint;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGAreaDescriptorType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGAreaDescriptorType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\Objects\Datex\TPEGAreaDescriptorType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as tpeggeometricAreaExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpeggeometricAreaExtension()
    {
        return $this->tpeggeometricAreaExtension;
    }

    /**
     * Sets a new tpeggeometricAreaExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpeggeometricAreaExtension
     * @return self
     */
    public function setTpeggeometricAreaExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpeggeometricAreaExtension)
    {
        $this->tpeggeometricAreaExtension = $tpeggeometricAreaExtension;
        return $this;
    }


}

