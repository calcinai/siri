<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedModesStructureType
 *
 * Type for a Affected modes to stop.
 * XSD Type: AffectedModesStructure
 */
class AffectedModesStructureType
{

    /**
     * All known modes for stop
     *
     * @property string $allModes
     */
    private $allModes = null;

    /**
     * Mode affected by change
     *
     * @property \Calcinai\Siri\Objects\AffectedModesStructureType\ModeAType[] $mode
     */
    private $mode = [
        
    ];

    /**
     * Gets as allModes
     *
     * All known modes for stop
     *
     * @return string
     */
    public function getAllModes()
    {
        return $this->allModes;
    }

    /**
     * Sets a new allModes
     *
     * All known modes for stop
     *
     * @param string $allModes
     * @return self
     */
    public function setAllModes($allModes)
    {
        $this->allModes = $allModes;
        return $this;
    }

    /**
     * Adds as mode
     *
     * Mode affected by change
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedModesStructureType\ModeAType $mode
     */
    public function addToMode(\Calcinai\Siri\Objects\AffectedModesStructureType\ModeAType $mode)
    {
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * isset mode
     *
     * Mode affected by change
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
     * Mode affected by change
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
     * Mode affected by change
     *
     * @return \Calcinai\Siri\Objects\AffectedModesStructureType\ModeAType[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Mode affected by change
     *
     * @param \Calcinai\Siri\Objects\AffectedModesStructureType\ModeAType[] $mode
     * @return self
     */
    public function setMode(array $mode)
    {
        $this->mode = $mode;
        return $this;
    }


}

