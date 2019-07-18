<?php

namespace Calcinai\Siri\ACSB;

/**
 * Class representing PassengerAccessibilityNeedsStructureType
 *
 * Type for accessibility needs. Records the requirementrs of a passenger that may affect chocie of facilities
 * XSD Type: PassengerAccessibilityNeedsStructure
 */
class PassengerAccessibilityNeedsStructureType
{

    /**
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @property \Calcinai\Siri\ACSB\UserNeedStructureType[] $userNeed
     */
    private $userNeed = [
        
    ];

    /**
     * Whether the passenger is accompanied by a carer or assistant.
     *
     * @property bool $accompaniedByCarer
     */
    private $accompaniedByCarer = null;

    /**
     * Adds as userNeed
     *
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @return self
     * @param \Calcinai\Siri\ACSB\UserNeedStructureType $userNeed
     */
    public function addToUserNeed(\Calcinai\Siri\ACSB\UserNeedStructureType $userNeed)
    {
        $this->userNeed[] = $userNeed;
        return $this;
    }

    /**
     * isset userNeed
     *
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserNeed($index)
    {
        return isset($this->userNeed[$index]);
    }

    /**
     * unset userNeed
     *
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserNeed($index)
    {
        unset($this->userNeed[$index]);
    }

    /**
     * Gets as userNeed
     *
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @return \Calcinai\Siri\ACSB\UserNeedStructureType[]
     */
    public function getUserNeed()
    {
        return $this->userNeed;
    }

    /**
     * Sets a new userNeed
     *
     * Specific pyschosensory need that may constrain choice of services and facilities.
     *
     * @param \Calcinai\Siri\ACSB\UserNeedStructureType[] $userNeed
     * @return self
     */
    public function setUserNeed(array $userNeed)
    {
        $this->userNeed = $userNeed;
        return $this;
    }

    /**
     * Gets as accompaniedByCarer
     *
     * Whether the passenger is accompanied by a carer or assistant.
     *
     * @return bool
     */
    public function getAccompaniedByCarer()
    {
        return $this->accompaniedByCarer;
    }

    /**
     * Sets a new accompaniedByCarer
     *
     * Whether the passenger is accompanied by a carer or assistant.
     *
     * @param bool $accompaniedByCarer
     * @return self
     */
    public function setAccompaniedByCarer($accompaniedByCarer)
    {
        $this->accompaniedByCarer = $accompaniedByCarer;
        return $this;
    }


}

