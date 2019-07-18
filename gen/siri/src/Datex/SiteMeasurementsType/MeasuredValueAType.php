<?php

namespace Calcinai\Siri\Datex\SiteMeasurementsType;

use Calcinai\Siri\Datex\MeasuredValueType;

/**
 * Class representing MeasuredValueAType
 */
class MeasuredValueAType extends MeasuredValueType
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

