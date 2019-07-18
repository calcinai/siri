<?php

namespace Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType;

use Calcinai\Siri\StopMonitoringCapabilityRequestPolicyStructureType;

/**
 * Class representing RequestPolicyAType
 */
class RequestPolicyAType extends StopMonitoringCapabilityRequestPolicyStructureType
{

    /**
     * Whether Detail level filtering is supported. Default false
     *
     * @property bool $hasDetailLevel
     */
    private $hasDetailLevel = null;

    /**
     * Default Detail level if non specified on request. Default Normal.
     *
     * @property string $defaultDetailLevel
     */
    private $defaultDetailLevel = null;

    /**
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @property bool $hasMaximumVisits
     */
    private $hasMaximumVisits = null;

    /**
     * Whether results can be limited to include a minimum numnber per line. Default is true.
     *
     * @property bool $hasMinimumVisitsPerLine
     */
    private $hasMinimumVisitsPerLine = null;

    /**
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @property bool $hasNumberOfOnwardsCalls
     */
    private $hasNumberOfOnwardsCalls = null;

    /**
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @property bool $hasNumberOfPreviousCalls
     */
    private $hasNumberOfPreviousCalls = null;

    /**
     * Gets as hasDetailLevel
     *
     * Whether Detail level filtering is supported. Default false
     *
     * @return bool
     */
    public function getHasDetailLevel()
    {
        return $this->hasDetailLevel;
    }

    /**
     * Sets a new hasDetailLevel
     *
     * Whether Detail level filtering is supported. Default false
     *
     * @param bool $hasDetailLevel
     * @return self
     */
    public function setHasDetailLevel($hasDetailLevel)
    {
        $this->hasDetailLevel = $hasDetailLevel;
        return $this;
    }

    /**
     * Gets as defaultDetailLevel
     *
     * Default Detail level if non specified on request. Default Normal.
     *
     * @return string
     */
    public function getDefaultDetailLevel()
    {
        return $this->defaultDetailLevel;
    }

    /**
     * Sets a new defaultDetailLevel
     *
     * Default Detail level if non specified on request. Default Normal.
     *
     * @param string $defaultDetailLevel
     * @return self
     */
    public function setDefaultDetailLevel($defaultDetailLevel)
    {
        $this->defaultDetailLevel = $defaultDetailLevel;
        return $this;
    }

    /**
     * Gets as hasMaximumVisits
     *
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @return bool
     */
    public function getHasMaximumVisits()
    {
        return $this->hasMaximumVisits;
    }

    /**
     * Sets a new hasMaximumVisits
     *
     * Whether results can be limited to a maximum number. Default is true.
     *
     * @param bool $hasMaximumVisits
     * @return self
     */
    public function setHasMaximumVisits($hasMaximumVisits)
    {
        $this->hasMaximumVisits = $hasMaximumVisits;
        return $this;
    }

    /**
     * Gets as hasMinimumVisitsPerLine
     *
     * Whether results can be limited to include a minimum numnber per line. Default is true.
     *
     * @return bool
     */
    public function getHasMinimumVisitsPerLine()
    {
        return $this->hasMinimumVisitsPerLine;
    }

    /**
     * Sets a new hasMinimumVisitsPerLine
     *
     * Whether results can be limited to include a minimum numnber per line. Default is true.
     *
     * @param bool $hasMinimumVisitsPerLine
     * @return self
     */
    public function setHasMinimumVisitsPerLine($hasMinimumVisitsPerLine)
    {
        $this->hasMinimumVisitsPerLine = $hasMinimumVisitsPerLine;
        return $this;
    }

    /**
     * Gets as hasNumberOfOnwardsCalls
     *
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @return bool
     */
    public function getHasNumberOfOnwardsCalls()
    {
        return $this->hasNumberOfOnwardsCalls;
    }

    /**
     * Sets a new hasNumberOfOnwardsCalls
     *
     * If system can return detailed calling pattern, whether a number of onwards calls to include can be specified. Default is false.
     *
     * @param bool $hasNumberOfOnwardsCalls
     * @return self
     */
    public function setHasNumberOfOnwardsCalls($hasNumberOfOnwardsCalls)
    {
        $this->hasNumberOfOnwardsCalls = $hasNumberOfOnwardsCalls;
        return $this;
    }

    /**
     * Gets as hasNumberOfPreviousCalls
     *
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @return bool
     */
    public function getHasNumberOfPreviousCalls()
    {
        return $this->hasNumberOfPreviousCalls;
    }

    /**
     * Sets a new hasNumberOfPreviousCalls
     *
     * If system can return detailed calling pattern, whether a number of previouscalls to include can be specified. Default is false.
     *
     * @param bool $hasNumberOfPreviousCalls
     * @return self
     */
    public function setHasNumberOfPreviousCalls($hasNumberOfPreviousCalls)
    {
        $this->hasNumberOfPreviousCalls = $hasNumberOfPreviousCalls;
        return $this;
    }


}

