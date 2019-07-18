<?php

namespace Calcinai\Siri;

/**
 * Class representing WaitProlongedDepartureStructureType
 *
 * Type for Distributor prolonged wait action.
 * XSD Type: WaitProlongedDepartureStructure
 */
class WaitProlongedDepartureStructureType extends AbstractDistributorItemStructureType
{

    /**
     * Estimated Departure Time from the connection.
     *
     * @property \DateTime $expectedDepartureTime
     */
    private $expectedDepartureTime = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as expectedDepartureTime
     *
     * Estimated Departure Time from the connection.
     *
     * @return \DateTime
     */
    public function getExpectedDepartureTime()
    {
        return $this->expectedDepartureTime;
    }

    /**
     * Sets a new expectedDepartureTime
     *
     * Estimated Departure Time from the connection.
     *
     * @param \DateTime $expectedDepartureTime
     * @return self
     */
    public function setExpectedDepartureTime(\DateTime $expectedDepartureTime)
    {
        $this->expectedDepartureTime = $expectedDepartureTime;
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

