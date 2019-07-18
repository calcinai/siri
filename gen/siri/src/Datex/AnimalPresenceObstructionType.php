<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AnimalPresenceObstructionType
 *
 * An obstruction on the road resulting from the presence of animals.
 * XSD Type: AnimalPresenceObstruction
 */
class AnimalPresenceObstructionType extends ObstructionType
{

    /**
     * Indicates whether the identified animals are dead (immobile) or alive (potentially mobile).
     *
     * @property bool $alive
     */
    private $alive = null;

    /**
     * Indicates the nature of animals present on or near the roadway.
     *
     * @property string $animalPresenceType
     */
    private $animalPresenceType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $animalPresenceObstructionExtension
     */
    private $animalPresenceObstructionExtension = null;

    /**
     * Gets as alive
     *
     * Indicates whether the identified animals are dead (immobile) or alive (potentially mobile).
     *
     * @return bool
     */
    public function getAlive()
    {
        return $this->alive;
    }

    /**
     * Sets a new alive
     *
     * Indicates whether the identified animals are dead (immobile) or alive (potentially mobile).
     *
     * @param bool $alive
     * @return self
     */
    public function setAlive($alive)
    {
        $this->alive = $alive;
        return $this;
    }

    /**
     * Gets as animalPresenceType
     *
     * Indicates the nature of animals present on or near the roadway.
     *
     * @return string
     */
    public function getAnimalPresenceType()
    {
        return $this->animalPresenceType;
    }

    /**
     * Sets a new animalPresenceType
     *
     * Indicates the nature of animals present on or near the roadway.
     *
     * @param string $animalPresenceType
     * @return self
     */
    public function setAnimalPresenceType($animalPresenceType)
    {
        $this->animalPresenceType = $animalPresenceType;
        return $this;
    }

    /**
     * Gets as animalPresenceObstructionExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAnimalPresenceObstructionExtension()
    {
        return $this->animalPresenceObstructionExtension;
    }

    /**
     * Sets a new animalPresenceObstructionExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $animalPresenceObstructionExtension
     * @return self
     */
    public function setAnimalPresenceObstructionExtension(\Calcinai\Siri\Datex\ExtensionType $animalPresenceObstructionExtension)
    {
        $this->animalPresenceObstructionExtension = $animalPresenceObstructionExtension;
        return $this;
    }


}

