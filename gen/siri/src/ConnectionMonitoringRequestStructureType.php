<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringRequestStructureType
 *
 * Type for Request Connection Monitoring Service.
 * XSD Type: ConnectionMonitoringRequestStructure
 */
class ConnectionMonitoringRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Forward duration for which events should be included, that is, interval before predicted arrival at the stop for which to include events: only journeys which will arrive or depart within this time span will be returned.
     *
     * @property \DateInterval $previewInterval
     */
    private $previewInterval = null;

    /**
     * Connection Link for which data is to be supplied.
     *
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * Return only journeys for the specified time
     *
     * @property \Calcinai\Siri\Objects\ConnectingTimeFilterStructureType $connectingTimeFilter
     */
    private $connectingTimeFilter = null;

    /**
     * Return only the specified journeys
     *
     * @property \Calcinai\Siri\Objects\ConnectingJourneyFilterStructureType[] $connectingJourneyFilter
     */
    private $connectingJourneyFilter = [
        
    ];

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
     * Forward duration for which events should be included, that is, interval before predicted arrival at the stop for which to include events: only journeys which will arrive or depart within this time span will be returned.
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
     * Forward duration for which events should be included, that is, interval before predicted arrival at the stop for which to include events: only journeys which will arrive or depart within this time span will be returned.
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
     * Gets as connectionLinkRef
     *
     * Connection Link for which data is to be supplied.
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
     * Connection Link for which data is to be supplied.
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
     * Gets as connectingTimeFilter
     *
     * Return only journeys for the specified time
     *
     * @return \Calcinai\Siri\Objects\ConnectingTimeFilterStructureType
     */
    public function getConnectingTimeFilter()
    {
        return $this->connectingTimeFilter;
    }

    /**
     * Sets a new connectingTimeFilter
     *
     * Return only journeys for the specified time
     *
     * @param \Calcinai\Siri\Objects\ConnectingTimeFilterStructureType $connectingTimeFilter
     * @return self
     */
    public function setConnectingTimeFilter(\Calcinai\Siri\Objects\ConnectingTimeFilterStructureType $connectingTimeFilter)
    {
        $this->connectingTimeFilter = $connectingTimeFilter;
        return $this;
    }

    /**
     * Adds as connectingJourneyFilter
     *
     * Return only the specified journeys
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectingJourneyFilterStructureType $connectingJourneyFilter
     */
    public function addToConnectingJourneyFilter(\Calcinai\Siri\Objects\ConnectingJourneyFilterStructureType $connectingJourneyFilter)
    {
        $this->connectingJourneyFilter[] = $connectingJourneyFilter;
        return $this;
    }

    /**
     * isset connectingJourneyFilter
     *
     * Return only the specified journeys
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectingJourneyFilter($index)
    {
        return isset($this->connectingJourneyFilter[$index]);
    }

    /**
     * unset connectingJourneyFilter
     *
     * Return only the specified journeys
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectingJourneyFilter($index)
    {
        unset($this->connectingJourneyFilter[$index]);
    }

    /**
     * Gets as connectingJourneyFilter
     *
     * Return only the specified journeys
     *
     * @return \Calcinai\Siri\Objects\ConnectingJourneyFilterStructureType[]
     */
    public function getConnectingJourneyFilter()
    {
        return $this->connectingJourneyFilter;
    }

    /**
     * Sets a new connectingJourneyFilter
     *
     * Return only the specified journeys
     *
     * @param \Calcinai\Siri\Objects\ConnectingJourneyFilterStructureType[] $connectingJourneyFilter
     * @return self
     */
    public function setConnectingJourneyFilter(array $connectingJourneyFilter)
    {
        $this->connectingJourneyFilter = $connectingJourneyFilter;
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

