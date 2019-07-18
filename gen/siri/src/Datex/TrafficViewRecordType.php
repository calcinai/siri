<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficViewRecordType
 *
 * An identifiable instance of a single record within a traffic view.
 * XSD Type: TrafficViewRecord
 */
class TrafficViewRecordType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * A number identifying the sequence of the record within the set of records which comprise the traffic view.
     *
     * @property int $recordSequenceNumber
     */
    private $recordSequenceNumber = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TrafficElementType $trafficElement
     */
    private $trafficElement = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\OperatorActionType $operatorAction
     */
    private $operatorAction = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ElaboratedDataType $elaboratedData
     */
    private $elaboratedData = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\CCTVImagesType $cctvimages
     */
    private $cctvimages = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewRecordExtension
     */
    private $trafficViewRecordExtension = null;

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
     * Gets as recordSequenceNumber
     *
     * A number identifying the sequence of the record within the set of records which comprise the traffic view.
     *
     * @return int
     */
    public function getRecordSequenceNumber()
    {
        return $this->recordSequenceNumber;
    }

    /**
     * Sets a new recordSequenceNumber
     *
     * A number identifying the sequence of the record within the set of records which comprise the traffic view.
     *
     * @param int $recordSequenceNumber
     * @return self
     */
    public function setRecordSequenceNumber($recordSequenceNumber)
    {
        $this->recordSequenceNumber = $recordSequenceNumber;
        return $this;
    }

    /**
     * Gets as trafficElement
     *
     * @return \Calcinai\Siri\Objects\Datex\TrafficElementType
     */
    public function getTrafficElement()
    {
        return $this->trafficElement;
    }

    /**
     * Sets a new trafficElement
     *
     * @param \Calcinai\Siri\Objects\Datex\TrafficElementType $trafficElement
     * @return self
     */
    public function setTrafficElement(\Calcinai\Siri\Objects\Datex\TrafficElementType $trafficElement)
    {
        $this->trafficElement = $trafficElement;
        return $this;
    }

    /**
     * Gets as operatorAction
     *
     * @return \Calcinai\Siri\Objects\Datex\OperatorActionType
     */
    public function getOperatorAction()
    {
        return $this->operatorAction;
    }

    /**
     * Sets a new operatorAction
     *
     * @param \Calcinai\Siri\Objects\Datex\OperatorActionType $operatorAction
     * @return self
     */
    public function setOperatorAction(\Calcinai\Siri\Objects\Datex\OperatorActionType $operatorAction)
    {
        $this->operatorAction = $operatorAction;
        return $this;
    }

    /**
     * Gets as elaboratedData
     *
     * @return \Calcinai\Siri\Objects\Datex\ElaboratedDataType
     */
    public function getElaboratedData()
    {
        return $this->elaboratedData;
    }

    /**
     * Sets a new elaboratedData
     *
     * @param \Calcinai\Siri\Objects\Datex\ElaboratedDataType $elaboratedData
     * @return self
     */
    public function setElaboratedData(\Calcinai\Siri\Objects\Datex\ElaboratedDataType $elaboratedData)
    {
        $this->elaboratedData = $elaboratedData;
        return $this;
    }

    /**
     * Gets as cctvimages
     *
     * @return \Calcinai\Siri\Objects\Datex\CCTVImagesType
     */
    public function getCctvimages()
    {
        return $this->cctvimages;
    }

    /**
     * Sets a new cctvimages
     *
     * @param \Calcinai\Siri\Objects\Datex\CCTVImagesType $cctvimages
     * @return self
     */
    public function setCctvimages(\Calcinai\Siri\Objects\Datex\CCTVImagesType $cctvimages)
    {
        $this->cctvimages = $cctvimages;
        return $this;
    }

    /**
     * Gets as trafficViewRecordExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficViewRecordExtension()
    {
        return $this->trafficViewRecordExtension;
    }

    /**
     * Sets a new trafficViewRecordExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewRecordExtension
     * @return self
     */
    public function setTrafficViewRecordExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewRecordExtension)
    {
        $this->trafficViewRecordExtension = $trafficViewRecordExtension;
        return $this;
    }


}

