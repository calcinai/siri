<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringFeederDeliveryStructureType
 *
 * Type for Delivery for Connection Monitoring.
 * XSD Type: ConnectionMonitoringFeederDeliveryStructure
 */
class ConnectionMonitoringFeederDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of responsee. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * A feeder arrival at the connection point
     *
     * @property \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType[] $monitoredFeederArrival
     */
    private $monitoredFeederArrival = [
        
    ];

    /**
     * Cancellation of a feeder arrival at a connection point.
     *
     * @property \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType[] $monitoredFeederArrivalCancellation
     */
    private $monitoredFeederArrivalCancellation = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of responsee. Fixed
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
     * Version number of responsee. Fixed
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
     * Adds as monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @return self
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType $monitoredFeederArrival
     */
    public function addToMonitoredFeederArrival(\Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType $monitoredFeederArrival)
    {
        $this->monitoredFeederArrival[] = $monitoredFeederArrival;
        return $this;
    }

    /**
     * isset monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoredFeederArrival($index)
    {
        return isset($this->monitoredFeederArrival[$index]);
    }

    /**
     * unset monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoredFeederArrival($index)
    {
        unset($this->monitoredFeederArrival[$index]);
    }

    /**
     * Gets as monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @return \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType[]
     */
    public function getMonitoredFeederArrival()
    {
        return $this->monitoredFeederArrival;
    }

    /**
     * Sets a new monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType[] $monitoredFeederArrival
     * @return self
     */
    public function setMonitoredFeederArrival(array $monitoredFeederArrival)
    {
        $this->monitoredFeederArrival = $monitoredFeederArrival;
        return $this;
    }

    /**
     * Adds as monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation
     */
    public function addToMonitoredFeederArrivalCancellation(\Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation)
    {
        $this->monitoredFeederArrivalCancellation[] = $monitoredFeederArrivalCancellation;
        return $this;
    }

    /**
     * isset monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoredFeederArrivalCancellation($index)
    {
        return isset($this->monitoredFeederArrivalCancellation[$index]);
    }

    /**
     * unset monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoredFeederArrivalCancellation($index)
    {
        unset($this->monitoredFeederArrivalCancellation[$index]);
    }

    /**
     * Gets as monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @return \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType[]
     */
    public function getMonitoredFeederArrivalCancellation()
    {
        return $this->monitoredFeederArrivalCancellation;
    }

    /**
     * Sets a new monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType[] $monitoredFeederArrivalCancellation
     * @return self
     */
    public function setMonitoredFeederArrivalCancellation(array $monitoredFeederArrivalCancellation)
    {
        $this->monitoredFeederArrivalCancellation = $monitoredFeederArrivalCancellation;
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

