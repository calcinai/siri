<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedTimetableRequestStructureType
 *
 * Data type for Service Request Type for Estimated Timetable
 * XSD Type: EstimatedTimetableRequestStructure
 */
class EstimatedTimetableRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Forward duration for which journeys should be included. For subscriptions, this duration is a continuously rolling window from the present time. For immediate requests, this duration is measured from the time of the request.
     *
     * @property \DateInterval $previewInterval
     */
    private $previewInterval = null;

    /**
     * Communicate only differences to the timetable specified by this version of the timetable.
     *
     * @property string $timetableVersionRef
     */
    private $timetableVersionRef = null;

    /**
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @property string[] $operatorRef
     */
    private $operatorRef = [
        
    ];

    /**
     * Filter the results to include only vehicles along the given line(s).
     *
     * @property \Calcinai\Siri\Objects\LineDirectionStructureType[] $lines
     */
    private $lines = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of request. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of request. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as previewInterval
     *
     * Forward duration for which journeys should be included. For subscriptions, this duration is a continuously rolling window from the present time. For immediate requests, this duration is measured from the time of the request.
     *
     * @return \DateInterval
     */
    public function getPreviewInterval()
    {
        return $this->previewInterval;
    }

    /**
     * Sets a new previewInterval
     *
     * Forward duration for which journeys should be included. For subscriptions, this duration is a continuously rolling window from the present time. For immediate requests, this duration is measured from the time of the request.
     *
     * @param \DateInterval $previewInterval
     * @return self
     */
    public function setPreviewInterval(\DateInterval $previewInterval)
    {
        $this->previewInterval = $previewInterval;
        return $this;
    }

    /**
     * Gets as timetableVersionRef
     *
     * Communicate only differences to the timetable specified by this version of the timetable.
     *
     * @return string
     */
    public function getTimetableVersionRef()
    {
        return $this->timetableVersionRef;
    }

    /**
     * Sets a new timetableVersionRef
     *
     * Communicate only differences to the timetable specified by this version of the timetable.
     *
     * @param string $timetableVersionRef
     * @return self
     */
    public function setTimetableVersionRef($timetableVersionRef)
    {
        $this->timetableVersionRef = $timetableVersionRef;
        return $this;
    }

    /**
     * Adds as operatorRef
     *
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @return self
     * @param string $operatorRef
     */
    public function addToOperatorRef($operatorRef)
    {
        $this->operatorRef[] = $operatorRef;
        return $this;
    }

    /**
     * isset operatorRef
     *
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperatorRef($index)
    {
        return isset($this->operatorRef[$index]);
    }

    /**
     * unset operatorRef
     *
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperatorRef($index)
    {
        unset($this->operatorRef[$index]);
    }

    /**
     * Gets as operatorRef
     *
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @return string[]
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Filter the results to include journeys for only the specified operator(s).
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef(array $operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }

    /**
     * Adds as lineDirection
     *
     * Filter the results to include only vehicles along the given line(s).
     *
     * @return self
     * @param \Calcinai\Siri\Objects\LineDirectionStructureType $lineDirection
     */
    public function addToLines(\Calcinai\Siri\Objects\LineDirectionStructureType $lineDirection)
    {
        $this->lines[] = $lineDirection;
        return $this;
    }

    /**
     * isset lines
     *
     * Filter the results to include only vehicles along the given line(s).
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
     * Filter the results to include only vehicles along the given line(s).
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
     * Filter the results to include only vehicles along the given line(s).
     *
     * @return \Calcinai\Siri\Objects\LineDirectionStructureType[]
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * Sets a new lines
     *
     * Filter the results to include only vehicles along the given line(s).
     *
     * @param \Calcinai\Siri\Objects\LineDirectionStructureType[] $lines
     * @return self
     */
    public function setLines(array $lines)
    {
        $this->lines = $lines;
        return $this;
    }

    /**
     * Gets as language
     *
     * Preferred language in which to return text values.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Preferred language in which to return text values.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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

