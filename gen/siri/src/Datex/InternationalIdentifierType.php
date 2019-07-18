<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing InternationalIdentifierType
 *
 * An identifier/name whose range is specific to the particular country.
 * XSD Type: InternationalIdentifier
 */
class InternationalIdentifierType
{

    /**
     * ISO 3166-1 two character country code.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * Identifier or name unique within the specified country.
     *
     * @property string $nationalIdentifier
     */
    private $nationalIdentifier = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $internationalIdentifierExtension
     */
    private $internationalIdentifierExtension = null;

    /**
     * Gets as country
     *
     * ISO 3166-1 two character country code.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ISO 3166-1 two character country code.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as nationalIdentifier
     *
     * Identifier or name unique within the specified country.
     *
     * @return string
     */
    public function getNationalIdentifier()
    {
        return $this->nationalIdentifier;
    }

    /**
     * Sets a new nationalIdentifier
     *
     * Identifier or name unique within the specified country.
     *
     * @param string $nationalIdentifier
     * @return self
     */
    public function setNationalIdentifier($nationalIdentifier)
    {
        $this->nationalIdentifier = $nationalIdentifier;
        return $this;
    }

    /**
     * Gets as internationalIdentifierExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getInternationalIdentifierExtension()
    {
        return $this->internationalIdentifierExtension;
    }

    /**
     * Sets a new internationalIdentifierExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $internationalIdentifierExtension
     * @return self
     */
    public function setInternationalIdentifierExtension(\Calcinai\Siri\Datex\ExtensionType $internationalIdentifierExtension)
    {
        $this->internationalIdentifierExtension = $internationalIdentifierExtension;
        return $this;
    }


}

