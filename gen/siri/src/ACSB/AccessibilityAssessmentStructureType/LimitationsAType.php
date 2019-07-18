<?php

namespace Calcinai\Siri\ACSB\AccessibilityAssessmentStructureType;

/**
 * Class representing LimitationsAType
 */
class LimitationsAType
{

    /**
     * The accessibility limitations of a component.
     *
     * @property \Calcinai\Siri\ACSB\AccessibilityLimitationStructureType[] $accessibilityLimitation
     */
    private $accessibilityLimitation = [
        
    ];

    /**
     * Adds as accessibilityLimitation
     *
     * The accessibility limitations of a component.
     *
     * @return self
     * @param \Calcinai\Siri\ACSB\AccessibilityLimitationStructureType $accessibilityLimitation
     */
    public function addToAccessibilityLimitation(\Calcinai\Siri\ACSB\AccessibilityLimitationStructureType $accessibilityLimitation)
    {
        $this->accessibilityLimitation[] = $accessibilityLimitation;
        return $this;
    }

    /**
     * isset accessibilityLimitation
     *
     * The accessibility limitations of a component.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessibilityLimitation($index)
    {
        return isset($this->accessibilityLimitation[$index]);
    }

    /**
     * unset accessibilityLimitation
     *
     * The accessibility limitations of a component.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessibilityLimitation($index)
    {
        unset($this->accessibilityLimitation[$index]);
    }

    /**
     * Gets as accessibilityLimitation
     *
     * The accessibility limitations of a component.
     *
     * @return \Calcinai\Siri\ACSB\AccessibilityLimitationStructureType[]
     */
    public function getAccessibilityLimitation()
    {
        return $this->accessibilityLimitation;
    }

    /**
     * Sets a new accessibilityLimitation
     *
     * The accessibility limitations of a component.
     *
     * @param \Calcinai\Siri\ACSB\AccessibilityLimitationStructureType[] $accessibilityLimitation
     * @return self
     */
    public function setAccessibilityLimitation(array $accessibilityLimitation)
    {
        $this->accessibilityLimitation = $accessibilityLimitation;
        return $this;
    }


}

