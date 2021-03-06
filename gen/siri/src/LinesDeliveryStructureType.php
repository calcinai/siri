<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing LinesDeliveryStructureType
 *
 * Response with Lines available to make requests.
 * XSD Type: LinesDeliveryStructure
 */
class LinesDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Infromation about lines covered by server.
     *
     * @property \Calcinai\Siri\Objects\AnnotatedLineStructureType[] $annotatedLineRef
     */
    private $annotatedLineRef = [
        
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
     * Adds as annotatedLineRef
     *
     * Infromation about lines covered by server.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AnnotatedLineStructureType $annotatedLineRef
     */
    public function addToAnnotatedLineRef(\Calcinai\Siri\Objects\AnnotatedLineStructureType $annotatedLineRef)
    {
        $this->annotatedLineRef[] = $annotatedLineRef;
        return $this;
    }

    /**
     * isset annotatedLineRef
     *
     * Infromation about lines covered by server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnnotatedLineRef($index)
    {
        return isset($this->annotatedLineRef[$index]);
    }

    /**
     * unset annotatedLineRef
     *
     * Infromation about lines covered by server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnnotatedLineRef($index)
    {
        unset($this->annotatedLineRef[$index]);
    }

    /**
     * Gets as annotatedLineRef
     *
     * Infromation about lines covered by server.
     *
     * @return \Calcinai\Siri\Objects\AnnotatedLineStructureType[]
     */
    public function getAnnotatedLineRef()
    {
        return $this->annotatedLineRef;
    }

    /**
     * Sets a new annotatedLineRef
     *
     * Infromation about lines covered by server.
     *
     * @param \Calcinai\Siri\Objects\AnnotatedLineStructureType[] $annotatedLineRef
     * @return self
     */
    public function setAnnotatedLineRef(array $annotatedLineRef)
    {
        $this->annotatedLineRef = $annotatedLineRef;
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

