<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing DefaultedTextStructureType
 *
 * Type for a text that may be overridden.
 * XSD Type: DefaultedTextStructure
 */
class DefaultedTextStructureType extends NaturalLanguageStringStructureType
{

    /**
     * Whether the text value has been overridden from the generated default. Defult is true
     *
     * @property bool $overridden
     */
    private $overridden = null;

    /**
     * Gets as overridden
     *
     * Whether the text value has been overridden from the generated default. Defult is true
     *
     * @return bool
     */
    public function getOverridden()
    {
        return $this->overridden;
    }

    /**
     * Sets a new overridden
     *
     * Whether the text value has been overridden from the generated default. Defult is true
     *
     * @param bool $overridden
     * @return self
     */
    public function setOverridden($overridden)
    {
        $this->overridden = $overridden;
        return $this;
    }


}

