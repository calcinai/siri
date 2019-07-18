<?php

namespace Calcinai\Siri\Objects\PtSituationElementStructureType;

/**
 * Class representing InfoLinksAType
 */
class InfoLinksAType
{

    /**
     * Hyperlink description
     *
     * @property \Calcinai\Siri\Objects\InfoLinkStructureType[] $infoLink
     */
    private $infoLink = [
        
    ];

    /**
     * Adds as infoLink
     *
     * Hyperlink description
     *
     * @return self
     * @param \Calcinai\Siri\Objects\InfoLinkStructureType $infoLink
     */
    public function addToInfoLink(\Calcinai\Siri\Objects\InfoLinkStructureType $infoLink)
    {
        $this->infoLink[] = $infoLink;
        return $this;
    }

    /**
     * isset infoLink
     *
     * Hyperlink description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoLink($index)
    {
        return isset($this->infoLink[$index]);
    }

    /**
     * unset infoLink
     *
     * Hyperlink description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoLink($index)
    {
        unset($this->infoLink[$index]);
    }

    /**
     * Gets as infoLink
     *
     * Hyperlink description
     *
     * @return \Calcinai\Siri\Objects\InfoLinkStructureType[]
     */
    public function getInfoLink()
    {
        return $this->infoLink;
    }

    /**
     * Sets a new infoLink
     *
     * Hyperlink description
     *
     * @param \Calcinai\Siri\Objects\InfoLinkStructureType[] $infoLink
     * @return self
     */
    public function setInfoLink(array $infoLink)
    {
        $this->infoLink = $infoLink;
        return $this;
    }


}

