<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractIdentifiedItemStructureType
 *
 * Type for an Activity that can be referenced.
 * XSD Type: AbstractIdentifiedItemStructure
 */
class AbstractIdentifiedItemStructureType extends AbstractItemStructureType
{

    /**
     * Identifier of item.
     *
     * @property string $itemIdentifier
     */
    private $itemIdentifier = null;

    /**
     * Gets as itemIdentifier
     *
     * Identifier of item.
     *
     * @return string
     */
    public function getItemIdentifier()
    {
        return $this->itemIdentifier;
    }

    /**
     * Sets a new itemIdentifier
     *
     * Identifier of item.
     *
     * @param string $itemIdentifier
     * @return self
     */
    public function setItemIdentifier($itemIdentifier)
    {
        $this->itemIdentifier = $itemIdentifier;
        return $this;
    }


}

