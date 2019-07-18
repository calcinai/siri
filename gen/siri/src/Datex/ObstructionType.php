<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ObstructionType
 *
 * Any stationary or moving obstacle of a physical nature (e.g. obstacles or vehicles from an earlier accident, shed loads on carriageway, rock fall, abnormal or dangerous loads, or animals etc.) which could disrupt or endanger traffic.
 * XSD Type: Obstruction
 */
class ObstructionType extends TrafficElementType
{

    /**
     * The number of obstructions that are partly or wholly blocking the road.
     *
     * @property int $numberOfObstructions
     */
    private $numberOfObstructions = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfObstruction
     */
    private $mobilityOfObstruction = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $obstructionExtension
     */
    private $obstructionExtension = null;

    /**
     * Gets as numberOfObstructions
     *
     * The number of obstructions that are partly or wholly blocking the road.
     *
     * @return int
     */
    public function getNumberOfObstructions()
    {
        return $this->numberOfObstructions;
    }

    /**
     * Sets a new numberOfObstructions
     *
     * The number of obstructions that are partly or wholly blocking the road.
     *
     * @param int $numberOfObstructions
     * @return self
     */
    public function setNumberOfObstructions($numberOfObstructions)
    {
        $this->numberOfObstructions = $numberOfObstructions;
        return $this;
    }

    /**
     * Gets as mobilityOfObstruction
     *
     * @return \Calcinai\Siri\Objects\Datex\MobilityType
     */
    public function getMobilityOfObstruction()
    {
        return $this->mobilityOfObstruction;
    }

    /**
     * Sets a new mobilityOfObstruction
     *
     * @param \Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfObstruction
     * @return self
     */
    public function setMobilityOfObstruction(\Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfObstruction)
    {
        $this->mobilityOfObstruction = $mobilityOfObstruction;
        return $this;
    }

    /**
     * Gets as obstructionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getObstructionExtension()
    {
        return $this->obstructionExtension;
    }

    /**
     * Sets a new obstructionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $obstructionExtension
     * @return self
     */
    public function setObstructionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $obstructionExtension)
    {
        $this->obstructionExtension = $obstructionExtension;
        return $this;
    }


}

