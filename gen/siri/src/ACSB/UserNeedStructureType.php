<?php

namespace Calcinai\Siri\Objects\ACSB;

/**
 * Class representing UserNeedStructureType
 *
 * Type for of a specific need
 * XSD Type: UserNeedStructure
 */
class UserNeedStructureType
{

    /**
     * Passenger mobility need for which suitability is specified.
     *
     * @property string $mobilityNeed
     */
    private $mobilityNeed = null;

    /**
     * Passenger mobility need for which suitability is specified.
     *
     * @property string $psychosensoryNeed
     */
    private $psychosensoryNeed = null;

    /**
     * Passenger medical need for which suitability is specified.
     *
     * @property string $medicalNeed
     */
    private $medicalNeed = null;

    /**
     * Passenger enceumbrance need for which suitability is specified.
     *
     * @property string $encumbranceNeed
     */
    private $encumbranceNeed = null;

    /**
     * Whether user need is included or excluded. Defualt is included
     *
     * @property bool $excluded
     */
    private $excluded = null;

    /**
     * Relative ranking of need on a sclae 1-5
     *
     * @property int $needRanking
     */
    private $needRanking = null;

    /**
     * @property mixed $extensions
     */
    private $extensions = null;

    /**
     * Gets as mobilityNeed
     *
     * Passenger mobility need for which suitability is specified.
     *
     * @return string
     */
    public function getMobilityNeed()
    {
        return $this->mobilityNeed;
    }

    /**
     * Sets a new mobilityNeed
     *
     * Passenger mobility need for which suitability is specified.
     *
     * @param string $mobilityNeed
     * @return self
     */
    public function setMobilityNeed($mobilityNeed)
    {
        $this->mobilityNeed = $mobilityNeed;
        return $this;
    }

    /**
     * Gets as psychosensoryNeed
     *
     * Passenger mobility need for which suitability is specified.
     *
     * @return string
     */
    public function getPsychosensoryNeed()
    {
        return $this->psychosensoryNeed;
    }

    /**
     * Sets a new psychosensoryNeed
     *
     * Passenger mobility need for which suitability is specified.
     *
     * @param string $psychosensoryNeed
     * @return self
     */
    public function setPsychosensoryNeed($psychosensoryNeed)
    {
        $this->psychosensoryNeed = $psychosensoryNeed;
        return $this;
    }

    /**
     * Gets as medicalNeed
     *
     * Passenger medical need for which suitability is specified.
     *
     * @return string
     */
    public function getMedicalNeed()
    {
        return $this->medicalNeed;
    }

    /**
     * Sets a new medicalNeed
     *
     * Passenger medical need for which suitability is specified.
     *
     * @param string $medicalNeed
     * @return self
     */
    public function setMedicalNeed($medicalNeed)
    {
        $this->medicalNeed = $medicalNeed;
        return $this;
    }

    /**
     * Gets as encumbranceNeed
     *
     * Passenger enceumbrance need for which suitability is specified.
     *
     * @return string
     */
    public function getEncumbranceNeed()
    {
        return $this->encumbranceNeed;
    }

    /**
     * Sets a new encumbranceNeed
     *
     * Passenger enceumbrance need for which suitability is specified.
     *
     * @param string $encumbranceNeed
     * @return self
     */
    public function setEncumbranceNeed($encumbranceNeed)
    {
        $this->encumbranceNeed = $encumbranceNeed;
        return $this;
    }

    /**
     * Gets as excluded
     *
     * Whether user need is included or excluded. Defualt is included
     *
     * @return bool
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Sets a new excluded
     *
     * Whether user need is included or excluded. Defualt is included
     *
     * @param bool $excluded
     * @return self
     */
    public function setExcluded($excluded)
    {
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * Gets as needRanking
     *
     * Relative ranking of need on a sclae 1-5
     *
     * @return int
     */
    public function getNeedRanking()
    {
        return $this->needRanking;
    }

    /**
     * Sets a new needRanking
     *
     * Relative ranking of need on a sclae 1-5
     *
     * @param int $needRanking
     * @return self
     */
    public function setNeedRanking($needRanking)
    {
        $this->needRanking = $needRanking;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return mixed
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param mixed $extensions
     * @return self
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

