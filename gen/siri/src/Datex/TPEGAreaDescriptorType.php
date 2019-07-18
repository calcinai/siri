<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGAreaDescriptorType
 *
 * A descriptor for describing an area location.
 * XSD Type: TPEGAreaDescriptor
 */
class TPEGAreaDescriptorType extends TPEGDescriptorType
{

    /**
     * Indicates the nature of the descriptor used to define the area under consideration (derived from the TPEG Loc table 03).
     *
     * @property string $tpegDescriptorType
     */
    private $tpegDescriptorType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaDescriptorExtension
     */
    private $tpegareaDescriptorExtension = null;

    /**
     * Gets as tpegDescriptorType
     *
     * Indicates the nature of the descriptor used to define the area under consideration (derived from the TPEG Loc table 03).
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
     * Indicates the nature of the descriptor used to define the area under consideration (derived from the TPEG Loc table 03).
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
     * Gets as tpegareaDescriptorExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegareaDescriptorExtension()
    {
        return $this->tpegareaDescriptorExtension;
    }

    /**
     * Sets a new tpegareaDescriptorExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaDescriptorExtension
     * @return self
     */
    public function setTpegareaDescriptorExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaDescriptorExtension)
    {
        $this->tpegareaDescriptorExtension = $tpegareaDescriptorExtension;
        return $this;
    }


}

