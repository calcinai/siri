<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing RestrictionType
 *
 * Defines a restriction which qualifies the operator's management action.
 * XSD Type: Restriction
 */
class RestrictionType
{

    /**
     * Defines a restriction based on equipment either on or carried by a vehicle.
     *
     * @property string $equipmentRequirement
     */
    private $equipmentRequirement = null;

    /**
     * The minimum number of persons in a vehicle required to satisfy a traffic restriction or a special fare condition.
     *
     * @property int $minimumCarOccupancy
     */
    private $minimumCarOccupancy = null;

    /**
     * The sequential number of an exit/entrance ramp from a given location in a given direction.
     *
     * @property int $sequentialRampNumber
     */
    private $sequentialRampNumber = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $restrictionExtension
     */
    private $restrictionExtension = null;

    /**
     * Gets as equipmentRequirement
     *
     * Defines a restriction based on equipment either on or carried by a vehicle.
     *
     * @return string
     */
    public function getEquipmentRequirement()
    {
        return $this->equipmentRequirement;
    }

    /**
     * Sets a new equipmentRequirement
     *
     * Defines a restriction based on equipment either on or carried by a vehicle.
     *
     * @param string $equipmentRequirement
     * @return self
     */
    public function setEquipmentRequirement($equipmentRequirement)
    {
        $this->equipmentRequirement = $equipmentRequirement;
        return $this;
    }

    /**
     * Gets as minimumCarOccupancy
     *
     * The minimum number of persons in a vehicle required to satisfy a traffic restriction or a special fare condition.
     *
     * @return int
     */
    public function getMinimumCarOccupancy()
    {
        return $this->minimumCarOccupancy;
    }

    /**
     * Sets a new minimumCarOccupancy
     *
     * The minimum number of persons in a vehicle required to satisfy a traffic restriction or a special fare condition.
     *
     * @param int $minimumCarOccupancy
     * @return self
     */
    public function setMinimumCarOccupancy($minimumCarOccupancy)
    {
        $this->minimumCarOccupancy = $minimumCarOccupancy;
        return $this;
    }

    /**
     * Gets as sequentialRampNumber
     *
     * The sequential number of an exit/entrance ramp from a given location in a given direction.
     *
     * @return int
     */
    public function getSequentialRampNumber()
    {
        return $this->sequentialRampNumber;
    }

    /**
     * Sets a new sequentialRampNumber
     *
     * The sequential number of an exit/entrance ramp from a given location in a given direction.
     *
     * @param int $sequentialRampNumber
     * @return self
     */
    public function setSequentialRampNumber($sequentialRampNumber)
    {
        $this->sequentialRampNumber = $sequentialRampNumber;
        return $this;
    }

    /**
     * Gets as restrictionExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getRestrictionExtension()
    {
        return $this->restrictionExtension;
    }

    /**
     * Sets a new restrictionExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $restrictionExtension
     * @return self
     */
    public function setRestrictionExtension(\Calcinai\Siri\Datex\ExtensionType $restrictionExtension)
    {
        $this->restrictionExtension = $restrictionExtension;
        return $this;
    }


}

