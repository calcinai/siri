<?php

namespace Calcinai\Siri\Objects\CapabilityGeneralInteractionStructureType;

/**
 * Class representing InteractionAType
 */
class InteractionAType
{

    /**
     * Whether the service supports Request Response Interaction. Default is true.
     *
     * @property bool $requestResponse
     */
    private $requestResponse = null;

    /**
     * Whether the servcie supports Publish Subscribe Interaction. Default is true.
     *
     * @property bool $publishSubscribe
     */
    private $publishSubscribe = null;

    /**
     * Gets as requestResponse
     *
     * Whether the service supports Request Response Interaction. Default is true.
     *
     * @return bool
     */
    public function getRequestResponse()
    {
        return $this->requestResponse;
    }

    /**
     * Sets a new requestResponse
     *
     * Whether the service supports Request Response Interaction. Default is true.
     *
     * @param bool $requestResponse
     * @return self
     */
    public function setRequestResponse($requestResponse)
    {
        $this->requestResponse = $requestResponse;
        return $this;
    }

    /**
     * Gets as publishSubscribe
     *
     * Whether the servcie supports Publish Subscribe Interaction. Default is true.
     *
     * @return bool
     */
    public function getPublishSubscribe()
    {
        return $this->publishSubscribe;
    }

    /**
     * Sets a new publishSubscribe
     *
     * Whether the servcie supports Publish Subscribe Interaction. Default is true.
     *
     * @param bool $publishSubscribe
     * @return self
     */
    public function setPublishSubscribe($publishSubscribe)
    {
        $this->publishSubscribe = $publishSubscribe;
        return $this;
    }


}

