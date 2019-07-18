<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing HazardousMaterialsType
 *
 * Details of hazardous materials.
 * XSD Type: HazardousMaterials
 */
class HazardousMaterialsType
{

    /**
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @property \Calcinai\Siri\Datex\HazardousMaterialsType\ChemicalNameAType\ValueAType[] $chemicalName
     */
    private $chemicalName = null;

    /**
     * The temperature at which the vapour from a hazardous substance will ignite in air.
     *
     * @property float $dangerousGoodsFlashPoint
     */
    private $dangerousGoodsFlashPoint = null;

    /**
     * The code defining the regulations, international or national, applicable for a means of transport.
     *
     * @property string $dangerousGoodsRegulations
     */
    private $dangerousGoodsRegulations = null;

    /**
     * The dangerous goods description code.
     *
     * @property string $hazardCodeIdentification
     */
    private $hazardCodeIdentification = null;

    /**
     * The version/revision number of date of issuance of the hazardous material code used.
     *
     * @property int $hazardCodeVersionNumber
     */
    private $hazardCodeVersionNumber = null;

    /**
     * A number giving additional hazard code classification of a goods item within the applicable dangerous goods regulation.
     *
     * @property string $hazardSubstanceItemPageNumber
     */
    private $hazardSubstanceItemPageNumber = null;

    /**
     * The identification of a transport emergency card giving advice for emergency actions.
     *
     * @property string $tremCardNumber
     */
    private $tremCardNumber = null;

    /**
     * A unique serial number assigned within the United Nations to substances and articles contained in a list of the dangerous goods most commonly carried.
     *
     * @property string $uNDGNumber
     */
    private $uNDGNumber = null;

    /**
     * The volume of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @property float $volumeOfDangerousGoods
     */
    private $volumeOfDangerousGoods = null;

    /**
     * The weight of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @property float $weightOfDangerousGoods
     */
    private $weightOfDangerousGoods = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $hazardousMaterialsExtension
     */
    private $hazardousMaterialsExtension = null;

    /**
     * Adds as value
     *
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\HazardousMaterialsType\ChemicalNameAType\ValueAType $value
     */
    public function addToChemicalName(\Calcinai\Siri\Datex\HazardousMaterialsType\ChemicalNameAType\ValueAType $value)
    {
        $this->chemicalName[] = $value;
        return $this;
    }

    /**
     * isset chemicalName
     *
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChemicalName($index)
    {
        return isset($this->chemicalName[$index]);
    }

    /**
     * unset chemicalName
     *
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChemicalName($index)
    {
        unset($this->chemicalName[$index]);
    }

    /**
     * Gets as chemicalName
     *
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @return \Calcinai\Siri\Datex\HazardousMaterialsType\ChemicalNameAType\ValueAType[]
     */
    public function getChemicalName()
    {
        return $this->chemicalName;
    }

    /**
     * Sets a new chemicalName
     *
     * The chemical name of the hazardous substance carried by the vehicle.
     *
     * @param \Calcinai\Siri\Datex\HazardousMaterialsType\ChemicalNameAType\ValueAType[] $chemicalName
     * @return self
     */
    public function setChemicalName(array $chemicalName)
    {
        $this->chemicalName = $chemicalName;
        return $this;
    }

    /**
     * Gets as dangerousGoodsFlashPoint
     *
     * The temperature at which the vapour from a hazardous substance will ignite in air.
     *
     * @return float
     */
    public function getDangerousGoodsFlashPoint()
    {
        return $this->dangerousGoodsFlashPoint;
    }

    /**
     * Sets a new dangerousGoodsFlashPoint
     *
     * The temperature at which the vapour from a hazardous substance will ignite in air.
     *
     * @param float $dangerousGoodsFlashPoint
     * @return self
     */
    public function setDangerousGoodsFlashPoint($dangerousGoodsFlashPoint)
    {
        $this->dangerousGoodsFlashPoint = $dangerousGoodsFlashPoint;
        return $this;
    }

    /**
     * Gets as dangerousGoodsRegulations
     *
     * The code defining the regulations, international or national, applicable for a means of transport.
     *
     * @return string
     */
    public function getDangerousGoodsRegulations()
    {
        return $this->dangerousGoodsRegulations;
    }

    /**
     * Sets a new dangerousGoodsRegulations
     *
     * The code defining the regulations, international or national, applicable for a means of transport.
     *
     * @param string $dangerousGoodsRegulations
     * @return self
     */
    public function setDangerousGoodsRegulations($dangerousGoodsRegulations)
    {
        $this->dangerousGoodsRegulations = $dangerousGoodsRegulations;
        return $this;
    }

    /**
     * Gets as hazardCodeIdentification
     *
     * The dangerous goods description code.
     *
     * @return string
     */
    public function getHazardCodeIdentification()
    {
        return $this->hazardCodeIdentification;
    }

