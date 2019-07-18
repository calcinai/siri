<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityChangeStructureType
 *
 * Type for change to equipment availability. Basic structure defined in the first 1.0 SIRI XSD
 * XSD Type: FacilityChangeStructure
 */
class FacilityChangeStructureType
{

    /**
     * Availability change for Equipment item.
     *
     * @property \Calcinai\Siri\Objects\EquipmentAvailabilityStructureType $equipmentAvailability
     */
    private $equipmentAvailability = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Effect of change on impaired access users.
     *
     * @property \Calcinai\Siri\Objects\MobilityDisruptionStructureType $mobilityDisruption
     */
    private $mobilityDisruption = null;

    /**
     * Gets as equipmentAvailability
     *
     * Availability change for Equipment item.
     *
     * @return \Calcinai\Siri\Objects\EquipmentAvailabilityStructureType
     */
    public function getEquipmentAvailability()
    {
        return $this->equipmentAvailability;
    }

    /**
     * Sets a new equipmentAvailability
     *
     * Availability change for Equipment item.
     *
     * @param \Calcinai\Siri\Objects\EquipmentAvailabilityStructureType $equipmentAvailability
     * @return self
     */
    public function setEquipmentAvailability(\Calcinai\Siri\Objects\EquipmentAvailabilityStructureType $equipmentAvailability)
    {
        $this->equipmentAvailability = $equipmentAvailability;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as mobilityDisruption
     *
     * Effect of change on impaired access users.
     *
     * @return \Calcinai\Siri\Objects\MobilityDisruptionStructureType
     */
    public function getMobilityDisruption()
    {
        return $this->mobilityDisruption;
    }

    /**
     * Sets a new mobilityDisruption
     *
     * Effect of change on impaired access users.
     *
     * @param \Calcinai\Siri\Objects\MobilityDisruptionStructureType $mobilityDisruption
     * @return self
     */
    public function setMobilityDisruption(\Calcinai\Siri\Objects\MobilityDisruptionStructureType $mobilityDisruption)
    {
        $this->mobilityDisruption = $mobilityDisruption;
        return $this;
    }


}

