<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedInterchangeStructureType
 *
 * Information about a interchange at link from a given stop.
 * XSD Type: AffectedInterchangeStructure
 */
class AffectedInterchangeStructureType
{

    /**
     * Identfier of Journey Interchange.
     *
     * @property string $interchangeRef
     */
    private $interchangeRef = null;

    /**
     * Identifier of stop point of a stop at which vehicle journey meets for interchange If blank, same stop as destination.Reference to a stop point.
     *
     * @property string $interchangeStopPointRef
     */
    private $interchangeStopPointRef = null;

    /**
     * Name of other Connecting stop point of a connection, . Derivable from InterchangeStopRef
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $interchangeStopPointName
     */
    private $interchangeStopPointName = null;

    /**
     * Reference to conencting Vehicle journey affected by interchange.
     *
     * @property string $connectingVehicleJourneyRef
     */
    private $connectingVehicleJourneyRef = null;

    /**
     * @property string $interchangeStatusType
     */
    private $interchangeStatusType = null;

    /**
     * Identifier of Conenction Link.
     *
     * @property \Calcinai\Siri\AffectedConnectionLinkStructureType[] $connectionLink
     */
    private $connectionLink = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as interchangeRef
     *
     * Identfier of Journey Interchange.
     *
     * @return string
     */
    public function getInterchangeRef()
    {
        return $this->interchangeRef;
    }

    /**
     * Sets a new interchangeRef
     *
     * Identfier of Journey Interchange.
     *
     * @param string $interchangeRef
     * @return self
     */
    public function setInterchangeRef($interchangeRef)
    {
        $this->interchangeRef = $interchangeRef;
        return $this;
    }

    /**
     * Gets as interchangeStopPointRef
     *
     * Identifier of stop point of a stop at which vehicle journey meets for interchange If blank, same stop as destination.Reference to a stop point.
     *
     * @return string
     */
    public function getInterchangeStopPointRef()
    {
        return $this->interchangeStopPointRef;
    }

    /**
     * Sets a new interchangeStopPointRef
     *
     * Identifier of stop point of a stop at which vehicle journey meets for interchange If blank, same stop as destination.Reference to a stop point.
     *
     * @param string $interchangeStopPointRef
     * @return self
     */
    public function setInterchangeStopPointRef($interchangeStopPointRef)
    {
        $this->interchangeStopPointRef = $interchangeStopPointRef;
        return $this;
    }

    /**
     * Gets as interchangeStopPointName
     *
     * Name of other Connecting stop point of a connection, . Derivable from InterchangeStopRef
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getInterchangeStopPointName()
    {
        return $this->interchangeStopPointName;
    }

    /**
     * Sets a new interchangeStopPointName
     *
     * Name of other Connecting stop point of a connection, . Derivable from InterchangeStopRef
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $interchangeStopPointName
     * @return self
     */
    public function setInterchangeStopPointName(\Calcinai\Siri\NaturalLanguageStringStructureType $interchangeStopPointName)
    {
        $this->interchangeStopPointName = $interchangeStopPointName;
        return $this;
    }

    /**
     * Gets as connectingVehicleJourneyRef
     *
     * Reference to conencting Vehicle journey affected by interchange.
     *
     * @return string
     */
    public function getConnectingVehicleJourneyRef()
    {
        return $this->connectingVehicleJourneyRef;
    }

    /**
     * Sets a new connectingVehicleJourneyRef
     *
     * Reference to conencting Vehicle journey affected by interchange.
     *
     * @param string $connectingVehicleJourneyRef
     * @return self
     */
    public function setConnectingVehicleJourneyRef($connectingVehicleJourneyRef)
    {
        $this->connectingVehicleJourneyRef = $connectingVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as interchangeStatusType
     *
     * @return string
     */
    public function getInterchangeStatusType()
    {
        return $this->interchangeStatusType;
    }

    /**
     * Sets a new interchangeStatusType
     *
     * @param string $interchangeStatusType
     * @return self
     */
    public function setInterchangeStatusType($interchangeStatusType)
    {
        $this->interchangeStatusType = $interchangeStatusType;
        return $this;
    }

    /**
     * Adds as connectionLink
     *
     * Identifier of Conenction Link.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedConnectionLinkStructureType $connectionLink
     */
    public function addToConnectionLink(\Calcinai\Siri\AffectedConnectionLinkStructureType $connectionLink)
    {
        $this->connectionLink[] = $connectionLink;
        return $this;
    }

    /**
     * isset connectionLink
     *
     * Identifier of Conenction Link.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLink($index)
    {
        return isset($this->connectionLink[$index]);
    }

    /**
     * unset connectionLink
     *
     * Identifier of Conenction Link.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLink($index)
    {
        unset($this->connectionLink[$index]);
    }

    /**
     * Gets as connectionLink
     *
     * Identifier of Conenction Link.
     *
     * @return \Calcinai\Siri\AffectedConnectionLinkStructureType[]
     */
    public function getConnectionLink()
    {
        return $this->connectionLink;
    }

    /**
     * Sets a new connectionLink
     *
     * Identifier of Conenction Link.
     *
     * @param \Calcinai\Siri\AffectedConnectionLinkStructureType[] $connectionLink
     * @return self
     */
    public function setConnectionLink(array $connectionLink)
    {
        $this->connectionLink = $connectionLink;
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

