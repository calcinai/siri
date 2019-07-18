<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProductCategoryStructureType
 *
 * Type for Product Category description.
 * XSD Type: ProductCategoryStructure
 */
class ProductCategoryStructureType
{

    /**
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @property string $productCategoryCode
     */
    private $productCategoryCode = null;

    /**
     * Name of classification.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     */
    private $name = null;

    /**
     * Icon used to represent category.
     *
     * @property string $icon
     */
    private $icon = null;

    /**
     * Gets as productCategoryCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @return string
     */
    public function getProductCategoryCode()
    {
        return $this->productCategoryCode;
    }

    /**
     * Sets a new productCategoryCode
     *
     * Identifier of classification. SIRI provides a recommended set of values covering most usages, intended to be TPEG comnpatible. See the SIRI facilities packaged
     *
     * @param string $productCategoryCode
     * @return self
     */
    public function setProductCategoryCode($productCategoryCode)
    {
        $this->productCategoryCode = $productCategoryCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of classification.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of classification.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as icon
     *
     * Icon used to represent category.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * Icon used to represent category.
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }


}

