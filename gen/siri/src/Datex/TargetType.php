<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TargetType
 *
 * The details of a DATEX II target client.
 * XSD Type: Target
 */
class TargetType
{

    /**
     * The IP address of a DATEX II target client.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * The exchange protocol used between the supplier and the client.
     *
     * @property string $protocol
     */
    private $protocol = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $targetExtension
     */
    private $targetExtension = null;

    /**
     * Gets as address
     *
     * The IP address of a DATEX II target client.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The IP address of a DATEX II target client.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as protocol
     *
     * The exchange protocol used between the supplier and the client.
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * The exchange protocol used between the supplier and the client.
     *
     * @param string $protocol
     * @return self
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Gets as targetExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTargetExtension()
    {
        return $this->targetExtension;
    }

    /**
     * Sets a new targetExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $targetExtension
     * @return self
     */
    public function setTargetExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $targetExtension)
    {
        $this->targetExtension = $targetExtension;
        return $this;
    }


}

