<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing EnvironmentalObstructionType
 *
 * An obstruction on the road resulting from an environmental cause.
 * XSD Type: EnvironmentalObstruction
 */
class EnvironmentalObstructionType extends ObstructionType
{

    /**
     * The depth of flooding or of snow on the road.
     *
     * @property float $depth
     */
    private $depth = null;

    /**
     * Characterization of an obstruction on the road resulting from an environmental cause.
     *
     * @property string $environmentalObstructionType
     */
    private $environmentalObstructionType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $environmentalObstructionExtension
     */
    private $environmentalObstructionExtension = null;

    /**
     * Gets as depth
     *
     * The depth of flooding or of snow on the road.
     *
     * @return float
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets a new depth
     *
     * The depth of flooding or of snow on the road.
     *
     * @param float $depth
     * @return self
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Gets as environmentalObstructionType
     *
     * Characterization of an obstruction on the road resulting from an environmental cause.
     *
     * @return string
     */
    public function getEnvironmentalObstructionType()
    {
        return $this->environmentalObstructionType;
    }

    /**
     * Sets a new environmentalObstructionType
     *
     * Characterization of an obstruction on the road resulting from an environmental cause.
     *
     * @param string $environmentalObstructionType
     * @return self
     */
    public function setEnvironmentalObstructionType($environmentalObstructionType)
    {
        $this->environmentalObstructionType = $environmentalObstructionType;
        return $this;
    }

    /**
     * Gets as environmentalObstructionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getEnvironmentalObstructionExtension()
    {
        return $this->environmentalObstructionExtension;
    }

    /**
     * Sets a new environmentalObstructionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $environmentalObstructionExtension
     * @return self
     */
    public function setEnvironmentalObstructionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $environmentalObstructionExtension)
    {
        $this->environmentalObstructionExtension = $environmentalObstructionExtension;
        return $this;
    }


}

