<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractReferencingItemStructureType
 *
 * Type for an Activity that references a previous Activity.
 * XSD Type: AbstractReferencingItemStructure
 */
class AbstractReferencingItemStructureType extends AbstractItemStructureType
{

    /**
     * Identifier of related previous general message within Producer.
     *
     * @property string $itemRef
     */
    private $itemRef = null;

    /**
     * Gets as itemRef
     *
     * Identifier of related previous general message within Producer.
     *
     * @return string
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * Sets a new itemRef
     *
     * Identifier of related previous general message within Producer.
     *
     * @param string $itemRef
     * @return self
     */
    public function setItemRef($itemRef)
    {
        $this->itemRef = $itemRef;
        return $this;
    }


}

