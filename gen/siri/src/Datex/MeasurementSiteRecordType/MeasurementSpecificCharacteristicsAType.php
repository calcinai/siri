<?php

namespace Calcinai\Siri\Objects\Datex\MeasurementSiteRecordType;

use Calcinai\Siri\Objects\Datex\MeasurementSpecificCharacteristicsType;

/**
 * Class representing MeasurementSpecificCharacteristicsAType
 */
class MeasurementSpecificCharacteristicsAType extends MeasurementSpecificCharacteristicsType
{

    /**
     * @property int $index
     */
    private $index = null;

    /**
     * Gets as index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * @param int $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }


}

