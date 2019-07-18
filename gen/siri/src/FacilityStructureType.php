<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityStructureType
 *
 * Type for sescription the facility itself
 * XSD Type: FacilityStructure
 */
class FacilityStructureType
{

    /**
     * Identfier of Facility
     *
     * @property string $facilityCode
     */
    private $facilityCode = null;

    /**
     * Textual description of the facility
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $description
     */
    private $description = null;

    /**
     * Type of facility (several types may be associated to a single facility)
     *
     * @property string[] $facilityClass
     */
    private $facilityClass = [
        
    ];

    /**
     * Features of service
     *
     * @property \Calcinai\Siri\Objects\AllFacilitiesFeatureStructureType[] $features
     */
    private $features = null;

    /**
     * Refererence to identifier of owner of facility
     *
     * @property string $ownerRef
     */
    private $ownerRef = null;

    /**
     * Textual description of teh owner of the facility
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $ownerName
     */
    private $ownerName = null;

    /**
     * When Facility is normally avaialble. If not specified default is always. Values are Logically ANDed together.
     *
     * @property \Calcinai\Siri\Objects\MonitoringValidityConditionStructureType $validityCondition
     */
    private $validityCondition = null;

    /**
     * Describes where the facility is located. The location is a Transmodel object reference or an IFOPT object reference.
     *
     * @property \Calcinai\Siri\Objects\FacilityLocationStructureType $facilityLocation
     */
    private $facilityLocation = null;

    /**
     * Limitation of facility
     *
     * @property \Calcinai\Siri\Objects\FacilityStructureType\LimitationsAType $limitations
     */
    private $limitations = null;

    /**
     * Suitabilities of facility for specific passenger needs
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitabilities
     */
    private $suitabilities = null;

    /**
     * Accessibility of the facility
     *
     * @property \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     */
    private $accessibilityAssessment = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as facilityCode
     *
     * Identfier of Facility
     *
     * @return string
     */
    public function getFacilityCode()
    {
        return $this->facilityCode;
    }

    /**
     * Sets a new facilityCode
     *
     * Identfier of Facility
     *
     * @param string $facilityCode
     * @return self
     */
    public function setFacilityCode($facilityCode)
    {
        $this->facilityCode = $facilityCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description of the facility
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description of the facility
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $description
     * @return self
     */
    public function setDescription(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as facilityClass
     *
     * Type of facility (several types may be associated to a single facility)
     *
     * @return self
     * @param string $facilityClass
     */
    public function addToFacilityClass($facilityClass)
    {
        $this->facilityClass[] = $facilityClass;
        return $this;
    }

    /**
     * isset facilityClass
     *
     * Type of facility (several types may be associated to a single facility)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityClass($index)
    {
        return isset($this->facilityClass[$index]);
    }

    /**
     * unset facilityClass
     *
     * Type of facility (several types may be associated to a single facility)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityClass($index)
    {
        unset($this->facilityClass[$index]);
    }

    /**
     * Gets as facilityClass
     *
     * Type of facility (several types may be associated to a single facility)
     *
     * @return string[]
     */
    public function getFacilityClass()
    {
        return $this->facilityClass;
    }

    /**
     * Sets a new facilityClass
     *
     * Type of facility (several types may be associated to a single facility)
     *
     * @param string $facilityClass
     * @return self
     */
    public function setFacilityClass(array $facilityClass)
    {
        $this->facilityClass = $facilityClass;
        return $this;
    }

    /**
     * Adds as feature
     *
     * Features of service
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AllFacilitiesFeatureStructureType $feature
     */
    public function addToFeatures(\Calcinai\Siri\Objects\AllFacilitiesFeatureStructureType $feature)
    {
        $this->features[] = $feature;
        return $this;
    }

    /**
     * isset features
     *
     * Features of service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * Features of service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * Features of service
     *
     * @return \Calcinai\Siri\Objects\AllFacilitiesFeatureStructureType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Features of service
     *
     * @param \Calcinai\Siri\Objects\AllFacilitiesFeatureStructureType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Gets as ownerRef
     *
     * Refererence to identifier of owner of facility
     *
     * @return string
     */
    public function getOwnerRef()
    {
        return $this->ownerRef;
    }

    /**
     * Sets a new ownerRef
     *
     * Refererence to identifier of owner of facility
     *
     * @param string $ownerRef
     * @return self
     */
    public function setOwnerRef($ownerRef)
    {
        $this->ownerRef = $ownerRef;
        return $this;
    }

    /**
     * Gets as ownerName
     *
     * Textual description of teh owner of the facility
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Sets a new ownerName
     *
     * Textual description of teh owner of the facility
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $ownerName
     * @return self
     */
    public function setOwnerName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
     * Gets as validityCondition
     *
     * When Facility is normally avaialble. If not specified default is always. Values are Logically ANDed together.
     *
     * @return \Calcinai\Siri\Objects\MonitoringValidityConditionStructureType
     */
    public function getValidityCondition()
    {
        return $this->validityCondition;
    }

    /**
     * Sets a new validityCondition
     *
     * When Facility is normally avaialble. If not specified default is always. Values are Logically ANDed together.
     *
     * @param \Calcinai\Siri\Objects\MonitoringValidityConditionStructureType $validityCondition
     * @return self
     */
    public function setValidityCondition(\Calcinai\Siri\Objects\MonitoringValidityConditionStructureType $validityCondition)
    {
        $this->validityCondition = $validityCondition;
        return $this;
    }

    /**
     * Gets as facilityLocation
     *
     * Describes where the facility is located. The location is a Transmodel object reference or an IFOPT object reference.
     *
     * @return \Calcinai\Siri\Objects\FacilityLocationStructureType
     */
    public function getFacilityLocation()
    {
        return $this->facilityLocation;
    }

    /**
     * Sets a new facilityLocation
     *
     * Describes where the facility is located. The location is a Transmodel object reference or an IFOPT object reference.
     *
     * @param \Calcinai\Siri\Objects\FacilityLocationStructureType $facilityLocation
     * @return self
     */
    public function setFacilityLocation(\Calcinai\Siri\Objects\FacilityLocationStructureType $facilityLocation)
    {
        $this->facilityLocation = $facilityLocation;
        return $this;
    }

    /**
     * Gets as limitations
     *
     * Limitation of facility
     *
     * @return \Calcinai\Siri\Objects\FacilityStructureType\LimitationsAType
     */
    public function getLimitations()
    {
        return $this->limitations;
    }

    /**
     * Sets a new limitations
     *
     * Limitation of facility
     *
     * @param \Calcinai\Siri\Objects\FacilityStructureType\LimitationsAType $limitations
     * @return self
     */
    public function setLimitations(\Calcinai\Siri\Objects\FacilityStructureType\LimitationsAType $limitations)
    {
        $this->limitations = $limitations;
        return $this;
    }

    /**
     * Adds as suitability
     *
     * Suitabilities of facility for specific passenger needs
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
     * Suitabilities of facility for specific passenger needs
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
     * Suitabilities of facility for specific passenger needs
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
     * Suitabilities of facility for specific passenger needs
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
     * Suitabilities of facility for specific passenger needs
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
     * Gets as accessibilityAssessment
     *
     * Accessibility of the facility
     *
     * @return \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType
     */
    public function getAccessibilityAssessment()
    {
        return $this->accessibilityAssessment;
    }

    /**
     * Sets a new accessibilityAssessment
     *
     * Accessibility of the facility
     *
     * @param \Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     * @return self
     */
    public function setAccessibilityAssessment(\Calcinai\Siri\Objects\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment)
    {
        $this->accessibilityAssessment = $accessibilityAssessment;
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

