<?php

namespace Calcinai\Siri\IFOpt;

/**
 * Class representing DataManagedObjectStructureType
 *
 * Abstract Type for an object managed by an administrative area.
 * XSD Type: DataManagedObjectStructure
 */
class DataManagedObjectStructureType extends VersionedObjectStructureType
{

    /**
     * Administrative area that manages object. If absent then manager same as for containing parent of object.
     *
     * @property string $managedByAreaRef
     */
    private $managedByAreaRef = null;

    /**
     * Collection of URL's associated with object.
     *
     * @property string[] $infoLinks
     */
    private $infoLinks = null;

    /**
     * Gets as managedByAreaRef
     *
     * Administrative area that manages object. If absent then manager same as for containing parent of object.
     *
     * @return string
     */
    public function getManagedByAreaRef()
    {
        return $this->managedByAreaRef;
    }

    /**
     * Sets a new managedByAreaRef
     *
     * Administrative area that manages object. If absent then manager same as for containing parent of object.
     *
     * @param string $managedByAreaRef
     * @return self
     */
    public function setManagedByAreaRef($managedByAreaRef)
    {
        $this->managedByAreaRef = $managedByAreaRef;
        return $this;
    }

    /**
     * Adds as infoLink
     *
     * Collection of URL's associated with object.
     *
     * @return self
     * @param string $infoLink
     */
    public function addToInfoLinks($infoLink)
    {
        $this->infoLinks[] = $infoLink;
        return $this;
    }

    /**
     * isset infoLinks
     *
     * Collection of URL's associated with object.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoLinks($index)
    {
        return isset($this->infoLinks[$index]);
    }

    /**
     * unset infoLinks
     *
     * Collection of URL's associated with object.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoLinks($index)
    {
        unset($this->infoLinks[$index]);
    }

    /**
     * Gets as infoLinks
     *
     * Collection of URL's associated with object.
     *
     * @return string[]
     */
    public function getInfoLinks()
    {
        return $this->infoLinks;
    }

    /**
     * Sets a new infoLinks
     *
     * Collection of URL's associated with object.
     *
     * @param string $infoLinks
     * @return self
     */
    public function setInfoLinks(array $infoLinks)
    {
        $this->infoLinks = $infoLinks;
        return $this;
    }


}

