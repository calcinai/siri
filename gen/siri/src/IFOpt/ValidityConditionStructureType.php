<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing ValidityConditionStructureType
 *
 * Type for a validity condition
 * XSD Type: ValidityConditionStructure
 */
class ValidityConditionStructureType
{

    /**
     * The (inclusive) start date and time.
     *
     * @property \DateTime $fromDateTime
     */
    private $fromDateTime = null;

    /**
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
     *
     * @property \DateTime $toDateTime
     */
    private $toDateTime = null;

    /**
     * Day type for which timeband applies. If absent all day types in context.
     *
     * @property string $dayType
     */
    private $dayType = null;

    /**
     * Any timebands which further qualify the validity condition.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType\TimebandsAType[] $timebands
     */
    private $timebands = [
        
    ];

    /**
     * Gets as fromDateTime
     *
     * The (inclusive) start date and time.
     *
     * @return \DateTime
     */
    public function getFromDateTime()
    {
        return $this->fromDateTime;
    }

    /**
     * Sets a new fromDateTime
     *
     * The (inclusive) start date and time.
     *
     * @param \DateTime $fromDateTime
     * @return self
     */
    public function setFromDateTime(\DateTime $fromDateTime)
    {
        $this->fromDateTime = $fromDateTime;
        return $this;
    }

    /**
     * Gets as toDateTime
     *
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
     *
     * @return \DateTime
     */
    public function getToDateTime()
    {
        return $this->toDateTime;
    }

    /**
     * Sets a new toDateTime
     *
     * The (inclusive) end time. If omitted, the range end is open-ended, that is, it should be interpreted as "forever".
     *
     * @param \DateTime $toDateTime
     * @return self
     */
    public function setToDateTime(\DateTime $toDateTime)
    {
        $this->toDateTime = $toDateTime;
        return $this;
    }

    /**
     * Gets as dayType
     *
     * Day type for which timeband applies. If absent all day types in context.
     *
     * @return string
     */
    public function getDayType()
    {
        return $this->dayType;
    }

    /**
     * Sets a new dayType
     *
     * Day type for which timeband applies. If absent all day types in context.
     *
     * @param string $dayType
     * @return self
     */
    public function setDayType($dayType)
    {
        $this->dayType = $dayType;
        return $this;
    }

    /**
     * Adds as timebands
     *
     * Any timebands which further qualify the validity condition.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType\TimebandsAType $timebands
     */
    public function addToTimebands(\Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType\TimebandsAType $timebands)
    {
        $this->timebands[] = $timebands;
        return $this;
    }

    /**
     * isset timebands
     *
     * Any timebands which further qualify the validity condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimebands($index)
    {
        return isset($this->timebands[$index]);
    }

    /**
     * unset timebands
     *
     * Any timebands which further qualify the validity condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimebands($index)
    {
        unset($this->timebands[$index]);
    }

    /**
     * Gets as timebands
     *
     * Any timebands which further qualify the validity condition.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType\TimebandsAType[]
     */
    public function getTimebands()
    {
        return $this->timebands;
    }

    /**
     * Sets a new timebands
     *
     * Any timebands which further qualify the validity condition.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType\TimebandsAType[] $timebands
     * @return self
     */
    public function setTimebands(array $timebands)
    {
        $this->timebands = $timebands;
        return $this;
    }


}

