<?php

namespace Calcinai\Siri;

/**
 * Class representing SituationRefStructureType
 *
 * Data Type for Reference to a Situation. Includes the Particpant , identifier and and version components of the identifier.
 * XSD Type: SituationRefStructure
 */
class SituationRefStructureType
{

    /**
     * @property string $situationSimpleRef
     */
    private $situationSimpleRef = null;

    /**
     * Reference to a Situation. Elements of Situation identfier are expressed as atomic elements
     *
     * @property \Calcinai\Siri\SituationFullRef $situationFullRef
     */
    private $situationFullRef = null;

    /**
     * Gets as situationSimpleRef
     *
     * @return string
     */
    public function getSituationSimpleRef()
    {
        return $this->situationSimpleRef;
    }

    /**
     * Sets a new situationSimpleRef
     *
     * @param string $situationSimpleRef
     * @return self
     */
    public function setSituationSimpleRef($situationSimpleRef)
    {
        $this->situationSimpleRef = $situationSimpleRef;
        return $this;
    }

    /**
     * Gets as situationFullRef
     *
     * Reference to a Situation. Elements of Situation identfier are expressed as atomic elements
     *
     * @return \Calcinai\Siri\SituationFullRef
     */
    public function getSituationFullRef()
    {
        return $this->situationFullRef;
    }

    /**
     * Sets a new situationFullRef
     *
     * Reference to a Situation. Elements of Situation identfier are expressed as atomic elements
     *
     * @param \Calcinai\Siri\SituationFullRef $situationFullRef
     * @return self
     */
    public function setSituationFullRef(\Calcinai\Siri\SituationFullRef $situationFullRef)
    {
        $this->situationFullRef = $situationFullRef;
        return $this;
    }


}

