<?php

namespace Calcinai\Siri;

/**
 * Class representing ProductionTimetableDeliveryStructureType
 *
 * Delivery for Production Timetable Service type.
 * XSD Type: ProductionTimetableDeliveryStructure
 */
class ProductionTimetableDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\DatedTimetableVersionFrame $datedTimetableVersionFrame
     */
    private $datedTimetableVersionFrame = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. fixed
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
     * Version number of response. fixed
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
     * Gets as datedTimetableVersionFrame
     *
     * @return \Calcinai\Siri\DatedTimetableVersionFrame
     */
    public function getDatedTimetableVersionFrame()
    {
        return $this->datedTimetableVersionFrame;
    }

    /**
     * Sets a new datedTimetableVersionFrame
     *
     * @param \Calcinai\Siri\DatedTimetableVersionFrame $datedTimetableVersionFrame
     * @return self
     */
    public function setDatedTimetableVersionFrame(\Calcinai\Siri\DatedTimetableVersionFrame $datedTimetableVersionFrame)
    {
        $this->datedTimetableVersionFrame = $datedTimetableVersionFrame;
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

