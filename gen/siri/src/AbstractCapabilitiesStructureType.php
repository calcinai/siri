<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractCapabilitiesStructureType
 *
 * Type for Capabilities of StopMonitopring Service.
 * XSD Type: AbstractCapabilitiesStructure
 */
class AbstractCapabilitiesStructureType
{

    /**
     * General capabilities common to all SIRI service request types.
     *
     * @property \Calcinai\Siri\Objects\CapabilityGeneralInteractionStructureType $generalInteraction
     */
    private $generalInteraction = null;

    /**
     * Implementation properties common to all request types.
     *
     * @property \Calcinai\Siri\Objects\TransportDescriptionStructureType $transportDescription
     */
    private $transportDescription = null;

    /**
     * Gets as generalInteraction
     *
     * General capabilities common to all SIRI service request types.
     *
     * @return \Calcinai\Siri\Objects\CapabilityGeneralInteractionStructureType
     */
    public function getGeneralInteraction()
    {
        return $this->generalInteraction;
    }

    /**
     * Sets a new generalInteraction
     *
     * General capabilities common to all SIRI service request types.
     *
     * @param \Calcinai\Siri\Objects\CapabilityGeneralInteractionStructureType $generalInteraction
     * @return self
     */
    public function setGeneralInteraction(\Calcinai\Siri\Objects\CapabilityGeneralInteractionStructureType $generalInteraction)
    {
        $this->generalInteraction = $generalInteraction;
        return $this;
    }

    /**
     * Gets as transportDescription
     *
     * Implementation properties common to all request types.
     *
     * @return \Calcinai\Siri\Objects\TransportDescriptionStructureType
     */
    public function getTransportDescription()
    {
        return $this->transportDescription;
    }

    /**
     * Sets a new transportDescription
     *
     * Implementation properties common to all request types.
     *
     * @param \Calcinai\Siri\Objects\TransportDescriptionStructureType $transportDescription
     * @return self
     */
    public function setTransportDescription(\Calcinai\Siri\Objects\TransportDescriptionStructureType $transportDescription)
    {
        $this->transportDescription = $transportDescription;
        return $this;
    }


}

