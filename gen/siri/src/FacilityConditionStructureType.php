<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityConditionStructureType
 *
 * Description of any change concernin g a facility. New structure defined in SIRI XSD 1.1 for Faclities Management
 * XSD Type: FacilityConditionStructure
 */
class FacilityConditionStructureType
{

    /**
     * Facility affected by condition
     *
     * @property \Calcinai\Siri\Objects\FacilityStructureType $facility
     */
    private $facility = null;

    /**
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * Status of Facility.
     *
     * @property \Calcinai\Siri\Objects\FacilityStatusStructureType $facilityStatus
     */
    private $facilityStatus = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Setup action to remedy the change of the facility status (if partialy or totaly anavailable)
     *
     * @property \Calcinai\Siri\Objects\RemedyStructureType $remedy
     */
    private $remedy = null;

    /**
     * Description of the mechanism used to monitor the change of the facility status
     *
     * @property \Calcinai\Siri\Objects\MonitoringInformationStructureType $monitoringInfo
     */
    private $monitoringInfo = null;

    /**
     * Period (duration) of the status change for the facility
     *
     * @property \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as facility
     *
     * Facility affected by condition
     *
     * @return \Calcinai\Siri\Objects\FacilityStructureType
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * Facility affected by condition
     *
     * @param \Calcinai\Siri\Objects\FacilityStructureType $facility
     * @return self
     */
    public function setFacility(\Calcinai\Siri\Objects\FacilityStructureType $facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Gets as facilityRef
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
     * @param string $facilityRef
     * @return self
     */
    public function setFacilityRef($facilityRef)
    {
        $this->facilityRef = $facilityRef;
        return $this;
    }

    /**
     * Gets as facilityStatus
     *
     * Status of Facility.
     *
     * @return \Calcinai\Siri\Objects\FacilityStatusStructureType
     */
    public function getFacilityStatus()
    {
        return $this->facilityStatus;
    }

    /**
     * Sets a new facilityStatus
     *
     * Status of Facility.
     *
     * @param \Calcinai\Siri\Objects\FacilityStatusStructureType $facilityStatus
     * @return self
     */
    public function setFacilityStatus(\Calcinai\Siri\Objects\FacilityStatusStructureType $facilityStatus)
    {
        $this->facilityStatus = $facilityStatus;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as remedy
     *
     * Setup action to remedy the change of the facility status (if partialy or totaly anavailable)
     *
     * @return \Calcinai\Siri\Objects\RemedyStructureType
     */
    public function getRemedy()
    {
        return $this->remedy;
    }

    /**
     * Sets a new remedy
     *
     * Setup action to remedy the change of the facility status (if partialy or totaly anavailable)
     *
     * @param \Calcinai\Siri\Objects\RemedyStructureType $remedy
     * @return self
     */
    public function setRemedy(\Calcinai\Siri\Objects\RemedyStructureType $remedy)
    {
        $this->remedy = $remedy;
        return $this;
    }

    /**
     * Gets as monitoringInfo
     *
     * Description of the mechanism used to monitor the change of the facility status
     *
     * @return \Calcinai\Siri\Objects\MonitoringInformationStructureType
     */
    public function getMonitoringInfo()
    {
        return $this->monitoringInfo;
    }

    /**
     * Sets a new monitoringInfo
     *
     * Description of the mechanism used to monitor the change of the facility status
     *
     * @param \Calcinai\Siri\Objects\MonitoringInformationStructureType $monitoringInfo
     * @return self
     */
    public function setMonitoringInfo(\Calcinai\Siri\Objects\MonitoringInformationStructureType $monitoringInfo)
    {
        $this->monitoringInfo = $monitoringInfo;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * Period (duration) of the status change for the facility
     *
     * @return \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * Period (duration) of the status change for the facility
     *
     * @param \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
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

