<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ImpactDetailsType
 *
 * Detailed assessment of the impact that an unplanned event or operator action defined by the situation record has on the driving conditions.
 * XSD Type: ImpactDetails
 */
class ImpactDetailsType
{

    /**
     * The ratio of current capacity to the normal (freeflow) road capacity in the defined direction, expressed as a percentage. Capacity is the maximum number of vehicles that can pass a specified point on the road, in unit time given the specified conditions.
     *
     * @property float $capacityRemaining
     */
    private $capacityRemaining = null;

    /**
     * The number of normally operational lanes on the carriageway which are now restricted either fully or partially.
     *
     * @property int $numberOfLanesRestricted
     */
    private $numberOfLanesRestricted = null;

    /**
     * The number of lanes in the specified direction which remain fully operational.
     *
     * @property int $numberOfOperationalLanes
     */
    private $numberOfOperationalLanes = null;

    /**
     * The normal number of lanes in the specified direction that the carriageway has before reduction due to roadworks or traffic events.
     *
     * @property int $originalNumberOfLanes
     */
    private $originalNumberOfLanes = null;

    /**
     * The type of restriction to which traffic is subjected as a result of an unplanned event.
     *
     * @property string $trafficRestrictionType
     */
    private $trafficRestrictionType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $impactDetailsExtension
     */
    private $impactDetailsExtension = null;

    /**
     * Gets as capacityRemaining
     *
     * The ratio of current capacity to the normal (freeflow) road capacity in the defined direction, expressed as a percentage. Capacity is the maximum number of vehicles that can pass a specified point on the road, in unit time given the specified conditions.
     *
     * @return float
     */
    public function getCapacityRemaining()
    {
        return $this->capacityRemaining;
    }

    /**
     * Sets a new capacityRemaining
     *
     * The ratio of current capacity to the normal (freeflow) road capacity in the defined direction, expressed as a percentage. Capacity is the maximum number of vehicles that can pass a specified point on the road, in unit time given the specified conditions.
     *
     * @param float $capacityRemaining
     * @return self
     */
    public function setCapacityRemaining($capacityRemaining)
    {
        $this->capacityRemaining = $capacityRemaining;
        return $this;
    }

    /**
     * Gets as numberOfLanesRestricted
     *
     * The number of normally operational lanes on the carriageway which are now restricted either fully or partially.
     *
     * @return int
     */
    public function getNumberOfLanesRestricted()
    {
        return $this->numberOfLanesRestricted;
    }

    /**
     * Sets a new numberOfLanesRestricted
     *
     * The number of normally operational lanes on the carriageway which are now restricted either fully or partially.
     *
     * @param int $numberOfLanesRestricted
     * @return self
     */
    public function setNumberOfLanesRestricted($numberOfLanesRestricted)
    {
        $this->numberOfLanesRestricted = $numberOfLanesRestricted;
        return $this;
    }

    /**
     * Gets as numberOfOperationalLanes
     *
     * The number of lanes in the specified direction which remain fully operational.
     *
     * @return int
     */
    public function getNumberOfOperationalLanes()
    {
        return $this->numberOfOperationalLanes;
    }

    /**
     * Sets a new numberOfOperationalLanes
     *
     * The number of lanes in the specified direction which remain fully operational.
     *
     * @param int $numberOfOperationalLanes
     * @return self
     */
    public function setNumberOfOperationalLanes($numberOfOperationalLanes)
    {
        $this->numberOfOperationalLanes = $numberOfOperationalLanes;
        return $this;
    }

    /**
     * Gets as originalNumberOfLanes
     *
     * The normal number of lanes in the specified direction that the carriageway has before reduction due to roadworks or traffic events.
     *
     * @return int
     */
    public function getOriginalNumberOfLanes()
    {
        return $this->originalNumberOfLanes;
    }

    /**
     * Sets a new originalNumberOfLanes
     *
     * The normal number of lanes in the specified direction that the carriageway has before reduction due to roadworks or traffic events.
     *
     * @param int $originalNumberOfLanes
     * @return self
     */
    public function setOriginalNumberOfLanes($originalNumberOfLanes)
    {
        $this->originalNumberOfLanes = $originalNumberOfLanes;
        return $this;
    }

    /**
     * Gets as trafficRestrictionType
     *
     * The type of restriction to which traffic is subjected as a result of an unplanned event.
     *
     * @return string
     */
    public function getTrafficRestrictionType()
    {
        return $this->trafficRestrictionType;
    }

    /**
     * Sets a new trafficRestrictionType
     *
     * The type of restriction to which traffic is subjected as a result of an unplanned event.
     *
     * @param string $trafficRestrictionType
     * @return self
     */
    public function setTrafficRestrictionType($trafficRestrictionType)
    {
        $this->trafficRestrictionType = $trafficRestrictionType;
        return $this;
    }

    /**
     * Gets as impactDetailsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getImpactDetailsExtension()
    {
        return $this->impactDetailsExtension;
    }

    /**
     * Sets a new impactDetailsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $impactDetailsExtension
     * @return self
     */
    public function setImpactDetailsExtension(\Calcinai\Siri\Datex\ExtensionType $impactDetailsExtension)
    {
        $this->impactDetailsExtension = $impactDetailsExtension;
        return $this;
    }


}

