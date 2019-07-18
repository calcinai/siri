<?php

namespace Calcinai\Siri;

/**
 * Class representing EasementsStructureType
 *
 * Type for easement info.
 * XSD Type: EasementsStructure
 */
class EasementsStructureType
{

    /**
     * Ticket restriction conditiosn in effect. TPEG pti table pti25.
     *
     * @property string $ticketRestrictions
     */
    private $ticketRestrictions = null;

    /**
     * Description of fare exceptions allowed because of disruption.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $easement
     */
    private $easement = null;

    /**
     * Identifier of a fare exceptions code allowed because of the disruption.
     *
     * @property \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $easementRef
     */
    private $easementRef = null;

    /**
     * Gets as ticketRestrictions
     *
     * Ticket restriction conditiosn in effect. TPEG pti table pti25.
     *
     * @return string
     */
    public function getTicketRestrictions()
    {
        return $this->ticketRestrictions;
    }

    /**
     * Sets a new ticketRestrictions
     *
     * Ticket restriction conditiosn in effect. TPEG pti table pti25.
     *
     * @param string $ticketRestrictions
     * @return self
     */
    public function setTicketRestrictions($ticketRestrictions)
    {
        $this->ticketRestrictions = $ticketRestrictions;
        return $this;
    }

    /**
     * Gets as easement
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getEasement()
    {
        return $this->easement;
    }

    /**
     * Sets a new easement
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $easement
     * @return self
     */
    public function setEasement(\Calcinai\Siri\NaturalLanguageStringStructureType $easement)
    {
        $this->easement = $easement;
        return $this;
    }

    /**
     * Gets as easementRef
     *
     * Identifier of a fare exceptions code allowed because of the disruption.
     *
     * @return \Calcinai\Siri\NaturalLanguagePlaceNameStructureType
     */
    public function getEasementRef()
    {
        return $this->easementRef;
    }

    /**
     * Sets a new easementRef
     *
     * Identifier of a fare exceptions code allowed because of the disruption.
     *
     * @param \Calcinai\Siri\NaturalLanguagePlaceNameStructureType $easementRef
     * @return self
     */
    public function setEasementRef(\Calcinai\Siri\NaturalLanguagePlaceNameStructureType $easementRef)
    {
        $this->easementRef = $easementRef;
        return $this;
    }


}

