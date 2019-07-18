<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ManagementDescriptiveDataType
 *
 * General management information.
 * XSD Type: ManagementDescriptiveData
 */
class ManagementDescriptiveDataType
{

    /**
     * This indicates the identification of previous message sender(s) of the same message when a situation element is forwarded by a recipient to a further recipient.
     *
     * @property string $messageChain
     */
    private $messageChain = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $managementDescriptiveDataExtension
     */
    private $managementDescriptiveDataExtension = null;

    /**
     * Gets as messageChain
     *
     * This indicates the identification of previous message sender(s) of the same message when a situation element is forwarded by a recipient to a further recipient.
     *
     * @return string
     */
    public function getMessageChain()
    {
        return $this->messageChain;
    }

    /**
     * Sets a new messageChain
     *
     * This indicates the identification of previous message sender(s) of the same message when a situation element is forwarded by a recipient to a further recipient.
     *
     * @param string $messageChain
     * @return self
     */
    public function setMessageChain($messageChain)
    {
        $this->messageChain = $messageChain;
        return $this;
    }

    /**
     * Gets as managementDescriptiveDataExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getManagementDescriptiveDataExtension()
    {
        return $this->managementDescriptiveDataExtension;
    }

    /**
     * Sets a new managementDescriptiveDataExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $managementDescriptiveDataExtension
     * @return self
     */
    public function setManagementDescriptiveDataExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $managementDescriptiveDataExtension)
    {
        $this->managementDescriptiveDataExtension = $managementDescriptiveDataExtension;
        return $this;
    }


}

