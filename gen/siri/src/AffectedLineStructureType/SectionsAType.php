<?php

namespace Calcinai\Siri\AffectedLineStructureType;

/**
 * Class representing SectionsAType
 */
class SectionsAType
{

    /**
     * @property \Calcinai\Siri\AffectedSectionStructureType[] $affectedSection
     */
    private $affectedSection = [
        
    ];

    /**
     * Adds as affectedSection
     *
     * @return self
     * @param \Calcinai\Siri\AffectedSectionStructureType $affectedSection
     */
    public function addToAffectedSection(\Calcinai\Siri\AffectedSectionStructureType $affectedSection)
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
     * @return \Calcinai\Siri\AffectedSectionStructureType[]
     */
    public function getAffectedSection()
    {
        return $this->affectedSection;
    }

    /**
     * Sets a new affectedSection
     *
     * @param \Calcinai\Siri\AffectedSectionStructureType[] $affectedSection
     * @return self
     */
    public function setAffectedSection(array $affectedSection)
    {
        $this->affectedSection = $affectedSection;
        return $this;
    }


}

