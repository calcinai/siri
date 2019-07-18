<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\MonitoredFeederArrivalStructureType $monitoredFeederArrival
     */
    private $monitoredFeederArrival = null;

    /**
     * Cancellation of a feeder arrival at a connection point.
     *
     * @property \Calcinai\Siri\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation
     */
    private $monitoredFeederArrivalCancellation = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * @return \Calcinai\Siri\MonitoredFeederArrivalStructureType
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
     * @param \Calcinai\Siri\MonitoredFeederArrivalStructureType $monitoredFeederArrival
     * @return self
     */
    public function setMonitoredFeederArrival(\Calcinai\Siri\MonitoredFeederArrivalStructureType $monitoredFeederArrival)
    {
        $this->monitoredFeederArrival = $monitoredFeederArrival;
        return $this;
    }

    /**
     * Gets as monitoredFeederArrivalCancellation
     *
     * Cancellation of a feeder arrival at a connection point.
     *
     * @return \Calcinai\Siri\MonitoredFeederArrivalCancellationStructureType
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
     * @param \Calcinai\Siri\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation
     * @return self
     */
    public function setMonitoredFeederArrivalCancellation(\Calcinai\Siri\MonitoredFeederArrivalCancellationStructureType $monitoredFeederArrivalCancellation)
    {
        $this->monitoredFeederArrivalCancellation = $monitoredFeederArrivalCancellation;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

