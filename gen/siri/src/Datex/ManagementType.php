<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ManagementType
 *
 * Information relating to the management of the situation record.
 * XSD Type: Management
 */
class ManagementType
{

    /**
     * @property \Calcinai\Siri\Datex\LifeCycleManagementType $lifeCycleManagement
     */
    private $lifeCycleManagement = null;

    /**
     * @property \Calcinai\Siri\Datex\FilterExitManagementType $filterExitManagement
     */
    private $filterExitManagement = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $managementExtension
     */
    private $managementExtension = null;

    /**
     * Gets as lifeCycleManagement
     *
     * @return \Calcinai\Siri\Datex\LifeCycleManagementType
     */
    public function getLifeCycleManagement()
    {
        return $this->lifeCycleManagement;
    }

    /**
     * Sets a new lifeCycleManagement
     *
     * @param \Calcinai\Siri\Datex\LifeCycleManagementType $lifeCycleManagement
     * @return self
     */
    public function setLifeCycleManagement(\Calcinai\Siri\Datex\LifeCycleManagementType $lifeCycleManagement)
    {
        $this->lifeCycleManagement = $lifeCycleManagement;
        return $this;
    }

    /**
     * Gets as filterExitManagement
     *
     * @return \Calcinai\Siri\Datex\FilterExitManagementType
     */
    public function getFilterExitManagement()
    {
        return $this->filterExitManagement;
    }

    /**
     * Sets a new filterExitManagement
     *
     * @param \Calcinai\Siri\Datex\FilterExitManagementType $filterExitManagement
     * @return self
     */
    public function setFilterExitManagement(\Calcinai\Siri\Datex\FilterExitManagementType $filterExitManagement)
    {
        $this->filterExitManagement = $filterExitManagement;
        return $this;
    }

    /**
     * Gets as managementExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getManagementExtension()
    {
        return $this->managementExtension;
    }

    /**
     * Sets a new managementExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $managementExtension
     * @return self
     */
    public function setManagementExtension(\Calcinai\Siri\Datex\ExtensionType $managementExtension)
    {
        $this->managementExtension = $managementExtension;
        return $this;
    }


}

