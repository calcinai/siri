<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing HeaderInformationType
 *
 * Management information relating to the data contained within a publication.
 * XSD Type: HeaderInformation
 */
class HeaderInformationType
{

    /**
     * The extent to which the related information should be distributed.
     *
     * @property string $areaOfInterest
     */
    private $areaOfInterest = null;

    /**
     * The extent to which the related information may be circulated, according to the recipient type. Recipients must comply with this confidentiality statement.
     *
     * @property string $confidentiality
     */
    private $confidentiality = null;

    /**
     * The use to which the related information contained can be put.
     *
     * @property string[] $informationUsage
     */
    private $informationUsage = [
        
    ];

    /**
     * The status of the related information (real, test, exercise ....).
     *
     * @property string $informationStatus
     */
    private $informationStatus = null;

    /**
     * This indicates the urgency with which a message recipient or Client should distribute the enclosed information. Urgency particularly relates to functions within RDS-TMC applications.
     *
     * @property string $urgency
     */
    private $urgency = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $headerInformationExtension
     */
    private $headerInformationExtension = null;

    /**
     * Gets as areaOfInterest
     *
     * The extent to which the related information should be distributed.
     *
     * @return string
     */
    public function getAreaOfInterest()
    {
        return $this->areaOfInterest;
    }

    /**
     * Sets a new areaOfInterest
     *
     * The extent to which the related information should be distributed.
     *
     * @param string $areaOfInterest
     * @return self
     */
    public function setAreaOfInterest($areaOfInterest)
    {
        $this->areaOfInterest = $areaOfInterest;
        return $this;
    }

    /**
     * Gets as confidentiality
     *
     * The extent to which the related information may be circulated, according to the recipient type. Recipients must comply with this confidentiality statement.
     *
     * @return string
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * Sets a new confidentiality
     *
     * The extent to which the related information may be circulated, according to the recipient type. Recipients must comply with this confidentiality statement.
     *
     * @param string $confidentiality
     * @return self
     */
    public function setConfidentiality($confidentiality)
    {
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * Adds as informationUsage
     *
     * The use to which the related information contained can be put.
     *
     * @return self
     * @param string $informationUsage
     */
    public function addToInformationUsage($informationUsage)
    {
        $this->informationUsage[] = $informationUsage;
        return $this;
    }

    /**
     * isset informationUsage
     *
     * The use to which the related information contained can be put.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationUsage($index)
    {
        return isset($this->informationUsage[$index]);
    }

    /**
     * unset informationUsage
     *
     * The use to which the related information contained can be put.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationUsage($index)
    {
        unset($this->informationUsage[$index]);
    }

    /**
     * Gets as informationUsage
     *
     * The use to which the related information contained can be put.
     *
     * @return string[]
     */
    public function getInformationUsage()
    {
        return $this->informationUsage;
    }

    /**
     * Sets a new informationUsage
     *
     * The use to which the related information contained can be put.
     *
     * @param string $informationUsage
     * @return self
     */
    public function setInformationUsage(array $informationUsage)
    {
        $this->informationUsage = $informationUsage;
        return $this;
    }

    /**
     * Gets as informationStatus
     *
     * The status of the related information (real, test, exercise ....).
     *
     * @return string
     */
    public function getInformationStatus()
    {
        return $this->informationStatus;
    }

    /**
     * Sets a new informationStatus
     *
     * The status of the related information (real, test, exercise ....).
     *
     * @param string $informationStatus
     * @return self
     */
    public function setInformationStatus($informationStatus)
    {
        $this->informationStatus = $informationStatus;
        return $this;
    }

    /**
     * Gets as urgency
     *
     * This indicates the urgency with which a message recipient or Client should distribute the enclosed information. Urgency particularly relates to functions within RDS-TMC applications.
     *
     * @return string
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Sets a new urgency
     *
     * This indicates the urgency with which a message recipient or Client should distribute the enclosed information. Urgency particularly relates to functions within RDS-TMC applications.
     *
     * @param string $urgency
     * @return self
     */
    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;
        return $this;
    }

    /**
     * Gets as headerInformationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getHeaderInformationExtension()
    {
        return $this->headerInformationExtension;
    }

    /**
     * Sets a new headerInformationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $headerInformationExtension
     * @return self
     */
    public function setHeaderInformationExtension(\Calcinai\Siri\Datex\ExtensionType $headerInformationExtension)
    {
        $this->headerInformationExtension = $headerInformationExtension;
        return $this;
    }


}

