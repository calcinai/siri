<?php

namespace Calcinai\Siri;

/**
 * Class representing AnnotatedStopPointStructureType
 *
 * Sumamry information about a stop.
 * XSD Type: AnnotatedStopPointStructure
 */
class AnnotatedStopPointStructureType
{

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property bool $timingPoint
     */
    private $timingPoint = null;

    /**
     * Whether real tiem data is availabel for the stop. Default is true.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Name of stop point.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $stopName
     */
    private $stopName = null;

    /**
     * Service features of stop.
     *
     * @property \Calcinai\Siri\AnnotatedStopPointStructureType\FeaturesAType $features
     */
    private $features = null;

    /**
     * lines that use stop
     *
     * @property string[] $lines
     */
    private $lines = null;

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as timingPoint
     *
     * @return bool
     */
    public function getTimingPoint()
    {
        return $this->timingPoint;
    }

    /**
     * Sets a new timingPoint
     *
     * @param bool $timingPoint
     * @return self
     */
    public function setTimingPoint($timingPoint)
    {
        $this->timingPoint = $timingPoint;
        return $this;
    }

    /**
     * Gets as monitored
     *
     * Whether real tiem data is availabel for the stop. Default is true.
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
     * Whether real tiem data is availabel for the stop. Default is true.
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
     * Gets as stopName
     *
     * Name of stop point.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getStopName()
    {
        return $this->stopName;
    }

    /**
     * Sets a new stopName
     *
     * Name of stop point.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $stopName
     * @return self
     */
    public function setStopName(\Calcinai\Siri\NaturalLanguageStringStructureType $stopName)
    {
        $this->stopName = $stopName;
        return $this;
    }

    /**
     * Gets as features
     *
     * Service features of stop.
     *
     * @return \Calcinai\Siri\AnnotatedStopPointStructureType\FeaturesAType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Service features of stop.
     *
     * @param \Calcinai\Siri\AnnotatedStopPointStructureType\FeaturesAType $features
     * @return self
     */
    public function setFeatures(\Calcinai\Siri\AnnotatedStopPointStructureType\FeaturesAType $features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Adds as lineRef
     *
     * lines that use stop
     *
     * @return self
     * @param string $lineRef
     */
    public function addToLines($lineRef)
    {
        $this->lines[] = $lineRef;
        return $this;
    }

    /**
     * isset lines
     *
     * lines that use stop
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLines($index)
    {
        return isset($this->lines[$index]);
    }

    /**
     * unset lines
     *
     * lines that use stop
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLines($index)
    {
        unset($this->lines[$index]);
    }

    /**
     * Gets as lines
     *
     * lines that use stop
     *
     * @return string[]
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * Sets a new lines
     *
     * lines that use stop
     *
     * @param string $lines
     * @return self
     */
    public function setLines(array $lines)
    {
        $this->lines = $lines;
        return $this;
    }


}

