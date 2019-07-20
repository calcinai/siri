<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing AdministrativeAreaRefsStructureType
 *
 * Type for a collection of one or more references to administrative areas.
 * XSD Type: AdministrativeAreaRefsStructure
 */
class AdministrativeAreaRefsStructureType
{

    /**
     * Reference to the identifier of an administrative area.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\AdministrativeAreaVersionedRefStructureType $administrativeAreaRef
     */
    private $administrativeAreaRef = null;

    /**
     * Gets as administrativeAreaRef
     *
     * Reference to the identifier of an administrative area.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\AdministrativeAreaVersionedRefStructureType
     */
    public function getAdministrativeAreaRef()
    {
        return $this->administrativeAreaRef;
    }

    /**
     * Sets a new administrativeAreaRef
     *
     * Reference to the identifier of an administrative area.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\AdministrativeAreaVersionedRefStructureType $administrativeAreaRef
     * @return self
     */
    public function setAdministrativeAreaRef(\Calcinai\Siri\Objects\IFOpt\AdministrativeAreaVersionedRefStructureType $administrativeAreaRef)
    {
        $this->administrativeAreaRef = $administrativeAreaRef;
        return $this;
    }


}

