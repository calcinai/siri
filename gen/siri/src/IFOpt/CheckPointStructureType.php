<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing CheckPointStructureType
 *
 * Type for a Checkpoint Hazard that can be assocaited with
 * XSD Type: CheckPointStructure
 */
class CheckPointStructureType
{

    /**
     * Unique identifier of Hazard.
     *
     * @property string $checkPointId
     */
    private $checkPointId = null;

    /**
     * Validty condition governing applicability of hazard.
     *
     * @property \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition
     */
    private $validityCondition = null;

    /**
     * Type of process that may occur at checkpoint
     *
     * @property string $checkPointProcess
     */
    private $checkPointProcess = null;

    /**
     * Type of process that may occur at checkpoint
     *
     * @property string $checkPointService
     */
    private $checkPointService = null;

    /**
     * Type of physical featrue that may slow use of checkpoint
     *
     * @property string $accessFeatureType
     */
    private $accessFeatureType = null;

    /**
     * Type of crowding that may slow use of checkpoint
     *
     * @property string $congestion
     */
    private $congestion = null;

    /**
     * Classification of feature of checkpoint.
     *
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * Minimum duration needed to pass through checkpoint.
     *
     * @property \DateInterval $minimumLikelyDelay
     */
    private $minimumLikelyDelay = null;

    /**
     * Average duration expected to pass through checkpoint.
     *
     * @property \DateInterval $averageDelay
     */
    private $averageDelay = null;

    /**
     * Maximum duration expected to pass through checkpoint.
     *
     * @property \DateInterval $maximumLikelyDelay
     */
    private $maximumLikelyDelay = null;

    /**
     * Gets as checkPointId
     *
     * Unique identifier of Hazard.
     *
     * @return string
     */
    public function getCheckPointId()
    {
        return $this->checkPointId;
    }

    /**
     * Sets a new checkPointId
     *
     * Unique identifier of Hazard.
     *
     * @param string $checkPointId
     * @return self
     */
    public function setCheckPointId($checkPointId)
    {
        $this->checkPointId = $checkPointId;
        return $this;
    }

    /**
     * Gets as validityCondition
     *
     * Validty condition governing applicability of hazard.
     *
     * @return \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType
     */
    public function getValidityCondition()
    {
        return $this->validityCondition;
    }

    /**
     * Sets a new validityCondition
     *
     * Validty condition governing applicability of hazard.
     *
     * @param \Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition
     * @return self
     */
    public function setValidityCondition(\Calcinai\Siri\Objects\IFOpt\ValidityConditionStructureType $validityCondition)
    {
        $this->validityCondition = $validityCondition;
        return $this;
    }

    /**
     * Gets as checkPointProcess
     *
     * Type of process that may occur at checkpoint
     *
     * @return string
     */
    public function getCheckPointProcess()
    {
        return $this->checkPointProcess;
    }

    /**
     * Sets a new checkPointProcess
     *
     * Type of process that may occur at checkpoint
     *
     * @param string $checkPointProcess
     * @return self
     */
    public function setCheckPointProcess($checkPointProcess)
    {
        $this->checkPointProcess = $checkPointProcess;
        return $this;
    }

    /**
     * Gets as checkPointService
     *
     * Type of process that may occur at checkpoint
     *
     * @return string
     */
    public function getCheckPointService()
    {
        return $this->checkPointService;
    }

    /**
     * Sets a new checkPointService
     *
     * Type of process that may occur at checkpoint
     *
     * @param string $checkPointService
     * @return self
     */
    public function setCheckPointService($checkPointService)
    {
        $this->checkPointService = $checkPointService;
        return $this;
    }

    /**
     * Gets as accessFeatureType
     *
     * Type of physical featrue that may slow use of checkpoint
     *
     * @return string
     */
    public function getAccessFeatureType()
    {
        return $this->accessFeatureType;
    }

    /**
     * Sets a new accessFeatureType
     *
     * Type of physical featrue that may slow use of checkpoint
     *
     * @param string $accessFeatureType
     * @return self
     */
    public function setAccessFeatureType($accessFeatureType)
    {
        $this->accessFeatureType = $accessFeatureType;
        return $this;
    }

    /**
     * Gets as congestion
     *
     * Type of crowding that may slow use of checkpoint
     *
     * @return string
     */
    public function getCongestion()
    {
        return $this->congestion;
    }

    /**
     * Sets a new congestion
     *
     * Type of crowding that may slow use of checkpoint
     *
     * @param string $congestion
     * @return self
     */
    public function setCongestion($congestion)
    {
        $this->congestion = $congestion;
        return $this;
    }

    /**
     * Gets as facilityRef
     *
     * Classification of feature of checkpoint.
     *
     * @return string
     */
    public function getFacilityRef()
    {
        return $this->facilityRef;
    }

    /**
     * Sets a new facilityRef
     *
     * Classification of feature of checkpoint.
     *
     * @param string $facilityRef
     * @return self
     */
    public function setFacilityRef($facilityRef)
    {
        $this->facilityRef = $facilityRef;
        return $this;
    }

    /**
     * Gets as minimumLikelyDelay
     *
     * Minimum duration needed to pass through checkpoint.
     *
     * @return \DateInterval
     */
    public function getMinimumLikelyDelay()
    {
        return $this->minimumLikelyDelay;
    }

    /**
     * Sets a new minimumLikelyDelay
     *
     * Minimum duration needed to pass through checkpoint.
     *
     * @param \DateInterval $minimumLikelyDelay
     * @return self
     */
    public function setMinimumLikelyDelay(\DateInterval $minimumLikelyDelay)
    {
        $this->minimumLikelyDelay = $minimumLikelyDelay;
        return $this;
    }

    /**
     * Gets as averageDelay
     *
     * Average duration expected to pass through checkpoint.
     *
     * @return \DateInterval
     */
    public function getAverageDelay()
    {
        return $this->averageDelay;
    }

    /**
     * Sets a new averageDelay
     *
     * Average duration expected to pass through checkpoint.
     *
     * @param \DateInterval $averageDelay
     * @return self
     */
    public function setAverageDelay(\DateInterval $averageDelay)
    {
        $this->averageDelay = $averageDelay;
        return $this;
    }

    /**
     * Gets as maximumLikelyDelay
     *
     * Maximum duration expected to pass through checkpoint.
     *
     * @return \DateInterval
     */
    public function getMaximumLikelyDelay()
    {
        return $this->maximumLikelyDelay;
    }

    /**
     * Sets a new maximumLikelyDelay
     *
     * Maximum duration expected to pass through checkpoint.
     *
     * @param \DateInterval $maximumLikelyDelay
     * @return self
     */
    public function setMaximumLikelyDelay(\DateInterval $maximumLikelyDelay)
    {
        $this->maximumLikelyDelay = $maximumLikelyDelay;
        return $this;
    }


}

