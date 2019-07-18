<?php

namespace Calcinai\Siri\Objects\AffectedStopPointStructureType;

/**
 * Class representing ConnectionLinksAType
 */
class ConnectionLinksAType
{

    /**
     * Connection links from stop that are affected.
     *
     * @property \Calcinai\Siri\Objects\AffectedConnectionLinkStructureType[] $affectedConnectionLink
     */
    private $affectedConnectionLink = [
        
    ];

    /**
     * Adds as affectedConnectionLink
     *
     * Connection links from stop that are affected.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedConnectionLinkStructureType $affectedConnectionLink
     */
    public function addToAffectedConnectionLink(\Calcinai\Siri\Objects\AffectedConnectionLinkStructureType $affectedConnectionLink)
    {
        $this->affectedConnectionLink[] = $affectedConnectionLink;
        return $this;
    }

    /**
     * isset affectedConnectionLink
     *
     * Connection links from stop that are affected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedConnectionLink($index)
    {
        return isset($this->affectedConnectionLink[$index]);
    }

    /**
     * unset affectedConnectionLink
     *
     * Connection links from stop that are affected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedConnectionLink($index)
    {
        unset($this->affectedConnectionLink[$index]);
    }

    /**
     * Gets as affectedConnectionLink
     *
     * Connection links from stop that are affected.
     *
     * @return \Calcinai\Siri\Objects\AffectedConnectionLinkStructureType[]
     */
    public function getAffectedConnectionLink()
    {
        return $this->affectedConnectionLink;
    }

    /**
     * Sets a new affectedConnectionLink
     *
     * Connection links from stop that are affected.
     *
     * @param \Calcinai\Siri\Objects\AffectedConnectionLinkStructureType[] $affectedConnectionLink
     * @return self
     */
    public function setAffectedConnectionLink(array $affectedConnectionLink)
    {
        $this->affectedConnectionLink = $affectedConnectionLink;
        return $this;
    }


}

