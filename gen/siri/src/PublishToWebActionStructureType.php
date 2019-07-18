<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PublishToWebActionStructureType
 *
 * Type for Action Publish situation To Web.
 * XSD Type: PublishToWebActionStructure
 */
class PublishToWebActionStructureType extends ParameterisedActionStructureType
{

    /**
     * Include in situation lists on web site. Default is true.
     *
     * @property bool $incidents
     */
    private $incidents = null;

    /**
     * Include on home page on web site. Default is false.
     *
     * @property bool $homePage
     */
    private $homePage = null;

    /**
     * Include in moving ticker band. Defaukt is false
     *
     * @property bool $ticker
     */
    private $ticker = null;

    /**
     * Gets as incidents
     *
     * Include in situation lists on web site. Default is true.
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
     * Include in situation lists on web site. Default is true.
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
     * Include on home page on web site. Default is false.
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
     * Include on home page on web site. Default is false.
     *
     * @param bool $homePage
     * @return self
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
        return $this;
    }

    /**
     * Gets as ticker
     *
     * Include in moving ticker band. Defaukt is false
     *
     * @return bool
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Sets a new ticker
     *
     * Include in moving ticker band. Defaukt is false
     *
     * @param bool $ticker
     * @return self
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
        return $this;
    }


}

