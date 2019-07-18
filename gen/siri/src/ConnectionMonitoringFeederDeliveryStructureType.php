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
     * @property \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType $monitoredFeederArrival
     */
    private $monitoredFeederArrival = null;

    /**
     * Cancellation of a feeder arrival at a connection point.
     *
     * @property \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation
     */
    private $monitoredFeederArrivalCancellation = null;

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
     * Gets as monitoredFeederArrival
     *
     * A feeder arrival at the connection point
     *
     * @return \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType
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
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType $monitoredFeederArrival
     * @return self
     */
    public function setMonitoredFeederArrival(\Calcinai\Siri\Objects\MonitoredFeederArrivalStructureType $monitoredFeederArrival)
    {
        $this->monitoredFeederArrival = $monitoredFeederArrival;
        return $this;
    }

    /**
     * Gets as monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @return \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType
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
     * @param \Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation
     * @return self
     */
    public function setMonitoredFeederArrivalCancellation(\Calcinai\Siri\Objects\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation)
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

