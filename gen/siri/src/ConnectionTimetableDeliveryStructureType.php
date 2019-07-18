<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionTimetableDeliveryStructureType
 *
 * Type for Delivery for Connection Protection.
 * XSD Type: ConnectionTimetableDeliveryStructure
 */
class ConnectionTimetableDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\TimetabledFeederArrival $timetabledFeederArrival
     */
    private $timetabledFeederArrival = null;

    /**
     * @property \Calcinai\Siri\TimetabledFeederArrivalCancellation $timetabledFeederArrivalCancellation
     */
    private $timetabledFeederArrivalCancellation = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of response. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as timetabledFeederArrival
     *
     * @return \Calcinai\Siri\TimetabledFeederArrival
     */
    public function getTimetabledFeederArrival()
    {
        return $this->timetabledFeederArrival;
    }

    /**
     * Sets a new timetabledFeederArrival
     *
     * @param \Calcinai\Siri\TimetabledFeederArrival $timetabledFeederArrival
     * @return self
     */
    public function setTimetabledFeederArrival(\Calcinai\Siri\TimetabledFeederArrival $timetabledFeederArrival)
    {
        $this->timetabledFeederArrival = $timetabledFeederArrival;
        return $this;
    }

    /**
     * Gets as timetabledFeederArrivalCancellation
     *
     * @return \Calcinai\Siri\TimetabledFeederArrivalCancellation
     */
    public function getTimetabledFeederArrivalCancellation()
    {
        return $this->timetabledFeederArrivalCancellation;
    }

    /**
     * Sets a new timetabledFeederArrivalCancellation
     *
     * @param \Calcinai\Siri\TimetabledFeederArrivalCancellation $timetabledFeederArrivalCancellation
     * @return self
     */
    public function setTimetabledFeederArrivalCancellation(\Calcinai\Siri\TimetabledFeederArrivalCancellation $timetabledFeederArrivalCancellation)
    {
        $this->timetabledFeederArrivalCancellation = $timetabledFeederArrivalCancellation;
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

