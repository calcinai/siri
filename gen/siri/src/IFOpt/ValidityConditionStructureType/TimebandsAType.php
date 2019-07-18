<?php

namespace Calcinai\Siri\IFOpt\ValidityConditionStructureType;

/**
 * Class representing TimebandsAType
 */
class TimebandsAType
{

    /**
     * Timeband during which element is available or in effect.
     *
     * @property \Calcinai\Siri\IFOpt\TimebandStructureType $timeband
     */
    private $timeband = null;

    /**
     * Gets as timeband
     *
     * Timeband during which element is available or in effect.
     *
     * @return \Calcinai\Siri\IFOpt\TimebandStructureType
     */
    public function getTimeband()
    {
        return $this->timeband;
    }

    /**
     * Sets a new timeband
     *
     * Timeband during which element is available or in effect.
     *
     * @param \Calcinai\Siri\IFOpt\TimebandStructureType $timeband
     * @return self
     */
    public function setTimeband(\Calcinai\Siri\IFOpt\TimebandStructureType $timeband)
    {
        $this->timeband = $timeband;
        return $this;
    }


}

