<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitoringFilterStructureType
 *
 * Type for an individual Stop Monitoring a Multiple Request
 * XSD Type: StopMonitoringFilterStructure
 */
class StopMonitoringFilterStructureType
{

    /**
     * Forward duration for which Visits should be included, that is, interval before predicted arrival at the stop for which to include Visits: only journeys which will arrive or depart within this time span will be returned.
     *
     * @property \DateInterval $previewInterval
     */
    private $previewInterval = null;

    /**
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Reference to Monitoring Point(s) about which data is requested. May be a stop point, timing point, or a group of points under a single reference.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Filter the results to include only Stop Visits for vehicles run by the specified operator.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Filter the results to include only Stop Visits for vehicles for the given line.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Filter the results to include only Stop Visits for vehicles running in a specific relative direction, for example, "inbound" or "outbound". (Direction does not specify a destination.)
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Filter the results to include only journeys to the destination
     *
     * @property string $destinationRef
     */
    private $destinationRef = null;

    /**
     * Whether to include arrival Visits, departure Visits, or all. Default is all,
     *
     * @property string $stopVisitTypes
     */
    private $stopVisitTypes = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The maximum number of Stop Visits to include in a given delivery. The first n Stop Visits within the look ahead window are included. Only Visits within the Lookahead Interval are returned. The MinimumStopVisits parameter can be used to reduce the the number of entries for each line within the total returned.
     *
     * @property int $maximumStopVisits
     */
    private $maximumStopVisits = null;

    /**
     * The minimum number of Stop Visits for a given line to include in a given delivery. If there are more Visits within the LookAheadInterval than allowed by MaximumStopVisits and a MinimumStopVisits value is specified, then at least the minimum number will be delivered for each line. I.e Stop Visits will be included even if the Stop Visits are later than those for some other line for which the minimum number of Stop Visits has already been supplied. This allows the Consumer to obtain at least one entry for every available line with vehicles approaching the stop. Only Visits within the Look ahead Interval are returned.
     *
     * @property int $minimumStopVisitsPerLine
     */
    private $minimumStopVisitsPerLine = null;

    /**
     * Maximum length of text to return for text elements Default is 30.
     *
     * @property int $maximumTextLength
     */
    private $maximumTextLength = null;

    /**
     * Level of detail to include in response. Default is normal.
     *
     * @property string $stopMonitoringDetailLevel
     */
    private $stopMonitoringDetailLevel = null;

