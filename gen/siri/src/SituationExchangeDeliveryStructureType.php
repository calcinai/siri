<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationExchangeDeliveryStructureType
 *
 * Data type for Delivery forSituation Exchange Service. Provides information about one or more vehicles; each has its own vehicle activity element.
 * XSD Type: SituationExchangeDeliveryStructure
 */
class SituationExchangeDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Default context for common properties of Situations, Values specified apply to all situations unless overridden. Can be used optionally to reduce file bulk.
     *
     * @property \Calcinai\Siri\Objects\ContextStructureType $ptSituationContext
     */
    private $ptSituationContext = null;

    /**
     * Situations in Delivery
     *
     * @property \Calcinai\Siri\Objects\SituationExchangeDeliveryStructureType\SituationsAType $situations
     */
    private $situations = null;

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
     * Gets as ptSituationContext
     *
     * Default context for common properties of Situations, Values specified apply to all situations unless overridden. Can be used optionally to reduce file bulk.
     *
     * @return \Calcinai\Siri\Objects\ContextStructureType
     */
    public function getPtSituationContext()
    {
        return $this->ptSituationContext;
    }

    /**
     * Sets a new ptSituationContext
     *
     * Default context for common properties of Situations, Values specified apply to all situations unless overridden. Can be used optionally to reduce file bulk.
     *
     * @param \Calcinai\Siri\Objects\ContextStructureType $ptSituationContext
     * @return self
     */
    public function setPtSituationContext(\Calcinai\Siri\Objects\ContextStructureType $ptSituationContext)
    {
        $this->ptSituationContext = $ptSituationContext;
        return $this;
    }

    /**
     * Gets as situations
     *
     * Situations in Delivery
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeDeliveryStructureType\SituationsAType
     */
    public function getSituations()
    {
        return $this->situations;
    }

    /**
     * Sets a new situations
     *
     * Situations in Delivery
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeDeliveryStructureType\SituationsAType $situations
     * @return self
     */
    public function setSituations(\Calcinai\Siri\Objects\SituationExchangeDeliveryStructureType\SituationsAType $situations)
    {
        $this->situations = $situations;
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

