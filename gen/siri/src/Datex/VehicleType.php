<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VehicleType
 *
 * Details of an individual vehicle.
 * XSD Type: Vehicle
 */
class VehicleType
{

    /**
     * The colour of the vehicle.
     *
     * @property \Calcinai\Siri\Objects\Datex\VehicleType\VehicleColourAType\ValueAType[] $vehicleColour
     */
    private $vehicleColour = null;

    /**
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @property \Calcinai\Siri\Objects\Datex\VehicleType\VehicleCountryOfOriginAType\ValueAType[] $vehicleCountryOfOrigin
     */
    private $vehicleCountryOfOrigin = null;

    /**
     * A code, either a specific one in a particular format, or the registration number and registration authority, identifying the individual vehicle. To make this unique the 2-alpha country code should used as a pre-fix.
     *
     * @property string $vehicleIdentifier
     */
    private $vehicleIdentifier = null;

    /**
     * Indicates the stated manufacturer of the vehicle i.e. Ford.
     *
     * @property string $vehicleManufacturer
     */
    private $vehicleManufacturer = null;

    /**
     * Indicates the model (or range name) of the vehicle i.e. Ford MONDEO.
     *
     * @property string $vehicleModel
     */
    private $vehicleModel = null;

    /**
     * A code, either a specific one in a particular framework, or the registration number and registration authority, identifying the individual vehicle.
     *
     * @property string $vehicleRegistrationPlateIdentifier
     */
    private $vehicleRegistrationPlateIdentifier = null;

    /**
     * The status of the vehicle.
     *
     * @property string $vehicleStatus
     */
    private $vehicleStatus = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics
     */
    private $vehicleCharacteristics = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\AxleSpacingType[] $axleSpacingOnVehicle
     */
    private $axleSpacingOnVehicle = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\AxleWeightType[] $axleWeightsOfVehicle
     */
    private $axleWeightsOfVehicle = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\HazardousMaterialsType $hazardousGoodsAssociatedWithVehicle
     */
    private $hazardousGoodsAssociatedWithVehicle = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleExtension
     */
    private $vehicleExtension = null;

    /**
     * Adds as value
     *
     * The colour of the vehicle.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\VehicleType\VehicleColourAType\ValueAType $value
     */
    public function addToVehicleColour(\Calcinai\Siri\Objects\Datex\VehicleType\VehicleColourAType\ValueAType $value)
    {
        $this->vehicleColour[] = $value;
        return $this;
    }

    /**
     * isset vehicleColour
     *
     * The colour of the vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleColour($index)
    {
        return isset($this->vehicleColour[$index]);
    }

    /**
     * unset vehicleColour
     *
     * The colour of the vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleColour($index)
    {
        unset($this->vehicleColour[$index]);
    }

    /**
     * Gets as vehicleColour
     *
     * The colour of the vehicle.
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleType\VehicleColourAType\ValueAType[]
     */
    public function getVehicleColour()
    {
        return $this->vehicleColour;
    }

    /**
     * Sets a new vehicleColour
     *
     * The colour of the vehicle.
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleType\VehicleColourAType\ValueAType[] $vehicleColour
     * @return self
     */
    public function setVehicleColour(array $vehicleColour)
    {
        $this->vehicleColour = $vehicleColour;
        return $this;
    }

    /**
     * Adds as value
     *
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\VehicleType\VehicleCountryOfOriginAType\ValueAType $value
     */
    public function addToVehicleCountryOfOrigin(\Calcinai\Siri\Objects\Datex\VehicleType\VehicleCountryOfOriginAType\ValueAType $value)
    {
        $this->vehicleCountryOfOrigin[] = $value;
        return $this;
    }

    /**
     * isset vehicleCountryOfOrigin
     *
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleCountryOfOrigin($index)
    {
        return isset($this->vehicleCountryOfOrigin[$index]);
    }

    /**
     * unset vehicleCountryOfOrigin
     *
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleCountryOfOrigin($index)
    {
        unset($this->vehicleCountryOfOrigin[$index]);
    }

    /**
     * Gets as vehicleCountryOfOrigin
     *
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleType\VehicleCountryOfOriginAType\ValueAType[]
     */
    public function getVehicleCountryOfOrigin()
    {
        return $this->vehicleCountryOfOrigin;
    }

