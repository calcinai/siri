<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing CatalogueReferenceType
 *
 * Identification of the supplier's data catalogue in a data exchange context.
 * XSD Type: CatalogueReference
 */
class CatalogueReferenceType
{

    /**
     * Identification of the supplier's data catalogue in a data exchange context.
     *
     * @property string $keyCatalogueReference
     */
    private $keyCatalogueReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $catalogueReferenceExtension
     */
    private $catalogueReferenceExtension = null;

    /**
     * Gets as keyCatalogueReference
     *
     * Identification of the supplier's data catalogue in a data exchange context.
     *
     * @return string
     */
    public function getKeyCatalogueReference()
    {
        return $this->keyCatalogueReference;
    }

    /**
     * Sets a new keyCatalogueReference
     *
     * Identification of the supplier's data catalogue in a data exchange context.
     *
     * @param string $keyCatalogueReference
     * @return self
     */
    public function setKeyCatalogueReference($keyCatalogueReference)
    {
        $this->keyCatalogueReference = $keyCatalogueReference;
        return $this;
    }

    /**
     * Gets as catalogueReferenceExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getCatalogueReferenceExtension()
    {
        return $this->catalogueReferenceExtension;
    }

    /**
     * Sets a new catalogueReferenceExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $catalogueReferenceExtension
     * @return self
     */
    public function setCatalogueReferenceExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $catalogueReferenceExtension)
    {
        $this->catalogueReferenceExtension = $catalogueReferenceExtension;
        return $this;
    }


}

