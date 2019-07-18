<?php

namespace Calcinai\Siri\Objects\ACSB;

/**
 * Class representing AccessibilityAssessmentStructureType
 *
 * Type for Assesment
 * XSD Type: AccessibilityAssessmentStructure
 */
class AccessibilityAssessmentStructureType
{

    /**
     * Summary indication as to whether the component is considered to be accessible or not.
     *
     * @property bool $mobilityImpairedAccess
     */
    private $mobilityImpairedAccess = null;

    /**
     * The Limitations that apply to component
     *
     * @property \Calcinai\Siri\Objects\ACSB\AccessibilityLimitationStructureType[] $limitations
     */
    private $limitations = null;

    /**
     * The Suitability of the component to meet specifc user needs
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitabilities
     */
    private $suitabilities = null;

    /**
     * @property mixed $extensions
     */
    private $extensions = null;

    /**
     * Gets as mobilityImpairedAccess
     *
     * Summary indication as to whether the component is considered to be accessible or not.
     *
     * @return bool
     */
    public function getMobilityImpairedAccess()
    {
        return $this->mobilityImpairedAccess;
    }

    /**
     * Sets a new mobilityImpairedAccess
     *
     * Summary indication as to whether the component is considered to be accessible or not.
     *
     * @param bool $mobilityImpairedAccess
     * @return self
     */
    public function setMobilityImpairedAccess($mobilityImpairedAccess)
    {
        $this->mobilityImpairedAccess = $mobilityImpairedAccess;
        return $this;
    }

    /**
     * Adds as accessibilityLimitation
     *
     * The Limitations that apply to component
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ACSB\AccessibilityLimitationStructureType $accessibilityLimitation
     */
    public function addToLimitations(\Calcinai\Siri\Objects\ACSB\AccessibilityLimitationStructureType $accessibilityLimitation)
    {
        $this->limitations[] = $accessibilityLimitation;
        return $this;
    }

    /**
     * isset limitations
     *
     * The Limitations that apply to component
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimitations($index)
    {
        return isset($this->limitations[$index]);
    }

    /**
     * unset limitations
     *
     * The Limitations that apply to component
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimitations($index)
    {
        unset($this->limitations[$index]);
    }

    /**
     * Gets as limitations
     *
     * The Limitations that apply to component
     *
     * @return \Calcinai\Siri\Objects\ACSB\AccessibilityLimitationStructureType[]
     */
    public function getLimitations()
    {
        return $this->limitations;
    }

    /**
     * Sets a new limitations
     *
     * The Limitations that apply to component
     *
     * @param \Calcinai\Siri\Objects\ACSB\AccessibilityLimitationStructureType[] $limitations
     * @return self
     */
    public function setLimitations(array $limitations)
    {
        $this->limitations = $limitations;
        return $this;
    }

    /**
     * Adds as suitability
     *
     * The Suitability of the component to meet specifc user needs
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability
     */
    public function addToSuitabilities(\Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability)
    {
        $this->suitabilities[] = $suitability;
        return $this;
    }

    /**
     * isset suitabilities
     *
     * The Suitability of the component to meet specifc user needs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuitabilities($index)
    {
        return isset($this->suitabilities[$index]);
    }

    /**
     * unset suitabilities
     *
     * The Suitability of the component to meet specifc user needs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuitabilities($index)
    {
        unset($this->suitabilities[$index]);
    }

    /**
     * Gets as suitabilities
     *
     * The Suitability of the component to meet specifc user needs
     *
     * @return \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[]
     */
    public function getSuitabilities()
    {
        return $this->suitabilities;
    }

    /**
     * Sets a new suitabilities
     *
     * The Suitability of the component to meet specifc user needs
     *
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitabilities
     * @return self
     */
    public function setSuitabilities(array $suitabilities)
    {
        $this->suitabilities = $suitabilities;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return mixed
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param mixed $extensions
     * @return self
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

