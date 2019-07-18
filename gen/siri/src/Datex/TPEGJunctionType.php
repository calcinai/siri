<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGJunctionType
 *
 * A point on the road network which is a road junction point.
 * XSD Type: TPEGJunction
 */
class TPEGJunctionType extends TPEGPointType
{

    /**
     * @property \Calcinai\Siri\Datex\PointCoordinatesType $pointCoordinates
     */
    private $pointCoordinates = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGJunctionPointDescriptorType $name
     */
    private $name = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGILCPointDescriptorType[] $ilc
     */
    private $ilc = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\TPEGOtherPointDescriptorType[] $otherName
     */
    private $otherName = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegjunctionExtension
     */
    private $tpegjunctionExtension = null;

    /**
     * Gets as pointCoordinates
     *
     * @return \Calcinai\Siri\Datex\PointCoordinatesType
     */
    public function getPointCoordinates()
    {
        return $this->pointCoordinates;
    }

    /**
     * Sets a new pointCoordinates
     *
     * @param \Calcinai\Siri\Datex\PointCoordinatesType $pointCoordinates
     * @return self
     */
    public function setPointCoordinates(\Calcinai\Siri\Datex\PointCoordinatesType $pointCoordinates)
    {
        $this->pointCoordinates = $pointCoordinates;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \Calcinai\Siri\Datex\TPEGJunctionPointDescriptorType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Calcinai\Siri\Datex\TPEGJunctionPointDescriptorType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\Datex\TPEGJunctionPointDescriptorType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as ilc
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TPEGILCPointDescriptorType $ilc
     */
    public function addToIlc(\Calcinai\Siri\Datex\TPEGILCPointDescriptorType $ilc)
    {
        $this->ilc[] = $ilc;
        return $this;
    }

    /**
     * isset ilc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIlc($index)
    {
        return isset($this->ilc[$index]);
    }

    /**
     * unset ilc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIlc($index)
    {
        unset($this->ilc[$index]);
    }

    /**
     * Gets as ilc
     *
     * @return \Calcinai\Siri\Datex\TPEGILCPointDescriptorType[]
     */
    public function getIlc()
    {
        return $this->ilc;
    }

    /**
     * Sets a new ilc
     *
     * @param \Calcinai\Siri\Datex\TPEGILCPointDescriptorType[] $ilc
     * @return self
     */
    public function setIlc(array $ilc)
    {
        $this->ilc = $ilc;
        return $this;
    }

    /**
     * Adds as otherName
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TPEGOtherPointDescriptorType $otherName
     */
    public function addToOtherName(\Calcinai\Siri\Datex\TPEGOtherPointDescriptorType $otherName)
    {
        $this->otherName[] = $otherName;
        return $this;
    }

    /**
     * isset otherName
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherName($index)
    {
        return isset($this->otherName[$index]);
    }

    /**
     * unset otherName
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherName($index)
    {
        unset($this->otherName[$index]);
    }

    /**
     * Gets as otherName
     *
     * @return \Calcinai\Siri\Datex\TPEGOtherPointDescriptorType[]
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * @param \Calcinai\Siri\Datex\TPEGOtherPointDescriptorType[] $otherName
     * @return self
     */
    public function setOtherName(array $otherName)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as tpegjunctionExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegjunctionExtension()
    {
        return $this->tpegjunctionExtension;
    }

    /**
     * Sets a new tpegjunctionExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegjunctionExtension
     * @return self
     */
    public function setTpegjunctionExtension(\Calcinai\Siri\Datex\ExtensionType $tpegjunctionExtension)
    {
        $this->tpegjunctionExtension = $tpegjunctionExtension;
        return $this;
    }


}

