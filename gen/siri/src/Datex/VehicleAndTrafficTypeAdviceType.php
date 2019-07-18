<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing VehicleAndTrafficTypeAdviceType
 *
 * Supplementary vehicle and traffic type advice.
 * XSD Type: VehicleAndTrafficTypeAdvice
 */
class VehicleAndTrafficTypeAdviceType extends AdviceType
{

    /**
     * The types of destinations of the traffic for which the advice is relevant.
     *
     * @property string $forTrafficOfType
     */
    private $forTrafficOfType = null;

    /**
     * @property \Calcinai\Siri\Datex\VehicleCharacteristicsType $forVehiclesWithCharacteristicsOf
     */
    private $forVehiclesWithCharacteristicsOf = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $vehicleAndTrafficTypeAdviceExtension
     */
    private $vehicleAndTrafficTypeAdviceExtension = null;

    /**
     * Gets as forTrafficOfType
     *
     * The types of destinations of the traffic for which the advice is relevant.
     *
     * @return string
     */
    public function getForTrafficOfType()
    {
        return $this->forTrafficOfType;
    }

    /**
     * Sets a new forTrafficOfType
     *
     * The types of destinations of the traffic for which the advice is relevant.
     *
     * @param string $forTrafficOfType
     * @return self
     */
    public function setForTrafficOfType($forTrafficOfType)
    {
        $this->forTrafficOfType = $forTrafficOfType;
        return $this;
    }

    /**
     * Gets as forVehiclesWithCharacteristicsOf
     *
     * @return \Calcinai\Siri\Datex\VehicleCharacteristicsType
     */
    public function getForVehiclesWithCharacteristicsOf()
    {
        return $this->forVehiclesWithCharacteristicsOf;
    }

    /**
     * Sets a new forVehiclesWithCharacteristicsOf
     *
     * @param \Calcinai\Siri\Datex\VehicleCharacteristicsType $forVehiclesWithCharacteristicsOf
     * @return self
     */
    public function setForVehiclesWithCharacteristicsOf(\Calcinai\Siri\Datex\VehicleCharacteristicsType $forVehiclesWithCharacteristicsOf)
    {
        $this->forVehiclesWithCharacteristicsOf = $forVehiclesWithCharacteristicsOf;
        return $this;
    }

    /**
     * Gets as vehicleAndTrafficTypeAdviceExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getVehicleAndTrafficTypeAdviceExtension()
    {
        return $this->vehicleAndTrafficTypeAdviceExtension;
    }

    /**
     * Sets a new vehicleAndTrafficTypeAdviceExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $vehicleAndTrafficTypeAdviceExtension
     * @return self
     */
    public function setVehicleAndTrafficTypeAdviceExtension(\Calcinai\Siri\Datex\ExtensionType $vehicleAndTrafficTypeAdviceExtension)
    {
        $this->vehicleAndTrafficTypeAdviceExtension = $vehicleAndTrafficTypeAdviceExtension;
        return $this;
    }


}

