<?php

namespace Calcinai\Siri;

/**
 * Class representing NetworkStructureType
 *
 * Type for Annotated reference to affected Network.
 * XSD Type: NetworkStructure
 */
class NetworkStructureType
{

    /**
     * Identifier of Network.
     *
     * @property string $networkRef
     */
    private $networkRef = null;

    /**
     * Name of network. Can be derived from NetworkRef.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $networkName
     */
    private $networkName = null;

    /**
     * @property string $vehicleMode
     */
    private $vehicleMode = null;

    /**
     * @property string $airSubmode
     */
    private $airSubmode = null;

    /**
     * @property string $busSubmode
     */
    private $busSubmode = null;

    /**
     * @property string $coachSubmode
     */
    private $coachSubmode = null;

    /**
     * @property string $metroSubmode
     */
    private $metroSubmode = null;

    /**
     * @property string $railSubmode
     */
    private $railSubmode = null;

    /**
     * @property string $tramSubmode
     */
    private $tramSubmode = null;

    /**
     * @property string $waterSubmode
     */
    private $waterSubmode = null;

    /**
     * @property string $accessMode
     */
    private $accessMode = null;

    /**
     * Gets as networkRef
     *
     * Identifier of Network.
     *
     * @return string
     */
    public function getNetworkRef()
    {
        return $this->networkRef;
    }

    /**
     * Sets a new networkRef
     *
     * Identifier of Network.
     *
     * @param string $networkRef
     * @return self
     */
    public function setNetworkRef($networkRef)
    {
        $this->networkRef = $networkRef;
        return $this;
    }

    /**
     * Gets as networkName
     *
     * Name of network. Can be derived from NetworkRef.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getNetworkName()
    {
        return $this->networkName;
    }

    /**
     * Sets a new networkName
     *
     * Name of network. Can be derived from NetworkRef.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $networkName
     * @return self
     */
    public function setNetworkName(\Calcinai\Siri\NaturalLanguageStringStructureType $networkName)
    {
        $this->networkName = $networkName;
        return $this;
    }

    /**
     * Gets as vehicleMode
     *
     * @return string
     */
    public function getVehicleMode()
    {
        return $this->vehicleMode;
    }

    /**
     * Sets a new vehicleMode
     *
     * @param string $vehicleMode
     * @return self
     */
    public function setVehicleMode($vehicleMode)
    {
        $this->vehicleMode = $vehicleMode;
        return $this;
    }

    /**
     * Gets as airSubmode
     *
     * @return string
     */
    public function getAirSubmode()
    {
        return $this->airSubmode;
    }

    /**
     * Sets a new airSubmode
     *
     * @param string $airSubmode
     * @return self
     */
    public function setAirSubmode($airSubmode)
    {
        $this->airSubmode = $airSubmode;
        return $this;
    }

    /**
     * Gets as busSubmode
     *
     * @return string
     */
    public function getBusSubmode()
    {
        return $this->busSubmode;
    }

    /**
     * Sets a new busSubmode
     *
     * @param string $busSubmode
     * @return self
     */
    public function setBusSubmode($busSubmode)
    {
        $this->busSubmode = $busSubmode;
        return $this;
    }

    /**
     * Gets as coachSubmode
     *
     * @return string
     */
    public function getCoachSubmode()
    {
        return $this->coachSubmode;
    }

    /**
     * Sets a new coachSubmode
     *
     * @param string $coachSubmode
     * @return self
     */
    public function setCoachSubmode($coachSubmode)
    {
        $this->coachSubmode = $coachSubmode;
        return $this;
    }

    /**
     * Gets as metroSubmode
     *
     * @return string
     */
    public function getMetroSubmode()
    {
        return $this->metroSubmode;
    }

    /**
     * Sets a new metroSubmode
     *
     * @param string $metroSubmode
     * @return self
     */
    public function setMetroSubmode($metroSubmode)
    {
        $this->metroSubmode = $metroSubmode;
        return $this;
    }

    /**
     * Gets as railSubmode
     *
     * @return string
     */
    public function getRailSubmode()
    {
        return $this->railSubmode;
    }

    /**
     * Sets a new railSubmode
     *
     * @param string $railSubmode
     * @return self
     */
    public function setRailSubmode($railSubmode)
    {
        $this->railSubmode = $railSubmode;
        return $this;
    }

    /**
     * Gets as tramSubmode
     *
     * @return string
     */
    public function getTramSubmode()
    {
        return $this->tramSubmode;
    }

    /**
     * Sets a new tramSubmode
     *
     * @param string $tramSubmode
     * @return self
     */
    public function setTramSubmode($tramSubmode)
    {
        $this->tramSubmode = $tramSubmode;
        return $this;
    }

    /**
     * Gets as waterSubmode
     *
     * @return string
     */
    public function getWaterSubmode()
    {
        return $this->waterSubmode;
    }

    /**
     * Sets a new waterSubmode
     *
     * @param string $waterSubmode
     * @return self
     */
    public function setWaterSubmode($waterSubmode)
    {
        $this->waterSubmode = $waterSubmode;
        return $this;
    }

    /**
     * Gets as accessMode
     *
     * @return string
     */
    public function getAccessMode()
    {
        return $this->accessMode;
    }

    /**
     * Sets a new accessMode
     *
     * @param string $accessMode
     * @return self
     */
    public function setAccessMode($accessMode)
    {
        $this->accessMode = $accessMode;
        return $this;
    }


}

