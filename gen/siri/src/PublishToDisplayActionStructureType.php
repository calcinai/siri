<?php

namespace Calcinai\Siri;

/**
 * Class representing PublishToDisplayActionStructureType
 *
 * Type for Action Publish situation To Web.
 * XSD Type: PublishToDisplayActionStructure
 */
class PublishToDisplayActionStructureType extends ParameterisedActionStructureType
{

    /**
     * Include in situation lists on station displays.
     *
     * @property bool $onPlace
     */
    private $onPlace = null;

    /**
     * Include onboard displays.
     *
     * @property bool $onBoard
     */
    private $onBoard = null;

    /**
     * Gets as onPlace
     *
     * Include in situation lists on station displays.
     *
     * @return bool
     */
    public function getOnPlace()
    {
        return $this->onPlace;
    }

    /**
     * Sets a new onPlace
     *
     * Include in situation lists on station displays.
     *
     * @param bool $onPlace
     * @return self
     */
    public function setOnPlace($onPlace)
    {
        $this->onPlace = $onPlace;
        return $this;
    }

    /**
     * Gets as onBoard
     *
     * Include onboard displays.
     *
     * @return bool
     */
    public function getOnBoard()
    {
        return $this->onBoard;
    }

    /**
     * Sets a new onBoard
     *
     * Include onboard displays.
     *
     * @param bool $onBoard
     * @return self
     */
    public function setOnBoard($onBoard)
    {
        $this->onBoard = $onBoard;
        return $this;
    }


}

