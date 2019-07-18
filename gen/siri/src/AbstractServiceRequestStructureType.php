<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractServiceRequestStructureType
 *
 * Abstract Service Request for SIRI Service request
 * XSD Type: AbstractServiceRequestStructure
 */
class AbstractServiceRequestStructureType extends AbstractRequestStructureType
{

    /**
     * Arbitrary unique reference to this message.
     *
     * @property string $messageIdentifier
     */
    private $messageIdentifier = null;

    /**
     * Gets as messageIdentifier
     *
     * Arbitrary unique reference to this message.
     *
     * @return string
     */
    public function getMessageIdentifier()
    {
        return $this->messageIdentifier;
    }

    /**
     * Sets a new messageIdentifier
     *
     * Arbitrary unique reference to this message.
     *
     * @param string $messageIdentifier
     * @return self
     */
    public function setMessageIdentifier($messageIdentifier)
    {
        $this->messageIdentifier = $messageIdentifier;
        return $this;
    }


}

