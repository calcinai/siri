<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $changeNote
     */
    private $changeNote = null;

    /**
     * New location from whcih Distributor will leave.
     *
     * @property \Calcinai\Siri\Objects\LocationStructureType $newLocation
     */
    private $newLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as changeNote
     *
     * Description of the revised stopping position of the Distributor (fetcher) in the connection zone.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $changeNote
     * @return self
     */
    public function setChangeNote(\Calcinai\Siri\Objects\NaturalLanguagePlaceNameStructureType $changeNote)
    {
        $this->changeNote = $changeNote;
        return $this;
    }

    /**
     * Gets as newLocation
     *
     * New location from whcih Distributor will leave.
     *
     * @return \Calcinai\Siri\Objects\LocationStructureType
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
     * @param \Calcinai\Siri\Objects\LocationStructureType $newLocation
     * @return self
     */
    public function setNewLocation(\Calcinai\Siri\Objects\LocationStructureType $newLocation)
    {
        $this->newLocation = $newLocation;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

