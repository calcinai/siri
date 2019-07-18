<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringRequestStructureType
 *
 * Service Request Type for Vehicle Monitoring Service
 * XSD Type: VehicleMonitoringRequestStructure
 */
class VehicleMonitoringRequestStructureType extends AbstractFunctionalServiceRequestStructureType
{

    /**
     * Version number of request. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * A predefined scope for making vehicle requests.
     *
     * @property string $vehicleMonitoringRef
     */
    private $vehicleMonitoringRef = null;

    /**
     * Identifier of a specific vehicle about which data is requested.
     *
     * @property string $vehicleRef
     */
    private $vehicleRef = null;

    /**
     * Filter the results to include only vehicles for the specific line.
     *
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * Filter the results to include only vehicles going to this direction
     *
     * @property string $directionRef
     */
    private $directionRef = null;

    /**
     * Preferred language in which to return text values.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The maximum number of vehicle journeys in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @property int $maximumVehicles
     */
    private $maximumVehicles = null;

    /**
     * Level of detail to include in response.
     *
     * @property string $vehicleMonitoringDetailLevel
     */
    private $vehicleMonitoringDetailLevel = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of request. Fixed
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
     * Version number of request. Fixed
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
     * Gets as vehicleMonitoringRef
     *
     * A predefined scope for making vehicle requests.
     *
     * @return string
     */
    public function getVehicleMonitoringRef()
    {
        return $this->vehicleMonitoringRef;
    }

    /**
     * Sets a new vehicleMonitoringRef
     *
     * A predefined scope for making vehicle requests.
     *
     * @param string $vehicleMonitoringRef
     * @return self
     */
    public function setVehicleMonitoringRef($vehicleMonitoringRef)
    {
        $this->vehicleMonitoringRef = $vehicleMonitoringRef;
        return $this;
    }

    /**
     * Gets as vehicleRef
     *
     * Identifier of a specific vehicle about which data is requested.
     *
     * @return string
     */
    public function getVehicleRef()
    {
        return $this->vehicleRef;
    }

    /**
     * Sets a new vehicleRef
     *
     * Identifier of a specific vehicle about which data is requested.
     *
     * @param string $vehicleRef
     * @return self
     */
    public function setVehicleRef($vehicleRef)
    {
        $this->vehicleRef = $vehicleRef;
        return $this;
    }

    /**
     * Gets as lineRef
     *
     * Filter the results to include only vehicles for the specific line.
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * Filter the results to include only vehicles for the specific line.
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as directionRef
     *
     * Filter the results to include only vehicles going to this direction
     *
     * @return string
     */
    public function getDirectionRef()
    {
        return $this->directionRef;
    }

    /**
     * Sets a new directionRef
     *
     * Filter the results to include only vehicles going to this direction
     *
     * @param string $directionRef
     * @return self
     */
    public function setDirectionRef($directionRef)
    {
        $this->directionRef = $directionRef;
        return $this;
    }

    /**
     * Gets as language
     *
     * Preferred language in which to return text values.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Preferred language in which to return text values.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as maximumVehicles
     *
     * The maximum number of vehicle journeys in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @return int
     */
    public function getMaximumVehicles()
    {
        return $this->maximumVehicles;
    }

    /**
     * Sets a new maximumVehicles
     *
     * The maximum number of vehicle journeys in a given delivery. The most recent n Events within the look ahead window are included.
     *
     * @param int $maximumVehicles
     * @return self
     */
    public function setMaximumVehicles($maximumVehicles)
    {
        $this->maximumVehicles = $maximumVehicles;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringDetailLevel
     *
     * Level of detail to include in response.
     *
     * @return string
     */
    public function getVehicleMonitoringDetailLevel()
    {
        return $this->vehicleMonitoringDetailLevel;
    }

    /**
     * Sets a new vehicleMonitoringDetailLevel
     *
     * Level of detail to include in response.
     *
     * @param string $vehicleMonitoringDetailLevel
     * @return self
     */
    public function setVehicleMonitoringDetailLevel($vehicleMonitoringDetailLevel)
    {
        $this->vehicleMonitoringDetailLevel = $vehicleMonitoringDetailLevel;
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

