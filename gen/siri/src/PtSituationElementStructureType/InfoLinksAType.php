<?php

namespace Calcinai\Siri\PtSituationElementStructureType;

/**
 * Class representing InfoLinksAType
 */
class InfoLinksAType
{

    /**
     * Hyperlink description
     *
     * @property \Calcinai\Siri\InfoLinkStructureType[] $infoLink
     */
    private $infoLink = [
        
    ];

    /**
     * Adds as infoLink
     *
     * Hyperlink description
     *
     * @return self
     * @param \Calcinai\Siri\InfoLinkStructureType $infoLink
     */
    public function addToInfoLink(\Calcinai\Siri\InfoLinkStructureType $infoLink)
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
     * @return \Calcinai\Siri\InfoLinkStructureType[]
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
     * @param \Calcinai\Siri\InfoLinkStructureType[] $infoLink
     * @return self
     */
    public function setInfoLink(array $infoLink)
    {
        $this->infoLink = $infoLink;
        return $this;
    }


}

