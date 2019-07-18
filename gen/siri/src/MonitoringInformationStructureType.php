<?php

namespace Calcinai\Siri;

/**
 * Class representing MonitoringInformationStructureType
 *
 * Type for Description of the monitoring conditions (frequency of mesurement, etc): an automatic monitoring of the satus of a lift with pushed alert in case of incident is very different from a daily manual/visual check ....
 * XSD Type: MonitoringInformationStructure
 */
class MonitoringInformationStructureType
{

    /**
     * Mean time interval between two measurements.
     *
     * @property \DateInterval $monitoringInterval
     */
    private $monitoringInterval = null;

    /**
     * How monitoring is automatic, manual, etc...
     *
     * @property string $monitoringType
     */
    private $monitoringType = null;

    /**
     * When the monitorign operates. If absent always.
     *
     * @property \Calcinai\Siri\MonitoringValidityConditionStructureType $monitoringPeriod
     */
    private $monitoringPeriod = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as monitoringInterval
     *
     * Mean time interval between two measurements.
     *
     * @return \DateInterval
     */
    public function getMonitoringInterval()
    {
        return $this->monitoringInterval;
    }

    /**
     * Sets a new monitoringInterval
     *
     * Mean time interval between two measurements.
     *
     * @param \DateInterval $monitoringInterval
     * @return self
     */
    public function setMonitoringInterval(\DateInterval $monitoringInterval)
    {
        $this->monitoringInterval = $monitoringInterval;
        return $this;
    }

    /**
     * Gets as monitoringType
     *
     * How monitoring is automatic, manual, etc...
     *
     * @return string
     */
    public function getMonitoringType()
    {
        return $this->monitoringType;
    }

    /**
     * Sets a new monitoringType
     *
     * How monitoring is automatic, manual, etc...
     *
     * @param string $monitoringType
     * @return self
     */
    public function setMonitoringType($monitoringType)
    {
        $this->monitoringType = $monitoringType;
        return $this;
    }

    /**
     * Gets as monitoringPeriod
     *
     * When the monitorign operates. If absent always.
     *
     * @return \Calcinai\Siri\MonitoringValidityConditionStructureType
     */
    public function getMonitoringPeriod()
    {
        return $this->monitoringPeriod;
    }

    /**
     * Sets a new monitoringPeriod
     *
     * When the monitorign operates. If absent always.
     *
     * @param \Calcinai\Siri\MonitoringValidityConditionStructureType $monitoringPeriod
     * @return self
     */
    public function setMonitoringPeriod(\Calcinai\Siri\MonitoringValidityConditionStructureType $monitoringPeriod)
    {
        $this->monitoringPeriod = $monitoringPeriod;
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

