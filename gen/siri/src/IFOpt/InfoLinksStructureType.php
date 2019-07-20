<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing InfoLinksStructureType
 *
 * Type for collection of info links.
 * XSD Type: InfoLinksStructure
 */
class InfoLinksStructureType
{

    /**
     * @property string $infoLink
     */
    private $infoLink = null;

    /**
     * Gets as infoLink
     *
     * @return string
     */
    public function getInfoLink()
    {
        return $this->infoLink;
    }

    /**
     * Sets a new infoLink
     *
     * @param string $infoLink
     * @return self
     */
    public function setInfoLink($infoLink)
    {
        $this->infoLink = $infoLink;
        return $this;
    }


}

