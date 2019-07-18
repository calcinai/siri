<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ContextStructureType
 *
 * Common parameters for all situations.
 * XSD Type: ContextStructure
 */
class ContextStructureType
{

    /**
     * Unique identifier of a Country of a Participant who published Situation.
     *
     * @property string $countryRef
     */
    private $countryRef = null;

    /**
     * Unique identifier of system publishing siutuations. If situations from other participants are included in delivery, then ParticipantRef of immediate publisher must be given here.
     *
     * @property string $participantRef
     */
    private $participantRef = null;

    /**
     * Identifier of Common Main locality (In UK NRG Locality Code). Also Derivable from an individual StopRef.
     *
     * @property string $topographicPlaceRef
     */
    private $topographicPlaceRef = null;

    /**
     * Name of locality in which situations apply. Derivable from LocalityRef.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $topographicPlaceName
     */
    private $topographicPlaceName = null;

    /**
     * Default language of text.
     *
     * @property string $defaultLanguage
     */
    private $defaultLanguage = null;

    /**
     * Default context for common properties of Public Transport Situations
     *
     * @property \Calcinai\Siri\Objects\NetworkContextStructureType $networkContext
     */
    private $networkContext = null;

    /**
     * Actions that apply to all situations unless overridden.
     *
     * @property \Calcinai\Siri\Objects\ActionsStructureType $actions
     */
    private $actions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as countryRef
     *
     * Unique identifier of a Country of a Participant who published Situation.
     *
     * @return string
     */
    public function getCountryRef()
    {
        return $this->countryRef;
    }

    /**
     * Sets a new countryRef
     *
     * Unique identifier of a Country of a Participant who published Situation.
     *
     * @param string $countryRef
     * @return self
     */
    public function setCountryRef($countryRef)
    {
        $this->countryRef = $countryRef;
        return $this;
    }

    /**
     * Gets as participantRef
     *
     * Unique identifier of system publishing siutuations. If situations from other participants are included in delivery, then ParticipantRef of immediate publisher must be given here.
     *
     * @return string
     */
    public function getParticipantRef()
    {
        return $this->participantRef;
    }

    /**
     * Sets a new participantRef
     *
     * Unique identifier of system publishing siutuations. If situations from other participants are included in delivery, then ParticipantRef of immediate publisher must be given here.
     *
     * @param string $participantRef
     * @return self
     */
    public function setParticipantRef($participantRef)
    {
        $this->participantRef = $participantRef;
        return $this;
    }

    /**
     * Gets as topographicPlaceRef
     *
     * Identifier of Common Main locality (In UK NRG Locality Code). Also Derivable from an individual StopRef.
     *
     * @return string
     */
    public function getTopographicPlaceRef()
    {
        return $this->topographicPlaceRef;
    }

    /**
     * Sets a new topographicPlaceRef
     *
     * Identifier of Common Main locality (In UK NRG Locality Code). Also Derivable from an individual StopRef.
     *
     * @param string $topographicPlaceRef
     * @return self
     */
    public function setTopographicPlaceRef($topographicPlaceRef)
    {
        $this->topographicPlaceRef = $topographicPlaceRef;
        return $this;
    }

    /**
     * Gets as topographicPlaceName
     *
     * Name of locality in which situations apply. Derivable from LocalityRef.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getTopographicPlaceName()
    {
        return $this->topographicPlaceName;
    }

    /**
     * Sets a new topographicPlaceName
     *
     * Name of locality in which situations apply. Derivable from LocalityRef.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $topographicPlaceName
     * @return self
     */
    public function setTopographicPlaceName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $topographicPlaceName)
    {
        $this->topographicPlaceName = $topographicPlaceName;
        return $this;
    }

    /**
     * Gets as defaultLanguage
     *
     * Default language of text.
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets a new defaultLanguage
     *
     * Default language of text.
     *
     * @param string $defaultLanguage
     * @return self
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * Gets as networkContext
     *
     * Default context for common properties of Public Transport Situations
     *
     * @return \Calcinai\Siri\Objects\NetworkContextStructureType
     */
    public function getNetworkContext()
    {
        return $this->networkContext;
    }

    /**
     * Sets a new networkContext
     *
     * Default context for common properties of Public Transport Situations
     *
     * @param \Calcinai\Siri\Objects\NetworkContextStructureType $networkContext
     * @return self
     */
    public function setNetworkContext(\Calcinai\Siri\Objects\NetworkContextStructureType $networkContext)
    {
        $this->networkContext = $networkContext;
        return $this;
    }

    /**
     * Gets as actions
     *
     * Actions that apply to all situations unless overridden.
     *
     * @return \Calcinai\Siri\Objects\ActionsStructureType
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Sets a new actions
     *
     * Actions that apply to all situations unless overridden.
     *
     * @param \Calcinai\Siri\Objects\ActionsStructureType $actions
     * @return self
     */
    public function setActions(\Calcinai\Siri\Objects\ActionsStructureType $actions)
    {
        $this->actions = $actions;
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

