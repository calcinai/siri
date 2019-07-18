<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGDescriptorType
 *
 * A collection of information providing descriptive references to locations using the TPEG-Loc location referencing approach.
 * XSD Type: TPEGDescriptor
 */
class TPEGDescriptorType
{

    /**
     * A text string which describes or elaborates the location.
     *
     * @property \Calcinai\Siri\Datex\TPEGDescriptorType\DescriptorAType\ValueAType[] $descriptor
     */
    private $descriptor = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegdescriptorExtension
     */
    private $tpegdescriptorExtension = null;

    /**
     * Adds as value
     *
     * A text string which describes or elaborates the location.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TPEGDescriptorType\DescriptorAType\ValueAType $value
     */
    public function addToDescriptor(\Calcinai\Siri\Datex\TPEGDescriptorType\DescriptorAType\ValueAType $value)
    {
        $this->descriptor[] = $value;
        return $this;
    }

    /**
     * isset descriptor
     *
     * A text string which describes or elaborates the location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptor($index)
    {
        return isset($this->descriptor[$index]);
    }

    /**
     * unset descriptor
     *
     * A text string which describes or elaborates the location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptor($index)
    {
        unset($this->descriptor[$index]);
    }

    /**
     * Gets as descriptor
     *
     * A text string which describes or elaborates the location.
     *
     * @return \Calcinai\Siri\Datex\TPEGDescriptorType\DescriptorAType\ValueAType[]
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * Sets a new descriptor
     *
     * A text string which describes or elaborates the location.
     *
     * @param \Calcinai\Siri\Datex\TPEGDescriptorType\DescriptorAType\ValueAType[] $descriptor
     * @return self
     */
    public function setDescriptor(array $descriptor)
    {
        $this->descriptor = $descriptor;
        return $this;
    }

    /**
     * Gets as tpegdescriptorExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegdescriptorExtension()
    {
        return $this->tpegdescriptorExtension;
    }

    /**
     * Sets a new tpegdescriptorExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegdescriptorExtension
     * @return self
     */
    public function setTpegdescriptorExtension(\Calcinai\Siri\Datex\ExtensionType $tpegdescriptorExtension)
    {
        $this->tpegdescriptorExtension = $tpegdescriptorExtension;
        return $this;
    }


}

