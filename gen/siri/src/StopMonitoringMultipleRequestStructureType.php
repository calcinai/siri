<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitoringMultipleRequestStructureType
 *
 * Service Request Type for Stop Monitoring Service on multiple stops.
 * XSD Type: StopMonitoringMultipleRequestStructure
 */
class StopMonitoringMultipleRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @property \Calcinai\Siri\Objects\StopMonitoringFilterStructureType[] $stopMonitoringFIlter
     */
    private $stopMonitoringFIlter = [
        
    ];

    /**
     * Gets as version
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
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as stopMonitoringFIlter
     *
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\StopMonitoringFilterStructureType $stopMonitoringFIlter
     */
    public function addToStopMonitoringFIlter(\Calcinai\Siri\Objects\StopMonitoringFilterStructureType $stopMonitoringFIlter)
    {
        $this->stopMonitoringFIlter[] = $stopMonitoringFIlter;
        return $this;
    }

    /**
     * isset stopMonitoringFIlter
     *
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringFIlter($index)
    {
        return isset($this->stopMonitoringFIlter[$index]);
    }

    /**
     * unset stopMonitoringFIlter
     *
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringFIlter($index)
    {
        unset($this->stopMonitoringFIlter[$index]);
    }

    /**
     * Gets as stopMonitoringFIlter
     *
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringFilterStructureType[]
     */
    public function getStopMonitoringFIlter()
    {
        return $this->stopMonitoringFIlter;
    }

    /**
     * Sets a new stopMonitoringFIlter
     *
     * Request particulars for an individual stop as part of a list of multipel requests.
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringFilterStructureType[] $stopMonitoringFIlter
     * @return self
     */
    public function setStopMonitoringFIlter(array $stopMonitoringFIlter)
    {
        $this->stopMonitoringFIlter = $stopMonitoringFIlter;
        return $this;
    }


}

