<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\DatedTimetableVersionFrame[] $datedTimetableVersionFrame
     */
    private $datedTimetableVersionFrame = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * Adds as datedTimetableVersionFrame
     *
     * @return self
     * @param \Calcinai\Siri\Objects\DatedTimetableVersionFrame $datedTimetableVersionFrame
     */
    public function addToDatedTimetableVersionFrame(\Calcinai\Siri\Objects\DatedTimetableVersionFrame $datedTimetableVersionFrame)
    {
        $this->datedTimetableVersionFrame[] = $datedTimetableVersionFrame;
        return $this;
    }

    /**
     * isset datedTimetableVersionFrame
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatedTimetableVersionFrame($index)
    {
        return isset($this->datedTimetableVersionFrame[$index]);
    }

    /**
     * unset datedTimetableVersionFrame
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatedTimetableVersionFrame($index)
    {
        unset($this->datedTimetableVersionFrame[$index]);
    }

    /**
     * Gets as datedTimetableVersionFrame
     *
     * @return \Calcinai\Siri\Objects\DatedTimetableVersionFrame[]
     */
    public function getDatedTimetableVersionFrame()
    {
        return $this->datedTimetableVersionFrame;
    }

    /**
     * Sets a new datedTimetableVersionFrame
     *
     * @param \Calcinai\Siri\Objects\DatedTimetableVersionFrame[] $datedTimetableVersionFrame
     * @return self
     */
    public function setDatedTimetableVersionFrame(array $datedTimetableVersionFrame)
    {
        $this->datedTimetableVersionFrame = $datedTimetableVersionFrame;
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

