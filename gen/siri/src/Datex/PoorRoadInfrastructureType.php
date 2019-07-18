<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PoorRoadInfrastructureType
 *
 * Failures or malfunctions of road infrastructure or related equipment that may be of interest or concern to travellers.
 * XSD Type: PoorRoadInfrastructure
 */
class PoorRoadInfrastructureType extends TrafficElementType
{

    /**
     * Failures or malfunctions of road infrastructure or related equipment.
     *
     * @property string $poorRoadInfrastructureType
     */
    private $poorRoadInfrastructureType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\MalfunctioningTrafficControlsType[] $malfunctioningTrafficControls
     */
    private $malfunctioningTrafficControls = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $poorRoadInfrastructureExtension
     */
    private $poorRoadInfrastructureExtension = null;

    /**
     * Gets as poorRoadInfrastructureType
     *
     * Failures or malfunctions of road infrastructure or related equipment.
     *
     * @return string
     */
    public function getPoorRoadInfrastructureType()
    {
        return $this->poorRoadInfrastructureType;
    }

    /**
     * Sets a new poorRoadInfrastructureType
     *
     * Failures or malfunctions of road infrastructure or related equipment.
     *
     * @param string $poorRoadInfrastructureType
     * @return self
     */
    public function setPoorRoadInfrastructureType($poorRoadInfrastructureType)
    {
        $this->poorRoadInfrastructureType = $poorRoadInfrastructureType;
        return $this;
    }

    /**
     * Adds as malfunctioningTrafficControls
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\MalfunctioningTrafficControlsType $malfunctioningTrafficControls
     */
    public function addToMalfunctioningTrafficControls(\Calcinai\Siri\Objects\Datex\MalfunctioningTrafficControlsType $malfunctioningTrafficControls)
    {
        $this->malfunctioningTrafficControls[] = $malfunctioningTrafficControls;
        return $this;
    }

    /**
     * isset malfunctioningTrafficControls
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMalfunctioningTrafficControls($index)
    {
        return isset($this->malfunctioningTrafficControls[$index]);
    }

    /**
     * unset malfunctioningTrafficControls
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMalfunctioningTrafficControls($index)
    {
        unset($this->malfunctioningTrafficControls[$index]);
    }

    /**
     * Gets as malfunctioningTrafficControls
     *
     * @return \Calcinai\Siri\Objects\Datex\MalfunctioningTrafficControlsType[]
     */
    public function getMalfunctioningTrafficControls()
    {
        return $this->malfunctioningTrafficControls;
    }

    /**
     * Sets a new malfunctioningTrafficControls
     *
     * @param \Calcinai\Siri\Objects\Datex\MalfunctioningTrafficControlsType[] $malfunctioningTrafficControls
     * @return self
     */
    public function setMalfunctioningTrafficControls(array $malfunctioningTrafficControls)
    {
        $this->malfunctioningTrafficControls = $malfunctioningTrafficControls;
        return $this;
    }

    /**
     * Gets as poorRoadInfrastructureExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPoorRoadInfrastructureExtension()
    {
        return $this->poorRoadInfrastructureExtension;
    }

    /**
     * Sets a new poorRoadInfrastructureExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $poorRoadInfrastructureExtension
     * @return self
     */
    public function setPoorRoadInfrastructureExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $poorRoadInfrastructureExtension)
    {
        $this->poorRoadInfrastructureExtension = $poorRoadInfrastructureExtension;
        return $this;
    }


}

