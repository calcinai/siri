<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopTimetableRequestStructureType
 *
 * Service Request Type for Stop Timetables
 * XSD Type: StopTimetableRequestStructure
 */
class StopTimetableRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Earliest and latest departure time. If absent, default to the data horizon of the service.
     *
     * @property \Calcinai\Siri\Objects\ClosedTimestampRangeStructureType $departureWindow
     */
    private $departureWindow = null;

    /**
     * The stop monitoring point about which data is requested. May be a stop point, timing point or other display point.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Filter the results to include only data for journeys for the given line.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Filter the results to include only data for journeys running in a specific relative direction, for example, "inbound" or "outbound".
     *
     * @property string $directionRef
     */
    private $directionRef = null;

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
     * Gets as departureWindow
     *
     * Earliest and latest departure time. If absent, default to the data horizon of the service.
     *
     * @return \Calcinai\Siri\Objects\ClosedTimestampRangeStructureType
     */
    public function getDepartureWindow()
    {
        return $this->departureWindow;
    }

    /**
     * Sets a new departureWindow
     *
     * Earliest and latest departure time. If absent, default to the data horizon of the service.
     *
     * @param \Calcinai\Siri\Objects\ClosedTimestampRangeStructureType $departureWindow
     * @return self
     */
    public function setDepartureWindow(\Calcinai\Siri\Objects\ClosedTimestampRangeStructureType $departureWindow)
    {
        $this->departureWindow = $departureWindow;
        return $this;
    }

    /**
     * Gets as monitoringRef
     *
     * The stop monitoring point about which data is requested. May be a stop point, timing point or other display point.
     *
     * @return string
     */
    public function getMonitoringRef()
    {
        return $this->monitoringRef;
    }

    /**
     * Sets a new monitoringRef
     *
     * The stop monitoring point about which data is requested. May be a stop point, timing point or other display point.
     *
     * @param string $monitoringRef
     * @return self
     */
    public function setMonitoringRef($monitoringRef)
    {
        $this->monitoringRef = $monitoringRef;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Filter the results to include only data for journeys for the given line.
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
     * Filter the results to include only data for journeys for the given line.
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
     * Gets as directionRef
     *
     * Filter the results to include only data for journeys running in a specific relative direction, for example, "inbound" or "outbound".
     *
     * @return string
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Filter the results to include only data for journeys running in a specific relative direction, for example, "inbound" or "outbound".
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef($directionRef)
    {
        $this->directionRef = $directionRef;
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

