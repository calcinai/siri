<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PredefinedLocationsPublicationType
 *
 * A publication containing one or more sets of predfined locations.
 * XSD Type: PredefinedLocationsPublication
 */
class PredefinedLocationsPublicationType extends PayloadPublicationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType[] $predefinedLocationSet
     */
    private $predefinedLocationSet = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationsPublicationExtension
     */
    private $predefinedLocationsPublicationExtension = null;

    /**
     * Gets as headerInformation
     *
     * @return \Calcinai\Siri\Objects\Datex\HeaderInformationType
     */
    public function getHeaderInformation()
    {
        return $this->headerInformation;
    }

    /**
     * Sets a new headerInformation
     *
     * @param \Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation
     * @return self
     */
    public function setHeaderInformation(\Calcinai\Siri\Objects\Datex\HeaderInformationType $headerInformation)
    {
        $this->headerInformation = $headerInformation;
        return $this;
    }

    /**
     * Adds as predefinedLocationSet
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType $predefinedLocationSet
     */
    public function addToPredefinedLocationSet(\Calcinai\Siri\Objects\Datex\PredefinedLocationSetType $predefinedLocationSet)
    {
        $this->predefinedLocationSet[] = $predefinedLocationSet;
        return $this;
    }

    /**
     * isset predefinedLocationSet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPredefinedLocationSet($index)
    {
        return isset($this->predefinedLocationSet[$index]);
    }

    /**
     * unset predefinedLocationSet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPredefinedLocationSet($index)
    {
        unset($this->predefinedLocationSet[$index]);
    }

    /**
     * Gets as predefinedLocationSet
     *
     * @return \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType[]
     */
    public function getPredefinedLocationSet()
    {
        return $this->predefinedLocationSet;
    }

    /**
     * Sets a new predefinedLocationSet
     *
     * @param \Calcinai\Siri\Objects\Datex\PredefinedLocationSetType[] $predefinedLocationSet
     * @return self
     */
    public function setPredefinedLocationSet(array $predefinedLocationSet)
    {
        $this->predefinedLocationSet = $predefinedLocationSet;
        return $this;
    }

    /**
     * Gets as predefinedLocationsPublicationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPredefinedLocationsPublicationExtension()
    {
        return $this->predefinedLocationsPublicationExtension;
    }

    /**
     * Sets a new predefinedLocationsPublicationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationsPublicationExtension
     * @return self
     */
    public function setPredefinedLocationsPublicationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $predefinedLocationsPublicationExtension)
    {
        $this->predefinedLocationsPublicationExtension = $predefinedLocationsPublicationExtension;
        return $this;
    }


}

