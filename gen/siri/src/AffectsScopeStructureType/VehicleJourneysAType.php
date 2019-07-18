<?php

namespace Calcinai\Siri\Objects\AffectsScopeStructureType;

/**
 * Class representing VehicleJourneysAType
 */
class VehicleJourneysAType
{

    /**
     * @property \Calcinai\Siri\Objects\AffectedVehicleJourneyStructureType $affectedVehicleJourney
     */
    private $affectedVehicleJourney = null;

    /**
     * Gets as affectedVehicleJourney
     *
     * @return \Calcinai\Siri\Objects\AffectedVehicleJourneyStructureType
     */
    public function getAffectedVehicleJourney()
    {
        return $this->affectedVehicleJourney;
    }

    /**
     * Sets a new affectedVehicleJourney
     *
     * @param \Calcinai\Siri\Objects\AffectedVehicleJourneyStructureType $affectedVehicleJourney
     * @return self
     */
    public function setAffectedVehicleJourney(\Calcinai\Siri\Objects\AffectedVehicleJourneyStructureType $affectedVehicleJourney)
    {
        $this->affectedVehicleJourney = $affectedVehicleJourney;
        return $this;
    }


}

