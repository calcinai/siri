<?php

namespace Calcinai\Siri;

/**
 * Class representing DataNameSpacesStructureType
 *
 * Name spaces.
 * XSD Type: DataNameSpacesStructure
 */
class DataNameSpacesStructureType
{

    /**
     * Name space for stop points.
     *
     * @property string $stopPointNameSpace
     */
    private $stopPointNameSpace = null;

    /**
     * Name space for line names and directionss.
     *
     * @property string $lineNameSpace
     */
    private $lineNameSpace = null;

    /**
     * Name space for product categories.
     *
     * @property string $productCategoryNameSpace
     */
    private $productCategoryNameSpace = null;

    /**
     * Name space for service features
     *
     * @property string $serviceFeatureNameSpace
     */
    private $serviceFeatureNameSpace = null;

    /**
     * Name space for vehicle features.
     *
     * @property string $vehicleFeatureNameSpace
     */
    private $vehicleFeatureNameSpace = null;

    /**
     * Gets as stopPointNameSpace
     *
     * Name space for stop points.
     *
     * @return string
     */
    public function getStopPointNameSpace()
    {
        return $this->stopPointNameSpace;
    }

    /**
     * Sets a new stopPointNameSpace
     *
     * Name space for stop points.
     *
     * @param string $stopPointNameSpace
     * @return self
     */
    public function setStopPointNameSpace($stopPointNameSpace)
    {
        $this->stopPointNameSpace = $stopPointNameSpace;
        return $this;
    }

    /**
     * Gets as lineNameSpace
     *
     * Name space for line names and directionss.
     *
     * @return string
     */
    public function getLineNameSpace()
    {
        return $this->lineNameSpace;
    }

    /**
     * Sets a new lineNameSpace
     *
     * Name space for line names and directionss.
     *
     * @param string $lineNameSpace
     * @return self
     */
    public function setLineNameSpace($lineNameSpace)
    {
        $this->lineNameSpace = $lineNameSpace;
        return $this;
    }

    /**
     * Gets as productCategoryNameSpace
     *
     * Name space for product categories.
     *
     * @return string
     */
    public function getProductCategoryNameSpace()
    {
        return $this->productCategoryNameSpace;
    }

    /**
     * Sets a new productCategoryNameSpace
     *
     * Name space for product categories.
     *
     * @param string $productCategoryNameSpace
     * @return self
     */
    public function setProductCategoryNameSpace($productCategoryNameSpace)
    {
        $this->productCategoryNameSpace = $productCategoryNameSpace;
        return $this;
    }

    /**
     * Gets as serviceFeatureNameSpace
     *
     * Name space for service features
     *
     * @return string
     */
    public function getServiceFeatureNameSpace()
    {
        return $this->serviceFeatureNameSpace;
    }

    /**
     * Sets a new serviceFeatureNameSpace
     *
     * Name space for service features
     *
     * @param string $serviceFeatureNameSpace
     * @return self
     */
    public function setServiceFeatureNameSpace($serviceFeatureNameSpace)
    {
        $this->serviceFeatureNameSpace = $serviceFeatureNameSpace;
        return $this;
    }

    /**
     * Gets as vehicleFeatureNameSpace
     *
     * Name space for vehicle features.
     *
     * @return string
     */
    public function getVehicleFeatureNameSpace()
    {
        return $this->vehicleFeatureNameSpace;
    }

    /**
     * Sets a new vehicleFeatureNameSpace
     *
     * Name space for vehicle features.
     *
     * @param string $vehicleFeatureNameSpace
     * @return self
     */
    public function setVehicleFeatureNameSpace($vehicleFeatureNameSpace)
    {
        $this->vehicleFeatureNameSpace = $vehicleFeatureNameSpace;
        return $this;
    }


}

