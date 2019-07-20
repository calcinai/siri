<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PtConsequencesStructureType
 *
 * Type for list of effects.
 * XSD Type: PtConsequencesStructure
 */
class PtConsequencesStructureType
{

    /**
     * Nature of the effect to disrupt (or restore) service, and further details.
     *
     * @property \Calcinai\Siri\Objects\PtConsequenceStructureType $consequence
     */
    private $consequence = null;

    /**
     * Gets as consequence
     *
     * Nature of the effect to disrupt (or restore) service, and further details.
     *
     * @return \Calcinai\Siri\Objects\PtConsequenceStructureType
     */
    public function getConsequence()
    {
        return $this->consequence;
    }

    /**
     * Sets a new consequence
     *
     * Nature of the effect to disrupt (or restore) service, and further details.
     *
     * @param \Calcinai\Siri\Objects\PtConsequenceStructureType $consequence
     * @return self
     */
    public function setConsequence(\Calcinai\Siri\Objects\PtConsequenceStructureType $consequence)
    {
        $this->consequence = $consequence;
        return $this;
    }


}

