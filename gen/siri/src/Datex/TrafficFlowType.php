<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TrafficFlowType
 *
 * Averaged measurements of traffic flow rates.
 * XSD Type: TrafficFlow
 */
class TrafficFlowType extends TrafficValueType
{

    /**
     * An averaged measurement of flow rate defined in terms of the number of vehicle axles passing the specified measurement point.
     *
     * @property int $axleFlow
     */
    private $axleFlow = null;

    /**
     * An averaged measurement of flow rate defined in terms of the number of passenger car units passing the specified measurement point.
     *
     * @property int $pCUFlow
     */
    private $pCUFlow = null;

    /**
     * An averaged measurement of the percentage of long vehicles contained in the traffic flow at the specified measurement point.
     *
     * @property float $percentageLongVehicles
     */
    private $percentageLongVehicles = null;

    /**
     * An averaged measurement of flow rate defined in terms of the number of vehicles passing the specified measurement point.
     *
     * @property int $vehicleFlow
     */
    private $vehicleFlow = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficFlowExtension
     */
    private $trafficFlowExtension = null;

    /**
     * Gets as axleFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of vehicle axles passing the specified measurement point.
     *
     * @return int
     */
    public function getAxleFlow()
    {
        return $this->axleFlow;
    }

    /**
     * Sets a new axleFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of vehicle axles passing the specified measurement point.
     *
     * @param int $axleFlow
     * @return self
     */
    public function setAxleFlow($axleFlow)
    {
        $this->axleFlow = $axleFlow;
        return $this;
    }

    /**
     * Gets as pCUFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of passenger car units passing the specified measurement point.
     *
     * @return int
     */
    public function getPCUFlow()
    {
        return $this->pCUFlow;
    }

    /**
     * Sets a new pCUFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of passenger car units passing the specified measurement point.
     *
     * @param int $pCUFlow
     * @return self
     */
    public function setPCUFlow($pCUFlow)
    {
        $this->pCUFlow = $pCUFlow;
        return $this;
    }

    /**
     * Gets as percentageLongVehicles
     *
     * An averaged measurement of the percentage of long vehicles contained in the traffic flow at the specified measurement point.
     *
     * @return float
     */
    public function getPercentageLongVehicles()
    {
        return $this->percentageLongVehicles;
    }

    /**
     * Sets a new percentageLongVehicles
     *
     * An averaged measurement of the percentage of long vehicles contained in the traffic flow at the specified measurement point.
     *
     * @param float $percentageLongVehicles
     * @return self
     */
    public function setPercentageLongVehicles($percentageLongVehicles)
    {
        $this->percentageLongVehicles = $percentageLongVehicles;
        return $this;
    }

    /**
     * Gets as vehicleFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of vehicles passing the specified measurement point.
     *
     * @return int
     */
    public function getVehicleFlow()
    {
        return $this->vehicleFlow;
    }

    /**
     * Sets a new vehicleFlow
     *
     * An averaged measurement of flow rate defined in terms of the number of vehicles passing the specified measurement point.
     *
     * @param int $vehicleFlow
     * @return self
     */
    public function setVehicleFlow($vehicleFlow)
    {
        $this->vehicleFlow = $vehicleFlow;
        return $this;
    }

    /**
     * Gets as trafficFlowExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficFlowExtension()
    {
        return $this->trafficFlowExtension;
    }

    /**
     * Sets a new trafficFlowExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficFlowExtension
     * @return self
     */
    public function setTrafficFlowExtension(\Calcinai\Siri\Datex\ExtensionType $trafficFlowExtension)
    {
        $this->trafficFlowExtension = $trafficFlowExtension;
        return $this;
    }


}

