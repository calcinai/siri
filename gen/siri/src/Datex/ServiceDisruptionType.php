<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ServiceDisruptionType
 *
 * Details of disruption to normal services (e.g. specific services at a service areas).
 * XSD Type: ServiceDisruption
 */
class ServiceDisruptionType extends NonRoadEventInformationType
{

    /**
     * The type of service which is disrupted.
     *
     * @property string[] $serviceDisruptionType
     */
    private $serviceDisruptionType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $serviceDisruptionExtension
     */
    private $serviceDisruptionExtension = null;

    /**
     * Adds as serviceDisruptionType
     *
     * The type of service which is disrupted.
     *
     * @return self
     * @param string $serviceDisruptionType
     */
    public function addToServiceDisruptionType($serviceDisruptionType)
    {
        $this->serviceDisruptionType[] = $serviceDisruptionType;
        return $this;
    }

    /**
     * isset serviceDisruptionType
     *
     * The type of service which is disrupted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceDisruptionType($index)
    {
        return isset($this->serviceDisruptionType[$index]);
    }

    /**
     * unset serviceDisruptionType
     *
     * The type of service which is disrupted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceDisruptionType($index)
    {
        unset($this->serviceDisruptionType[$index]);
    }

    /**
     * Gets as serviceDisruptionType
     *
     * The type of service which is disrupted.
     *
     * @return string[]
     */
    public function getServiceDisruptionType()
    {
        return $this->serviceDisruptionType;
    }

    /**
     * Sets a new serviceDisruptionType
     *
     * The type of service which is disrupted.
     *
     * @param string $serviceDisruptionType
     * @return self
     */
    public function setServiceDisruptionType(array $serviceDisruptionType)
    {
        $this->serviceDisruptionType = $serviceDisruptionType;
        return $this;
    }

    /**
     * Gets as serviceDisruptionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getServiceDisruptionExtension()
    {
        return $this->serviceDisruptionExtension;
    }

    /**
     * Sets a new serviceDisruptionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $serviceDisruptionExtension
     * @return self
     */
    public function setServiceDisruptionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $serviceDisruptionExtension)
    {
        $this->serviceDisruptionExtension = $serviceDisruptionExtension;
        return $this;
    }


}

