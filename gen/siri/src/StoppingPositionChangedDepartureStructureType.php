<?php

namespace Calcinai\Siri;

/**
 * Class representing StoppingPositionChangedDepartureStructureType
 *
 * Type for Change to a Distributor stop position.
 * XSD Type: StoppingPositionChangedDepartureStructure
 */
class StoppingPositionChangedDepartureStructureType extends AbstractDistributorItemStructureType
{

    /**
     * Description of the revised stopping position of the Distributor (fetcher) in the connection zone.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $changeNote
     */
    private $changeNote = null;

    /**
     * New location from whcih Distributor will leave.
     *
     * @property \Calcinai\Siri\LocationStructureType $newLocation
     */
    private $newLocation = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as changeNote
     *
     * Description of the revised stopping position of the Distributor (fetcher) in the connection zone.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getChangeNote()
    {
        return $this->changeNote;
    }

    /**
     * Sets a new changeNote
     *
     * Description of the revised stopping position of the Distributor (fetcher) in the connection zone.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $changeNote
     * @return self
     */
    public function setChangeNote(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $changeNote)
    {
        $this->changeNote = $changeNote;
        return $this;
    }

    /**
     * Gets as newLocation
     *
     * New location from whcih Distributor will leave.
     *
     * @return \Calcinai\Siri\LocationStructureType
     */
    public function getNewLocation()
    {
        return $this->newLocation;
    }

    /**
     * Sets a new newLocation
     *
     * New location from whcih Distributor will leave.
     *
     * @param \Calcinai\Siri\LocationStructureType $newLocation
     * @return self
     */
    public function setNewLocation(\Calcinai\Siri\LocationStructureType $newLocation)
    {
        $this->newLocation = $newLocation;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

