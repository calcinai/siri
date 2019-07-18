<?php

namespace Calcinai\Siri;

/**
 * Class representing LinePermissionStructureType
 *
 * Type for Line Permission.
 * XSD Type: LinePermissionStructure
 */
class LinePermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * Identifier of line whose data participant is allowed to access.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Identifier of direct of line that participant is allowed to access.
     *
     * @property string[] $directionRef
     */
    private $directionRef = [
        
    ];

    /**
     * Gets as lineRef
     *
     * Identifier of line whose data participant is allowed to access.
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Identifier of line whose data participant is allowed to access.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Adds as directionRef
     *
     * Identifier of direct of line that participant is allowed to access.
     *
     * @return self
     * @param string $directionRef
     */
    public function addToDirectionRef($directionRef)
    {
        $this->directionRef[] = $directionRef;
        return $this;
    }

    /**
     * isset directionRef
     *
     * Identifier of direct of line that participant is allowed to access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDirectionRef($index)
    {
        return isset($this->directionRef[$index]);
    }

    /**
     * unset directionRef
     *
     * Identifier of direct of line that participant is allowed to access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDirectionRef($index)
    {
        unset($this->directionRef[$index]);
    }

    /**
     * Gets as directionRef
     *
     * Identifier of direct of line that participant is allowed to access.
     *
     * @return string[]
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Identifier of direct of line that participant is allowed to access.
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef(array $directionRef)
    {
        $this->directionRef = $directionRef;
        return $this;
    }


}

