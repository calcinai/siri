<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedNetworkStructureType
 *
 * Type for information about the parts of the network affected by an incident. If not explclitly overrided Modes and submodes will be defaulted to any values present in the general Context.
 * XSD Type: AffectedNetworkStructure
 */
class AffectedNetworkStructureType
{

    /**
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @property \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     */
    private $affectedOperator = [
        
    ];

    /**
     * Network of affected line. If absent, may be taken from context.
     *
     * @property string $networkRef
     */
    private $networkRef = null;

    /**
     * Name of Network.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $networkName
     */
    private $networkName = null;

    /**
     * Textual description of overall routes affected. Should correspond to any structured description in the AffectedLines element.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $routesAffected
     */
    private $routesAffected = null;

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
     * All lines in the network are affected.
     *
     * @property string $allLines
     */
    private $allLines = null;

    /**
     * Only some routes are affected, line level information not available. See the AffectedRoutes element for textual description.
     *
     * @property string $selectedRoutes
     */
    private $selectedRoutes = null;

    /**
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @property \Calcinai\Siri\Objects\AffectedLineStructureType[] $affectedLine
     */
    private $affectedLine = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator
     */
    public function addToAffectedOperator(\Calcinai\Siri\Objects\AffectedOperatorStructureType $affectedOperator)
    {
        $this->affectedOperator[] = $affectedOperator;
        return $this;
    }

    /**
     * isset affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedOperator($index)
    {
        return isset($this->affectedOperator[$index]);
    }

    /**
     * unset affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedOperator($index)
    {
        unset($this->affectedOperator[$index]);
    }

    /**
     * Gets as affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @return \Calcinai\Siri\Objects\AffectedOperatorStructureType[]
     */
    public function getAffectedOperator()
    {
        return $this->affectedOperator;
    }

    /**
     * Sets a new affectedOperator
     *
     * Operators of lines affected by incident. Overrides any value specified for (i) General Context.
     *
     * @param \Calcinai\Siri\Objects\AffectedOperatorStructureType[] $affectedOperator
     * @return self
     */
    public function setAffectedOperator(array $affectedOperator)
    {
        $this->affectedOperator = $affectedOperator;
        return $this;
    }

    /**
     * Gets as networkRef
     *
     * Network of affected line. If absent, may be taken from context.
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
     * Network of affected line. If absent, may be taken from context.
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
     * Name of Network.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getNetworkName()
    {
        return $this->networkName;
    }

    /**
     * Sets a new networkName
     *
     * Name of Network.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $networkName
     * @return self
     */
    public function setNetworkName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $networkName)
    {
        $this->networkName = $networkName;
        return $this;
    }

    /**
     * Gets as routesAffected
     *
     * Textual description of overall routes affected. Should correspond to any structured description in the AffectedLines element.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getRoutesAffected()
    {
        return $this->routesAffected;
    }

    /**
     * Sets a new routesAffected
     *
     * Textual description of overall routes affected. Should correspond to any structured description in the AffectedLines element.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $routesAffected
     * @return self
     */
    public function setRoutesAffected(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $routesAffected)
    {
        $this->routesAffected = $routesAffected;
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

    /**
     * Gets as allLines
     *
     * All lines in the network are affected.
     *
     * @return string
     */
    public function getAllLines()
    {
        return $this->allLines;
    }

    /**
     * Sets a new allLines
     *
     * All lines in the network are affected.
     *
     * @param string $allLines
     * @return self
     */
    public function setAllLines($allLines)
    {
        $this->allLines = $allLines;
        return $this;
    }

    /**
     * Gets as selectedRoutes
     *
     * Only some routes are affected, line level information not available. See the AffectedRoutes element for textual description.
     *
     * @return string
     */
    public function getSelectedRoutes()
    {
        return $this->selectedRoutes;
    }

    /**
     * Sets a new selectedRoutes
     *
     * Only some routes are affected, line level information not available. See the AffectedRoutes element for textual description.
     *
     * @param string $selectedRoutes
     * @return self
     */
    public function setSelectedRoutes($selectedRoutes)
    {
        $this->selectedRoutes = $selectedRoutes;
        return $this;
    }

    /**
     * Adds as affectedLine
     *
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedLineStructureType $affectedLine
     */
    public function addToAffectedLine(\Calcinai\Siri\Objects\AffectedLineStructureType $affectedLine)
    {
        $this->affectedLine[] = $affectedLine;
        return $this;
    }

    /**
     * isset affectedLine
     *
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedLine($index)
    {
        return isset($this->affectedLine[$index]);
    }

    /**
     * unset affectedLine
     *
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedLine($index)
    {
        unset($this->affectedLine[$index]);
    }

    /**
     * Gets as affectedLine
     *
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @return \Calcinai\Siri\Objects\AffectedLineStructureType[]
     */
    public function getAffectedLine()
    {
        return $this->affectedLine;
    }

    /**
     * Sets a new affectedLine
     *
     * Information about the indvidual lines in the network that are affected. If not explclitly overrided Modes and submodes will be defaulted to any values present (i) in the AffectedNetwork (ii) In the general Context.
     *
     * @param \Calcinai\Siri\Objects\AffectedLineStructureType[] $affectedLine
     * @return self
     */
    public function setAffectedLine(array $affectedLine)
    {
        $this->affectedLine = $affectedLine;
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

