<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ModesStructureType
 *
 * Data Type for Transport Modes
 * XSD Type: ModesStructure
 */
class ModesStructureType
{

    /**
     * if true, listed modes to be excluded from list
     *
     * @property bool $exclude
     */
    private $exclude = null;

    /**
     * A method of transportation such as bus, rail, etc.
     *
     * @property string[] $mode
     */
    private $mode = [
        
    ];

    /**
     * Gets as exclude
     *
     * if true, listed modes to be excluded from list
     *
     * @return bool
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Sets a new exclude
     *
     * if true, listed modes to be excluded from list
     *
     * @param bool $exclude
     * @return self
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Adds as mode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @return self
     * @param string $mode
     */
    public function addToMode($mode)
    {
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * isset mode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMode($index)
    {
        return isset($this->mode[$index]);
    }

    /**
     * unset mode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMode($index)
    {
        unset($this->mode[$index]);
    }

    /**
     * Gets as mode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @return string[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * A method of transportation such as bus, rail, etc.
     *
     * @param string $mode
     * @return self
     */
    public function setMode(array $mode)
    {
        $this->mode = $mode;
        return $this;
    }


}

