<?php

namespace Calcinai\Siri;

/**
 * Class representing EquipmentAvailabilityStructureType
 *
 * Type for Availaibility Change of Equipment.
 * XSD Type: EquipmentAvailabilityStructure
 */
class EquipmentAvailabilityStructureType
{

    /**
     * Identifier of the equipment.
     *
     * @property string $equipmentRef
     */
    private $equipmentRef = null;

    /**
     * Description of equipment.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $description
     */
    private $description = null;

    /**
     * Reference to Equipment type identifier.
     *
     * @property string $equipmentTypeRef
     */
    private $equipmentTypeRef = null;

    /**
     * Period for which Status Change applies. If omitted, indefinite period.
     *
     * @property \Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Status of the equipment available. Enumeration. Default is not available.
     *
     * @property string $equipmentStatus
     */
    private $equipmentStatus = null;

    /**
     * Service Features associated with equipment.
     *
     * @property string[] $equipmentFeatures
     */
    private $equipmentFeatures = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as equipmentRef
     *
     * Identifier of the equipment.
     *
     * @return string
     */
    public function getEquipmentRef()
    {
        return $this->equipmentRef;
    }

    /**
     * Sets a new equipmentRef
     *
     * Identifier of the equipment.
     *
     * @param string $equipmentRef
     * @return self
     */
    public function setEquipmentRef($equipmentRef)
    {
        $this->equipmentRef = $equipmentRef;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of equipment.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of equipment.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $description
     * @return self
     */
    public function setDescription(\Calcinai\Siri\NaturalLanguageStringStructureType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as equipmentTypeRef
     *
     * Reference to Equipment type identifier.
     *
     * @return string
     */
    public function getEquipmentTypeRef()
    {
        return $this->equipmentTypeRef;
    }

    /**
     * Sets a new equipmentTypeRef
     *
     * Reference to Equipment type identifier.
     *
     * @param string $equipmentTypeRef
     * @return self
     */
    public function setEquipmentTypeRef($equipmentTypeRef)
    {
        $this->equipmentTypeRef = $equipmentTypeRef;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * Period for which Status Change applies. If omitted, indefinite period.
     *
     * @return \Calcinai\Siri\HalfOpenTimestampRangeStructureType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * Period for which Status Change applies. If omitted, indefinite period.
     *
     * @param \Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Calcinai\Siri\HalfOpenTimestampRangeStructureType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as equipmentStatus
     *
     * Status of the equipment available. Enumeration. Default is not available.
     *
     * @return string
     */
    public function getEquipmentStatus()
    {
        return $this->equipmentStatus;
    }

    /**
     * Sets a new equipmentStatus
     *
     * Status of the equipment available. Enumeration. Default is not available.
     *
     * @param string $equipmentStatus
     * @return self
     */
    public function setEquipmentStatus($equipmentStatus)
    {
        $this->equipmentStatus = $equipmentStatus;
        return $this;
    }

    /**
     * Adds as featureRef
     *
     * Service Features associated with equipment.
     *
     * @return self
     * @param string $featureRef
     */
    public function addToEquipmentFeatures($featureRef)
    {
        $this->equipmentFeatures[] = $featureRef;
        return $this;
    }

    /**
     * isset equipmentFeatures
     *
     * Service Features associated with equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipmentFeatures($index)
    {
        return isset($this->equipmentFeatures[$index]);
    }

    /**
     * unset equipmentFeatures
     *
     * Service Features associated with equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipmentFeatures($index)
    {
        unset($this->equipmentFeatures[$index]);
    }

    /**
     * Gets as equipmentFeatures
     *
     * Service Features associated with equipment.
     *
     * @return string[]
     */
    public function getEquipmentFeatures()
    {
        return $this->equipmentFeatures;
    }

    /**
     * Sets a new equipmentFeatures
     *
     * Service Features associated with equipment.
     *
     * @param string $equipmentFeatures
     * @return self
     */
    public function setEquipmentFeatures(array $equipmentFeatures)
    {
        $this->equipmentFeatures = $equipmentFeatures;
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

