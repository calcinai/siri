<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing OffsetDistanceType
 *
 * The non negative offset distance from the Alert C referenced point to the actual point.
 * XSD Type: OffsetDistance
 */
class OffsetDistanceType
{

    /**
     * The non negative offset distance from the Alert C referenced point to the actual point. The Alert C locations in the Primary and Secondary locations must always encompass the linear section being specified, thus Offset Distance is towards the other point.
     *
     * @property int $offsetDistance
     */
    private $offsetDistance = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $offsetDistanceExtension
     */
    private $offsetDistanceExtension = null;

    /**
     * Gets as offsetDistance
     *
     * The non negative offset distance from the Alert C referenced point to the actual point. The Alert C locations in the Primary and Secondary locations must always encompass the linear section being specified, thus Offset Distance is towards the other point.
     *
     * @return int
     */
    public function getOffsetDistance()
    {
        return $this->offsetDistance;
    }

    /**
     * Sets a new offsetDistance
     *
     * The non negative offset distance from the Alert C referenced point to the actual point. The Alert C locations in the Primary and Secondary locations must always encompass the linear section being specified, thus Offset Distance is towards the other point.
     *
     * @param int $offsetDistance
     * @return self
     */
    public function setOffsetDistance($offsetDistance)
    {
        $this->offsetDistance = $offsetDistance;
        return $this;
    }

    /**
     * Gets as offsetDistanceExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getOffsetDistanceExtension()
    {
        return $this->offsetDistanceExtension;
    }

    /**
     * Sets a new offsetDistanceExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $offsetDistanceExtension
     * @return self
     */
    public function setOffsetDistanceExtension(\Calcinai\Siri\Datex\ExtensionType $offsetDistanceExtension)
    {
        $this->offsetDistanceExtension = $offsetDistanceExtension;
        return $this;
    }


}

