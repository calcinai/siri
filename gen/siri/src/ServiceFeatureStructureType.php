<?php

namespace Calcinai\Siri;

/**
 * Class representing ServiceFeatureStructureType
 *
 * Type for Service Feature description.
 * XSD Type: ServiceFeatureStructure
 */
class ServiceFeatureStructureType
{

    /**
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @property string $serviceFeatureCode
     */
    private $serviceFeatureCode = null;

    /**
     * Name of classification.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $name
     */
    private $name = null;

    /**
     * Icon associated with feature.
     *
     * @property string $icon
     */
    private $icon = null;

    /**
     * Gets as serviceFeatureCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @return string
     */
    public function getServiceFeatureCode()
    {
        return $this->serviceFeatureCode;
    }

    /**
     * Sets a new serviceFeatureCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @param string $serviceFeatureCode
     * @return self
     */
    public function setServiceFeatureCode($serviceFeatureCode)
    {
        $this->serviceFeatureCode = $serviceFeatureCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of classification.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of classification.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\NaturalLanguageStringStructureType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as icon
     *
     * Icon associated with feature.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * Icon associated with feature.
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }


}

