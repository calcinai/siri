<?php

namespace Calcinai\Siri\AffectsScopeStructureType;

/**
 * Class representing VehicleJourneysAType
 */
class VehicleJourneysAType
{

    /**
     * @property \Calcinai\Siri\AffectedVehicleJourneyStructureType $affectedVehicleJourney
     */
    private $affectedVehicleJourney = null;

    /**
     * Gets as affectedVehicleJourney
     *
     * @return \Calcinai\Siri\AffectedVehicleJourneyStructureType
     */
    public function getAffectedVehicleJourney()
    {
        return $this->affectedVehicleJourney;
    }

    /**
     * Sets a new affectedVehicleJourney
     *
     * @param \Calcinai\Siri\AffectedVehicleJourneyStructureType $affectedVehicleJourney
     * @return self
     */
    public function setAffectedVehicleJourney(\Calcinai\Siri\AffectedVehicleJourneyStructureType $affectedVehicleJourney)
    {
        $this->affectedVehicleJourney = $affectedVehicleJourney;
        return $this;
    }


}

