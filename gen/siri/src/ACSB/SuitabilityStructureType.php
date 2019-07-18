<?php

namespace Calcinai\Siri\ACSB;

/**
 * Class representing SuitabilityStructureType
 *
 * Type for of a specific need
 * XSD Type: SuitabilityStructure
 */
class SuitabilityStructureType
{

    /**
     * Whether the Facility is suitable
     *
     * @property string $suitable
     */
    private $suitable = null;

    /**
     * @property \Calcinai\Siri\ACSB\UserNeedStructureType $userNeed
     */
    private $userNeed = null;

    /**
     * Gets as suitable
     *
     * Whether the Facility is suitable
     *
     * @return string
     */
    public function getSuitable()
    {
        return $this->suitable;
    }

    /**
     * Sets a new suitable
     *
     * Whether the Facility is suitable
     *
     * @param string $suitable
     * @return self
     */
    public function setSuitable($suitable)
    {
        $this->suitable = $suitable;
        return $this;
    }

    /**
     * Gets as userNeed
     *
     * @return \Calcinai\Siri\ACSB\UserNeedStructureType
     */
    public function getUserNeed()
    {
        return $this->userNeed;
    }

    /**
     * Sets a new userNeed
     *
     * @param \Calcinai\Siri\ACSB\UserNeedStructureType $userNeed
     * @return self
     */
    public function setUserNeed(\Calcinai\Siri\ACSB\UserNeedStructureType $userNeed)
    {
        $this->userNeed = $userNeed;
        return $this;
    }


}

