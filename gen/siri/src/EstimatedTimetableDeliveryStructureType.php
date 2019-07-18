<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedTimetableDeliveryStructureType
 *
 * Data type for Delivery for Realtime Timetable Service.
 * XSD Type: EstimatedTimetableDeliveryStructure
 */
class EstimatedTimetableDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Estomated JorneyVersions, grouped by timetable version.
     *
     * @property \Calcinai\Siri\Objects\EstimatedVersionFrameStructureType $estimatedJourneyVersionFrame
     */
    private $estimatedJourneyVersionFrame = null;

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
     * Gets as estimatedJourneyVersionFrame
     *
     * Estomated JorneyVersions, grouped by timetable version.
     *
     * @return \Calcinai\Siri\Objects\EstimatedVersionFrameStructureType
     */
    public function getEstimatedJourneyVersionFrame()
    {
        return $this->estimatedJourneyVersionFrame;
    }

    /**
     * Sets a new estimatedJourneyVersionFrame
     *
     * Estomated JorneyVersions, grouped by timetable version.
     *
     * @param \Calcinai\Siri\Objects\EstimatedVersionFrameStructureType $estimatedJourneyVersionFrame
     * @return self
     */
    public function setEstimatedJourneyVersionFrame(\Calcinai\Siri\Objects\EstimatedVersionFrameStructureType $estimatedJourneyVersionFrame)
    {
        $this->estimatedJourneyVersionFrame = $estimatedJourneyVersionFrame;
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

