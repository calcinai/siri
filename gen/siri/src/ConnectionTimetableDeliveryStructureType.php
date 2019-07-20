<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\TimetabledFeederArrival[] $timetabledFeederArrival
     */
    private $timetabledFeederArrival = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\TimetabledFeederArrivalCancellation[] $timetabledFeederArrivalCancellation
     */
    private $timetabledFeederArrivalCancellation = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * Adds as timetabledFeederArrival
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TimetabledFeederArrival $timetabledFeederArrival
     */
    public function addToTimetabledFeederArrival(\Calcinai\Siri\Objects\TimetabledFeederArrival $timetabledFeederArrival)
    {
        $this->timetabledFeederArrival[] = $timetabledFeederArrival;
        return $this;
    }

    /**
     * isset timetabledFeederArrival
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimetabledFeederArrival($index)
    {
        return isset($this->timetabledFeederArrival[$index]);
    }

    /**
     * unset timetabledFeederArrival
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimetabledFeederArrival($index)
    {
        unset($this->timetabledFeederArrival[$index]);
    }

    /**
     * Gets as timetabledFeederArrival
     *
     * @return \Calcinai\Siri\Objects\TimetabledFeederArrival[]
     */
    public function getTimetabledFeederArrival()
    {
        return $this->timetabledFeederArrival;
    }

    /**
     * Sets a new timetabledFeederArrival
     *
     * @param \Calcinai\Siri\Objects\TimetabledFeederArrival[] $timetabledFeederArrival
     * @return self
     */
    public function setTimetabledFeederArrival(array $timetabledFeederArrival)
    {
        $this->timetabledFeederArrival = $timetabledFeederArrival;
        return $this;
    }

    /**
     * Adds as timetabledFeederArrivalCancellation
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TimetabledFeederArrivalCancellation $timetabledFeederArrivalCancellation
     */
    public function addToTimetabledFeederArrivalCancellation(\Calcinai\Siri\Objects\TimetabledFeederArrivalCancellation $timetabledFeederArrivalCancellation)
    {
        $this->timetabledFeederArrivalCancellation[] = $timetabledFeederArrivalCancellation;
        return $this;
    }

    /**
     * isset timetabledFeederArrivalCancellation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimetabledFeederArrivalCancellation($index)
    {
        return isset($this->timetabledFeederArrivalCancellation[$index]);
    }

    /**
     * unset timetabledFeederArrivalCancellation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimetabledFeederArrivalCancellation($index)
    {
        unset($this->timetabledFeederArrivalCancellation[$index]);
    }

    /**
     * Gets as timetabledFeederArrivalCancellation
     *
     * @return \Calcinai\Siri\Objects\TimetabledFeederArrivalCancellation[]
     */
    public function getTimetabledFeederArrivalCancellation()
    {
        return $this->timetabledFeederArrivalCancellation;
    }

    /**
     * Sets a new timetabledFeederArrivalCancellation
     *
     * @param \Calcinai\Siri\Objects\TimetabledFeederArrivalCancellation[] $timetabledFeederArrivalCancellation
     * @return self
     */
    public function setTimetabledFeederArrivalCancellation(array $timetabledFeederArrivalCancellation)
    {
        $this->timetabledFeederArrivalCancellation = $timetabledFeederArrivalCancellation;
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

