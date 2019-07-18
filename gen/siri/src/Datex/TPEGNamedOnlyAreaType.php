<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGNamedOnlyAreaType
 *
 * An area defined by a well known name.
 * XSD Type: TPEGNamedOnlyArea
 */
class TPEGNamedOnlyAreaType extends TPEGAreaLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\TPEGAreaDescriptorType[] $name
     */
    private $name = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegnamedOnlyAreaExtension
     */
    private $tpegnamedOnlyAreaExtension = null;

    /**
     * Adds as name
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TPEGAreaDescriptorType $name
     */
    public function addToName(\Calcinai\Siri\Datex\TPEGAreaDescriptorType $name)
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
     * @return \Calcinai\Siri\Datex\TPEGAreaDescriptorType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Calcinai\Siri\Datex\TPEGAreaDescriptorType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as tpegnamedOnlyAreaExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegnamedOnlyAreaExtension()
    {
        return $this->tpegnamedOnlyAreaExtension;
    }

    /**
     * Sets a new tpegnamedOnlyAreaExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegnamedOnlyAreaExtension
     * @return self
     */
    public function setTpegnamedOnlyAreaExtension(\Calcinai\Siri\Datex\ExtensionType $tpegnamedOnlyAreaExtension)
    {
        $this->tpegnamedOnlyAreaExtension = $tpegnamedOnlyAreaExtension;
        return $this;
    }


}

