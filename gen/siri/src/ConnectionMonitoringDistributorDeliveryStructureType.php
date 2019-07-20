<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringDistributorDeliveryStructureType
 *
 * Type for Distributor Delivery for Connection Monitoring Service.
 * XSD Type: ConnectionMonitoringDistributorDeliveryStructure
 */
class ConnectionMonitoringDistributorDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @property \Calcinai\Siri\Objects\WaitProlongedDepartureStructureType[] $waitProlongedDeparture
     */
    private $waitProlongedDeparture = [
        
    ];

    /**
     * A Change to a stop position
     *
     * @property \Calcinai\Siri\Objects\StoppingPositionChangedDepartureStructureType[] $stoppingPositionChangedDeparture
     */
    private $stoppingPositionChangedDeparture = [
        
    ];

    /**
     * Deletion of previous connection.
     *
     * @property \Calcinai\Siri\Objects\DistributorDepartureCancellationStructureType[] $distributorDepartureCancellation
     */
    private $distributorDepartureCancellation = [
        
    ];

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
     * Adds as waitProlongedDeparture
     *
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\WaitProlongedDepartureStructureType $waitProlongedDeparture
     */
    public function addToWaitProlongedDeparture(\Calcinai\Siri\Objects\WaitProlongedDepartureStructureType $waitProlongedDeparture)
    {
        $this->waitProlongedDeparture[] = $waitProlongedDeparture;
        return $this;
    }

    /**
     * isset waitProlongedDeparture
     *
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWaitProlongedDeparture($index)
    {
        return isset($this->waitProlongedDeparture[$index]);
    }

    /**
     * unset waitProlongedDeparture
     *
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWaitProlongedDeparture($index)
    {
        unset($this->waitProlongedDeparture[$index]);
    }

    /**
     * Gets as waitProlongedDeparture
     *
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @return \Calcinai\Siri\Objects\WaitProlongedDepartureStructureType[]
     */
    public function getWaitProlongedDeparture()
    {
        return $this->waitProlongedDeparture;
    }

    /**
     * Sets a new waitProlongedDeparture
     *
     * An action to delay the Distributor (fetcher) until a specifed time.
     *
     * @param \Calcinai\Siri\Objects\WaitProlongedDepartureStructureType[] $waitProlongedDeparture
     * @return self
     */
    public function setWaitProlongedDeparture(array $waitProlongedDeparture)
    {
        $this->waitProlongedDeparture = $waitProlongedDeparture;
        return $this;
    }

    /**
     * Adds as stoppingPositionChangedDeparture
     *
     * A Change to a stop position
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StoppingPositionChangedDepartureStructureType $stoppingPositionChangedDeparture
     */
    public function addToStoppingPositionChangedDeparture(\Calcinai\Siri\Objects\StoppingPositionChangedDepartureStructureType $stoppingPositionChangedDeparture)
    {
        $this->stoppingPositionChangedDeparture[] = $stoppingPositionChangedDeparture;
        return $this;
    }

    /**
     * isset stoppingPositionChangedDeparture
     *
     * A Change to a stop position
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStoppingPositionChangedDeparture($index)
    {
        return isset($this->stoppingPositionChangedDeparture[$index]);
    }

    /**
     * unset stoppingPositionChangedDeparture
     *
     * A Change to a stop position
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStoppingPositionChangedDeparture($index)
    {
        unset($this->stoppingPositionChangedDeparture[$index]);
    }

    /**
     * Gets as stoppingPositionChangedDeparture
     *
     * A Change to a stop position
     *
     * @return \Calcinai\Siri\Objects\StoppingPositionChangedDepartureStructureType[]
     */
    public function getStoppingPositionChangedDeparture()
    {
        return $this->stoppingPositionChangedDeparture;
    }

    /**
     * Sets a new stoppingPositionChangedDeparture
     *
     * A Change to a stop position
     *
     * @param \Calcinai\Siri\Objects\StoppingPositionChangedDepartureStructureType[] $stoppingPositionChangedDeparture
     * @return self
     */
    public function setStoppingPositionChangedDeparture(array $stoppingPositionChangedDeparture)
    {
        $this->stoppingPositionChangedDeparture = $stoppingPositionChangedDeparture;
        return $this;
    }

    /**
     * Adds as distributorDepartureCancellation
     *
     * Deletion of previous connection.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\DistributorDepartureCancellationStructureType $distributorDepartureCancellation
     */
    public function addToDistributorDepartureCancellation(\Calcinai\Siri\Objects\DistributorDepartureCancellationStructureType $distributorDepartureCancellation)
    {
        $this->distributorDepartureCancellation[] = $distributorDepartureCancellation;
        return $this;
    }

    /**
     * isset distributorDepartureCancellation
     *
     * Deletion of previous connection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributorDepartureCancellation($index)
    {
        return isset($this->distributorDepartureCancellation[$index]);
    }

    /**
     * unset distributorDepartureCancellation
     *
     * Deletion of previous connection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributorDepartureCancellation($index)
    {
        unset($this->distributorDepartureCancellation[$index]);
    }

    /**
     * Gets as distributorDepartureCancellation
     *
     * Deletion of previous connection.
     *
     * @return \Calcinai\Siri\Objects\DistributorDepartureCancellationStructureType[]
     */
    public function getDistributorDepartureCancellation()
    {
        return $this->distributorDepartureCancellation;
    }

    /**
     * Sets a new distributorDepartureCancellation
     *
     * Deletion of previous connection.
     *
     * @param \Calcinai\Siri\Objects\DistributorDepartureCancellationStructureType[] $distributorDepartureCancellation
     * @return self
     */
    public function setDistributorDepartureCancellation(array $distributorDepartureCancellation)
    {
        $this->distributorDepartureCancellation = $distributorDepartureCancellation;
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

