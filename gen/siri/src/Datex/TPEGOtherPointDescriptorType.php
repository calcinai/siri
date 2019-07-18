<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGOtherPointDescriptorType
 *
 * General descriptor for describing a point.
 * XSD Type: TPEGOtherPointDescriptor
 */
class TPEGOtherPointDescriptorType extends TPEGPointDescriptorType
{

    /**
     * The nature of the "otherName" descriptor used to define the point (derived from the TPEG Loc table 03).
     *
     * @property string $tpegDescriptorType
     */
    private $tpegDescriptorType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegotherPointDescriptorExtension
     */
    private $tpegotherPointDescriptorExtension = null;

    /**
     * Gets as tpegDescriptorType
     *
     * The nature of the "otherName" descriptor used to define the point (derived from the TPEG Loc table 03).
     *
     * @return string
     */
    public function getTpegDescriptorType()
    {
        return $this->tpegDescriptorType;
    }

    /**
     * Sets a new tpegDescriptorType
     *
     * The nature of the "otherName" descriptor used to define the point (derived from the TPEG Loc table 03).
     *
     * @param string $tpegDescriptorType
     * @return self
     */
    public function setTpegDescriptorType($tpegDescriptorType)
    {
        $this->tpegDescriptorType = $tpegDescriptorType;
        return $this;
    }

    /**
     * Gets as tpegotherPointDescriptorExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegotherPointDescriptorExtension()
    {
        return $this->tpegotherPointDescriptorExtension;
    }

    /**
     * Sets a new tpegotherPointDescriptorExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegotherPointDescriptorExtension
     * @return self
     */
    public function setTpegotherPointDescriptorExtension(\Calcinai\Siri\Datex\ExtensionType $tpegotherPointDescriptorExtension)
    {
        $this->tpegotherPointDescriptorExtension = $tpegotherPointDescriptorExtension;
        return $this;
    }


}

