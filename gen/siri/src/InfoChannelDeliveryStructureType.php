<?php

namespace Calcinai\Siri;

/**
 * Class representing InfoChannelDeliveryStructureType
 *
 * Type forResponse with Inf chanels categories available to make requests.
 * XSD Type: InfoChannelDeliveryStructure
 */
class InfoChannelDeliveryStructureType extends AbstractDiscoveryDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\InfoChannel[] $infoChannel
     */
    private $infoChannel = [
        
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
     * Adds as infoChannel
     *
     * @return self
     * @param \Calcinai\Siri\InfoChannel $infoChannel
     */
    public function addToInfoChannel(\Calcinai\Siri\InfoChannel $infoChannel)
    {
        $this->infoChannel[] = $infoChannel;
        return $this;
    }

    /**
     * isset infoChannel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoChannel($index)
    {
        return isset($this->infoChannel[$index]);
    }

    /**
     * unset infoChannel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoChannel($index)
    {
        unset($this->infoChannel[$index]);
    }

    /**
     * Gets as infoChannel
     *
     * @return \Calcinai\Siri\InfoChannel[]
     */
    public function getInfoChannel()
    {
        return $this->infoChannel;
    }

    /**
     * Sets a new infoChannel
     *
     * @param \Calcinai\Siri\InfoChannel[] $infoChannel
     * @return self
     */
    public function setInfoChannel(array $infoChannel)
    {
        $this->infoChannel = $infoChannel;
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

