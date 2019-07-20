<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityMonitoringDeliveryStructureType
 *
 * Data type for Delivery for Vehicle Monitoring Service. Provides information about one or more vehicles; each has its own vehicle activity element.
 * XSD Type: FacilityMonitoringDeliveryStructure
 */
class FacilityMonitoringDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityConditionStructureType[] $facilityCondition
     */
    private $facilityCondition = [
        
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
     * Adds as facilityCondition
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityConditionStructureType $facilityCondition
     */
    public function addToFacilityCondition(\Calcinai\Siri\Objects\FacilityConditionStructureType $facilityCondition)
    {
        $this->facilityCondition[] = $facilityCondition;
        return $this;
    }

    /**
     * isset facilityCondition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityCondition($index)
    {
        return isset($this->facilityCondition[$index]);
    }

    /**
     * unset facilityCondition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityCondition($index)
    {
        unset($this->facilityCondition[$index]);
    }

    /**
     * Gets as facilityCondition
     *
     * @return \Calcinai\Siri\Objects\FacilityConditionStructureType[]
     */
    public function getFacilityCondition()
    {
        return $this->facilityCondition;
    }

    /**
     * Sets a new facilityCondition
     *
     * @param \Calcinai\Siri\Objects\FacilityConditionStructureType[] $facilityCondition
     * @return self
     */
    public function setFacilityCondition(array $facilityCondition)
    {
        $this->facilityCondition = $facilityCondition;
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

