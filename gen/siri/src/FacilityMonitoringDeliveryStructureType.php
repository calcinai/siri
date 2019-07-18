<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\FacilityConditionStructureType $facilityCondition
     */
    private $facilityCondition = null;

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
     * Gets as facilityCondition
     *
     * @return \Calcinai\Siri\FacilityConditionStructureType
     */
    public function getFacilityCondition()
    {
        return $this->facilityCondition;
    }

    /**
     * Sets a new facilityCondition
     *
     * @param \Calcinai\Siri\FacilityConditionStructureType $facilityCondition
     * @return self
     */
    public function setFacilityCondition(\Calcinai\Siri\FacilityConditionStructureType $facilityCondition)
    {
        $this->facilityCondition = $facilityCondition;
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

