<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGPointDescriptorType
 *
 * A descriptor for describing a point location.
 * XSD Type: TPEGPointDescriptor
 */
class TPEGPointDescriptorType extends TPEGDescriptorType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointDescriptorExtension
     */
    private $tpegpointDescriptorExtension = null;

    /**
     * Gets as tpegpointDescriptorExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegpointDescriptorExtension()
    {
        return $this->tpegpointDescriptorExtension;
    }

    /**
     * Sets a new tpegpointDescriptorExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointDescriptorExtension
     * @return self
     */
    public function setTpegpointDescriptorExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegpointDescriptorExtension)
    {
        $this->tpegpointDescriptorExtension = $tpegpointDescriptorExtension;
        return $this;
    }


}

