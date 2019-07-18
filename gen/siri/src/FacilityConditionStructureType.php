<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\FacilityStructureType $facility
     */
    private $facility = null;

    /**
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * Status of Facility.
     *
     * @property \Calcinai\Siri\FacilityStatusStructureType $facilityStatus
     */
    private $facilityStatus = null;

    /**
     * @property \Calcinai\Siri\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Setup action to remedy the change of the facility status (if partialy or totaly anavailable)
     *
     * @property \Calcinai\Siri\RemedyStructureType $remedy
     */
    private $remedy = null;

    /**
     * Description of the mechanism used to monitor the change of the facility status
     *
     * @property \Calcinai\Siri\MonitoringInformationStructureType $monitoringInfo
     */
    private $monitoringInfo = null;

    /**
     * Period (duration) of the status change for the facility
     *
     * @property \Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as facility
     *
     * Facility affected by condition
     *
     * @return \Calcinai\Siri\FacilityStructureType
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
     * @param \Calcinai\Siri\FacilityStructureType $facility
     * @return self
     */
    public function setFacility(\Calcinai\Siri\FacilityStructureType $facility)
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
     * @return \Calcinai\Siri\FacilityStatusStructureType
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
     * @param \Calcinai\Siri\FacilityStatusStructureType $facilityStatus
     * @return self
     */
    public function setFacilityStatus(\Calcinai\Siri\FacilityStatusStructureType $facilityStatus)
    {
        $this->facilityStatus = $facilityStatus;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as remedy
     *
     * Setup action to remedy the change of the facility status (if partialy or totaly anavailable)
     *
     * @return \Calcinai\Siri\RemedyStructureType
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
     * @param \Calcinai\Siri\RemedyStructureType $remedy
     * @return self
     */
    public function setRemedy(\Calcinai\Siri\RemedyStructureType $remedy)
    {
        $this->remedy = $remedy;
        return $this;
    }

    /**
     * Gets as monitoringInfo
     *
     * Description of the mechanism used to monitor the change of the facility status
     *
     * @return \Calcinai\Siri\MonitoringInformationStructureType
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
     * @param \Calcinai\Siri\MonitoringInformationStructureType $monitoringInfo
     * @return self
     */
    public function setMonitoringInfo(\Calcinai\Siri\MonitoringInformationStructureType $monitoringInfo)
    {
        $this->monitoringInfo = $monitoringInfo;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * Period (duration) of the status change for the facility
     *
     * @return \Calcinai\Siri\HalfOpenTimestampRangeStructureType
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
     * @param \Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

