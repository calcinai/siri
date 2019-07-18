<?php

namespace Calcinai\Siri;

/**
 * Class representing GeneralMessageSubscriptionStructureType
 *
 * Subscription for General Message Service.
 * XSD Type: GeneralMessageSubscriptionStructure
 */
class GeneralMessageSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\GeneralMessageRequest $generalMessageRequest
     */
    private $generalMessageRequest = null;

    /**
     * Gets as generalMessageRequest
     *
     * @return \Calcinai\Siri\GeneralMessageRequest
     */
    public function getGeneralMessageRequest()
    {
        return $this->generalMessageRequest;
    }

    /**
     * Sets a new generalMessageRequest
     *
     * @param \Calcinai\Siri\GeneralMessageRequest $generalMessageRequest
     * @return self
     */
    public function setGeneralMessageRequest(\Calcinai\Siri\GeneralMessageRequest $generalMessageRequest)
    {
        $this->generalMessageRequest = $generalMessageRequest;
        return $this;
    }


}

