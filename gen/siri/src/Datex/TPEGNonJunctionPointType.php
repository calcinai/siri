<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGNonJunctionPointType
 *
 * A point on the road network which is not a road junction point.
 * XSD Type: TPEGNonJunctionPoint
 */
class TPEGNonJunctionPointType extends TPEGPointType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\PointCoordinatesType $pointCoordinates
     */
    private $pointCoordinates = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGOtherPointDescriptorType[] $name
     */
    private $name = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegnonJunctionPointExtension
     */
    private $tpegnonJunctionPointExtension = null;

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
     * Adds as name
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\TPEGOtherPointDescriptorType $name
     */
    public function addToName(\Calcinai\Siri\Objects\Datex\TPEGOtherPointDescriptorType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGOtherPointDescriptorType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGOtherPointDescriptorType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as tpegnonJunctionPointExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegnonJunctionPointExtension()
    {
        return $this->tpegnonJunctionPointExtension;
    }

    /**
     * Sets a new tpegnonJunctionPointExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegnonJunctionPointExtension
     * @return self
     */
    public function setTpegnonJunctionPointExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegnonJunctionPointExtension)
    {
        $this->tpegnonJunctionPointExtension = $tpegnonJunctionPointExtension;
        return $this;
    }


}