    /**
     * Sets a new hazardCodeIdentification
     *
     * The dangerous goods description code.
     *
     * @param string $hazardCodeIdentification
     * @return self
     */
    public function setHazardCodeIdentification($hazardCodeIdentification)
    {
        $this->hazardCodeIdentification = $hazardCodeIdentification;
        return $this;
    }

    /**
     * Gets as hazardCodeVersionNumber
     *
     * The version/revision number of date of issuance of the hazardous material code used.
     *
     * @return int
     */
    public function getHazardCodeVersionNumber()
    {
        return $this->hazardCodeVersionNumber;
    }

    /**
     * Sets a new hazardCodeVersionNumber
     *
     * The version/revision number of date of issuance of the hazardous material code used.
     *
     * @param int $hazardCodeVersionNumber
     * @return self
     */
    public function setHazardCodeVersionNumber($hazardCodeVersionNumber)
    {
        $this->hazardCodeVersionNumber = $hazardCodeVersionNumber;
        return $this;
    }

    /**
     * Gets as hazardSubstanceItemPageNumber
     *
     * A number giving additional hazard code classification of a goods item within the applicable dangerous goods regulation.
     *
     * @return string
     */
    public function getHazardSubstanceItemPageNumber()
    {
        return $this->hazardSubstanceItemPageNumber;
    }

    /**
     * Sets a new hazardSubstanceItemPageNumber
     *
     * A number giving additional hazard code classification of a goods item within the applicable dangerous goods regulation.
     *
     * @param string $hazardSubstanceItemPageNumber
     * @return self
     */
    public function setHazardSubstanceItemPageNumber($hazardSubstanceItemPageNumber)
    {
        $this->hazardSubstanceItemPageNumber = $hazardSubstanceItemPageNumber;
        return $this;
    }

    /**
     * Gets as tremCardNumber
     *
     * The identification of a transport emergency card giving advice for emergency actions.
     *
     * @return string
     */
    public function getTremCardNumber()
    {
        return $this->tremCardNumber;
    }

    /**
     * Sets a new tremCardNumber
     *
     * The identification of a transport emergency card giving advice for emergency actions.
     *
     * @param string $tremCardNumber
     * @return self
     */
    public function setTremCardNumber($tremCardNumber)
    {
        $this->tremCardNumber = $tremCardNumber;
        return $this;
    }

    /**
     * Gets as uNDGNumber
     *
     * A unique serial number assigned within the United Nations to substances and articles contained in a list of the dangerous goods most commonly carried.
     *
     * @return string
     */
    public function getUNDGNumber()
    {
        return $this->uNDGNumber;
    }

    /**
     * Sets a new uNDGNumber
     *
     * A unique serial number assigned within the United Nations to substances and articles contained in a list of the dangerous goods most commonly carried.
     *
     * @param string $uNDGNumber
     * @return self
     */
    public function setUNDGNumber($uNDGNumber)
    {
        $this->uNDGNumber = $uNDGNumber;
        return $this;
    }

    /**
     * Gets as volumeOfDangerousGoods
     *
     * The volume of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @return float
     */
    public function getVolumeOfDangerousGoods()
    {
        return $this->volumeOfDangerousGoods;
    }

    /**
     * Sets a new volumeOfDangerousGoods
     *
     * The volume of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @param float $volumeOfDangerousGoods
     * @return self
     */
    public function setVolumeOfDangerousGoods($volumeOfDangerousGoods)
    {
        $this->volumeOfDangerousGoods = $volumeOfDangerousGoods;
        return $this;
    }

    /**
     * Gets as weightOfDangerousGoods
     *
     * The weight of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @return float
     */
    public function getWeightOfDangerousGoods()
    {
        return $this->weightOfDangerousGoods;
    }

    /**
     * Sets a new weightOfDangerousGoods
     *
     * The weight of dangerous goods on the vehicle(s) reported in a traffic/travel situation.
     *
     * @param float $weightOfDangerousGoods
     * @return self
     */
    public function setWeightOfDangerousGoods($weightOfDangerousGoods)
    {
        $this->weightOfDangerousGoods = $weightOfDangerousGoods;
        return $this;
    }

    /**
     * Gets as hazardousMaterialsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getHazardousMaterialsExtension()
    {
        return $this->hazardousMaterialsExtension;
    }

    /**
     * Sets a new hazardousMaterialsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $hazardousMaterialsExtension
     * @return self
     */
    public function setHazardousMaterialsExtension(\Calcinai\Siri\Datex\ExtensionType $hazardousMaterialsExtension)
    {
        $this->hazardousMaterialsExtension = $hazardousMaterialsExtension;
        return $this;
    }


}

