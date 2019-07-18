<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionTimetableRequestStructureType
 *
 * Type for Request for Connection Timetable Servcie
 * XSD Type: ConnectionTimetableRequestStructure
 */
class ConnectionTimetableRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Earliest and latest time. If absent, default to the data horizon of the service
     *
     * @property \Calcinai\Siri\ClosedTimestampRangeStructureType $arrivalWindow
     */
    private $arrivalWindow = null;

    /**
     * Connection point for which data is to be supplied.
     *
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * Feeder line for which data is to be supplied.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Feeder direction for which data is to be supplied.
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
     * Gets as arrivalWindow
     *
     * Earliest and latest time. If absent, default to the data horizon of the service
     *
     * @return \Calcinai\Siri\ClosedTimestampRangeStructureType
     */
    public function getArrivalWindow()
    {
        return $this->arrivalWindow;
    }

    /**
     * Sets a new arrivalWindow
     *
     * Earliest and latest time. If absent, default to the data horizon of the service
     *
     * @param \Calcinai\Siri\ClosedTimestampRangeStructureType $arrivalWindow
     * @return self
     */
    public function setArrivalWindow(\Calcinai\Siri\ClosedTimestampRangeStructureType $arrivalWindow)
    {
        $this->arrivalWindow = $arrivalWindow;
        return $this;
    }

    /**
     * Gets as connectionLinkRef
     *
     * Connection point for which data is to be supplied.
     *
     * @return string
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * Connection point for which data is to be supplied.
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Feeder line for which data is to be supplied.
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
     * Feeder line for which data is to be supplied.
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
     * Feeder direction for which data is to be supplied.
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
     * Feeder direction for which data is to be supplied.
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


}

