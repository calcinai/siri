<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProductionTimetableCapabilitiesResponseStructureType
 *
 * Type for Delivery for ProductionTimetable Capability
 * XSD Type: ProductionTimetableCapabilitiesResponseStructure
 */
class ProductionTimetableCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetableServiceCapabilities $productionTimetableServiceCapabilities
     */
    private $productionTimetableServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\ProductionTimetablePermissions $productionTimetablePermissions
     */
    private $productionTimetablePermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. fixed
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
     * Version number of response. fixed
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
     * Gets as productionTimetableServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetableServiceCapabilities
     */
    public function getProductionTimetableServiceCapabilities()
    {
        return $this->productionTimetableServiceCapabilities;
    }

    /**
     * Sets a new productionTimetableServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetableServiceCapabilities $productionTimetableServiceCapabilities
     * @return self
     */
    public function setProductionTimetableServiceCapabilities(\Calcinai\Siri\Objects\ProductionTimetableServiceCapabilities $productionTimetableServiceCapabilities)
    {
        $this->productionTimetableServiceCapabilities = $productionTimetableServiceCapabilities;
        return $this;
    }

    /**
     * Gets as productionTimetablePermissions
     *
     * @return \Calcinai\Siri\Objects\ProductionTimetablePermissions
     */
    public function getProductionTimetablePermissions()
    {
        return $this->productionTimetablePermissions;
    }

    /**
     * Sets a new productionTimetablePermissions
     *
     * @param \Calcinai\Siri\Objects\ProductionTimetablePermissions $productionTimetablePermissions
     * @return self
     */
    public function setProductionTimetablePermissions(\Calcinai\Siri\Objects\ProductionTimetablePermissions $productionTimetablePermissions)
    {
        $this->productionTimetablePermissions = $productionTimetablePermissions;
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

