<?php

namespace Calcinai\Siri;

/**
 * Class representing FacilityDeliveryStructureType
 *
 * Response with Facilities available to make requests.
 * XSD Type: FacilityDeliveryStructure
 */
class FacilityDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Stop Definition
     *
     * @property \Calcinai\Siri\AnnotatedFacilityStructureType[] $annotatedFacility
     */
    private $annotatedFacility = [
        
    ];

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * Adds as annotatedFacility
     *
     * Stop Definition
     *
     * @return self
     * @param \Calcinai\Siri\AnnotatedFacilityStructureType $annotatedFacility
     */
    public function addToAnnotatedFacility(\Calcinai\Siri\AnnotatedFacilityStructureType $annotatedFacility)
    {
        $this->annotatedFacility[] = $annotatedFacility;
        return $this;
    }

    /**
     * isset annotatedFacility
     *
     * Stop Definition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnnotatedFacility($index)
    {
        return isset($this->annotatedFacility[$index]);
    }

    /**
     * unset annotatedFacility
     *
     * Stop Definition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnnotatedFacility($index)
    {
        unset($this->annotatedFacility[$index]);
    }

    /**
     * Gets as annotatedFacility
     *
     * Stop Definition
     *
     * @return \Calcinai\Siri\AnnotatedFacilityStructureType[]
     */
    public function getAnnotatedFacility()
    {
        return $this->annotatedFacility;
    }

    /**
     * Sets a new annotatedFacility
     *
     * Stop Definition
     *
     * @param \Calcinai\Siri\AnnotatedFacilityStructureType[] $annotatedFacility
     * @return self
     */
    public function setAnnotatedFacility(array $annotatedFacility)
    {
        $this->annotatedFacility = $annotatedFacility;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

