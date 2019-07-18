<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing MalfunctioningTrafficControlsType
 *
 * Malfunctioning or failed traffic control equipments.
 * XSD Type: MalfunctioningTrafficControls
 */
class MalfunctioningTrafficControlsType
{

    /**
     * The type of traffic control equipment which is malfunctioning or has failed.
     *
     * @property string $malfunctioningTrafficControlEquipmentType
     */
    private $malfunctioningTrafficControlEquipmentType = null;

    /**
     * The number of traffic control equipments which are malfunctioning or have failed.
     *
     * @property int $numberOfMalfunctioningTrafficControlEquipments
     */
    private $numberOfMalfunctioningTrafficControlEquipments = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $malfunctioningTrafficControlsExtension
     */
    private $malfunctioningTrafficControlsExtension = null;

    /**
     * Gets as malfunctioningTrafficControlEquipmentType
     *
     * The type of traffic control equipment which is malfunctioning or has failed.
     *
     * @return string
     */
    public function getMalfunctioningTrafficControlEquipmentType()
    {
        return $this->malfunctioningTrafficControlEquipmentType;
    }

    /**
     * Sets a new malfunctioningTrafficControlEquipmentType
     *
     * The type of traffic control equipment which is malfunctioning or has failed.
     *
     * @param string $malfunctioningTrafficControlEquipmentType
     * @return self
     */
    public function setMalfunctioningTrafficControlEquipmentType($malfunctioningTrafficControlEquipmentType)
    {
        $this->malfunctioningTrafficControlEquipmentType = $malfunctioningTrafficControlEquipmentType;
        return $this;
    }

    /**
     * Gets as numberOfMalfunctioningTrafficControlEquipments
     *
     * The number of traffic control equipments which are malfunctioning or have failed.
     *
     * @return int
     */
    public function getNumberOfMalfunctioningTrafficControlEquipments()
    {
        return $this->numberOfMalfunctioningTrafficControlEquipments;
    }

    /**
     * Sets a new numberOfMalfunctioningTrafficControlEquipments
     *
     * The number of traffic control equipments which are malfunctioning or have failed.
     *
     * @param int $numberOfMalfunctioningTrafficControlEquipments
     * @return self
     */
    public function setNumberOfMalfunctioningTrafficControlEquipments($numberOfMalfunctioningTrafficControlEquipments)
    {
        $this->numberOfMalfunctioningTrafficControlEquipments = $numberOfMalfunctioningTrafficControlEquipments;
        return $this;
    }

    /**
     * Gets as malfunctioningTrafficControlsExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getMalfunctioningTrafficControlsExtension()
    {
        return $this->malfunctioningTrafficControlsExtension;
    }

    /**
     * Sets a new malfunctioningTrafficControlsExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $malfunctioningTrafficControlsExtension
     * @return self
     */
    public function setMalfunctioningTrafficControlsExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $malfunctioningTrafficControlsExtension)
    {
        $this->malfunctioningTrafficControlsExtension = $malfunctioningTrafficControlsExtension;
        return $this;
    }


}

