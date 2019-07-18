<?php

namespace Calcinai\Siri\IFOpt;

/**
 * Class representing PlaceEquipmentStructureType
 *
 * Type for Place Equipment.
 * XSD Type: PlaceEquipmentStructure
 */
class PlaceEquipmentStructureType extends InstalledEquipmentStructureType
{

    /**
     * @property mixed $extensions
     */
    private $extensions = null;

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

