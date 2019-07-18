<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing LocalServiceStructureType
 *
 * Type for Local service.
 * XSD Type: LocalServiceStructure
 */
class LocalServiceStructureType extends InstalledEquipmentStructureType
{

    /**
     * Conditison governign availability of srevice.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType[] $validityConditions
     */
    private $validityConditions = null;

    /**
     * Classification of features.
     *
     * @property string[] $featureRefs
     */
    private $featureRefs = null;

    /**
     * @property mixed $extensions
     */
    private $extensions = null;

    /**
     * Adds as validityCondition
     *
     * Conditison governign availability of srevice.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition
     */
    public function addToValidityConditions(\Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition)
    {
        $this->validityConditions[] = $validityCondition;
        return $this;
    }

    /**
     * isset validityConditions
     *
     * Conditison governign availability of srevice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityConditions($index)
    {
        return isset($this->validityConditions[$index]);
    }

    /**
     * unset validityConditions
     *
     * Conditison governign availability of srevice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityConditions($index)
    {
        unset($this->validityConditions[$index]);
    }

    /**
     * Gets as validityConditions
     *
     * Conditison governign availability of srevice.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType[]
     */
    public function getValidityConditions()
    {
        return $this->validityConditions;
    }

    /**
     * Sets a new validityConditions
     *
     * Conditison governign availability of srevice.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType[] $validityConditions
     * @return self
     */
    public function setValidityConditions(array $validityConditions)
    {
        $this->validityConditions = $validityConditions;
        return $this;
    }

    /**
     * Adds as featureRef
     *
     * Classification of features.
     *
     * @return self
     * @param string $featureRef
     */
    public function addToFeatureRefs($featureRef)
    {
        $this->featureRefs[] = $featureRef;
        return $this;
    }

    /**
     * isset featureRefs
     *
     * Classification of features.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatureRefs($index)
    {
        return isset($this->featureRefs[$index]);
    }

    /**
     * unset featureRefs
     *
     * Classification of features.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatureRefs($index)
    {
        unset($this->featureRefs[$index]);
    }

    /**
     * Gets as featureRefs
     *
     * Classification of features.
     *
     * @return string[]
     */
    public function getFeatureRefs()
    {
        return $this->featureRefs;
    }

    /**
     * Sets a new featureRefs
     *
     * Classification of features.
     *
     * @param string $featureRefs
     * @return self
     */
    public function setFeatureRefs(array $featureRefs)
    {
        $this->featureRefs = $featureRefs;
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

