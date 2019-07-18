<?php

namespace Calcinai\Siri;

/**
 * Class representing VehicleFeaturesDeliveryStructureType
 *
 * Type for Response with VehicleFeatures available to make requests.
 * XSD Type: VehicleFeaturesDeliveryStructure
 */
class VehicleFeaturesDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\VehicleFeature[] $vehicleFeature
     */
    private $vehicleFeature = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * Adds as vehicleFeature
     *
     * @return self
     * @param \Calcinai\Siri\VehicleFeature $vehicleFeature
     */
    public function addToVehicleFeature(\Calcinai\Siri\VehicleFeature $vehicleFeature)
    {
        $this->vehicleFeature[] = $vehicleFeature;
        return $this;
    }

    /**
     * isset vehicleFeature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleFeature($index)
    {
        return isset($this->vehicleFeature[$index]);
    }

    /**
     * unset vehicleFeature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleFeature($index)
    {
        unset($this->vehicleFeature[$index]);
    }

    /**
     * Gets as vehicleFeature
     *
     * @return \Calcinai\Siri\VehicleFeature[]
     */
    public function getVehicleFeature()
    {
        return $this->vehicleFeature;
    }

    /**
     * Sets a new vehicleFeature
     *
     * @param \Calcinai\Siri\VehicleFeature[] $vehicleFeature
     * @return self
     */
    public function setVehicleFeature(array $vehicleFeature)
    {
        $this->vehicleFeature = $vehicleFeature;
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

