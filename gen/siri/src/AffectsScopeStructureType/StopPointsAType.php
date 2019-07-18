<?php

namespace Calcinai\Siri\Objects\AffectsScopeStructureType;

/**
 * Class representing StopPointsAType
 */
class StopPointsAType
{

    /**
     * Stop affected by situation.
     *
     * @property \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $affectedStopPoint
     */
    private $affectedStopPoint = [
        
    ];

    /**
     * Adds as affectedStopPoint
     *
     * Stop affected by situation.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType $affectedStopPoint
     */
    public function addToAffectedStopPoint(\Calcinai\Siri\Objects\AffectedStopPointStructureType $affectedStopPoint)
    {
        $this->affectedStopPoint[] = $affectedStopPoint;
        return $this;
    }

    /**
     * isset affectedStopPoint
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedStopPoint($index)
    {
        return isset($this->affectedStopPoint[$index]);
    }

    /**
     * unset affectedStopPoint
     *
     * Stop affected by situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedStopPoint($index)
    {
        unset($this->affectedStopPoint[$index]);
    }

    /**
     * Gets as affectedStopPoint
     *
     * Stop affected by situation.
     *
     * @return \Calcinai\Siri\Objects\AffectedStopPointStructureType[]
     */
    public function getAffectedStopPoint()
    {
        return $this->affectedStopPoint;
    }

    /**
     * Sets a new affectedStopPoint
     *
     * Stop affected by situation.
     *
     * @param \Calcinai\Siri\Objects\AffectedStopPointStructureType[] $affectedStopPoint
     * @return self
     */
    public function setAffectedStopPoint(array $affectedStopPoint)
    {
        $this->affectedStopPoint = $affectedStopPoint;
        return $this;
    }


}

