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
     * @property string[] $monitoringRef
     */
    private $monitoringRef = [
        
    ];

    /**
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @property \Calcinai\Siri\Objects\MonitoredStopVisitStructureType[] $monitoredStopVisit
     */
    private $monitoredStopVisit = [
        
    ];

    /**
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @property \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType[] $monitoredStopVisitCancellation
     */
    private $monitoredStopVisitCancellation = [
        
    ];

    /**
     * Line notice for stop
     *
     * @property \Calcinai\Siri\Objects\StopLineNoticeStructureType[] $stopLineNotice
     */
    private $stopLineNotice = [
        
    ];

    /**
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @property \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType[] $stopLineNoticeCancellation
     */
    private $stopLineNoticeCancellation = [
        
    ];

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
     * Adds as monitoringRef
     *
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
     *
     * @return self
     * @param string $monitoringRef
     */
    public function addToMonitoringRef($monitoringRef)
    {
        $this->monitoringRef[] = $monitoringRef;
        return $this;
    }

    /**
     * isset monitoringRef
     *
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoringRef($index)
    {
        return isset($this->monitoringRef[$index]);
    }

    /**
     * unset monitoringRef
     *
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoringRef($index)
    {
        unset($this->monitoringRef[$index]);
    }

    /**
     * Gets as monitoringRef
     *
     * Identifier of stop monitoring point(s) that were requested. This can a be used to return the requested Monitoring ref if there are no stop visits for the stop.
     *
     * @return string[]
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
    public function setMonitoringRef(array $monitoringRef)
    {
        $this->monitoringRef = $monitoringRef;
        return $this;
    }

    /**
     * Adds as monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitStructureType $monitoredStopVisit
     */
    public function addToMonitoredStopVisit(\Calcinai\Siri\Objects\MonitoredStopVisitStructureType $monitoredStopVisit)
    {
        $this->monitoredStopVisit[] = $monitoredStopVisit;
        return $this;
    }

    /**
     * isset monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoredStopVisit($index)
    {
        return isset($this->monitoredStopVisit[$index]);
    }

    /**
     * unset monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoredStopVisit($index)
    {
        unset($this->monitoredStopVisit[$index]);
    }

    /**
     * Gets as monitoredStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure.
     *
     * @return \Calcinai\Siri\Objects\MonitoredStopVisitStructureType[]
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
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitStructureType[] $monitoredStopVisit
     * @return self
     */
    public function setMonitoredStopVisit(array $monitoredStopVisit)
    {
        $this->monitoredStopVisit = $monitoredStopVisit;
        return $this;
    }

    /**
     * Adds as monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType $monitoredStopVisitCancellation
     */
    public function addToMonitoredStopVisitCancellation(\Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType $monitoredStopVisitCancellation)
    {
        $this->monitoredStopVisitCancellation[] = $monitoredStopVisitCancellation;
        return $this;
    }

    /**
     * isset monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoredStopVisitCancellation($index)
    {
        return isset($this->monitoredStopVisitCancellation[$index]);
    }

    /**
     * unset monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoredStopVisitCancellation($index)
    {
        unset($this->monitoredStopVisitCancellation[$index]);
    }

    /**
     * Gets as monitoredStopVisitCancellation
     *
     * Reference to an previously communicated Stop Visit which should now be removed from the arrival/departure board for the stop.
     *
     * @return \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType[]
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
     * @param \Calcinai\Siri\Objects\MonitoredStopVisitCancellationStructureType[] $monitoredStopVisitCancellation
     * @return self
     */
    public function setMonitoredStopVisitCancellation(array $monitoredStopVisitCancellation)
    {
        $this->monitoredStopVisitCancellation = $monitoredStopVisitCancellation;
        return $this;
    }

    /**
     * Adds as stopLineNotice
     *
     * Line notice for stop
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopLineNoticeStructureType $stopLineNotice
     */
    public function addToStopLineNotice(\Calcinai\Siri\Objects\StopLineNoticeStructureType $stopLineNotice)
    {
        $this->stopLineNotice[] = $stopLineNotice;
        return $this;
    }

    /**
     * isset stopLineNotice
     *
     * Line notice for stop
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopLineNotice($index)
    {
        return isset($this->stopLineNotice[$index]);
    }

    /**
     * unset stopLineNotice
     *
     * Line notice for stop
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopLineNotice($index)
    {
        unset($this->stopLineNotice[$index]);
    }

    /**
     * Gets as stopLineNotice
     *
     * Line notice for stop
     *
     * @return \Calcinai\Siri\Objects\StopLineNoticeStructureType[]
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
     * @param \Calcinai\Siri\Objects\StopLineNoticeStructureType[] $stopLineNotice
     * @return self
     */
    public function setStopLineNotice(array $stopLineNotice)
    {
        $this->stopLineNotice = $stopLineNotice;
        return $this;
    }

    /**
     * Adds as stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType $stopLineNoticeCancellation
     */
    public function addToStopLineNoticeCancellation(\Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType $stopLineNoticeCancellation)
    {
        $this->stopLineNoticeCancellation[] = $stopLineNoticeCancellation;
        return $this;
    }

    /**
     * isset stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopLineNoticeCancellation($index)
    {
        return isset($this->stopLineNoticeCancellation[$index]);
    }

    /**
     * unset stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopLineNoticeCancellation($index)
    {
        unset($this->stopLineNoticeCancellation[$index]);
    }

    /**
     * Gets as stopLineNoticeCancellation
     *
     * Reference to an previously communicated stop line event which should now be removed from the arrival/departure board for the stop.
     *
     * @return \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType[]
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
     * @param \Calcinai\Siri\Objects\StopLineNoticeCancellationStructureType[] $stopLineNoticeCancellation
     * @return self
     */
    public function setStopLineNoticeCancellation(array $stopLineNoticeCancellation)
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

