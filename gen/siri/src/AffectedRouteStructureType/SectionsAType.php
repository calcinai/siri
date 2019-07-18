<?php

namespace Calcinai\Siri\Objects\AffectedRouteStructureType;

/**
 * Class representing SectionsAType
 */
class SectionsAType
{

    /**
     * Part of routre that is affected
     *
     * @property \Calcinai\Siri\Objects\AffectedSectionStructureType[] $affectedSection
     */
    private $affectedSection = [
        
    ];

    /**
     * Adds as affectedSection
     *
     * Part of routre that is affected
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedSectionStructureType $affectedSection
     */
    public function addToAffectedSection(\Calcinai\Siri\Objects\AffectedSectionStructureType $affectedSection)
    {
        $this->affectedSection[] = $affectedSection;
        return $this;
    }

    /**
     * isset affectedSection
     *
     * Part of routre that is affected
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedSection($index)
    {
        return isset($this->affectedSection[$index]);
    }

    /**
     * unset affectedSection
     *
     * Part of routre that is affected
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedSection($index)
    {
        unset($this->affectedSection[$index]);
    }

    /**
     * Gets as affectedSection
     *
     * Part of routre that is affected
     *
     * @return \Calcinai\Siri\Objects\AffectedSectionStructureType[]
     */
    public function getAffectedSection()
    {
        return $this->affectedSection;
    }

    /**
     * Sets a new affectedSection
     *
     * Part of routre that is affected
     *
     * @param \Calcinai\Siri\Objects\AffectedSectionStructureType[] $affectedSection
     * @return self
     */
    public function setAffectedSection(array $affectedSection)
    {
        $this->affectedSection = $affectedSection;
        return $this;
    }


}