    /**
     * If calls are to be returned, maximum number of calls to include in response. If absent, exclude all calls.
     *
     * @property \Calcinai\Siri\Objects\StopMonitoringFilterStructureType\MaximumNumberOfCallsAType $maximumNumberOfCalls
     */
    private $maximumNumberOfCalls = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as previewInterval
     *
     * Forward duration for which Visits should be included, that is, interval before predicted arrival at the stop for which to include Visits: only journeys which will arrive or depart within this time span will be returned.
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
     * Forward duration for which Visits should be included, that is, interval before predicted arrival at the stop for which to include Visits: only journeys which will arrive or depart within this time span will be returned.
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
     * Gets as startTime
     *
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Start time for PreviewInterval. If absent, then current time is assumed.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as monitoringRef
     *
     * Reference to Monitoring Point(s) about which data is requested. May be a stop point, timing point, or a group of points under a single reference.
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
     * Reference to Monitoring Point(s) about which data is requested. May be a stop point, timing point, or a group of points under a single reference.
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
     * Gets as operatorRef
     *
     * Filter the results to include only Stop Visits for vehicles run by the specified operator.
     *
     * @return string
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Filter the results to include only Stop Visits for vehicles run by the specified operator.
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef($operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Filter the results to include only Stop Visits for vehicles for the given line.
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
     * Filter the results to include only Stop Visits for vehicles for the given line.
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
     * Filter the results to include only Stop Visits for vehicles running in a specific relative direction, for example, "inbound" or "outbound". (Direction does not specify a destination.)
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
     * Filter the results to include only Stop Visits for vehicles running in a specific relative direction, for example, "inbound" or "outbound". (Direction does not specify a destination.)
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
     * Gets as destinationRef
     *
     * Filter the results to include only journeys to the destination
     *
     * @return string
     */
    public function getDestinationRef()
    {
        return $this->destinationRef;
    }

    /**
     * Sets a new destinationRef
     *
     * Filter the results to include only journeys to the destination
     *
     * @param string $destinationRef
     * @return self
     */
    public function setDestinationRef($destinationRef)
    {
        $this->destinationRef = $destinationRef;
        return $this;
    }

    /**
     * Gets as stopVisitTypes
     *
     * Whether to include arrival Visits, departure Visits, or all. Default is all,
     *
     * @return string
     */
    public function getStopVisitTypes()
    {
        return $this->stopVisitTypes;
    }

    /**
     * Sets a new stopVisitTypes
     *
     * Whether to include arrival Visits, departure Visits, or all. Default is all,
     *
     * @param string $stopVisitTypes
     * @return self
     */
    public function setStopVisitTypes($stopVisitTypes)
    {
        $this->stopVisitTypes = $stopVisitTypes;
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
     * Gets as maximumStopVisits
     *
     * The maximum number of Stop Visits to include in a given delivery. The first n Stop Visits within the look ahead window are included. Only Visits within the Lookahead Interval are returned. The MinimumStopVisits parameter can be used to reduce the the number of entries for each line within the total returned.
     *
     * @return int
     */
    public function getMaximumStopVisits()
    {
        return $this->maximumStopVisits;
    }

    /**
     * Sets a new maximumStopVisits
     *
     * The maximum number of Stop Visits to include in a given delivery. The first n Stop Visits within the look ahead window are included. Only Visits within the Lookahead Interval are returned. The MinimumStopVisits parameter can be used to reduce the the number of entries for each line within the total returned.
     *
     * @param int $maximumStopVisits
     * @return self
     */
    public function setMaximumStopVisits($maximumStopVisits)
    {
        $this->maximumStopVisits = $maximumStopVisits;
        return $this;
    }

    /**
     * Gets as minimumStopVisitsPerLine
     *
     * The minimum number of Stop Visits for a given line to include in a given delivery. If there are more Visits within the LookAheadInterval than allowed by MaximumStopVisits and a MinimumStopVisits value is specified, then at least the minimum number will be delivered for each line. I.e Stop Visits will be included even if the Stop Visits are later than those for some other line for which the minimum number of Stop Visits has already been supplied. This allows the Consumer to obtain at least one entry for every available line with vehicles approaching the stop. Only Visits within the Look ahead Interval are returned.
     *
     * @return int
     */
    public function getMinimumStopVisitsPerLine()
    {
        return $this->minimumStopVisitsPerLine;
    }

    /**
     * Sets a new minimumStopVisitsPerLine
     *
     * The minimum number of Stop Visits for a given line to include in a given delivery. If there are more Visits within the LookAheadInterval than allowed by MaximumStopVisits and a MinimumStopVisits value is specified, then at least the minimum number will be delivered for each line. I.e Stop Visits will be included even if the Stop Visits are later than those for some other line for which the minimum number of Stop Visits has already been supplied. This allows the Consumer to obtain at least one entry for every available line with vehicles approaching the stop. Only Visits within the Look ahead Interval are returned.
     *
     * @param int $minimumStopVisitsPerLine
     * @return self
     */
    public function setMinimumStopVisitsPerLine($minimumStopVisitsPerLine)
    {
        $this->minimumStopVisitsPerLine = $minimumStopVisitsPerLine;
        return $this;
    }

    /**
     * Gets as maximumTextLength
     *
     * Maximum length of text to return for text elements Default is 30.
     *
     * @return int
     */
    public function getMaximumTextLength()
    {
        return $this->maximumTextLength;
    }

    /**
     * Sets a new maximumTextLength
     *
     * Maximum length of text to return for text elements Default is 30.
     *
     * @param int $maximumTextLength
     * @return self
     */
    public function setMaximumTextLength($maximumTextLength)
    {
        $this->maximumTextLength = $maximumTextLength;
        return $this;
    }

    /**
     * Gets as stopMonitoringDetailLevel
     *
     * Level of detail to include in response. Default is normal.
     *
     * @return string
     */
    public function getStopMonitoringDetailLevel()
    {
        return $this->stopMonitoringDetailLevel;
    }

    /**
     * Sets a new stopMonitoringDetailLevel
     *
     * Level of detail to include in response. Default is normal.
     *
     * @param string $stopMonitoringDetailLevel
     * @return self
     */
    public function setStopMonitoringDetailLevel($stopMonitoringDetailLevel)
    {
        $this->stopMonitoringDetailLevel = $stopMonitoringDetailLevel;
        return $this;
    }

    /**
     * Gets as maximumNumberOfCalls
     *
     * If calls are to be returned, maximum number of calls to include in response. If absent, exclude all calls.
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringFilterStructureType\MaximumNumberOfCallsAType
     */
    public function getMaximumNumberOfCalls()
    {
        return $this->maximumNumberOfCalls;
    }

    /**
     * Sets a new maximumNumberOfCalls
     *
     * If calls are to be returned, maximum number of calls to include in response. If absent, exclude all calls.
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringFilterStructureType\MaximumNumberOfCallsAType $maximumNumberOfCalls
     * @return self
     */
    public function setMaximumNumberOfCalls(\Calcinai\Siri\Objects\StopMonitoringFilterStructureType\MaximumNumberOfCallsAType $maximumNumberOfCalls)
    {
        $this->maximumNumberOfCalls = $maximumNumberOfCalls;
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

