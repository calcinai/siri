<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitoringDeliveryStructureType
 *
 * Data type for Delivery for Stop Monitoring Service
 * XSD Type: StopMonitoringDeliveryStructure
 */
class StopMonitoringDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @property \Calcinai\Siri\Objects\MonitoredStopVisitStructureType $monitoredStopVisit
     */
    private $monitoredStopVisit = null;

    /**
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @property \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType $monitoredStopVisitCancellation
     */
    private $monitoredStopVisitCancellation = null;

    /**
     * Line notice for stop
     *
     * @property \Calcinai\Siri\Objects\StopLineNoticeStructureType $stopLineNotice
     */
    private $stopLineNotice = null;

    /**
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @property \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType $stopLineNoticeCancellation
     */
    private $stopLineNoticeCancellation = null;

    /**
     * Text associated with whole delivery.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note
     */
    private $note = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. Fixed
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
     * Version number of response. Fixed
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
     * Gets as monitoringRef
     *
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
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
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
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
     * Gets as monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @return \Calcinai\Siri\Objects\MonitoredStopVisitStructureType
     */
    public function getMonitoredStopVisit()
    {
        return $this->monitoredStopVisit;
    }

    /**
     * Sets a new monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitStructureType $monitoredStopVisit
     * @return self
     */
    public function setMonitoredStopVisit(\Calcinai\Siri\Objects\MonitoredStopVisitStructureType $monitoredStopVisit)
    {
        $this->monitoredStopVisit = $monitoredStopVisit;
        return $this;
    }

    /**
     * Gets as monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @return \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType
     */
    public function getMonitoredStopVisitCancellation()
    {
        return $this->monitoredStopVisitCancellation;
    }

    /**
     * Sets a new monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType $monitoredStopVisitCancellation
     * @return self
     */
    public function setMonitoredStopVisitCancellation(\Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType $monitoredStopVisitCancellation)
    {
        $this->monitoredStopVisitCancellation = $monitoredStopVisitCancellation;
        return $this;
    }

    /**
     * Gets as stopLineNotice
     *
     * Line notice for stop
     *
     * @return \Calcinai\Siri\Objects\StopLineNoticeStructureType
     */
    public function getStopLineNotice()
    {
        return $this->stopLineNotice;
    }

    /**
     * Sets a new stopLineNotice
     *
     * Line notice for stop
     *
     * @param \Calcinai\Siri\Objects\StopLineNoticeStructureType $stopLineNotice
     * @return self
     */
    public function setStopLineNotice(\Calcinai\Siri\Objects\StopLineNoticeStructureType $stopLineNotice)
    {
        $this->stopLineNotice = $stopLineNotice;
        return $this;
    }

    /**
     * Gets as stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @return \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType
     */
    public function getStopLineNoticeCancellation()
    {
        return $this->stopLineNoticeCancellation;
    }

    /**
     * Sets a new stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @param \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType $stopLineNoticeCancellation
     * @return self
     */
    public function setStopLineNoticeCancellation(\Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType $stopLineNoticeCancellation)
    {
        $this->stopLineNoticeCancellation = $stopLineNoticeCancellation;
        return $this;
    }

    /**
     * Gets as note
     *
     * Text associated with whole delivery.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Text associated with whole delivery.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note
     * @return self
     */
    public function setNote(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $note)
    {
        $this->note = $note;
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

