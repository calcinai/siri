<?php

namespace Calcinai\Siri;

/**
 * Class representing FacilityLocationStructureType
 *
 * Location of the facility
 * XSD Type: FacilityLocationStructure
 */
class FacilityLocationStructureType
{

    /**
     * @property string $lineRef
     */
    private $lineRef = null;

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property string $vehicleRef
     */
    private $vehicleRef = null;

    /**
     * @property string $datedVehicleJourneyRef
     */
    private $datedVehicleJourneyRef = null;

    /**
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * @property string $interchangeRef
     */
    private $interchangeRef = null;

    /**
     * Reference to a Stop Place
     *
     * @property string $stopPlaceRef
     */
    private $stopPlaceRef = null;

    /**
     * System identifier of Stop Place component. Unique at least within Stop Place and concrete component type.
     *
     * @property string $stopPlaceComponentId
     */
    private $stopPlaceComponentId = null;

    /**
     * Operator of Journey.
     *
     * @property string $operatorRef
     */
    private $operatorRef = null;

    /**
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @property string $productCategoryRef
     */
    private $productCategoryRef = null;

    /**
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string $serviceFeatureRef
     */
    private $serviceFeatureRef = null;

    /**
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @property string $vehicleFeatureRef
     */
    private $vehicleFeatureRef = null;

    /**
     * Gets as lineRef
     *
     * @return string
     */
    public function getLineRef()
    {
        return $this->lineRef;
    }

    /**
     * Sets a new lineRef
     *
     * @param string $lineRef
     * @return self
     */
    public function setLineRef($lineRef)
    {
        $this->lineRef = $lineRef;
        return $this;
    }

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as vehicleRef
     *
     * @return string
     */
    public function getVehicleRef()
    {
        return $this->vehicleRef;
    }

    /**
     * Sets a new vehicleRef
     *
     * @param string $vehicleRef
     * @return self
     */
    public function setVehicleRef($vehicleRef)
    {
        $this->vehicleRef = $vehicleRef;
        return $this;
    }

    /**
     * Gets as datedVehicleJourneyRef
     *
     * @return string
     */
    public function getDatedVehicleJourneyRef()
    {
        return $this->datedVehicleJourneyRef;
    }

    /**
     * Sets a new datedVehicleJourneyRef
     *
     * @param string $datedVehicleJourneyRef
     * @return self
     */
    public function setDatedVehicleJourneyRef($datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef = $datedVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as connectionLinkRef
     *
     * @return string
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }

    /**
     * Gets as interchangeRef
     *
     * @return string
     */
    public function getInterchangeRef()
    {
        return $this->interchangeRef;
    }

    /**
     * Sets a new interchangeRef
     *
     * @param string $interchangeRef
     * @return self
     */
    public function setInterchangeRef($interchangeRef)
    {
        $this->interchangeRef = $interchangeRef;
        return $this;
    }

    /**
     * Gets as stopPlaceRef
     *
     * Reference to a Stop Place
     *
     * @return string
     */
    public function getStopPlaceRef()
    {
        return $this->stopPlaceRef;
    }

    /**
     * Sets a new stopPlaceRef
     *
     * Reference to a Stop Place
     *
     * @param string $stopPlaceRef
     * @return self
     */
    public function setStopPlaceRef($stopPlaceRef)
    {
        $this->stopPlaceRef = $stopPlaceRef;
        return $this;
    }

    /**
     * Gets as stopPlaceComponentId
     *
     * System identifier of Stop Place component. Unique at least within Stop Place and concrete component type.
     *
     * @return string
     */
    public function getStopPlaceComponentId()
    {
        return $this->stopPlaceComponentId;
    }

    /**
     * Sets a new stopPlaceComponentId
     *
     * System identifier of Stop Place component. Unique at least within Stop Place and concrete component type.
     *
     * @param string $stopPlaceComponentId
     * @return self
     */
    public function setStopPlaceComponentId($stopPlaceComponentId)
    {
        $this->stopPlaceComponentId = $stopPlaceComponentId;
        return $this;
    }

    /**
     * Gets as operatorRef
     *
     * Operator of Journey.
     *
     * @return string
     */
    public function getOperatorRef()
    {
        return $this->operatorRef;
    }

    /**
     * Sets a new operatorRef
     *
     * Operator of Journey.
     *
     * @param string $operatorRef
     * @return self
     */
    public function setOperatorRef($operatorRef)
    {
        $this->operatorRef = $operatorRef;
        return $this;
    }

    /**
     * Gets as productCategoryRef
     *
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @return string
     */
    public function getProductCategoryRef()
    {
        return $this->productCategoryRef;
    }

    /**
     * Sets a new productCategoryRef
     *
     * Product Classification of journey - subdivides a transport mode. e.g. express, loacl.
     *
     * @param string $productCategoryRef
     * @return self
     */
    public function setProductCategoryRef($productCategoryRef)
    {
        $this->productCategoryRef = $productCategoryRef;
        return $this;
    }

    /**
     * Gets as serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string
     */
    public function getServiceFeatureRef()
    {
        return $this->serviceFeatureRef;
    }

    /**
     * Sets a new serviceFeatureRef
     *
     * Classification of service into arbitrary Service categories, e.g. school bus. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param string $serviceFeatureRef
     * @return self
     */
    public function setServiceFeatureRef($serviceFeatureRef)
    {
        $this->serviceFeatureRef = $serviceFeatureRef;
        return $this;
    }

    /**
     * Gets as vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @return string
     */
    public function getVehicleFeatureRef()
    {
        return $this->vehicleFeatureRef;
    }

    /**
     * Sets a new vehicleFeatureRef
     *
     * Features of Vehicle providing journey. Recommended SIRI values based on TPEG are given in SIRI documentation and enumerated in the siri_facilities package.
     *
     * @param string $vehicleFeatureRef
     * @return self
     */
    public function setVehicleFeatureRef($vehicleFeatureRef)
    {
        $this->vehicleFeatureRef = $vehicleFeatureRef;
        return $this;
    }


}

