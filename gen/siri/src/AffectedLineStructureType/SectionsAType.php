<?php

namespace Calcinai\Siri\Objects\AffectedLineStructureType;

/**
 * Class representing SectionsAType
 */
class SectionsAType
{

    /**
     * @property \Calcinai\Siri\Objects\AffectedSectionStructureType[] $affectedSection
     */
    private $affectedSection = [
        
    ];

    /**
     * Adds as affectedSection
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
     * @return \Calcinai\Siri\Objects\AffectedSectionStructureType[]
     */
    public function getAffectedSection()
    {
        return $this->affectedSection;
    }

    /**
     * Sets a new affectedSection
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

