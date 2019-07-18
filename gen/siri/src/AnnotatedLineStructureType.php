<?php

namespace Calcinai\Siri;

/**
 * Class representing AnnotatedLineStructureType
 *
 * Summary information about a line type.
 * XSD Type: AnnotatedLineStructure
 */
class AnnotatedLineStructureType
{

    /**
     * Identifier of Line
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Name of line.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $lineName
     */
    private $lineName = null;

    /**
     * Whether the linehas real time info. Default is true.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Destinations to which the line runs.
     *
     * @property \Calcinai\Siri\Destination[] $destinations
     */
    private $destinations = null;

    /**
     * Directions for the line.
     *
     * @property \Calcinai\Siri\Direction[] $directions
     */
    private $directions = null;

    /**
     * Gets as lineRef
     *
     * Identifier of Line
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Identifier of Line
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as lineName
     *
     * Name of line.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getLineName()
    {
        return $this->lineName;
    }

    /**
     * Sets a new lineName
     *
     * Name of line.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $lineName
     * @return self
     */
    public function setLineName(\Calcinai\Siri\NaturalLanguageStringStructureType $lineName)
    {
        $this->lineName = $lineName;
        return $this;
    }

    /**
     * Gets as monitored
     *
     * Whether the linehas real time info. Default is true.
     *
     * @return bool
     */
    public function getMonitored()
    {
        return $this->monitored;
    }

    /**
     * Sets a new monitored
     *
     * Whether the linehas real time info. Default is true.
     *
     * @param bool $monitored
     * @return self
     */
    public function setMonitored($monitored)
    {
        $this->monitored = $monitored;
        return $this;
    }

    /**
     * Adds as destination
     *
     * Destinations to which the line runs.
     *
     * @return self
     * @param \Calcinai\Siri\Destination $destination
     */
    public function addToDestinations(\Calcinai\Siri\Destination $destination)
    {
        $this->destinations[] = $destination;
        return $this;
    }

    /**
     * isset destinations
     *
     * Destinations to which the line runs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinations($index)
    {
        return isset($this->destinations[$index]);
    }

    /**
     * unset destinations
     *
     * Destinations to which the line runs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinations($index)
    {
        unset($this->destinations[$index]);
    }

    /**
     * Gets as destinations
     *
     * Destinations to which the line runs.
     *
     * @return \Calcinai\Siri\Destination[]
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Sets a new destinations
     *
     * Destinations to which the line runs.
     *
     * @param \Calcinai\Siri\Destination[] $destinations
     * @return self
     */
    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;
        return $this;
    }

    /**
     * Adds as direction
     *
     * Directions for the line.
     *
     * @return self
     * @param \Calcinai\Siri\Direction $direction
     */
    public function addToDirections(\Calcinai\Siri\Direction $direction)
    {
        $this->directions[] = $direction;
        return $this;
    }

    /**
     * isset directions
     *
     * Directions for the line.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDirections($index)
    {
        return isset($this->directions[$index]);
    }

    /**
     * unset directions
     *
     * Directions for the line.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDirections($index)
    {
        unset($this->directions[$index]);
    }

    /**
     * Gets as directions
     *
     * Directions for the line.
     *
     * @return \Calcinai\Siri\Direction[]
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * Sets a new directions
     *
     * Directions for the line.
     *
     * @param \Calcinai\Siri\Direction[] $directions
     * @return self
     */
    public function setDirections(array $directions)
    {
        $this->directions = $directions;
        return $this;
    }


}

