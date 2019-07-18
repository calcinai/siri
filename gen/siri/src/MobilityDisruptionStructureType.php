<?php

namespace Calcinai\Siri;

/**
 * Class representing MobilityDisruptionStructureType
 *
 * Effect of equipment availability change on impaired access users.
 * XSD Type: MobilityDisruptionStructure
 */
class MobilityDisruptionStructureType
{

    /**
     * Whether stop or service is accessible to mobility impaired users. This may be further qualified by one ore more MobilityFacility instances to specify which types of mobility access are available (true) or not available (false). For example suitableForWheelChair, or 'tepFreeAccess.
     *
     * @property bool $mobilityImpairedAccess
     */
    private $mobilityImpairedAccess = null;

    /**
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @property string[] $accessFacility
     */
    private $accessFacility = [
        
    ];

    /**
     * Gets as mobilityImpairedAccess
     *
     * Whether stop or service is accessible to mobility impaired users. This may be further qualified by one ore more MobilityFacility instances to specify which types of mobility access are available (true) or not available (false). For example suitableForWheelChair, or 'tepFreeAccess.
     *
     * @return bool
     */
    public function getMobilityImpairedAccess()
    {
        return $this->mobilityImpairedAccess;
    }

    /**
     * Sets a new mobilityImpairedAccess
     *
     * Whether stop or service is accessible to mobility impaired users. This may be further qualified by one ore more MobilityFacility instances to specify which types of mobility access are available (true) or not available (false). For example suitableForWheelChair, or 'tepFreeAccess.
     *
     * @param bool $mobilityImpairedAccess
     * @return self
     */
    public function setMobilityImpairedAccess($mobilityImpairedAccess)
    {
        $this->mobilityImpairedAccess = $mobilityImpairedAccess;
        return $this;
    }

    /**
     * Adds as accessFacility
     *
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @return self
     * @param string $accessFacility
     */
    public function addToAccessFacility($accessFacility)
    {
        $this->accessFacility[] = $accessFacility;
        return $this;
    }

    /**
     * isset accessFacility
     *
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessFacility($index)
    {
        return isset($this->accessFacility[$index]);
    }

    /**
     * unset accessFacility
     *
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessFacility($index)
    {
        unset($this->accessFacility[$index]);
    }

    /**
     * Gets as accessFacility
     *
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @return string[]
     */
    public function getAccessFacility()
    {
        return $this->accessFacility;
    }

    /**
     * Sets a new accessFacility
     *
     * Classification of Mobility Facility type - Based on Tpeg pti23.
     *
     * @param string $accessFacility
     * @return self
     */
    public function setAccessFacility(array $accessFacility)
    {
        $this->accessFacility = $accessFacility;
        return $this;
    }


}