    /**
     * Sets a new vehicleCountryOfOrigin
     *
     * Specification of the country in which the vehicle is registered. The code is the 2-alpha code as given in EN ISO 3166-1.
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleType\VehicleCountryOfOriginAType\ValueAType[] $vehicleCountryOfOrigin
     * @return self
     */
    public function setVehicleCountryOfOrigin(array $vehicleCountryOfOrigin)
    {
        $this->vehicleCountryOfOrigin = $vehicleCountryOfOrigin;
        return $this;
    }

    /**
     * Gets as vehicleIdentifier
     *
     * A code, either a specific one in a particular format, or the registration number and registration authority, identifying the individual vehicle. To make this unique the 2-alpha country code should used as a pre-fix.
     *
     * @return string
     */
    public function getVehicleIdentifier()
    {
        return $this->vehicleIdentifier;
    }

    /**
     * Sets a new vehicleIdentifier
     *
     * A code, either a specific one in a particular format, or the registration number and registration authority, identifying the individual vehicle. To make this unique the 2-alpha country code should used as a pre-fix.
     *
     * @param string $vehicleIdentifier
     * @return self
     */
    public function setVehicleIdentifier($vehicleIdentifier)
    {
        $this->vehicleIdentifier = $vehicleIdentifier;
        return $this;
    }

    /**
     * Gets as vehicleManufacturer
     *
     * Indicates the stated manufacturer of the vehicle i.e. Ford.
     *
     * @return string
     */
    public function getVehicleManufacturer()
    {
        return $this->vehicleManufacturer;
    }

    /**
     * Sets a new vehicleManufacturer
     *
     * Indicates the stated manufacturer of the vehicle i.e. Ford.
     *
     * @param string $vehicleManufacturer
     * @return self
     */
    public function setVehicleManufacturer($vehicleManufacturer)
    {
        $this->vehicleManufacturer = $vehicleManufacturer;
        return $this;
    }

    /**
     * Gets as vehicleModel
     *
     * Indicates the model (or range name) of the vehicle i.e. Ford MONDEO.
     *
     * @return string
     */
    public function getVehicleModel()
    {
        return $this->vehicleModel;
    }

