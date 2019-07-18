<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing GeneralObstructionType
 *
 * Any stationary or moving obstacle of a physical nature, other than of an animal, vehicle, environmental, or damaged equipment nature.
 * XSD Type: GeneralObstruction
 */
class GeneralObstructionType extends ObstructionType
{

    /**
     * Chartacterization of the type of general obstruction.
     *
     * @property string[] $obstructionType
     */
    private $obstructionType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $generalObstructionExtension
     */
    private $generalObstructionExtension = null;

    /**
     * Adds as obstructionType
     *
     * Chartacterization of the type of general obstruction.
     *
     * @return self
     * @param string $obstructionType
     */
    public function addToObstructionType($obstructionType)
    {
        $this->obstructionType[] = $obstructionType;
        return $this;
    }

    /**
     * isset obstructionType
     *
     * Chartacterization of the type of general obstruction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObstructionType($index)
    {
        return isset($this->obstructionType[$index]);
    }

    /**
     * unset obstructionType
     *
     * Chartacterization of the type of general obstruction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObstructionType($index)
    {
        unset($this->obstructionType[$index]);
    }

    /**
     * Gets as obstructionType
     *
     * Chartacterization of the type of general obstruction.
     *
     * @return string[]
     */
    public function getObstructionType()
    {
        return $this->obstructionType;
    }

    /**
     * Sets a new obstructionType
     *
     * Chartacterization of the type of general obstruction.
     *
     * @param string $obstructionType
     * @return self
     */
    public function setObstructionType(array $obstructionType)
    {
        $this->obstructionType = $obstructionType;
        return $this;
    }

    /**
     * Gets as generalObstructionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getGeneralObstructionExtension()
    {
        return $this->generalObstructionExtension;
    }

    /**
     * Sets a new generalObstructionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $generalObstructionExtension
     * @return self
     */
    public function setGeneralObstructionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $generalObstructionExtension)
    {
        $this->generalObstructionExtension = $generalObstructionExtension;
        return $this;
    }


}

