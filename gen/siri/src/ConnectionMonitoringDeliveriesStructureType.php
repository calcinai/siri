<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringDeliveriesStructureType
 *
 * Type for Deliveries for Connection Monitoring Service. Used in WSDL.
 * XSD Type: ConnectionMonitoringDeliveriesStructure
 */
class ConnectionMonitoringDeliveriesStructureType
{

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[] $connectionMonitoringFeederDelivery
     */
    private $connectionMonitoringFeederDelivery = [
        
    ];

    /**
     * Delivery for Connection Protection Fetcher Service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[] $connectionMonitoringDistributorDelivery
     */
    private $connectionMonitoringDistributorDelivery = [
        
    ];

    /**
     * Adds as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery
     */
    public function addToConnectionMonitoringFeederDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery[] = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * isset connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringFeederDelivery($index)
    {
        return isset($this->connectionMonitoringFeederDelivery[$index]);
    }

    /**
     * unset connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringFeederDelivery($index)
    {
        unset($this->connectionMonitoringFeederDelivery[$index]);
    }

    /**
     * Gets as connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[]
     */
    public function getConnectionMonitoringFeederDelivery()
    {
        return $this->connectionMonitoringFeederDelivery;
    }

    /**
     * Sets a new connectionMonitoringFeederDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringFeederDelivery[] $connectionMonitoringFeederDelivery
     * @return self
     */
    public function setConnectionMonitoringFeederDelivery(array $connectionMonitoringFeederDelivery)
    {
        $this->connectionMonitoringFeederDelivery = $connectionMonitoringFeederDelivery;
        return $this;
    }

    /**
     * Adds as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery
     */
    public function addToConnectionMonitoringDistributorDelivery(\Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery[] = $connectionMonitoringDistributorDelivery;
        return $this;
    }

    /**
     * isset connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringDistributorDelivery($index)
    {
        return isset($this->connectionMonitoringDistributorDelivery[$index]);
    }

    /**
     * unset connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringDistributorDelivery($index)
    {
        unset($this->connectionMonitoringDistributorDelivery[$index]);
    }

    /**
     * Gets as connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[]
     */
    public function getConnectionMonitoringDistributorDelivery()
    {
        return $this->connectionMonitoringDistributorDelivery;
    }

    /**
     * Sets a new connectionMonitoringDistributorDelivery
     *
     * Delivery for Connection Protection Fetcher Service.
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringDistributorDelivery[] $connectionMonitoringDistributorDelivery
     * @return self
     */
    public function setConnectionMonitoringDistributorDelivery(array $connectionMonitoringDistributorDelivery)
    {
        $this->connectionMonitoringDistributorDelivery = $connectionMonitoringDistributorDelivery;
        return $this;
    }


}

