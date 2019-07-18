<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing AbstractEquipmentStructureType
 *
 * Elements for Abstract equipment type
 * XSD Type: AbstractEquipmentStructure
 */
class AbstractEquipmentStructureType extends DataManagedObjectStructureType
{

    /**
     * Unique identifer of equipment.
     *
     * @property string $equipmentId
     */
    private $equipmentId = null;

    /**
     * If absent then manager same as for parent
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $equipmentName
     */
    private $equipmentName = null;

    /**
     * Type of equipment.
     *
     * @property string $typeOfEquipment
     */
    private $typeOfEquipment = null;

    /**
     * Gets as equipmentId
     *
     * Unique identifer of equipment.
     *
     * @return string
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
    }

    /**
     * Sets a new equipmentId
     *
     * Unique identifer of equipment.
     *
     * @param string $equipmentId
     * @return self
     */
    public function setEquipmentId($equipmentId)
    {
        $this->equipmentId = $equipmentId;
        return $this;
    }

    /**
     * Gets as equipmentName
     *
     * If absent then manager same as for parent
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getEquipmentName()
    {
        return $this->equipmentName;
    }

    /**
     * Sets a new equipmentName
     *
     * If absent then manager same as for parent
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $equipmentName
     * @return self
     */
    public function setEquipmentName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $equipmentName)
    {
        $this->equipmentName = $equipmentName;
        return $this;
    }

    /**
     * Gets as typeOfEquipment
     *
     * Type of equipment.
     *
     * @return string
     */
    public function getTypeOfEquipment()
    {
        return $this->typeOfEquipment;
    }

    /**
     * Sets a new typeOfEquipment
     *
     * Type of equipment.
     *
     * @param string $typeOfEquipment
     * @return self
     */
    public function setTypeOfEquipment($typeOfEquipment)
    {
        $this->typeOfEquipment = $typeOfEquipment;
        return $this;
    }


}

