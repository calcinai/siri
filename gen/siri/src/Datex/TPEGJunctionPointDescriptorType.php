<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TPEGJunctionPointDescriptorType
 *
 * A descriptor for describing a point at a junction on a road network.
 * XSD Type: TPEGJunctionPointDescriptor
 */
class TPEGJunctionPointDescriptorType extends TPEGPointDescriptorType
{

    /**
     * The nature of the descriptor used to define the junction point under consideration (derived from the TPEG Loc table 03).
     *
     * @property string $tpegDescriptorType
     */
    private $tpegDescriptorType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $tpegjunctionPointDescriptorExtension
     */
    private $tpegjunctionPointDescriptorExtension = null;

    /**
     * Gets as tpegDescriptorType
     *
     * The nature of the descriptor used to define the junction point under consideration (derived from the TPEG Loc table 03).
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
     * The nature of the descriptor used to define the junction point under consideration (derived from the TPEG Loc table 03).
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
     * Gets as tpegjunctionPointDescriptorExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTpegjunctionPointDescriptorExtension()
    {
        return $this->tpegjunctionPointDescriptorExtension;
    }

    /**
     * Sets a new tpegjunctionPointDescriptorExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $tpegjunctionPointDescriptorExtension
     * @return self
     */
    public function setTpegjunctionPointDescriptorExtension(\Calcinai\Siri\Datex\ExtensionType $tpegjunctionPointDescriptorExtension)
    {
        $this->tpegjunctionPointDescriptorExtension = $tpegjunctionPointDescriptorExtension;
        return $this;
    }


}

