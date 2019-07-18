<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing EquipmentDamageObstructionType
 *
 * An obstruction on the road resulting from the failure of equipment on, under, above or close to the road.
 * XSD Type: EquipmentDamageObstruction
 */
class EquipmentDamageObstructionType extends ObstructionType
{

    /**
     * Characterization of an obstruction on the road resulting from the failure of equipment on, under, above or close to the road.
     *
     * @property string $equipmentDamageType
     */
    private $equipmentDamageType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $equipmentDamageObstructionExtension
     */
    private $equipmentDamageObstructionExtension = null;

    /**
     * Gets as equipmentDamageType
     *
     * Characterization of an obstruction on the road resulting from the failure of equipment on, under, above or close to the road.
     *
     * @return string
     */
    public function getEquipmentDamageType()
    {
        return $this->equipmentDamageType;
    }

    /**
     * Sets a new equipmentDamageType
     *
     * Characterization of an obstruction on the road resulting from the failure of equipment on, under, above or close to the road.
     *
     * @param string $equipmentDamageType
     * @return self
     */
    public function setEquipmentDamageType($equipmentDamageType)
    {
        $this->equipmentDamageType = $equipmentDamageType;
        return $this;
    }

    /**
     * Gets as equipmentDamageObstructionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getEquipmentDamageObstructionExtension()
    {
        return $this->equipmentDamageObstructionExtension;
    }

    /**
     * Sets a new equipmentDamageObstructionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $equipmentDamageObstructionExtension
     * @return self
     */
    public function setEquipmentDamageObstructionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $equipmentDamageObstructionExtension)
    {
        $this->equipmentDamageObstructionExtension = $equipmentDamageObstructionExtension;
        return $this;
    }


}

