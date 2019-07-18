<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\EquipmentAvailabilityStructureType $equipmentAvailability
     */
    private $equipmentAvailability = null;

    /**
     * @property \Calcinai\Siri\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Effect of change on impaired access users.
     *
     * @property \Calcinai\Siri\MobilityDisruptionStructureType $mobilityDisruption
     */
    private $mobilityDisruption = null;

    /**
     * Gets as equipmentAvailability
     *
     * Availability change for Equipment item.
     *
     * @return \Calcinai\Siri\EquipmentAvailabilityStructureType
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
     * @param \Calcinai\Siri\EquipmentAvailabilityStructureType $equipmentAvailability
     * @return self
     */
    public function setEquipmentAvailability(\Calcinai\Siri\EquipmentAvailabilityStructureType $equipmentAvailability)
    {
        $this->equipmentAvailability = $equipmentAvailability;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as mobilityDisruption
     *
     * Effect of change on impaired access users.
     *
     * @return \Calcinai\Siri\MobilityDisruptionStructureType
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
     * @param \Calcinai\Siri\MobilityDisruptionStructureType $mobilityDisruption
     * @return self
     */
    public function setMobilityDisruption(\Calcinai\Siri\MobilityDisruptionStructureType $mobilityDisruption)
    {
        $this->mobilityDisruption = $mobilityDisruption;
        return $this;
    }


}

