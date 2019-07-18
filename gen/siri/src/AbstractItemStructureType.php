<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractItemStructureType
 *
 * Type for an Activity.
 * XSD Type: AbstractItemStructure
 */
class AbstractItemStructureType
{

    /**
     * Time at which data was recorded.
     *
     * @property \DateTime $recordedAtTime
     */
    private $recordedAtTime = null;

    /**
     * Gets as recordedAtTime
     *
     * Time at which data was recorded.
     *
     * @return \DateTime
     */
    public function getRecordedAtTime()
    {
        return $this->recordedAtTime;
    }

    /**
     * Sets a new recordedAtTime
     *
     * Time at which data was recorded.
     *
     * @param \DateTime $recordedAtTime
     * @return self
     */
    public function setRecordedAtTime(\DateTime $recordedAtTime)
    {
        $this->recordedAtTime = $recordedAtTime;
        return $this;
    }


}

