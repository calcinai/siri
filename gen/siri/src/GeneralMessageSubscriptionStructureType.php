<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing GeneralMessageSubscriptionStructureType
 *
 * Subscription for General Message Service.
 * XSD Type: GeneralMessageSubscriptionStructure
 */
class GeneralMessageSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest
     */
    private $generalMessageRequest = null;

    /**
     * Gets as generalMessageRequest
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageRequest
     */
    public function getGeneralMessageRequest()
    {
        return $this->generalMessageRequest;
    }

    /**
     * Sets a new generalMessageRequest
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest
     * @return self
     */
    public function setGeneralMessageRequest(\Calcinai\Siri\Objects\GeneralMessageRequest $generalMessageRequest)
    {
        $this->generalMessageRequest = $generalMessageRequest;
        return $this;
    }


}

