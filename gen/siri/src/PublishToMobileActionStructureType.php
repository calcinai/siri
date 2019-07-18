<?php

namespace Calcinai\Siri;

/**
 * Class representing PublishToMobileActionStructureType
 *
 * Type for Action Publish situation To Displays
 * XSD Type: PublishToMobileActionStructure
 */
class PublishToMobileActionStructureType extends ParameterisedActionStructureType
{

    /**
     * Include in situation lists on mobile site. Default is true.
     *
     * @property bool $incidents
     */
    private $incidents = null;

    /**
     * Include in home page on mobile site. Default is false.
     *
     * @property bool $homePage
     */
    private $homePage = null;

    /**
     * Gets as incidents
     *
     * Include in situation lists on mobile site. Default is true.
     *
     * @return bool
     */
    public function getIncidents()
    {
        return $this->incidents;
    }

    /**
     * Sets a new incidents
     *
     * Include in situation lists on mobile site. Default is true.
     *
     * @param bool $incidents
     * @return self
     */
    public function setIncidents($incidents)
    {
        $this->incidents = $incidents;
        return $this;
    }

    /**
     * Gets as homePage
     *
     * Include in home page on mobile site. Default is false.
     *
     * @return bool
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * Sets a new homePage
     *
     * Include in home page on mobile site. Default is false.
     *
     * @param bool $homePage
     * @return self
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
        return $this;
    }


}

