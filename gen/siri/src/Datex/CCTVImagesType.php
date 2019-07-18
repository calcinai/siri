<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing CCTVImagesType
 *
 * Details of CCTV images which form part of a traffic view record.
 * XSD Type: CCTVImages
 */
class CCTVImagesType
{

    /**
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @property string[] $cctvUri
     */
    private $cctvUri = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $cctvimagesExtension
     */
    private $cctvimagesExtension = null;

    /**
     * Adds as cctvUri
     *
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @return self
     * @param string $cctvUri
     */
    public function addToCctvUri($cctvUri)
    {
        $this->cctvUri[] = $cctvUri;
        return $this;
    }

    /**
     * isset cctvUri
     *
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCctvUri($index)
    {
        return isset($this->cctvUri[$index]);
    }

    /**
     * unset cctvUri
     *
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCctvUri($index)
    {
        unset($this->cctvUri[$index]);
    }

    /**
     * Gets as cctvUri
     *
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @return string[]
     */
    public function getCctvUri()
    {
        return $this->cctvUri;
    }

    /**
     * Sets a new cctvUri
     *
     * The URI of a resource from where a CCTV image relating to the traffic view record can be obtained.
     *
     * @param string $cctvUri
     * @return self
     */
    public function setCctvUri(array $cctvUri)
    {
        $this->cctvUri = $cctvUri;
        return $this;
    }

    /**
     * Gets as cctvimagesExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getCctvimagesExtension()
    {
        return $this->cctvimagesExtension;
    }

    /**
     * Sets a new cctvimagesExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $cctvimagesExtension
     * @return self
     */
    public function setCctvimagesExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $cctvimagesExtension)
    {
        $this->cctvimagesExtension = $cctvimagesExtension;
        return $this;
    }


}

