<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing EtoHType
 *
 * Enumerations alphabetically ordered between E and H.
 * XSD Type: EtoH
 */
class EtoHType
{

    /**
     * @property string $environmentalObstructionTypeEnum
     */
    private $environmentalObstructionTypeEnum = null;

    /**
     * @property string $effectOnRoadLayoutEnum
     */
    private $effectOnRoadLayoutEnum = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $etoHExtension
     */
    private $etoHExtension = null;

    /**
     * @property string $fuelTypeEnum
     */
    private $fuelTypeEnum = null;

    /**
     * @property string $equipmentDamageTypeEnum
     */
    private $equipmentDamageTypeEnum = null;

    /**
     * Gets as environmentalObstructionTypeEnum
     *
     * @return string
     */
    public function getEnvironmentalObstructionTypeEnum()
    {
        return $this->environmentalObstructionTypeEnum;
    }

    /**
     * Sets a new environmentalObstructionTypeEnum
     *
     * @param string $environmentalObstructionTypeEnum
     * @return self
     */
    public function setEnvironmentalObstructionTypeEnum($environmentalObstructionTypeEnum)
    {
        $this->environmentalObstructionTypeEnum = $environmentalObstructionTypeEnum;
        return $this;
    }

    /**
     * Gets as effectOnRoadLayoutEnum
     *
     * @return string
     */
    public function getEffectOnRoadLayoutEnum()
    {
        return $this->effectOnRoadLayoutEnum;
    }

    /**
     * Sets a new effectOnRoadLayoutEnum
     *
     * @param string $effectOnRoadLayoutEnum
     * @return self
     */
    public function setEffectOnRoadLayoutEnum($effectOnRoadLayoutEnum)
    {
        $this->effectOnRoadLayoutEnum = $effectOnRoadLayoutEnum;
        return $this;
    }

    /**
     * Gets as etoHExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getEtoHExtension()
    {
        return $this->etoHExtension;
    }

    /**
     * Sets a new etoHExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $etoHExtension
     * @return self
     */
    public function setEtoHExtension(\Calcinai\Siri\Datex\ExtensionType $etoHExtension)
    {
        $this->etoHExtension = $etoHExtension;
        return $this;
    }

    /**
     * Gets as fuelTypeEnum
     *
     * @return string
     */
    public function getFuelTypeEnum()
    {
        return $this->fuelTypeEnum;
    }

    /**
     * Sets a new fuelTypeEnum
     *
     * @param string $fuelTypeEnum
     * @return self
     */
    public function setFuelTypeEnum($fuelTypeEnum)
    {
        $this->fuelTypeEnum = $fuelTypeEnum;
        return $this;
    }

    /**
     * Gets as equipmentDamageTypeEnum
     *
     * @return string
     */
    public function getEquipmentDamageTypeEnum()
    {
        return $this->equipmentDamageTypeEnum;
    }

    /**
     * Sets a new equipmentDamageTypeEnum
     *
     * @param string $equipmentDamageTypeEnum
     * @return self
     */
    public function setEquipmentDamageTypeEnum($equipmentDamageTypeEnum)
    {
        $this->equipmentDamageTypeEnum = $equipmentDamageTypeEnum;
        return $this;
    }


}

