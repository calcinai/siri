<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AnnotatedFacilityStructureType
 *
 * Sumamry information about a Facilities
 * XSD Type: AnnotatedFacilityStructure
 */
class AnnotatedFacilityStructureType
{

    /**
     * @property string $facilityRef
     */
    private $facilityRef = null;

    /**
     * Whether real tiem data is availabel for the stop. Default is true.
     *
     * @property bool $monitored
     */
    private $monitored = null;

    /**
     * Description of the facility (without its status)
     *
     * @property \Calcinai\Siri\Objects\FacilityStructureType $facility
     */
    private $facility = null;

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
     * Gets as monitored
     *
     * Whether real tiem data is availabel for the stop. Default is true.
     *
     * @return bool
     */
    public function getMonitored()
    {
        return $this->monitored;
    }

    /**
     * Sets a new monitored
     *
     * Whether real tiem data is availabel for the stop. Default is true.
     *
     * @param bool $monitored
     * @return self
     */
    public function setMonitored($monitored)
    {
        $this->monitored = $monitored;
        return $this;
    }

    /**
     * Gets as facility
     *
     * Description of the facility (without its status)
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
     * Description of the facility (without its status)
     *
     * @param \Calcinai\Siri\Objects\FacilityStructureType $facility
     * @return self
     */
    public function setFacility(\Calcinai\Siri\Objects\FacilityStructureType $facility)
    {
        $this->facility = $facility;
        return $this;
    }


}

