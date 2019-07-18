<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGILCPointDescriptorType
 *
 * A descriptor for describing a junction by defining the intersecting roads.
 * XSD Type: TPEGILCPointDescriptor
 */
class TPEGILCPointDescriptorType extends TPEGPointDescriptorType
{

    /**
     * The nature of the descriptor used to define the intersecting location under consideration (derived from the TPEG Loc table 03).
     *
     * @property string $tpegDescriptorType
     */
    private $tpegDescriptorType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegilcpointDescriptorExtension
     */
    private $tpegilcpointDescriptorExtension = null;

    /**
     * Gets as tpegDescriptorType
     *
     * The nature of the descriptor used to define the intersecting location under consideration (derived from the TPEG Loc table 03).
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
     * The nature of the descriptor used to define the intersecting location under consideration (derived from the TPEG Loc table 03).
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
     * Gets as tpegilcpointDescriptorExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegilcpointDescriptorExtension()
    {
        return $this->tpegilcpointDescriptorExtension;
    }

    /**
     * Sets a new tpegilcpointDescriptorExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegilcpointDescriptorExtension
     * @return self
     */
    public function setTpegilcpointDescriptorExtension(\Calcinai\Siri\Datex\ExtensionType $tpegilcpointDescriptorExtension)
    {
        $this->tpegilcpointDescriptorExtension = $tpegilcpointDescriptorExtension;
        return $this;
    }


}

