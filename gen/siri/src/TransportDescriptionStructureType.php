<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TransportDescriptionStructureType
 *
 * Type for implementation structure.
 * XSD Type: TransportDescriptionStructure
 */
class TransportDescriptionStructureType
{

    /**
     * Communications Transport method used to exchange messages. Default is httpPost.
     *
     * @property string $communicationsTransportMethod
     */
    private $communicationsTransportMethod = null;

    /**
     * Compression method used to compress messages for transmission. Default is none.
     *
     * @property string $compressionMethod
     */
    private $compressionMethod = null;

    /**
     * Gets as communicationsTransportMethod
     *
     * Communications Transport method used to exchange messages. Default is httpPost.
     *
     * @return string
     */
    public function getCommunicationsTransportMethod()
    {
        return $this->communicationsTransportMethod;
    }

    /**
     * Sets a new communicationsTransportMethod
     *
     * Communications Transport method used to exchange messages. Default is httpPost.
     *
     * @param string $communicationsTransportMethod
     * @return self
     */
    public function setCommunicationsTransportMethod($communicationsTransportMethod)
    {
        $this->communicationsTransportMethod = $communicationsTransportMethod;
        return $this;
    }

    /**
     * Gets as compressionMethod
     *
     * Compression method used to compress messages for transmission. Default is none.
     *
     * @return string
     */
    public function getCompressionMethod()
    {
        return $this->compressionMethod;
    }

    /**
     * Sets a new compressionMethod
     *
     * Compression method used to compress messages for transmission. Default is none.
     *
     * @param string $compressionMethod
     * @return self
     */
    public function setCompressionMethod($compressionMethod)
    {
        $this->compressionMethod = $compressionMethod;
        return $this;
    }


}