    /**
     * Sets a new vehicleModel
     *
     * Indicates the model (or range name) of the vehicle i.e. Ford MONDEO.
     *
     * @param string $vehicleModel
     * @return self
     */
    public function setVehicleModel($vehicleModel)
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }

    /**
     * Gets as vehicleRegistrationPlateIdentifier
     *
     * A code, either a specific one in a particular framework, or the registration number and registration authority, identifying the individual vehicle.
     *
     * @return string
     */
    public function getVehicleRegistrationPlateIdentifier()
    {
        return $this->vehicleRegistrationPlateIdentifier;
    }

    /**
     * Sets a new vehicleRegistrationPlateIdentifier
     *
     * A code, either a specific one in a particular framework, or the registration number and registration authority, identifying the individual vehicle.
     *
     * @param string $vehicleRegistrationPlateIdentifier
     * @return self
     */
    public function setVehicleRegistrationPlateIdentifier($vehicleRegistrationPlateIdentifier)
    {
        $this->vehicleRegistrationPlateIdentifier = $vehicleRegistrationPlateIdentifier;
        return $this;
    }

    /**
     * Gets as vehicleStatus
     *
     * The status of the vehicle.
     *
     * @return string
     */
    public function getVehicleStatus()
    {
        return $this->vehicleStatus;
    }

    /**
     * Sets a new vehicleStatus
     *
     * The status of the vehicle.
     *
     * @param string $vehicleStatus
     * @return self
     */
    public function setVehicleStatus($vehicleStatus)
    {
        $this->vehicleStatus = $vehicleStatus;
        return $this;
    }

    /**
     * Gets as vehicleCharacteristics
     *
     * @return \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType
     */
    public function getVehicleCharacteristics()
    {
        return $this->vehicleCharacteristics;
    }

    /**
     * Sets a new vehicleCharacteristics
     *
     * @param \Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics
     * @return self
     */
    public function setVehicleCharacteristics(\Calcinai\Siri\Objects\Datex\VehicleCharacteristicsType $vehicleCharacteristics)
    {
        $this->vehicleCharacteristics = $vehicleCharacteristics;
        return $this;
    }

    /**
     * Adds as axleSpacingOnVehicle
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\AxleSpacingType $axleSpacingOnVehicle
     */
    public function addToAxleSpacingOnVehicle(\Calcinai\Siri\Objects\Datex\AxleSpacingType $axleSpacingOnVehicle)
    {
        $this->axleSpacingOnVehicle[] = $axleSpacingOnVehicle;
        return $this;
    }

    /**
     * isset axleSpacingOnVehicle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAxleSpacingOnVehicle($index)
    {
        return isset($this->axleSpacingOnVehicle[$index]);
    }

    /**
     * unset axleSpacingOnVehicle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAxleSpacingOnVehicle($index)
    {
        unset($this->axleSpacingOnVehicle[$index]);
    }

    /**
     * Gets as axleSpacingOnVehicle
     *
     * @return \Calcinai\Siri\Objects\Datex\AxleSpacingType[]
     */
    public function getAxleSpacingOnVehicle()
    {
        return $this->axleSpacingOnVehicle;
    }

    /**
     * Sets a new axleSpacingOnVehicle
     *
     * @param \Calcinai\Siri\Objects\Datex\AxleSpacingType[] $axleSpacingOnVehicle
     * @return self
     */
    public function setAxleSpacingOnVehicle(array $axleSpacingOnVehicle)
    {
        $this->axleSpacingOnVehicle = $axleSpacingOnVehicle;
        return $this;
    }

    /**
     * Adds as axleWeightsOfVehicle
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\AxleWeightType $axleWeightsOfVehicle
     */
    public function addToAxleWeightsOfVehicle(\Calcinai\Siri\Objects\Datex\AxleWeightType $axleWeightsOfVehicle)
    {
        $this->axleWeightsOfVehicle[] = $axleWeightsOfVehicle;
        return $this;
    }

    /**
     * isset axleWeightsOfVehicle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAxleWeightsOfVehicle($index)
    {
        return isset($this->axleWeightsOfVehicle[$index]);
    }

    /**
     * unset axleWeightsOfVehicle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAxleWeightsOfVehicle($index)
    {
        unset($this->axleWeightsOfVehicle[$index]);
    }

    /**
     * Gets as axleWeightsOfVehicle
     *
     * @return \Calcinai\Siri\Objects\Datex\AxleWeightType[]
     */
    public function getAxleWeightsOfVehicle()
    {
        return $this->axleWeightsOfVehicle;
    }

    /**
     * Sets a new axleWeightsOfVehicle
     *
     * @param \Calcinai\Siri\Objects\Datex\AxleWeightType[] $axleWeightsOfVehicle
     * @return self
     */
    public function setAxleWeightsOfVehicle(array $axleWeightsOfVehicle)
    {
        $this->axleWeightsOfVehicle = $axleWeightsOfVehicle;
        return $this;
    }

    /**
     * Gets as hazardousGoodsAssociatedWithVehicle
     *
     * @return \Calcinai\Siri\Objects\Datex\HazardousMaterialsType
     */
    public function getHazardousGoodsAssociatedWithVehicle()
    {
        return $this->hazardousGoodsAssociatedWithVehicle;
    }

    /**
     * Sets a new hazardousGoodsAssociatedWithVehicle
     *
     * @param \Calcinai\Siri\Objects\Datex\HazardousMaterialsType $hazardousGoodsAssociatedWithVehicle
     * @return self
     */
    public function setHazardousGoodsAssociatedWithVehicle(\Calcinai\Siri\Objects\Datex\HazardousMaterialsType $hazardousGoodsAssociatedWithVehicle)
    {
        $this->hazardousGoodsAssociatedWithVehicle = $hazardousGoodsAssociatedWithVehicle;
        return $this;
    }

    /**
     * Gets as vehicleExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVehicleExtension()
    {
        return $this->vehicleExtension;
    }

    /**
     * Sets a new vehicleExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $vehicleExtension
     * @return self
     */
    public function setVehicleExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $vehicleExtension)
    {
        $this->vehicleExtension = $vehicleExtension;
        return $this;
    }


}

