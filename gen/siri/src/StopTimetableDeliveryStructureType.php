<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopTimetableDeliveryStructureType
 *
 * Data type Delivery for Stop Timetable Service.
 * XSD Type: StopTimetableDeliveryStructure
 */
class StopTimetableDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @property \Calcinai\Siri\Objects\TimetabledStopVisitStructureType[] $timetabledStopVisit
     */
    private $timetabledStopVisit = [
        
    ];

    /**
     * A cancellation of a previously issued stop visit
     *
     * @property \Calcinai\Siri\Objects\TimetabledStopVisitCancellationStructureType[] $timetabledStopVisitCancellation
     */
    private $timetabledStopVisitCancellation = [
        
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
     * Adds as timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TimetabledStopVisitStructureType $timetabledStopVisit
     */
    public function addToTimetabledStopVisit(\Calcinai\Siri\Objects\TimetabledStopVisitStructureType $timetabledStopVisit)
    {
        $this->timetabledStopVisit[] = $timetabledStopVisit;
        return $this;
    }

    /**
     * isset timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimetabledStopVisit($index)
    {
        return isset($this->timetabledStopVisit[$index]);
    }

    /**
     * unset timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimetabledStopVisit($index)
    {
        unset($this->timetabledStopVisit[$index]);
    }

    /**
     * Gets as timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @return \Calcinai\Siri\Objects\TimetabledStopVisitStructureType[]
     */
    public function getTimetabledStopVisit()
    {
        return $this->timetabledStopVisit;
    }

    /**
     * Sets a new timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @param \Calcinai\Siri\Objects\TimetabledStopVisitStructureType[] $timetabledStopVisit
     * @return self
     */
    public function setTimetabledStopVisit(array $timetabledStopVisit)
    {
        $this->timetabledStopVisit = $timetabledStopVisit;
        return $this;
    }

    /**
     * Adds as timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @return self
     * @param \Calcinai\Siri\Objects\TimetabledStopVisitCancellationStructureType $timetabledStopVisitCancellation
     */
    public function addToTimetabledStopVisitCancellation(\Calcinai\Siri\Objects\TimetabledStopVisitCancellationStructureType $timetabledStopVisitCancellation)
    {
        $this->timetabledStopVisitCancellation[] = $timetabledStopVisitCancellation;
        return $this;
    }

    /**
     * isset timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimetabledStopVisitCancellation($index)
    {
        return isset($this->timetabledStopVisitCancellation[$index]);
    }

    /**
     * unset timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimetabledStopVisitCancellation($index)
    {
        unset($this->timetabledStopVisitCancellation[$index]);
    }

    /**
     * Gets as timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @return \Calcinai\Siri\Objects\TimetabledStopVisitCancellationStructureType[]
     */
    public function getTimetabledStopVisitCancellation()
    {
        return $this->timetabledStopVisitCancellation;
    }

    /**
     * Sets a new timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @param \Calcinai\Siri\Objects\TimetabledStopVisitCancellationStructureType[] $timetabledStopVisitCancellation
     * @return self
     */
    public function setTimetabledStopVisitCancellation(array $timetabledStopVisitCancellation)
    {
        $this->timetabledStopVisitCancellation = $timetabledStopVisitCancellation;
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

