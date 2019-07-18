<?php

namespace Calcinai\Siri;

/**
 * Class representing EstimatedVersionFrameStructureType
 *
 * Type for version frame strcuture.
 * XSD Type: EstimatedVersionFrameStructure
 */
class EstimatedVersionFrameStructureType extends AbstractItemStructureType
{

    /**
     * @property string $versionRef
     */
    private $versionRef = null;

    /**
     * @property \Calcinai\Siri\EstimatedVehicleJourney[] $estimatedVehicleJourney
     */
    private $estimatedVehicleJourney = [
        
    ];

    /**
     * Gets as versionRef
     *
     * @return string
     */
    public function getVersionRef()
    {
        return $this->versionRef;
    }

    /**
     * Sets a new versionRef
     *
     * @param string $versionRef
     * @return self
     */
    public function setVersionRef($versionRef)
    {
        $this->versionRef = $versionRef;
        return $this;
    }

    /**
     * Adds as estimatedVehicleJourney
     *
     * @return self
     * @param \Calcinai\Siri\EstimatedVehicleJourney $estimatedVehicleJourney
     */
    public function addToEstimatedVehicleJourney(\Calcinai\Siri\EstimatedVehicleJourney $estimatedVehicleJourney)
    {
        $this->estimatedVehicleJourney[] = $estimatedVehicleJourney;
        return $this;
    }

    /**
     * isset estimatedVehicleJourney
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedVehicleJourney($index)
    {
        return isset($this->estimatedVehicleJourney[$index]);
    }

    /**
     * unset estimatedVehicleJourney
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedVehicleJourney($index)
    {
        unset($this->estimatedVehicleJourney[$index]);
    }

    /**
     * Gets as estimatedVehicleJourney
     *
     * @return \Calcinai\Siri\EstimatedVehicleJourney[]
     */
    public function getEstimatedVehicleJourney()
    {
        return $this->estimatedVehicleJourney;
    }

    /**
     * Sets a new estimatedVehicleJourney
     *
     * @param \Calcinai\Siri\EstimatedVehicleJourney[] $estimatedVehicleJourney
     * @return self
     */
    public function setEstimatedVehicleJourney(array $estimatedVehicleJourney)
    {
        $this->estimatedVehicleJourney = $estimatedVehicleJourney;
        return $this;
    }


}

