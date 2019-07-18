<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedStopPlaceElementStructureType
 *
 * Type for information about the quays affected by an Situation
 * XSD Type: AffectedStopPlaceElementStructure
 */
class AffectedStopPlaceElementStructureType
{

    /**
     * Disruption of accessibility
     *
     * @property \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     */
    private $accessibilityAssessment = null;

    /**
     * Gets as accessibilityAssessment
     *
     * Disruption of accessibility
     *
     * @return \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType
     */
    public function getAccessibilityAssessment()
    {
        return $this->accessibilityAssessment;
    }

    /**
     * Sets a new accessibilityAssessment
     *
     * Disruption of accessibility
     *
     * @param \Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment
     * @return self
     */
    public function setAccessibilityAssessment(\Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType $accessibilityAssessment)
    {
        $this->accessibilityAssessment = $accessibilityAssessment;
        return $this;
    }


}

