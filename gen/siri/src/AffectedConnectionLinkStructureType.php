<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AffectedConnectionLinkStructureType
 *
 * Type for a reference Information about a connection link from a given stop.
 * XSD Type: AffectedConnectionLinkStructure
 */
class AffectedConnectionLinkStructureType
{

    /**
     * Identifier of Conenction Link.
     *
     * @property string[] $connectionLinkRef
     */
    private $connectionLinkRef = [
        
    ];

    /**
     * Name of connection.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectionName
     */
    private $connectionName = null;

    /**
     * @property mixed $allLines
     */
    private $allLines = null;

    /**
     * @property string[] $lineRef
     */
    private $lineRef = [
        
    ];

    /**
     * Identifier of other connecting stop point of a connection. If blank, both feeder and distributor vehicles go to same stop.Reference to a stop point.
     *
     * @property string $connectingStopPointRef
     */
    private $connectingStopPointRef = null;

    /**
     * Name of other Connecting stop point of a connection. Derivable from StopRef
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectingStopPointName
     */
    private $connectingStopPointName = null;

    /**
     * Zone in which Connecting stop lies.
     *
     * @property string $connectingZoneRef
     */
    private $connectingZoneRef = null;

    /**
     * Direction of interchange. Default is both.
     *
     * @property string $connectionDirection
     */
    private $connectionDirection = null;

    /**
     * detailed path nodes affected by
     *
     * @property \Calcinai\Siri\Objects\AffectedPathLinkStructureType[] $affectedPathLink
     */
    private $affectedPathLink = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Adds as connectionLinkRef
     *
     * Identifier of Conenction Link.
     *
     * @return self
     * @param string $connectionLinkRef
     */
    public function addToConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef[] = $connectionLinkRef;
        return $this;
    }

    /**
     * isset connectionLinkRef
     *
     * Identifier of Conenction Link.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLinkRef($index)
    {
        return isset($this->connectionLinkRef[$index]);
    }

    /**
     * unset connectionLinkRef
     *
     * Identifier of Conenction Link.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLinkRef($index)
    {
        unset($this->connectionLinkRef[$index]);
    }

    /**
     * Gets as connectionLinkRef
     *
     * Identifier of Conenction Link.
     *
     * @return string[]
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * Identifier of Conenction Link.
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef(array $connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }

    /**
     * Gets as connectionName
     *
     * Name of connection.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getConnectionName()
    {
        return $this->connectionName;
    }

    /**
     * Sets a new connectionName
     *
     * Name of connection.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectionName
     * @return self
     */
    public function setConnectionName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectionName)
    {
        $this->connectionName = $connectionName;
        return $this;
    }

    /**
     * Gets as allLines
     *
     * @return mixed
     */
    public function getAllLines()
    {
        return $this->allLines;
    }

    /**
     * Sets a new allLines
     *
     * @param mixed $allLines
     * @return self
     */
    public function setAllLines($allLines)
    {
        $this->allLines = $allLines;
        return $this;
    }

    /**
     * Adds as lineRef
     *
     * @return self
     * @param string $lineRef
     */
    public function addToLineRef($lineRef)
    {
        $this->lineRef[] = $lineRef;
        return $this;
    }

    /**
     * isset lineRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineRef($index)
    {
        return isset($this->lineRef[$index]);
    }

    /**
     * unset lineRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineRef($index)
    {
        unset($this->lineRef[$index]);
    }

    /**
     * Gets as lineRef
     *
     * @return string[]
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef(array $lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as connectingStopPointRef
     *
     * Identifier of other connecting stop point of a connection. If blank, both feeder and distributor vehicles go to same stop.Reference to a stop point.
     *
     * @return string
     */
    public function getConnectingStopPointRef()
    {
        return $this->connectingStopPointRef;
    }

    /**
     * Sets a new connectingStopPointRef
     *
     * Identifier of other connecting stop point of a connection. If blank, both feeder and distributor vehicles go to same stop.Reference to a stop point.
     *
     * @param string $connectingStopPointRef
     * @return self
     */
    public function setConnectingStopPointRef($connectingStopPointRef)
    {
        $this->connectingStopPointRef = $connectingStopPointRef;
        return $this;
    }

    /**
     * Gets as connectingStopPointName
     *
     * Name of other Connecting stop point of a connection. Derivable from StopRef
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getConnectingStopPointName()
    {
        return $this->connectingStopPointName;
    }

    /**
     * Sets a new connectingStopPointName
     *
     * Name of other Connecting stop point of a connection. Derivable from StopRef
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectingStopPointName
     * @return self
     */
    public function setConnectingStopPointName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $connectingStopPointName)
    {
        $this->connectingStopPointName = $connectingStopPointName;
        return $this;
    }

    /**
     * Gets as connectingZoneRef
     *
     * Zone in which Connecting stop lies.
     *
     * @return string
     */
    public function getConnectingZoneRef()
    {
        return $this->connectingZoneRef;
    }

    /**
     * Sets a new connectingZoneRef
     *
     * Zone in which Connecting stop lies.
     *
     * @param string $connectingZoneRef
     * @return self
     */
    public function setConnectingZoneRef($connectingZoneRef)
    {
        $this->connectingZoneRef = $connectingZoneRef;
        return $this;
    }

    /**
     * Gets as connectionDirection
     *
     * Direction of interchange. Default is both.
     *
     * @return string
     */
    public function getConnectionDirection()
    {
        return $this->connectionDirection;
    }

    /**
     * Sets a new connectionDirection
     *
     * Direction of interchange. Default is both.
     *
     * @param string $connectionDirection
     * @return self
     */
    public function setConnectionDirection($connectionDirection)
    {
        $this->connectionDirection = $connectionDirection;
        return $this;
    }

    /**
     * Adds as affectedPathLink
     *
     * detailed path nodes affected by
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectedPathLinkStructureType $affectedPathLink
     */
    public function addToAffectedPathLink(\Calcinai\Siri\Objects\AffectedPathLinkStructureType $affectedPathLink)
    {
        $this->affectedPathLink[] = $affectedPathLink;
        return $this;
    }

    /**
     * isset affectedPathLink
     *
     * detailed path nodes affected by
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedPathLink($index)
    {
        return isset($this->affectedPathLink[$index]);
    }

    /**
     * unset affectedPathLink
     *
     * detailed path nodes affected by
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedPathLink($index)
    {
        unset($this->affectedPathLink[$index]);
    }

    /**
     * Gets as affectedPathLink
     *
     * detailed path nodes affected by
     *
     * @return \Calcinai\Siri\Objects\AffectedPathLinkStructureType[]
     */
    public function getAffectedPathLink()
    {
        return $this->affectedPathLink;
    }

    /**
     * Sets a new affectedPathLink
     *
     * detailed path nodes affected by
     *
     * @param \Calcinai\Siri\Objects\AffectedPathLinkStructureType[] $affectedPathLink
     * @return self
     */
    public function setAffectedPathLink(array $affectedPathLink)
    {
        $this->affectedPathLink = $affectedPathLink;
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

