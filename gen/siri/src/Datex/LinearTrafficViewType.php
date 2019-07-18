<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing LinearTrafficViewType
 *
 * An identifiable instance of a linear traffic view at a single point in time relating to a linear section of road, comprising one or more traffic view records.
 * XSD Type: LinearTrafficView
 */
class LinearTrafficViewType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * A reference to a predefined location which is of type linear.
     *
     * @property string $linearPredefinedLocationReference
     */
    private $linearPredefinedLocationReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TrafficViewRecordType[] $trafficViewRecord
     */
    private $trafficViewRecord = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $linearTrafficViewExtension
     */
    private $linearTrafficViewExtension = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as linearPredefinedLocationReference
     *
     * A reference to a predefined location which is of type linear.
     *
     * @return string
     */
    public function getLinearPredefinedLocationReference()
    {
        return $this->linearPredefinedLocationReference;
    }

    /**
     * Sets a new linearPredefinedLocationReference
     *
     * A reference to a predefined location which is of type linear.
     *
     * @param string $linearPredefinedLocationReference
     * @return self
     */
    public function setLinearPredefinedLocationReference($linearPredefinedLocationReference)
    {
        $this->linearPredefinedLocationReference = $linearPredefinedLocationReference;
        return $this;
    }

    /**
     * Adds as trafficViewRecord
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\TrafficViewRecordType $trafficViewRecord
     */
    public function addToTrafficViewRecord(\Calcinai\Siri\Objects\Datex\TrafficViewRecordType $trafficViewRecord)
    {
        $this->trafficViewRecord[] = $trafficViewRecord;
        return $this;
    }

    /**
     * isset trafficViewRecord
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrafficViewRecord($index)
    {
        return isset($this->trafficViewRecord[$index]);
    }

    /**
     * unset trafficViewRecord
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrafficViewRecord($index)
    {
        unset($this->trafficViewRecord[$index]);
    }

    /**
     * Gets as trafficViewRecord
     *
     * @return \Calcinai\Siri\Objects\Datex\TrafficViewRecordType[]
     */
    public function getTrafficViewRecord()
    {
        return $this->trafficViewRecord;
    }

    /**
     * Sets a new trafficViewRecord
     *
     * @param \Calcinai\Siri\Objects\Datex\TrafficViewRecordType[] $trafficViewRecord
     * @return self
     */
    public function setTrafficViewRecord(array $trafficViewRecord)
    {
        $this->trafficViewRecord = $trafficViewRecord;
        return $this;
    }

    /**
     * Gets as linearTrafficViewExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getLinearTrafficViewExtension()
    {
        return $this->linearTrafficViewExtension;
    }

    /**
     * Sets a new linearTrafficViewExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $linearTrafficViewExtension
     * @return self
     */
    public function setLinearTrafficViewExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $linearTrafficViewExtension)
    {
        $this->linearTrafficViewExtension = $linearTrafficViewExtension;
        return $this;
    }


}

