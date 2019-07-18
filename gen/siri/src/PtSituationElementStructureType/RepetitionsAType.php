<?php

namespace Calcinai\Siri\Objects\PtSituationElementStructureType;

/**
 * Class representing RepetitionsAType
 */
class RepetitionsAType
{

    /**
     * @property string[] $dayType
     */
    private $dayType = [
        
    ];

    /**
     * Adds as dayType
     *
     * @return self
     * @param string $dayType
     */
    public function addToDayType($dayType)
    {
        $this->dayType[] = $dayType;
        return $this;
    }

    /**
     * isset dayType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDayType($index)
    {
        return isset($this->dayType[$index]);
    }

    /**
     * unset dayType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDayType($index)
    {
        unset($this->dayType[$index]);
    }

    /**
     * Gets as dayType
     *
     * @return string[]
     */
    public function getDayType()
    {
        return $this->dayType;
    }

    /**
     * Sets a new dayType
     *
     * @param string $dayType
     * @return self
     */
    public function setDayType(array $dayType)
    {
        $this->dayType = $dayType;
        return $this;
    }


}

