<?php

namespace Calcinai\Siri;

/**
 * Class representing TrainBlockPartStructureType
 *
 * Type for Block part elements of Vehicle journey.
 * XSD Type: TrainBlockPartStructure
 */
class TrainBlockPartStructureType
{

    /**
     * Total number of block parts making up the train of which this is part
     *
     * @property int $numberOfBlockParts
     */
    private $numberOfBlockParts = null;

    /**
     * Identifier of train block part.
     *
     * @property string $trainPartRef
     */
    private $trainPartRef = null;

    /**
     * Description of position of Train Block Part within Train to guide passengers where to find it. E.g. 'Front four coaches'.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $positionOfTrainBlockPart
     */
    private $positionOfTrainBlockPart = null;

    /**
     * Gets as numberOfBlockParts
     *
     * Total number of block parts making up the train of which this is part
     *
     * @return int
     */
    public function getNumberOfBlockParts()
    {
        return $this->numberOfBlockParts;
    }

    /**
     * Sets a new numberOfBlockParts
     *
     * Total number of block parts making up the train of which this is part
     *
     * @param int $numberOfBlockParts
     * @return self
     */
    public function setNumberOfBlockParts($numberOfBlockParts)
    {
        $this->numberOfBlockParts = $numberOfBlockParts;
        return $this;
    }

    /**
     * Gets as trainPartRef
     *
     * Identifier of train block part.
     *
     * @return string
     */
    public function getTrainPartRef()
    {
        return $this->trainPartRef;
    }

    /**
     * Sets a new trainPartRef
     *
     * Identifier of train block part.
     *
     * @param string $trainPartRef
     * @return self
     */
    public function setTrainPartRef($trainPartRef)
    {
        $this->trainPartRef = $trainPartRef;
        return $this;
    }

    /**
     * Gets as positionOfTrainBlockPart
     *
     * Description of position of Train Block Part within Train to guide passengers where to find it. E.g. 'Front four coaches'.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getPositionOfTrainBlockPart()
    {
        return $this->positionOfTrainBlockPart;
    }

    /**
     * Sets a new positionOfTrainBlockPart
     *
     * Description of position of Train Block Part within Train to guide passengers where to find it. E.g. 'Front four coaches'.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $positionOfTrainBlockPart
     * @return self
     */
    public function setPositionOfTrainBlockPart(\Calcinai\Siri\NaturalLanguageStringStructureType $positionOfTrainBlockPart)
    {
        $this->positionOfTrainBlockPart = $positionOfTrainBlockPart;
        return $this;
    }


}

