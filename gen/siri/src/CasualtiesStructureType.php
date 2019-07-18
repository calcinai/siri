<?php

namespace Calcinai\Siri;

/**
 * Class representing CasualtiesStructureType
 *
 * Type for Information on casualties.
 * XSD Type: CasualtiesStructure
 */
class CasualtiesStructureType
{

    /**
     * Number of fatalities
     *
     * @property int $numberOfDeaths
     */
    private $numberOfDeaths = null;

    /**
     * Number of injured presons.
     *
     * @property int $numberOfInjured
     */
    private $numberOfInjured = null;

    /**
     * Gets as numberOfDeaths
     *
     * Number of fatalities
     *
     * @return int
     */
    public function getNumberOfDeaths()
    {
        return $this->numberOfDeaths;
    }

    /**
     * Sets a new numberOfDeaths
     *
     * Number of fatalities
     *
     * @param int $numberOfDeaths
     * @return self
     */
    public function setNumberOfDeaths($numberOfDeaths)
    {
        $this->numberOfDeaths = $numberOfDeaths;
        return $this;
    }

    /**
     * Gets as numberOfInjured
     *
     * Number of injured presons.
     *
     * @return int
     */
    public function getNumberOfInjured()
    {
        return $this->numberOfInjured;
    }

    /**
     * Sets a new numberOfInjured
     *
     * Number of injured presons.
     *
     * @param int $numberOfInjured
     * @return self
     */
    public function setNumberOfInjured($numberOfInjured)
    {
        $this->numberOfInjured = $numberOfInjured;
        return $this;
    }


}

