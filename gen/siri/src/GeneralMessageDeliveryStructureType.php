<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing GeneralMessageDeliveryStructureType
 *
 * Delivery for General Message.
 * XSD Type: GeneralMessageDeliveryStructure
 */
class GeneralMessageDeliveryStructureType extends AbstractServiceDeliveryStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessage $generalMessage
     */
    private $generalMessage = null;

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageCancellation $generalMessageCancellation
     */
    private $generalMessageCancellation = null;

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
     * Gets as generalMessage
     *
     * @return \Calcinai\Siri\Objects\GeneralMessage
     */
    public function getGeneralMessage()
    {
        return $this->generalMessage;
    }

    /**
     * Sets a new generalMessage
     *
     * @param \Calcinai\Siri\Objects\GeneralMessage $generalMessage
     * @return self
     */
    public function setGeneralMessage(\Calcinai\Siri\Objects\GeneralMessage $generalMessage)
    {
        $this->generalMessage = $generalMessage;
        return $this;
    }

    /**
     * Gets as generalMessageCancellation
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageCancellation
     */
    public function getGeneralMessageCancellation()
    {
        return $this->generalMessageCancellation;
    }

    /**
     * Sets a new generalMessageCancellation
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageCancellation $generalMessageCancellation
     * @return self
     */
    public function setGeneralMessageCancellation(\Calcinai\Siri\Objects\GeneralMessageCancellation $generalMessageCancellation)
    {
        $this->generalMessageCancellation = $generalMessageCancellation;
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

