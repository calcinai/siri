<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing InstructionsType
 *
 * Supplementary instructions advice.
 * XSD Type: Instructions
 */
class InstructionsType extends AdviceType
{

    /**
     * Additional information of an instructional nature that can be provided to travellers.
     *
     * @property string $instruction
     */
    private $instruction = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $instructionsExtension
     */
    private $instructionsExtension = null;

    /**
     * Gets as instruction
     *
     * Additional information of an instructional nature that can be provided to travellers.
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Sets a new instruction
     *
     * Additional information of an instructional nature that can be provided to travellers.
     *
     * @param string $instruction
     * @return self
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * Gets as instructionsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getInstructionsExtension()
    {
        return $this->instructionsExtension;
    }

    /**
     * Sets a new instructionsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $instructionsExtension
     * @return self
     */
    public function setInstructionsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $instructionsExtension)
    {
        $this->instructionsExtension = $instructionsExtension;
        return $this;
    }


}

