<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityStatusStructureType
 *
 * Descritpion of the status of a facility
 * XSD Type: FacilityStatusStructure
 */
class FacilityStatusStructureType
{

    /**
     * Status of the facility.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Description of the facility Status
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $description
     */
    private $description = null;

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
     * Gets as status
     *
     * Status of the facility.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of the facility.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the facility Status
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
     * Description of the facility Status
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

