<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProductCategoriesDeliveryStructureType
 *
 * Type for Response with Product categories available to make requests.
 * XSD Type: ProductCategoriesDeliveryStructure
 */
class ProductCategoriesDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Product Category.
     *
     * @property \Calcinai\Siri\Objects\ProductCategoryStructureType[] $productCategory
     */
    private $productCategory = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of response. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as productCategory
     *
     * Product Category.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ProductCategoryStructureType $productCategory
     */
    public function addToProductCategory(\Calcinai\Siri\Objects\ProductCategoryStructureType $productCategory)
    {
        $this->productCategory[] = $productCategory;
        return $this;
    }

    /**
     * isset productCategory
     *
     * Product Category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductCategory($index)
    {
        return isset($this->productCategory[$index]);
    }

    /**
     * unset productCategory
     *
     * Product Category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductCategory($index)
    {
        unset($this->productCategory[$index]);
    }

    /**
     * Gets as productCategory
     *
     * Product Category.
     *
     * @return \Calcinai\Siri\Objects\ProductCategoryStructureType[]
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Sets a new productCategory
     *
     * Product Category.
     *
     * @param \Calcinai\Siri\Objects\ProductCategoryStructureType[] $productCategory
     * @return self
     */
    public function setProductCategory(array $productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

