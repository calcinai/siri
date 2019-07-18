<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\TimetabledStopVisitStructureType $timetabledStopVisit
     */
    private $timetabledStopVisit = null;

    /**
     * A cancellation of a previously issued stop visit
     *
     * @property \Calcinai\Siri\TimetabledStopVisitCancellationStructureType $timetabledStopVisitCancellation
     */
    private $timetabledStopVisitCancellation = null;

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
     * Gets as timetabledStopVisit
     *
     * A visit to a stop by a vehicle as an arrival and /or departure, as timetabled in the production timetable
     *
     * @return \Calcinai\Siri\TimetabledStopVisitStructureType
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
     * @param \Calcinai\Siri\TimetabledStopVisitStructureType $timetabledStopVisit
     * @return self
     */
    public function setTimetabledStopVisit(\Calcinai\Siri\TimetabledStopVisitStructureType $timetabledStopVisit)
    {
        $this->timetabledStopVisit = $timetabledStopVisit;
        return $this;
    }

    /**
     * Gets as timetabledStopVisitCancellation
     *
     * A cancellation of a previously issued stop visit
     *
     * @return \Calcinai\Siri\TimetabledStopVisitCancellationStructureType
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
     * @param \Calcinai\Siri\TimetabledStopVisitCancellationStructureType $timetabledStopVisitCancellation
     * @return self
     */
    public function setTimetabledStopVisitCancellation(\Calcinai\Siri\TimetabledStopVisitCancellationStructureType $timetabledStopVisitCancellation)
    {
        $this->timetabledStopVisitCancellation = $timetabledStopVisitCancellation;
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

