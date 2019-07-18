<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SourceInformationType
 *
 * Details of the source from which the information was obtained.
 * XSD Type: SourceInformation
 */
class SourceInformationType
{

    /**
     * ISO 3166-1 two character country code of the source of the information.
     *
     * @property string $sourceCountry
     */
    private $sourceCountry = null;

    /**
     * Coded information of the organisation or the traffic equipment which has produced the information relating to this version of the information.
     *
     * @property string $sourceIdentification
     */
    private $sourceIdentification = null;

    /**
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @property \Calcinai\Siri\Objects\Datex\SourceInformationType\SourceNameAType\ValueAType[] $sourceName
     */
    private $sourceName = null;

    /**
     * Information about the technology used for measuring the data or the method used for obtaining qualitative descriptions relating to this version of the information.
     *
     * @property string $sourceType
     */
    private $sourceType = null;

    /**
     * An indication as to whether the source deems the associated information to be reliable/correct. "True" indicates it is deemed reliable.
     *
     * @property bool $reliable
     */
    private $reliable = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $sourceInformationExtension
     */
    private $sourceInformationExtension = null;

    /**
     * Gets as sourceCountry
     *
     * ISO 3166-1 two character country code of the source of the information.
     *
     * @return string
     */
    public function getSourceCountry()
    {
        return $this->sourceCountry;
    }

    /**
     * Sets a new sourceCountry
     *
     * ISO 3166-1 two character country code of the source of the information.
     *
     * @param string $sourceCountry
     * @return self
     */
    public function setSourceCountry($sourceCountry)
    {
        $this->sourceCountry = $sourceCountry;
        return $this;
    }

    /**
     * Gets as sourceIdentification
     *
     * Coded information of the organisation or the traffic equipment which has produced the information relating to this version of the information.
     *
     * @return string
     */
    public function getSourceIdentification()
    {
        return $this->sourceIdentification;
    }

    /**
     * Sets a new sourceIdentification
     *
     * Coded information of the organisation or the traffic equipment which has produced the information relating to this version of the information.
     *
     * @param string $sourceIdentification
     * @return self
     */
    public function setSourceIdentification($sourceIdentification)
    {
        $this->sourceIdentification = $sourceIdentification;
        return $this;
    }

    /**
     * Adds as value
     *
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\SourceInformationType\SourceNameAType\ValueAType $value
     */
    public function addToSourceName(\Calcinai\Siri\Objects\Datex\SourceInformationType\SourceNameAType\ValueAType $value)
    {
        $this->sourceName[] = $value;
        return $this;
    }

    /**
     * isset sourceName
     *
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceName($index)
    {
        return isset($this->sourceName[$index]);
    }

    /**
     * unset sourceName
     *
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceName($index)
    {
        unset($this->sourceName[$index]);
    }

    /**
     * Gets as sourceName
     *
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @return \Calcinai\Siri\Objects\Datex\SourceInformationType\SourceNameAType\ValueAType[]
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * Sets a new sourceName
     *
     * The name of the organisation which has produced the information relating to this version of the information.
     *
     * @param \Calcinai\Siri\Objects\Datex\SourceInformationType\SourceNameAType\ValueAType[] $sourceName
     * @return self
     */
    public function setSourceName(array $sourceName)
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * Gets as sourceType
     *
     * Information about the technology used for measuring the data or the method used for obtaining qualitative descriptions relating to this version of the information.
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Sets a new sourceType
     *
     * Information about the technology used for measuring the data or the method used for obtaining qualitative descriptions relating to this version of the information.
     *
     * @param string $sourceType
     * @return self
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * Gets as reliable
     *
     * An indication as to whether the source deems the associated information to be reliable/correct. "True" indicates it is deemed reliable.
     *
     * @return bool
     */
    public function getReliable()
    {
        return $this->reliable;
    }

    /**
     * Sets a new reliable
     *
     * An indication as to whether the source deems the associated information to be reliable/correct. "True" indicates it is deemed reliable.
     *
     * @param bool $reliable
     * @return self
     */
    public function setReliable($reliable)
    {
        $this->reliable = $reliable;
        return $this;
    }

    /**
     * Gets as sourceInformationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSourceInformationExtension()
    {
        return $this->sourceInformationExtension;
    }

    /**
     * Sets a new sourceInformationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $sourceInformationExtension
     * @return self
     */
    public function setSourceInformationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $sourceInformationExtension)
    {
        $this->sourceInformationExtension = $sourceInformationExtension;
        return $this;
    }


}

