<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AccessibilityNeedsFilterStructureType
 *
 * Type for information about Accessibility Facilities status
 * XSD Type: AccessibilityNeedsFilterStructure
 */
class AccessibilityNeedsFilterStructureType
{

    /**
     * User need to be monitored
     *
     * @property \Calcinai\Siri\Objects\ACSB\UserNeedStructureType $userNeed
     */
    private $userNeed = null;

    /**
     * Gets as userNeed
     *
     * User need to be monitored
     *
     * @return \Calcinai\Siri\Objects\ACSB\UserNeedStructureType
     */
    public function getUserNeed()
    {
        return $this->userNeed;
    }

    /**
     * Sets a new userNeed
     *
     * User need to be monitored
     *
     * @param \Calcinai\Siri\Objects\ACSB\UserNeedStructureType $userNeed
     * @return self
     */
    public function setUserNeed(\Calcinai\Siri\Objects\ACSB\UserNeedStructureType $userNeed)
    {
        $this->userNeed = $userNeed;
        return $this;
    }


}

