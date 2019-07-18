<?php

namespace Calcinai\Siri;

/**
 * Class representing StopPointsDeliveryStructureType
 *
 * Response with Stop Points available to make requests.
 * XSD Type: StopPointsDeliveryStructure
 */
class StopPointsDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
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
     * @property \Calcinai\Siri\AnnotatedStopPointStructureType[] $annotatedStopPointRef
     */
    private $annotatedStopPointRef = [
        
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
     * Adds as annotatedStopPointRef
     *
     * Stop Definition
     *
     * @return self
     * @param \Calcinai\Siri\AnnotatedStopPointStructureType $annotatedStopPointRef
     */
    public function addToAnnotatedStopPointRef(\Calcinai\Siri\AnnotatedStopPointStructureType $annotatedStopPointRef)
    {
        $this->annotatedStopPointRef[] = $annotatedStopPointRef;
        return $this;
    }

    /**
     * isset annotatedStopPointRef
     *
     * Stop Definition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnnotatedStopPointRef($index)
    {
        return isset($this->annotatedStopPointRef[$index]);
    }

    /**
     * unset annotatedStopPointRef
     *
     * Stop Definition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnnotatedStopPointRef($index)
    {
        unset($this->annotatedStopPointRef[$index]);
    }

    /**
     * Gets as annotatedStopPointRef
     *
     * Stop Definition
     *
     * @return \Calcinai\Siri\AnnotatedStopPointStructureType[]
     */
    public function getAnnotatedStopPointRef()
    {
        return $this->annotatedStopPointRef;
    }

    /**
     * Sets a new annotatedStopPointRef
     *
     * Stop Definition
     *
     * @param \Calcinai\Siri\AnnotatedStopPointStructureType[] $annotatedStopPointRef
     * @return self
     */
    public function setAnnotatedStopPointRef(array $annotatedStopPointRef)
    {
        $this->annotatedStopPointRef = $annotatedStopPointRef;
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

